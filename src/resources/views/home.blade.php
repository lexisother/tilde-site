@extends('layouts.app')

@section('title')
{{ env('APP_NAME') }}
@endsection

@section('content')
<div class="mt-8 overflow-hidden bg-white rounded-lg shadow font dark:bg-gray-800">
    <div class="flex justify-center pt-8 m-5 sm:pt-0">
        {{-- TODO: Fetch Discord avatar --}}
        <img class="text-gray-700 rounded-full w-60" src="./images/small_blue.png" />
    </div>
    <div class="flex-col m-5 text-center">
        <div class="text-lg font-semibold text-gray-400">
            Alyxia Sother
        </div>
        <div class="text-sm text-gray-500">
            Welcome to my little site!
        </div>
    </div>
    {{-- TODO: Find content to put here --}}
    {{-- <div class="grid grid-cols-1 md:grid-cols-2">
        @carditem(['title' => 'Alyxia Sother'])
        Welcome to my little site!
        @endcarditem
    </div> --}}
</div>
@endsection
