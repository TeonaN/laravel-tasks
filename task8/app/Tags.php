<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
        protected $fillable=[
"name","news_id"    ];

	public function news(){
		return $this->belongsTo("App\News");
}
}
