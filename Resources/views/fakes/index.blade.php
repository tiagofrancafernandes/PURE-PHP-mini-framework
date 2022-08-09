@extends('layouts.app')

@section('content')
    <div class="row p-5">
        <div class="col-12">
            <h4 class="text-center">{{ config('app.name') }}</h4>
        </div>

        <div class="col-md-6 col-sm-12 d-flex justify-content-center">
            <h4>Content 1</h4>
        </div>

        <div class="col-md-6 col-sm-12 d-flex justify-content-center">
            <h4>Content 2</h4>
        </div>
    </div>
@endsection
