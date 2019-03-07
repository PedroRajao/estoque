<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    public $timestamps = false;
    protected $fillable = ['nome'];

    public function produtos()
    {
        return $this->hasMany('estoque\Produto');
    }
}
