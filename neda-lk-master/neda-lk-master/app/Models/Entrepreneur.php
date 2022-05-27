<?php
/*
 * Copyright (c) 2021. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

declare(strict_types=1);

namespace App\Models;

use App\Models\Auth\User;
use App\Models\Content\BusinessServiceType;
use App\Models\Government\District;
use App\Models\Government\DivisionalSecretariat;
use App\Models\Government\GramaNiladhariDivision;
use App\Models\Government\Province;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * Class Entrepreneur
 * @package App\Models
 */
class Entrepreneur extends Model implements HasMedia
{
    use SoftDeletes,
        SortableTrait,
        InteractsWithMedia,
        Actionable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'email',
        'name',
        'last_name',
        'gender',
        'birthday',
        'nic',
        'address',
        'mobile',
        'phone',
        'business_name',
        'business_phone',
        'business_start_date',
        'business_legal_nature',
        'business_registration_status',
        'business_registration_number',
        'business_type',
        'business_annual_turnover',
        'business_number_of_employees',
        'business_service_id',
        'secondary_business_service_id',
        'business_description',
        'business_address',
        'province_id',
        'district_id',
        'divisional_secretariat_id',
        'grama_niladhari_division_id',
        'business_located_in_industrial_zone',
        'business_zone_type',
        'user_id',
        'create_by_user_id',
        'is_valid',
        'status',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @deprecated Use the "casts" property
     *
     * @var array
     */
    protected $dates = [
        'birthday',
        'business_start_date',
    ];

    /**
     * Define media collections
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover')->singleFile();
        $this->addMediaCollection('gallery');
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

    /**
     * Get province
     * @return BelongsTo
     */
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    /**
     * Get district
     * @return BelongsTo
     */
    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    /**
     * Get Divisional Secretariat
     * @return BelongsTo
     */
    public function divisionalSecretariat(): BelongsTo
    {
        return $this->belongsTo(DivisionalSecretariat::class);
    }

    /**
     * Get Grama Niladhari Division
     * @return BelongsTo
     */
    public function gramaNiladhariDivision(): BelongsTo
    {
        return $this->belongsTo(GramaNiladhariDivision::class);
    }

    /**
     * Get Business Service
     * @return BelongsTo
     */
    public function businessService(): BelongsTo
    {
        return $this->belongsTo(BusinessServiceType::class);
    }

    /**
     * Get Business Service
     * @return BelongsTo
     */
    public function subBusinessService(): BelongsTo
    {
        return $this->belongsTo(BusinessServiceType::class, 'secondary_business_service_id');
    }

    /**
     * Get development officer
     * @return BelongsTo
     */
    public function developmentOfficer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get Business Services
     * @return BelongsToMany
     */
    public function businessServices(): BelongsToMany
    {
        return $this->belongsToMany(BusinessServiceType::class, 'business_service_type_entrepreneur', 'entrepreneur_id', 'bst_id');
    }


}
