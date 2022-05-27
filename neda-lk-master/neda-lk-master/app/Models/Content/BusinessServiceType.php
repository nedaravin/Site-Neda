<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Models\Content;

use App\Models\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;
use Spatie\EloquentSortable\SortableTrait;

/**
 * Class BusinessServiceType
 * @package App\Models\Content
 */
class BusinessServiceType extends Model
{
    use Actionable,
        SortableTrait,
        Translatable,
        SoftDeletes;

    /**
     * @var array
     */
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
