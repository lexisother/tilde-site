@extends('layouts.app')

@section('title')
{{ env('APP_NAME') }}
@endsection

@section('content')
<div class="mt-8 overflow-hidden bg-white rounded-lg shadow font dark:bg-gray-800">
    <div class="grid grid-cols-1 md:grid-cols-2">
        @carditem(['title' => 'Alyxia Sother'])
        Welcome to my little site!
        @endcarditem
    </div>
</div>
@endsection
