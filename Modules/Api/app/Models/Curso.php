<?php

namespace Modules\Curriculum\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Curriculum\Database\factories\CursoFactory;

class Curso extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name','instituition','duration'];
    
    protected static function newFactory(): CursoFactory
    {
        //return CursoFactory::new();
    }



    public function getNameAttribute(){
        return $this->attributes['name'];
    }

    public function setNameAttribute($attr){
        $this->attributes['name'] = $attr;
    }

    public function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }
}
