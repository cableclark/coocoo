@extends('layouts.app')
@section('content')
<div class="m-auto lg:w-1/3 mt-25">
        @include('inc.sessionStatus')
        @foreach ($coocoos as $coocoo)
                @include('inc.coocoo.format')
        @endforeach
        </div>
    </div>
@endsection
