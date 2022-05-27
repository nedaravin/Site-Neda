<?php

namespace App\Http\ViewComposers;


use Maatwebsite\Excel\Concerns\FromCollection;

class BusinessExport implements FromCollection
{
    public $models;

    /**
     * @param $models
     */
    public function __construct($models)
    {
        $this->models = $models;
    }

    public function collection()
    {
        return collect($this->models);
    }
}
