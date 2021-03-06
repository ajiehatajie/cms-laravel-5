<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'newsletters';

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
    protected $fillable = ['email', 'unsubscribe', 'receive'];

    
    public function User()
    {
        return $this->belongsTo('App\User');
    }

      public function ReceiveMail($email)
     {
          
          $this->receive = $this->receive + 1;
          $this->save();
     }
}
