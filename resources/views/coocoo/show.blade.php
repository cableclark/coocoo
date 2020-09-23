@extends('layouts.app')
@section('content')
@include('inc.sessionStatus')
<div class="m-auto lg:w-1/3 mt-25">
    <x-error-message />
    @include('inc.coocoo.single')
    <div class="card p-5 rounded shadow">
        <livewire:comment-form :coocooid="$coocoo->id"/>
    </div>
</div>
@endsection
