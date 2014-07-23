<?php namespace GhiSao\Composers;
/**
 * Created by PhpStorm.
 * User: uziel
 * Date: 5/25/14
 * Time: 9:02 AM
 */

use GhiSao\Repositories\Obra\ObraRepositoryInterface;

class ObraInfoComposer {

    protected $obraRepository;

    public function __construct(ObraRepositoryInterface $obraRepository)
    {
        $this->obraRepository = $obraRepository;
    }

    public function compose($view)
    {
        $obra = $this->obraRepository->getCurrentOrNew();

        $view->with('obra', $obra);
    }

} 