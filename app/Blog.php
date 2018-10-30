<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Blog extends Model
{
    protected $fillable = ['users_id', 'title', 'image', 'slug', 'content'];

    protected $dates = ['created_at', 'updated_at'];

    public function getCreatedAtAttribute($value){
        return Carbon::parse($value)->format('d M, Y');
    }

    public function dateYearMonthDay($value){
    	return Carbon::parse($value)->format('Y-m-d');
    }
}
