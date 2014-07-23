<?php
/**
 * Created by PhpStorm.
 * User: uziel
 * Date: 6/4/14
 * Time: 12:33 AM
 */

namespace GhiSao\Repositories;


abstract class ArrayRepository {

    protected $array;

    public function __construct()
    {
        $this->array = $this->setArray();
    }

    public abstract function setArray();

    public function getAll()
    {
        return $this->array;
    }
} 