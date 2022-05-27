@extends('admin.layout')
@section('content')
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mt-2">Personal Details</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>E-Mail Address</td>
                                <td>{{ $entrepreneur->email }}</td>
                            </tr>
                            <tr>
                                <td>Mobile</td>
                                <td>{{ $entrepreneur->mobile }}</td>
                            </tr>
                            <tr>
                                <td>Full Name</td>
                                <td>{{ $entrepreneur->name }}</td>
                            </tr>
                            <tr>
                                <td>Surname Name</td>
                                <td>{{ $entrepreneur->last_name }}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>{{ $entrepreneur->gender }}</td>
                            </tr>
                            <tr>
                                <td>Birthday</td>
                                <td>{{ $entrepreneur->birthday ? $entrepreneur->birthday->format('Y-m-d') : '-' }}</td>
                            </tr>
                            <tr>
                                <td>NIC</td>
                                <td>{{ $entrepreneur->nic }}</td>
                            </tr>
                            <tr>
                                <td>Phone (Fixed Line)</td>
                                <td>{{ $entrepreneur->phone }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{ $entrepreneur->address }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="mt-2">Business Details</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Business Name</td>
                                <td>{{ $entrepreneur->business_name }}</td>
                            </tr>
                            <tr>
                                <td>Business Phone</td>
                                <td>{{ $entrepreneur->business_phone }}</td>
                            </tr>
                            <tr>
                                <td>Business Address</td>
                                <td>{{ $entrepreneur->business_address }}</td>
                            </tr>
                            <tr>
                                <td>Business Start Date</td>
                                <td>{{ $entrepreneur->business_start_date ? $entrepreneur->business_start_date->format('Y-m-d') : '-' }}</td>
                            </tr>
                            <tr>
                                <td>Legal Nature Of Business</td>
                                <td>{{ $entrepreneur->business_legal_nature ? ucwords(str_replace('_', ' ', $entrepreneur->business_legal_nature)) : '-' }}</td>
                            </tr>
                            <tr>
                                <td>Business Registration Status</td>
                                <td>{{ $entrepreneur->business_registration_status ? ucfirst($entrepreneur->business_registration_status) : '-' }}</td>
                            </tr>
                            <tr>
                                <td>Business Registration Number</td>
                                <td>{{ $entrepreneur->business_registration_number ? $entrepreneur->business_registration_number : '-' }}</td>
                            </tr>
                            <tr>
                                <td>Economic Sector</td>
                                <td>{{ $entrepreneur->business_type ? ucfirst($entrepreneur->business_type) : '-' }}</td>
                            </tr>
                            <tr>
                                <td>Annual Turnover</td>
                                <td>{{ $entrepreneur->business_annual_turnover ? str_replace('_', ' ', $entrepreneur->business_annual_turnover) : '-' }}</td>
                            </tr>
                            <tr>
                                <td>Number Of Employees</td>
                                <td>{{ $entrepreneur->business_number_of_employees ? str_replace('_', ' - ', $entrepreneur->business_number_of_employees) : '-' }}</td>
                            </tr>
                            <tr>
                                <td>Primary Business Sector</td>
                                <td>{{ $entrepreneur->businessService ? $entrepreneur->businessService->title : '-' }}</td>
                            </tr>
                            <tr>
                                <td>Secondary Business Sector</td>
                                <td>
                                    @if($entrepreneur->businessServices)
                                        @foreach($entrepreneur->businessServices as $service)
                                            {{ $service->title }}
                                        @endforeach
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Business Description</td>
                                <td>{{ $entrepreneur->business_description }}</td>
                            </tr>
                            <tr>
                                <td>Province</td>
                                <td>{{ $entrepreneur->province ? $entrepreneur->province->title_en : '-' }}</td>
                            </tr>
                            <tr>
                                <td>District</td>
                                <td>{{ $entrepreneur->district ? $entrepreneur->district->title_en : '-' }}</td>
                            </tr>
                            <tr>
                                <td>Divisional Secretariat</td>
                                <td>{{ $entrepreneur->divisionalSecretariat ? $entrepreneur->divisionalSecretariat->title_en : '-' }}</td>
                            </tr>
                            <tr>
                                <td>Grama Niladhari Division</td>
                                <td>{{ $entrepreneur->gramaNiladhariDivision ? $entrepreneur->gramaNiladhariDivision->title_en : '-' }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center mt-4">
                <a href="javascript:history.back()" class="btn btn-warning">Back</a>
            </div>
        </div>
    </main>
@endsection

@push('scripts')

@endpush
