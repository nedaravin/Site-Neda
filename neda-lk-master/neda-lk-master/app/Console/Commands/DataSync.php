<?php
declare(strict_types=1);
/*
 * Copyright (c) 2021. Adlux Software (Pvt) Ltd -  All Rights Reserved
 */

namespace App\Console\Commands;

use App\Models\Government\District;
use App\Models\Government\DivisionalSecretariat;
use App\Models\Government\GramaNiladhariDivision;
use App\Models\Government\Province;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Class DataSync
 * @package App\Console\Commands
 */
class DataSync extends Command
{
    /**
     * @var string
     */
    protected $signature = 'data:sync';

    /**
     * @var string
     */
    protected $description = 'Import data';

    /**
     *
     */
    public function handle()
    {

        $product_csv = base_path('database/locations/locations.csv');

        $csv = file_get_contents($product_csv);

        $array = array_map("str_getcsv", explode("\n", $csv));

        $this->line('Updating data');

        $progress = $this->output->createProgressBar(count($array));

        $active_province = [];
        $active_district = [];
        $active_ds_division = [];

        foreach ($array as $key => $data) {

            try {

                if (count($data) && count($data) === 4) {

                    if (!isset($active_province['title']) || $active_province['title'] != $data[0]) {

                        $province = (new Province())->create([
                            'machine_name' => Str::slug($data[0]),
                            'title_en' => $data[0],
                            'description_en' => $data[0],
                            'title_ta' => $data[0],
                            'description_ta' => $data[0],
                            'title_si' => $data[0],
                            'description_si' => $data[0],
                            'status' => 1
                        ]);

                        $active_province = [
                            'title' => $data[0],
                            'id' => $province->id
                        ];

                    }

                    if (!isset($active_district['title']) || $active_district['title'] != $data[1]) {

                        $district = (new District())->create([
                            'machine_name' => Str::slug($data[1]),
                            'title' => $data[1],
                            'title_en' => $data[1],
                            'description_en' => $data[1],
                            'title_si' => $data[1],
                            'description_si' => $data[1],
                            'title_ta' => $data[1],
                            'description_ta' => $data[1],
                            'province_id' => $active_province['id'],
                            'status' => 1
                        ]);


                        $active_district = [
                            'title' => $data[1],
                            'id' => $district->id
                        ];

                    }

                    if (!isset($active_ds_division['title']) || $active_ds_division['title'] != $data[2]) {

                        $ds_division = (new DivisionalSecretariat())->create([
                            'machine_name' => Str::slug($data[2]),
                            'title_en' => $data[2],
                            'description_en' => $data[2],
                            'title_si' => $data[2],
                            'description_si' => $data[2],
                            'title_ta' => $data[2],
                            'description_ta' => $data[2],
                            'province_id' => $active_province['id'],
                            'district_id' => $active_district['id'],
                            'status' => 1
                        ]);

                        $active_ds_division = [
                            'title' => $data[2],
                            'id' => $ds_division->id
                        ];

                    }

                    $ds_division = (new GramaNiladhariDivision())->create([
                        'machine_name' => Str::slug($data[3]),
                        'title_en' => $data[3],
                        'description_en' => $data[3],
                        'title_si' => $data[3],
                        'description_si' => $data[3],
                        'title_ta' => $data[3],
                        'description_ta' => $data[3],
                        'province_id' => $active_province['id'],
                        'district_id' => $active_district['id'],
                        'divisional_secretariat_id' => $active_ds_division['id'],
                        'status' => 1
                    ]);
                }

            } catch (\Exception $exception) {
                dd($exception->getMessage());
            }

            $progress->advance();
        }

        $progress->finish();

        $this->line('Completed ');

    }
}
