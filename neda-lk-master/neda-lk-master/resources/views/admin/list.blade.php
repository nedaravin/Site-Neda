@extends('admin.layout')
@section('content')
    <main class="container-fluid bg-white">

        {{$dataTable->table()}}
        {{--    <table class="table table-hover">--}}
        {{--        <thead>--}}
        {{--        <tr>--}}
        {{--            <th scope="col">#</th>--}}
        {{--            <th scope="col">Name</th>--}}
        {{--            <th scope="col">Address</th>--}}
        {{--            <th scope="col">Mobile</th>--}}
        {{--        </tr>--}}
        {{--        </thead>--}}
        {{--        <tbody>--}}
        {{--        <tr>--}}
        {{--            <th scope="row">1</th>--}}
        {{--            <td>Mark</td>--}}
        {{--            <td>Otto</td>--}}
        {{--            <td>@mdo</td>--}}
        {{--        </tr>--}}
        {{--        <tr>--}}
        {{--            <th scope="row">2</th>--}}
        {{--            <td>Jacob</td>--}}
        {{--            <td>Thornton</td>--}}
        {{--            <td>@fat</td>--}}
        {{--        </tr>--}}
        {{--        <tr>--}}
        {{--            <th scope="row">3</th>--}}
        {{--            <td colspan="2">Larry the Bird</td>--}}
        {{--            <td>@twitter</td>--}}
        {{--        </tr>--}}
        {{--        </tbody>--}}
        {{--    </table>--}}
    </main>
@endsection

@push('scripts')
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    {{$dataTable->scripts()}}
@endpush
