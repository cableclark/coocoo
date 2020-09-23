@extends('layouts.app')
@section('content')
<div class="mt-20 grid place-items-center mx-auto lg:w-1/3 ">
    <h2 class="m-3 text-4xl"> Latest Coocoos </h2>
    @foreach ($coocoos as $coocoo)
        @include ('inc.coocoo.format')
    @endforeach
    <div class="p-3 d-flex justify-content-center">
        {{ $coocoos->onEachSide(1)->links() }}
    </div>
</div>
@endsection
