<?php

namespace App\Policies;


use Illuminate\Auth\Access\HandlesAuthorization;

class GramaNiladhariDivisionPolicy
{
    use HandlesAuthorization,
        PolicySupport;

    /**
     * @var string
     */
    public $module = 'Grama Niladhari Division';
}
