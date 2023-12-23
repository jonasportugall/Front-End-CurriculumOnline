<?php

namespace Modules\Curriculum\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Curriculum\Database\factories\PessoaFactory;
$table->string('name');
$table->char('gender',1);
$table->string('telephone');
$table->string('address');
$table->date('date_of_birth');

class Pessoa extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name','gender','telephone','address','date_of_birth'];
    
    protected static function newFactory(): PessoaFactory
    {
        //return PessoaFactory::new();
    }

    public function cursos(){
        return $this->hasMany(Curso::class);
    }

    public function experiencias(){
        return $this->hasMany(Experiencia::class);
    }

    public function formacaos(){
        return $this->hasMany(formacao::class);
    }

    public function tecnologias(){
        return $this->hasMany(Tecnologia::class);
    }

    public function municipio(){
        return $this->hasOne(Municipio::class);
    }

    public function provincia(){
        return $this->hasOne(Provincia::class);
    }

    



}
