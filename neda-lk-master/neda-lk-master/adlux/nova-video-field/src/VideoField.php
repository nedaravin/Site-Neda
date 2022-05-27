<?php
/**
 * Copyright (c) 2020. CameraLK - Adlux Software (Pvt) Ltd
 */

declare(strict_types=1);

namespace Adlux\VideoField;

use Laravel\Nova\Fields\Field;

/**
 * Class VideoField
 * @package Adlux\VideoField
 */
class VideoField extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'video-field';
}
