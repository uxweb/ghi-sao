<?php namespace GhiSao\Repositories\User;
/**
 * Created by PhpStorm.
 * User: uziel
 * Date: 6/9/14
 * Time: 5:02 PM
 */

interface SaoUserRepositoryInterface {

    public function find($id);
    public function getAll();
    public function getObras();
} 