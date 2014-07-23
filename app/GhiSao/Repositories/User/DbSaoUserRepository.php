<?php namespace GhiSao\Repositories\User;
/**
 * Created by PhpStorm.
 * User: uziel
 * Date: 6/1/14
 * Time: 1:52 AM
 */

use Illuminate\Support\Collection;
use GhiSao\Entities\SaoUser;
use GhiSao\Repositories\DbRepository;
use GhiSao\Repositories\Obra\ObraRepositoryInterface;

class DbSaoUserRepository extends DbRepository implements SaoUserRepositoryInterface {

    protected $obraRepository;

    public function __construct(ObraRepositoryInterface $obraRepository)
    {
        parent::__construct();
        $this->obraRepository = $obraRepository;
    }

    public function getModel()
    {
        return new SaoUser;
    }

    /**
     * Devuelve las obras a las que el usuario tiene acceso
     * en todas las conexiones del SAO.
     *
     * @return Illuminate\Support\Collection
     */
    public function getObras()
    {
        $user = \Auth::user();

        $obras_usuario = new Collection;

        // Si ya hay una conexion seleccionada, se guarda para no perderla
        $selectedConnection = \Session::get('connection');

        foreach (\Config::get('database.connections') as $name => $connection)
        {
            // Solo conexiones de tipo SAO
            if ( isset( $connection['type'] ) && $connection['type'] == 'OBRA')
            {
                // para que los modelos usen la conexion
                // que se esta iterando
                \Session::put('connection', $name);
                // obtiene el usuario sao de la conexion actual
                $saoUser = $this->getModel()->find($user->username);

                // si el usuario existe en la conexion
                if (! is_null($saoUser) )
                {
                    // se obtienen las obras a las que el usuario
                    if ( ! is_null($saoUser->id_obra) )
                    {
                        $obras = $saoUser->obras;
                    }
                    else
                    {
                        $obras = $this->obraRepository->newObra()->on($name)->get();
                    }

                    // agrega las obras con acceso a la coleccion
                    foreach ($obras as $obra) {
                        $obras_usuario->push( $obra );
                    }
                }
            }
        }

        // establece la conexion que habia seleccionada
        \Session::put('connection', $selectedConnection);

        return $obras_usuario->sortBy('nombre');
    }
}