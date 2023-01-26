@extends('layouts.app')

@section('content')
    <div class="text-bgButtom flex items-center mx-auto max-w-7xl my-10 ">

        <div class="flex-auto w-64 px-8 ">
            <h1>{{ $errorTitle ?? 'Server error' }}</h1>
            <h2>{{ $httpCode ?? '' }}</h2>

            <p>
                {{ $message ?? '' }}
            </p>
        </div>

    </div>
@endsection
