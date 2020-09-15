@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8 mt-3 d-flex flex-column">
        <h2 class="m-3 align-self-center"> Latest Coocoos </h2>

        @foreach ($coocoos as $coocoo)

            @include ('inc.coocoo.format')

        @endforeach

        <div class="p-3 d-flex justify-content-center">
            {{ $coocoos->onEachSide(1)->links() }}
        </div>
    </div>
</div>

@endsection
