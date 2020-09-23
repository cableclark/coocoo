@extends('layouts.app')

@section('content')

<div class="lg-w-1/3 grid place-content-center h-screen2/3">
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

@endsection

