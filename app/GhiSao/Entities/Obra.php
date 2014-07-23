<?php namespace GhiSao\Entities;


class Obra extends SaoModel {

    protected $primaryKey = 'id_obra';

	protected $fillable = [];

    public function almacenes()
    {
        return $this->hasMany('GhiSao\Entities\Almacen', 'id_obra', 'id_obra');
    }

}