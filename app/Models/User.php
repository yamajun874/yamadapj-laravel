<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use NunoMaduro\Collision\Adapters\Phpunit\State;
use app\Models\Message;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'uid'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    public static $rules = array(
        'uid' => 'required'
    );
        
    public function likes(){
        return $this->belongsToMany(Message::class);
    }
}
