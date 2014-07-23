<?php
/**
 * Created by PhpStorm.
 * User: uziel
 * Date: 6/3/14
 * Time: 11:19 PM
 */

namespace GhiSao\Repositories;


abstract class DbRepository {

    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public abstract function getModel();

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function getAll($orderBy = array())
    {
        return $this->model->get()->sortBy(implode(',', $orderBy));
    }
} 