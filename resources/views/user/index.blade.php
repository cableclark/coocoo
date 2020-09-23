@extends('layouts.app')
@section('content')
    <div class="lg:w-1/3 mx-auto mt-25">
        <x-error-message />
        @include('inc.user.format')
        @foreach ($user->coocoos as $coocoo)
            @include('inc.coocoo.format')
        @endforeach
        @include('inc.sessionStatus')
    </div>
@endsection

