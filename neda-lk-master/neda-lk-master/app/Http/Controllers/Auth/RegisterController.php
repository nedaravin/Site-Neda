<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Entrepreneur;
use App\Models\Government\District;
use App\Models\Government\DivisionalSecretariat;
use App\Models\Government\GramaNiladhariDivision;
use App\Models\Government\Province;
use App\Providers\RouteServiceProvider;
use App\Models\Auth\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/thank-you';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // This is disabled due the requirement of multiple registrations of users
        // $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     * @return View
     */
    public function showRegistrationForm(): View
    {
        return view('auth.register', [
            'provinces' => (new Province())->orderBy('id', 'ASC')->get(),
            'districts' => (new District())->orderBy('id', 'ASC')->get(),
            'ds_division' => (new DivisionalSecretariat())->orderBy('id', 'ASC')->get(),
            'gn_division' => (new GramaNiladhariDivision())->orderBy('id', 'ASC')->get(),
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        // login if a user is already not logged in
        if (!auth('web')->check()) {
            $this->guard()->login($user);
        }

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect(route('register.thank-you', app()->getLocale()));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if(auth()->check()){
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
            ]);
        }
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\Auth\User
     */
    protected function create(array $data)
    {
        if(!auth()->check()){
            // create user model
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => isset($data['password']) ? Hash::make($data['password']) : 'password',
                "first_name" => $data["name"],
                "last_name" => $data["last_name"],
                "bio" => $data["business_description"],
                "gender" => $data["gender"],
                "birthday" => $data["birthday"],
                "national_identification_card_no" => $data["nic"],
                "address" => $data["address"],
                "mobile" => $data["mobile"],
                "business_name" => $data["business_name"],
                "business_phone" => $data["business_phone"],
                "business_start_date" => $data["business_start_date"],
                "legal_nature_of_business" => $data["business_legal_nature"],
                "business_registration_number" => $data["business_registration_number"],
                "total_invested" => isset($data['business_annual_turnover']) ? $data['business_annual_turnover'] : null,
                "number_of_employees" => isset($data["business_number_of_employees"]) ? $data["business_number_of_employees"] : null,
                "business_address" => $data["business_address"]
            ]);
          }

        Entrepreneur::create([
            'email' => $data['email'],
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'gender' => $data['gender'],
            'birthday' => $data['birthday'],
            'nic' => $data['nic'],
            'address' => $data['address'],
            'mobile' => $data['mobile'],
            'phone' => $data['phone'],
            'business_name' => $data['business_name'],
            'business_phone' => $data['business_phone'],
            'business_start_date' => $data['business_start_date'],
            'business_legal_nature' => $data['business_legal_nature'],
            'business_registration_status' => $data['business_registration_status'],
            'business_registration_number' => $data['business_registration_number'],
            'business_type' => $data['business_type'],
            'business_annual_turnover' => isset($data['business_annual_turnover']) ? $data['business_annual_turnover'] : null,
            'business_number_of_employees' => isset($data["business_number_of_employees"]) ? $data["business_number_of_employees"] : null,
            'business_service_id' => isset($data['business_service_id']) ? $data['business_service_id'] : null,
            'secondary_business_service_id' => isset($data['secondary_business_service_id']) ? $data['secondary_business_service_id'] : null,
            'business_description' => isset($data['business_description']) ? $data['business_description'] : null,
            'business_address' => isset($data['business_address']) ? $data['business_address'] : null,
            'province_id' => isset($data['province_id']) ? $data['province_id'] : null,
            'district_id' => isset($data['district_id']) ? $data['district_id'] : null,
            'divisional_secretariat_id' => isset($data['divisional_secretariat_id']) ? $data['divisional_secretariat_id'] : null,
            'grama_niladhari_division_id' => isset($data['grama_niladhari_division_id']) ? $data['grama_niladhari_division_id'] : null,
            'business_located_in_industrial_zone' => isset($data['business_located_in_industrial_zone']) ? $data['business_located_in_industrial_zone'] : 0,
            'business_zone_type' => isset($data['business_zone_type']) ? $data['business_zone_type'] : null,
            'user_id' => auth()->check() ? auth()->user()->id : $user->id,
            'is_valid' => auth()->check() ? 1 : 0,
            'status' => auth()->check() ? 1 : 0,
        ]);

        if(!auth()->check()){
            // attach user to role
            $user->roles()->attach(4);

            return $user;
        }else{
            return auth()->user();
        }

    }


    public function registerComplete()
    {
        return view('auth.thank-you');
    }
}
