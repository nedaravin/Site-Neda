<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Models\Forms;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * Class RecruitmentOfManagementAssistant2020
 * @package App\Models
 */
class RecruitmentOfManagementAssistant2021 extends Model implements HasMedia
{
    use Actionable,
        InteractsWithMedia,
        SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recruitment_of_management_assistant2021';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'full_name',
        'name_with_initials',
        'name_in_different_language',
        'permanent_address',
        'gender', // Male, Female
        'race', // Sinhala, Tamil, Muslim, Other
        'nic',
        'birthday',
        'age_at_closing',
        'telephone',
        'email',        
        'educational_qualifications_al',
        'educational_qualifications_ol',
        'found_guilty_by_court_of_law', // Yes , No
        'found_guilty_by_court_of_law_details',
        'holding_a_post_in_the_public_service', // Yes , No
        'holding_a_post_in_the_public_service_details',
        'dismissed_or_removed_from_public_service'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'birthday',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'educational_qualifications_al' => 'array',
        'educational_qualifications_ol' => 'array',
    ];

    /**
     * Define media collections
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('profile_picture')
            ->singleFile()
            ->useDisk('s3');

        $this->addMediaCollection('qualifications')
            ->useDisk('s3');

        $this->addMediaCollection('letters')
            ->useDisk('s3');
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
}
