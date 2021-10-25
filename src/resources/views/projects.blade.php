@extends('layouts.app')

@section('title')
{{ env("APP_NAME") }}
@endsection

@section('content')
@foreach ($project_info->list as $project)
<div class="m-5">
    <h1 class="text-gray-400"><a href="{{ $project->html_url }}">{{ $project->name }}</a></h1>
    @if ($project->description)
    <h2 class="ml-10 text-gray-400">{{ $project->description }}</h2>
    @else
    <h2 class="ml-10 text-gray-400"><i>No description.</i></h2>
    @endif
</div>
@endforeach
@endsection
