<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicio';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','abreviatura'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    //primary key
    protected $primaryKey ='idservicio';

    public $timestamps = false;
    
    //foreign key

     public function proyecto(){
    	return $this->belongsTo('App\Proyecto','idproyecto');
    }
}
