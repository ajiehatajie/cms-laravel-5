<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Carbon\Carbon;

class Article extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    use Sluggable;
    protected $table = 'articles';

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
    protected $fillable = ['title', 'slug', 'category', 'desc', 'content', 'status', 'publish', 'thumbnails', 'meta', 'user_id', 'view'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


     public static function boot()
     {
       
           parent::boot();
           static::creating(function($model)
           {
               $user = \Auth::user();
               $model->user_id = $user->id;
               $model->view   = 0;
           });

           static::updating(function($model)
          {
              $user = \Auth::user();
              $model->user_id = $user->id;
          });


     }


    /*
     untuk nambah hit viewer
    */
    public function addclick()
    {
        
          $this->view = $this->view + 1;
          $this->save();
    }


    /*
         relasi dengan table post tags untuk proses input data baru
    */
    
    public function CreateInputTag()
    {
         return $this->belongsToMany('App\Tag','article_tags','article_id','tag_id')->withTimestamps();
    }

    public function getTagAttribute()//untuk set select pada fungsi edit
    {
      return $this->CreateInputTag->pluck('id')->all();
    }


    /*
    untuk set value users_id
    */
    public function setStatusAttribute($value)
    {
         return  $this->attributes['status'] = ($value=='1') ? '1':'0';
    }

    /*
    *
    * untuk set value date pada form create
    */
      
    public function getPublishedatAttribute($date)//untuk set format pada form variable 
    {
          return new Carbon($date);

          
    
    }



}
