<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

declare(strict_types=1);

namespace App\Models\Theme;

use App\Models\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * Class ContentBlock
 * @package App\Models
 * @property string title_en
 * @property string title_si
 * @property string title_ta
 * @property string content_en
 * @property string content_si
 * @property string content_ta
 * @property int status
 * @property int sort_order
 */
final class ContentBlock extends Model implements HasMedia
{

    use Actionable,
        Translatable,
        InteractsWithMedia,
        SoftDeletes;

    /**
     * The model's attributes.
     *
     * @var array
     */
    protected $attributes = [
        'sort_order' => 1
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
        'content_en',
        'content_si',
        'content_ta',
        'link_text_en',
        'link_text_si',
        'link_text_ta',
        'link_en',
        'link_si',
        'link_ta',
        'status',
        'sort_order'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [];

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
        $this->addMediaCollection('featured')->singleFile();
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
