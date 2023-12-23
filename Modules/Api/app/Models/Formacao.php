<?php

namespace Modules\Curriculum\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Curriculum\Database\factories\FormacaoFactory;

class Formacao extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['course','instituition','level','start_date','end_date'];
    
    protected static function newFactory(): FormacaoFactory
    {
        //return FormacaoFactory::new();
    }

    public function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }
}
