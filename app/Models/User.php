<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'contact_number',
        'location',
        'role',
        'latitude',
        'longitude',
        'distance',
        'entered_by',
        'email',
        'credits_balance',
        'password',
        'is_company_website',
        'company_size',
        'is_company_social_media',
        'is_company_sales_team',
        'company_name',
        'company_registration_number',
        'profile_picture',
        'logo',
        'subscribed_services_notifications',
        'new_leads_notifications',
        'weekly_newsletter_notifications',
        'sms_notifications',

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
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'credits_balance' => 'float', // example of casting if it's a number
    ];

    /**
     * Get the full URL for the user's profile picture.
     *
     * @return string|null
     */
    /*
*/
    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
    public function hasRole($role)
{
    // Assuming your roles are stored in a column called `role`
    return $this->role === $role;
}
}
