<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'campaigns';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['subject', 'content'];

     public static function boot()
     {
       
           parent::boot();
           static::creating(function($model)
           {
               $user = \Auth::user();
               $model->user_id = $user->id;
              
           });

        
     }

   
}
