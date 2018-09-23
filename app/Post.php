<?php

namespace App;

use App\Category;

use App\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes;
    protected $fillable=[
        
     'title',
     'content',
     'category_id',
     'featured',
     'slug'       
        
    ];
    
    protected $dates=['deleted_at'];
    public function category(){
        
        return $this->belongsTo();
    }
    
    public function getFeaturedAttribute($feature){
        
        return asset($feature);
    }
    
    public function tags(){ return $this->belongsToMany('App\Tag'); }
}
