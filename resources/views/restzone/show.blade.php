@extends('layouts.main')
@section('content')
    <h2>{{ $rest_zone->name }}</h2>
    <a href="{{ route('rest_zone.index') }}" class="inline-block focus:outline-none text-white bg-my-oran-l hover:bg-my-oran-d focus:ring-4 focus:ring-green-300 font-medium text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
        Назад к списку
    </a>
@endsection
