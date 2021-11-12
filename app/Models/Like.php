<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = array('user_id', 'message_id');

    public static $rules = array(
        'use_id' => 'required',
        'message_id' => 'required'
    );

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function message(){
        return $this->belongsTo('App\Models\Message');
    }
}
