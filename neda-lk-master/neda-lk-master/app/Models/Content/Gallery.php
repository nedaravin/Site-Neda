<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

declare(strict_types=1);

namespace App\Models\Content;

use App\Models\Translatable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;
use Laravel\Scout\Searchable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * Class Gallery
 * @package App\Models\Content
 * @property string title_en
 * @property string title_si
 * @property string title_ta
 * @property string slug_en
 * @property string slug_si
 * @property string slug_ta
 * @property string summary_en
 * @property string summary_si
 * @property string summary_ta
 * @property string content_en
 * @property string content_si
 * @property string content_ta
 * @property string meta_title_en
 * @property string meta_title_si
 * @property string meta_title_ta
 * @property string meta_content_en
 * @property string meta_content_si
 * @property string meta_content_ta
 * @property string meta_keywords_en
 * @property string meta_keywords_si
 * @property string meta_keywords_ta
 * @property int sort_order
 * @property int status
 * @property Carbon created_at
 * @property Carbon updated_at
 * @property Carbon deleted_at
 */
class Gallery extends Model implements HasMedia
{
    use Actionable,
        SortableTrait,
        Translatable,
        InteractsWithMedia,
        Searchable,
        SoftDeletes;

    public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_en',
        'title_si',
        'title_ta',
        'slug_en',
        'slug_si',
        'slug_ta',
        'summary_en',
        'summary_si',
        'summary_ta',
        'content_en',
        'content_si',
        'content_ta',
        'meta_title_en',
        'meta_title_si',
        'meta_title_ta',
        'meta_content_en',
        'meta_content_si',
        'meta_content_ta',
        'meta_keywords_en',
        'meta_keywords_si',
        'meta_keywords_ta',
        'sort_order',
        'status',
        'parent_id',
        'created_at',
        'updated_at',
        'deleted_at'
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
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
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

        $this->addMediaConversion('home_thumb')
            ->width(362)
            ->height(204);
    }

    /**
     * Get model parent
     * @return BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    /**
     * Get model children
     * @return HasMany
     */
    public function children():HasMany
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}
