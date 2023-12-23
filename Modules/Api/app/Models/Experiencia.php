<?php

namespace Modules\Curriculum\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Curriculum\Database\factories\ExperienciaFactory;

class Experiencia extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['office','company','start_date','end_date','description'];
    
    protected static function newFactory(): ExperienciaFactory
    {
        //return ExperienciaFactory::new();
    }

    public function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }
}
