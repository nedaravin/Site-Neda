@extends('admin.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Download Excel</h2>
            </div>
            <div class="col-md-12">

                <form action="{{ route('admin.do-admin.download') }}" method="post">
                    @csrf
                    @foreach($model->getFillable() as $field)

                        @if($loop->index == 0)
                            <input type="hidden" class="form-check-input" id="{{ $field }}" name="{{ $field }}" checked>
                        @else
                            @if($field !== 'is_valid' && $field !== 'create_by_user_id' && $field !== 'status' && $field !== 'user_id')
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="{{ $field }}"
                                           name="{{ $field }}">
                                    <label class="form-check-label" for="{{ $field }}">
                                        @if($field == 'user_id')
                                            Development Officer
                                        @else
                                            {{ ucwords(str_replace('_', ' ', str_replace('_id', '', $field))) }}
                                        @endif
                                    </label>
                                </div>
                            @else
                                @if($field === 'user_id')
                                    <input type="hidden" class="form-check-input" id="{{ $field }}" name="{{ $field }}" checked>
                                @endif
                            @endif
                        @endif
                    @endforeach
                    <button type="submit" class="btn btn-success mt-4">Generate</button>
                </form>
            </div>
        </div>
    </div>
@endsection
