<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdetay extends Model
{
    use HasFactory;
    public $timestamps = false;
   protected $guarded = [];
   //protected $fillable = ['adres','about','phone','user_id'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}