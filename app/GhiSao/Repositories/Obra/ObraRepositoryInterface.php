<?php namespace GhiSao\Repositories\Obra;
/**
 * Created by PhpStorm.
 * User: uziel
 * Date: 6/9/14
 * Time: 4:57 PM
 */

interface ObraRepositoryInterface {

    public function find($id);

    public function getList();

    public function getCurrentOrNew();

    public function findWithConnection($connection, $id);
} 