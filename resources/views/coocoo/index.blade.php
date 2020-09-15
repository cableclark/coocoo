@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8 mt-4">

        @include('inc.sessionStatus')

        @foreach ($coocoos as $coocoo)

                @include('inc.coocoo.format')

        @endforeach

        </div>
    </div>
</div>

@endsection
