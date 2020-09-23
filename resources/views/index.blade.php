@extends('layouts.app')
@section('content')
<div class="w-100 h-100 p-5 mx-auto" >
    <main role="main" class="flex justify-center ">
        <div class="w-1/3 grid place-content-center h-screen2/3">
            <h1 class= "text-5xl pb-3 font-semibold">Introducing Echo.</h1>
            <p class="text-xl leading-8  pb-3">Finally, a place where you can freely express your half-formed thoughts, asinine opinions and toxic narcissism. Let's get lost together once again in another ocean of collective bullshit .</p>
            <div>
                <button class="text-xl g-transparent hover:bg-teal-500 text-teal-500 font-semibold hover:text-white py-3 px-4 border border-teal-500 hover:border-transparent rounded">
                <a href="/register" class="btn btn-lg btn-secondary">Onwards</a>
                </button>
            </div>
        </div>
    </main>
    <footer class="mastfoot mt-auto">
</div>
@endsection
