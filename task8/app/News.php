<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
        protected $fillable=[
    	"title","description","short_description","category_id","image","creation_date"
    ];

    public function tags(){
        return $this->hasMany("App\Tags");
    }
}
