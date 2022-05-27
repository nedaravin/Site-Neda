<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Models\Auth;

use App\Models\Entrepreneur;
use App\Models\Government\District;
use App\Models\Government\DivisionalSecretariat;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Nova\Actions\Actionable;
use Laravel\Passport\HasApiTokens;
use Laravel\Scout\Searchable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User
 * @package App\Models\Auth
 */
class User extends Authenticatable implements HasMedia
{
    use HasFactory,
        Searchable,
        InteractsWithMedia,
        Notifiable,
        SoftDeletes,
        Actionable,
        HasApiTokens,
        HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'mobile',
        'mobile_validated',
        'phone',
        'first_name',
        'last_name',
        'bio',
        'gender',
        'birthday',
        'national_identification_card_no',
        'address',
        'business_name',
        'business_phone',
        'business_start_date',
        'legal_nature_of_business',
        'business_registration_number',
        'total_invested',
        'number_of_employees',
        'primary_industry',
        'type_of_products_or_services',
        'business_address',
        'district',
        'divisional_secretariat',
        'gn_division',
        'district_id',
        'divisional_secretariat_id',
        'gn_division_id',
        'deleted_at',
        'qualifications',
        'phone_numbers',
        'maternity_leave_start',
        'maternity_leave_end',
        'appointed_date',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'birthday',
        'email_verified_at',
        'business_start_date',
        'maternity_leave_start',
        'maternity_leave_end',
        'appointed_date',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'phone_numbers' => 'array'
    ];

    /**
     * Define media collections
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')->singleFile();
        $this->addMediaCollection('documents');
    }

    /**
     * @param Media|null $media
     * @throws \Spatie\Image\Exceptions\InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(250)
            ->height(250);
    }

    public function district_model(): BelongsTo
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function entrepreneurs(){
        return $this->hasMany(Entrepreneur::class, 'user_id');
    }


    public function divisional_secretariat_model(): BelongsTo
    {
        return $this->belongsTo(DivisionalSecretariat::class, 'divisional_secretariat_id');
    }
}
