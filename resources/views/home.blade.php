@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8 m-4">


        <x-error-message type="danger" />


        @include('inc.coocoo.form')

        @forelse ($latestCoocoos as $coocoo)
            @include('inc.coocoo.format')
            @empty
            <div>No coocos for you yet...</div>
        @endforelse

        <div class="p-3 d-flex justify-content-center">
            {{ $latestCoocoos->links()}}
        </div>
    </div>
</div>

@endsection

