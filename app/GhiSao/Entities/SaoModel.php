<?php namespace GhiSao\Entities;

/**
 * Created by PhpStorm.
 * User: uziel
 * Date: 5/30/14
 * Time: 9:06 AM
 */

class SaoModel extends \Eloquent {

    function __construct(array $attributes = array())
    {
        parent::__construct($attributes);

        $this->setConnection(\Session::get('connection'));
    }
} 