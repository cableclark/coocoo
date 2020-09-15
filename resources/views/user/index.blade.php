@extends('layouts.app')
@section('content')

<div class="row justify-content-center ">
    <div class="col-md-8 m-4">

        @error('coocoo_id')
        <x-error-message type="danger" message="You are here" />
        @enderror

        @include('inc.user.format')

        @foreach ($user->coocoos as $coocoo)

            @include('inc.coocoo.format')


        @endforeach

        @include('inc.sessionStatus')
    </div>
</div>


@endsection

