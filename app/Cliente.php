<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome', 'email', 'telefone'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
