<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Models\Government;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * Class GramaNiladhariDivision
 * @package App\Models\Government
 */
class GramaNiladhariDivision extends Model implements HasMedia
{
    use SoftDeletes,
        SortableTrait,
        InteractsWithMedia,
        Actionable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'machine_name',

        'title_en',
        'description_en',

        'title_si',
        'description_si',

        'title_ta',
        'description_ta',

        'province_id',
        'district_id',
        'divisional_secretariat_id',

        'sort_order',
        'status'
    ];

    /**
     * The model's attributes.
     *
     * @var array
     */
    protected $attributes = [
        'sort_order' => 1
    ];

    /**
     * @var array
     */
    public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function province(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    /**
     * Get province
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function district(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    /**
     * Get Divisional Secretariat
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function divisionalSecretariat(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(DivisionalSecretariat::class);
    }
}
