<?php
/*
 * Copyright (c) 2021. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Http\Controllers;


use App\DataTables\EntrepreneurDataTable;
use App\DataTables\FullEntrepreneurDataTable;
use App\DataTables\DistrictEntrepreneurDataTable;
use App\Http\ViewComposers\BusinessExport;
use App\Models\Entrepreneur;
use App\Models\Government\District;
use App\Models\Government\DivisionalSecretariat;
use App\Models\Government\Province;
use App\Models\Government\GramaNiladhariDivision;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function show(Request $request, string $entrepreneur_id)
    {
        $entrepreneur = (new Entrepreneur())->findOrFail($entrepreneur_id);

        if($entrepreneur){
            return view('admin.show', [
                'entrepreneur' => $entrepreneur
            ]);
        }
    }

    public function register(Request $request)
    {
        $user = auth('web')->user();

        if ($request->has('json_district') && $request->get('province_id')) {
            return [
                'payload' => (new District())->where('province_id', $request->get('province_id'))->orderBy('id', 'ASC')->get()->pluck('title_en', 'id')
            ];
        }

        if ($request->has('json_district') && $request->get('district_id')) {
            return [
                'payload' => (new DivisionalSecretariat())->where('district_id', $request->get('district_id'))->orderBy('id', 'ASC')->get()->pluck('title_en', 'id')
            ];
        }

        if ($request->has('json_district') && $request->get('divisional_secretariat_id')) {
            return [
                'payload' => (new GramaNiladhariDivision())->where('divisional_secretariat_id', $request->get('divisional_secretariat_id'))->orderBy('id', 'ASC')->get()->pluck('title_en', 'id')
            ];
        }

        if ($request->has('json_district') && $request->get('business_sec_id')) {
            return [
                'payload' => (new \App\Models\Content\BusinessServiceType())->where('parent_id', $request->get('business_sec_id'))->orderBy('sort_order', 'ASC')->get()->pluck('title_en', 'id')
            ];
        }

        $model = null;

        // check if an update param exists and this ID belongs to this person who has created it
        if ($user &&
            $request->has('update') &&

            (DB::table('entrepreneurs')->where('id', $request->get('update'))->where('user_id', $user->id)->count() || $user->hasRole('District Coordinator'))

        ) {
            $model = (new Entrepreneur())->findOrFail($request->get('update'));
        }

        // check if an update param exists and this ID belongs to this person who has created it
        if ($user && $request->has('view')) {
            $model = (new Entrepreneur())->findOrFail($request->get('view'));
        }


        return view('admin.register',
            [
                'model' => $model,
                'provinces' => (new Province())->orderBy('id', 'ASC')->get(),
                'districts' => [],
                'ds_division' => [],
                'gn_division' => [],
                'business_service_categories' => (new \App\Models\Content\BusinessServiceType())->whereNull('parent_id')->orderBy('sort_order', 'ASC')->get(),
                'old' => function ($attribute) use ($model) {
                    if (old($attribute)) {
                        return old($attribute);
                    }
                    if (isset($model->{$attribute})) {
                        return $model->{$attribute};
                    }
                }
            ]);
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'redirect' => 'required'
        ]);
        $entrepreneur = (new Entrepreneur())->findOrFail($request->get('id'));
        $entrepreneur->delete();

        return redirect($request->get('redirect'))->with('message', 'Record Deleted');
    }

    public function saveEntrepreneur(Request $request)
    {


        if (auth('web')->check()) {


            $secondary_business_service_id = null;
            if ($request->has('secondary_business_service_id') && is_numeric($request->get('secondary_business_service_id'))) {
                $secondary_business_service_id = $request->get('secondary_business_service_id');
            }

            $divisional_secretariat_id = null;
            if ($request->has('divisional_secretariat_id') && is_numeric($request->get('divisional_secretariat_id'))) {
                $divisional_secretariat_id = $request->get('divisional_secretariat_id');
            }

            $grama_niladhari_division_id = null;
            if ($request->has('grama_niladhari_division_id') && is_numeric($request->get('grama_niladhari_division_id'))) {
                $grama_niladhari_division_id = $request->get('grama_niladhari_division_id');
            }

            $district_id = null;
            if ($request->has('district_id') && is_numeric($request->get('district_id'))) {
                $district_id = $request->get('district_id');
            }

            $province_id = null;
            if ($request->has('province_id') && is_numeric($request->get('province_id'))) {
                $province_id = $request->get('province_id');
            }

            $birthday = null;
            if ($request->has('birthday') && $request->get('birthday')) {
                if ($request->get('birthday') != 'Invalid date') {
                    $birthday = $request->get('birthday');
                }
            }

            $business_start_date = null;
            if ($request->has('business_start_date') && $request->get('business_start_date')) {
                if ($request->get('business_start_date') != 'Invalid date') {
                    $business_start_date = $request->get('business_start_date');
                }
            }

            if ($request->has('model_id')) {

                $model = (new Entrepreneur())->findOrFail($request->get('model_id'));

                $model->update([
                    'email' => $request->get('email'),
                    'name' => $request->get('name'),
                    'last_name' => $request->get('last_name'),
                    'gender' => $request->get('gender'),
                    'birthday' => $birthday,
                    'nic' => $request->get('nic'),
                    'address' => $request->get('address'),
                    'mobile' => $request->get('mobile'),
                    'phone' => $request->get('phone'),
                    'business_name' => $request->get('business_name'),
                    'business_phone' => $request->get('business_phone'),
                    'business_start_date' => $business_start_date,
                    'business_legal_nature' => $request->get('business_legal_nature'),
                    'business_registration_status' => $request->get('business_registration_status'),
                    'business_registration_number' => $request->get('business_registration_number'),
                    'business_type' => $request->get('business_type'),
                    'business_annual_turnover' => $request->has('business_annual_turnover') ? $request->get('business_annual_turnover') : null,
                    'business_number_of_employees' => $request->has('business_number_of_employees') ? $request->get('business_number_of_employees') : null,
                    'business_service_id' => $request->has('business_service_id') ? $request->get('business_service_id') : null,
                    'secondary_business_service_id' => $secondary_business_service_id,
                    'business_description' => $request->has('business_description') ? $request->get('business_description') : null,
                    'business_address' => $request->has('business_address') ? $request->get('business_address') : null,
                    'province_id' => $province_id, //$request->has('province_id') ? $request->get('province_id') : null,
                    'district_id' => $district_id, // $request->has('district_id') ? $request->get('district_id') : null,
                    'divisional_secretariat_id' => $divisional_secretariat_id,
                    'grama_niladhari_division_id' => $grama_niladhari_division_id,
                    'business_located_in_industrial_zone' => $request->has('business_located_in_industrial_zone') ? $request->get('business_located_in_industrial_zone') : 0,
                    'business_zone_type' => $request->has('business_zone_type') ? $request->get('business_zone_type') : null,
                    'user_id' => auth('web')->check() ? auth()->user()->id : 1,
                    'is_valid' => auth('web')->check() ? 1 : 0,
                    'status' => auth('web')->check() ? 1 : 0,
                ]);

            } else {
                $model = Entrepreneur::create([
                    'email' => $request->get('email'),
                    'name' => $request->get('name'),
                    'last_name' => $request->get('last_name'),
                    'gender' => $request->get('gender'),
                    'birthday' => $birthday,
                    'nic' => $request->get('nic'),
                    'address' => $request->get('address'),
                    'mobile' => $request->get('mobile'),
                    'phone' => $request->get('phone'),
                    'business_name' => $request->get('business_name'),
                    'business_phone' => $request->get('business_phone'),
                    'business_start_date' => $business_start_date,
                    'business_legal_nature' => $request->get('business_legal_nature'),
                    'business_registration_status' => $request->get('business_registration_status'),
                    'business_registration_number' => $request->get('business_registration_number'),
                    'business_type' => $request->get('business_type'),
                    'business_annual_turnover' => $request->has('business_annual_turnover') ? $request->get('business_annual_turnover') : null,
                    'business_number_of_employees' => $request->has('business_number_of_employees') ? $request->get('business_number_of_employees') : null,
                    'business_service_id' => $request->has('business_service_id') ? $request->get('business_service_id') : null,
                    'secondary_business_service_id' => $secondary_business_service_id,
                    'business_description' => $request->has('business_description') ? $request->get('business_description') : null,
                    'business_address' => $request->has('business_address') ? $request->get('business_address') : null,
                    'province_id' => $province_id, //$request->has('province_id') ? $request->get('province_id') : null,
                    'district_id' => $district_id, // $request->has('district_id') ? $request->get('district_id') : null,
                    'divisional_secretariat_id' => $divisional_secretariat_id,
                    'grama_niladhari_division_id' => $grama_niladhari_division_id,
                    'business_located_in_industrial_zone' => $request->has('business_located_in_industrial_zone') ? $request->get('business_located_in_industrial_zone') : 0,
                    'business_zone_type' => $request->has('business_zone_type') ? $request->get('business_zone_type') : null,
                    'user_id' => auth('web')->check() ? auth()->user()->id : 1,
                    'is_valid' => auth('web')->check() ? 1 : 0,
                    'status' => auth('web')->check() ? 1 : 0,
                ]);
            }


            return redirect(route('admin.do-admin.all-listings'))->with([
                'success' => 'Thank you, your entry is saved. Entry No #' . $model->id
            ]);
        }

        abort(403);

    }

    public function allListings(Request $request, FullEntrepreneurDataTable $dataTable)
    {
        return $dataTable->render('admin.list');
    }

    public function districtListings(Request $request, DistrictEntrepreneurDataTable $dataTable)
    {
        return $dataTable->render('admin.list');
    }

    public function viewListing(Request $request, EntrepreneurDataTable $dataTable)
    {
        return $dataTable->render('admin.list');

        $user = auth('web')->user();

        return view('admin.list', [
            'entrepreneurs' => $user->entrepreneurs()->paginate()
        ]);
    }

    public function downloadListings(Request $request)
    {

        if ($request->has('id')) {

            ini_set('max_execution_time', 0);

            ini_set('memory_limit', '-1');

            $export_orders_list = [
                []
            ];

            $fields = [];

            foreach ((new Entrepreneur())->getFillable() as $field) {
                if ($field === 'user_id') {
                    $export_orders_list[0]['do_id'] = 'Development Officer ID';
                }

                if ($request->has($field)) {
                    $fields[] = $field;
                    $export_orders_list[0][$field] = ucwords(str_replace('_', ' ', str_replace('_id', '', $field)));
                }

            }

            // load the data
            foreach ((new Entrepreneur())->with([
                'province',
                'district',
                'divisionalSecretariat',
                'gramaNiladhariDivision',
                'developmentOfficer',
                'businessService',
                'subBusinessService',
                'developmentOfficer',
            ])->select($fields)->orderBy('id', 'DESC')->get() as $model) {
                $data = [];
                foreach ($fields as $field) {

                    $value = '-';

                    switch ($field) {
                        case 'province_id':
                            if ($model->{$field}) {
                                $value = $model->province->title_en;
                            }
                            break;

                        case 'district_id':
                            if ($model->{$field}) {
                                $value = $model->district->title_en;
                            }
                            break;

                        case 'divisional_secretariat_id':
                            if ($model->{$field}) {
                                $value = (isset($model->divisionalSecretariat->title_en) ? $model->divisionalSecretariat->title_en : '');
                            }
                            break;

                        case 'grama_niladhari_division_id':
                            if ($model->{$field}) {
                                $value = (isset($model->gramaNiladhariDivision->title_en) ? $model->gramaNiladhariDivision->title_en : '');
                            }
                            break;

                        case 'user_id':
                            if ($model->{$field}) {
                                $value = $model->developmentOfficer ? $model->developmentOfficer->name : '-';
                            }
                            break;

                        case 'business_service_id':
                            if ($model->{$field}) {
                                $value = (isset($model->businessService->title_en) ? $model->businessService->title_en : '');
                            }
                            break;

                        case 'secondary_business_service_id':
                            if ($model->{$field}) {
                                $value = (isset($model->subBusinessService->title_en) ? $model->subBusinessService->title_en : '');
                            }
                            break;

                        case 'create_by_user_id':
                            if ($model->{$field}) {
                                $value = $model->developmentOfficer->title_en;
                            }
                            break;

                        default:
                            $value = $model->{$field};
                    }

                    if ($field === 'user_id') {
                        $data['do_id'] = $model->user_id;
                    }

                    $data[$field] = $value;

                }
                $export_orders_list[] = $data;
            }

            return Excel::download(new BusinessExport($export_orders_list), 'entrepreneur_dump.xlsx');

        }


        return view('admin.download', [
            'model' => (new Entrepreneur())
        ]);
    }
}
