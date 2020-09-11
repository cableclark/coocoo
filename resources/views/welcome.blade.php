@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8 mt-3 d-flex flex-column">
            <h2 class="m-3 align-self-center"> Latest Coocoos </h2>
            @foreach ($coocoos as $coocoo)

            <div class="shadow card p-3 rounded">

                <p>
                    <a href="/user/{{$coocoo->user->name}}">
                        {{$coocoo->user->name}}
                    </a>
                </p>

                <p>{{$coocoo->coocoo}}</p>

                <p>
                    <i>Published on {{$coocoo->created_at->format('M d, Y')}}</i>
                </p>


            </div>

            @endforeach

            <div class="p-3 d-flex justify-content-center">

                {{ $coocoos->onEachSide(1)->links() }}

            </div>
    </div>

</div>

@endsection
