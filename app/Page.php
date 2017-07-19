<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Carbon\Carbon;
class Page extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    use Sluggable;
    protected $table = 'pages';

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
    protected $fillable = ['title', 'slug', 'desc', 'content', 'publish'];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

      public function scopePublished($query) //buat filter artikel yang akan di publish
    {
        return $query->where('publish','=','1')
                     ->orderBy('id','desc');

    }
}
