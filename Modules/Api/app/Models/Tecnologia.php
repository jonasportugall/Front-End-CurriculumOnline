<?php

namespace Modules\Curriculum\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Curriculum\Database\factories\TecnologiaFactory;

class Tecnologia extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name'];
    
    protected static function newFactory(): TecnologiaFactory
    {
        //return TecnologiaFactory::new();
    }

    public function pessoas(){
        return $this->belongsToMany(Pessoa::class);
    }
}
