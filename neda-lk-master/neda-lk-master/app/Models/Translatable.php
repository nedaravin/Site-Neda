<?php
declare(strict_types=1);
/**
 * Copyright (c) 2020. Adlux Software (Pvt) Ltd -  All Rights Reserved
 */

namespace App\Models;


trait Translatable
{
    public function getTitleAttribute($value)
    {
        return $this->{'title_' . app()->getLocale()};
    }

    public function getSlugAttribute($value)
    {
        // check if the active language has data
        if (isset($this->{'slug_' . app()->getLocale()})) {

            return $this->{'slug_' . app()->getLocale()};

        } else {
            // check for any available data and return what is available
            return '';
        }
    }

    public function getUrlAttribute($value)
    {
        // check if the active language has data
        if (isset($this->{'url_' . app()->getLocale()})) {

            return $this->{'url_' . app()->getLocale()};

        } else {
            // check for any available data and return what is available
            return '/' . app()->getLocale();
        }
    }

    public function getDownloadUrlAttribute($value)
    {
        return $this->{'download_url_' . app()->getLocale()};
    }

    public function getSummaryAttribute($value)
    {
        return $this->{'summary_' . app()->getLocale()};
    }

    public function getContentAttribute($value)
    {
        return $this->{'content_' . app()->getLocale()};
    }

    public function getMetaTitleAttribute($value)
    {
        return $this->{'meta_title_' . app()->getLocale()};
    }

    public function getMetaContentAttribute($value)
    {
        return $this->{'meta_content_' . app()->getLocale()};
    }

    public function getMetaKeywordsAttribute($value)
    {
        return $this->{'meta_keywords_' . app()->getLocale()};
    }
}
