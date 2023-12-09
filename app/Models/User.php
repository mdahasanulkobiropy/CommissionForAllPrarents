<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_id');
    }

    public function distributeMoney($amount)
    {
        // Check if the user has a parent
        if ($this->parent) {
            $parent = $this->parent;
            
            // Calculate 20% of the amount
            $parentShare = 0.2 * $amount;

            // Add the share to the parent's balance
            $parent->balance += $parentShare;
            $parent->save();

            // Recursive call to distribute money to the next parent
            $parent->distributeMoney($parentShare);
        }
    }
}
