@extends('layouts.app')

@section('title')
{{ env('APP_NAME') }}
@endsection

@section('content')
{{-- TODO : Credit Creatable --}}
<div class="mt-8 overflow-hidden bg-white rounded-lg shadow font dark:bg-gray-800 ">
    <div class="flex flex-row">
        <div class="flex justify-center pt-8 mx-5 mt-5 sm:pt-0">
            {{-- TODO : Fetch Discord avatar --}}
            <img class="text-gray-700 rounded-full w-28 shadow-2xl" src="./images/small_blue.png" />
        </div>
        <div class="flex flex-col m-5 justify-center items-center text-center">
            <div class="text-lg font-semibold text-gray-400">
                Alyxia Sother
            </div>
            <div class="text-sm text-gray-500">
                Welcome to my little site!
            </div>
        </div>
    </div>
    @buttonrow
        @button(['url' => url('about')])
            About Me
        @endbutton
        @button(['url' => url('projects')])
            Projects
        @endbutton
        @button(['url' => url('blog')])
            Blog
        @endbutton
    @endbuttonrow
</div>
@endsection
