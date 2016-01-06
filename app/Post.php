<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = [
      'title', 'text', 'abstract'  
    ];
    
    public function user() {
        return $this->belongsTo('App\User');
    }
    
    public function getAbstract($str, $startPos=0, $maxLength=100) {
        if(strlen($str) > $maxLength) {
		$excerpt   = substr($str, $startPos, $maxLength-3);
		$lastSpace = strrpos($excerpt, ' ');
		$excerpt   = substr($excerpt, 0, $lastSpace);
		$excerpt  .= '...';
	} else {
		$excerpt = $str;
	}
	
	return $excerpt;
    }
}
