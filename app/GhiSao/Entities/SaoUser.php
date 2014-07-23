<?php namespace GhiSao\Entities;
/**
 * Created by PhpStorm.
 * User: uziel
 * Date: 6/1/14
 * Time: 1:28 AM
 */


class SaoUser extends SaoModel {

    protected $table = 'usuarios';

    protected $primaryKey = 'usuario';

    protected $fillable = [];

    public function user()
    {
        $this->belongsTo('GhiSao\Entities\User', 'usuario', 'username');
    }

    public function obras()
    {
        return $this->belongsToMany('GhiSao\Entities\Obra', 'usuarios_obras', 'usuario', 'id_obra');
    }
} 