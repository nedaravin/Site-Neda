<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

/**
 * Class Menu
 * @package App\Models
 */
class Menu extends Model implements Sortable
{
    use SortableTrait,
        Translatable,
        Actionable,
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
        'title_fr',
        'title_nl',
        'url_en',
        'url_fr',
        'url_nl',
        'parent_id',
        'status',
        'model_type',
        'sort_order',
        'created_at',
        'updated_at',
        'deleted_at',
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
