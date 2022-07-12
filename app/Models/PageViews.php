<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageViews extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user() {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function page() {
        return $this->hasOne(Pages::class,'id','page_id');
    }

}
