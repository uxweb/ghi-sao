<?php namespace GhiSao\Repositories\Obra;
/**
 * Created by PhpStorm.
 * User: uziel
 * Date: 5/24/14
 * Time: 8:26 PM
 */

use Illuminate\Support\Collection;
use GhiSao\Entities\Obra;
use GhiSao\Repositories\DbRepository;

class DbObraRepository extends DbRepository implements ObraRepositoryInterface {

    public function getModel()
    {
        return new Obra;
    }

    public function getList()
    {
        $obras = new Collection;

        foreach (\Config::get('database.connections') as $name => $connection) {

            if ( isset( $connection['type'] ) && $connection['type'] == 'OBRA') {

                $o = $this->getModel();

                foreach ($o->on($name)->get() as $obra) {
                    $obra->setConnection($name);
                    $obras->push( $obra );
                }
            }
        }

        return $obras->sortBy('nombre');
    }

    public function newObra()
    {
        return $this->getModel();
    }

    public function getCurrentOrNew()
    {
        $obra = null;

        if (\Session::get('is_obra_selected'))
        {
            $obra = $this->model->find(\Session::get('id_obra'));
        }

        return $obra;
    }

    public function findWithConnection($connection, $id)
    {
        return $this->model->on($connection)->find($id);
    }
}