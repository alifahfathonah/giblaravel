<?php

namespace App\Models;

use App\Models\Master\Amanah;
use App\Models\Master\Division;
use App\Models\Master\Graduate;
use App\Models\Master\Major;
use App\Models\Master\Specialization;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Laravolt\Indonesia\Models\Province;
use Rackbeat\UIAvatars\HasAvatar;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use SoftDeletes;
    use HasAvatar;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname',
        'name',
        'email',
        'password',
        'role',
        'gender',
        'photo',
        'phone_number',
        'place_of_birth',
        'date_of_birth',
        'marital_status',
        'blood_type',
        'province_id',
        'regency_id',
        'address',
        'graduate_id',
        'major_id',
        'job_id',
        'hobby',
        'specialization_id',
        'division_id',
        'member_status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function getAvatar( $size = 64 ) {
        return $this->getGravatar( $this->email, $size );
    }
    
    public function division()
    {
        return $this->belongsTo(Division::class);
    }
    
    public function graduate()
    {
        return $this->belongsTo(Graduate::class);
    }
    
    public function major()
    {
        return $this->belongsTo(Major::class);
    }
    
    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }

    public function amanahs()
    {
        return $this->belongsToMany(Amanah::class, 'amanah_user', 'user_id', 'amanah_id');
    }
}
