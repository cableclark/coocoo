
@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center ">

        <div class="col-md-8 m-4">


            @foreach ($user->coocoos as $coocoo)

            <div class="shadow card mb-2 p-3 rounded">

                <p> {{$coocoo->user->name}}</p>

                <p>{{$coocoo->coocoo}}</p>

                <p>
                    Published on {{$coocoo->created_at->format('M d, Y')}}
                </p>

                @if(auth()->user()
                 && !auth()->user()->followsAUser($user->id)
                    )

                    <form action="/follow/" method="POST">
                        @csrf

                        <input type="hidden" name = "followed_id" value={{$user->id}}>

                        <input type="hidden" name = "username" value={{$user->name}}>

                        <button type="submit" class="btn btn-primary" > Follow</button>

                    </form>

                 @endif

            </div>

            @endforeach

            @error('followed_id')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror

            @if (session('status'))
            <div class="alert alert-success mt-2">
                {{ session('status') }}
            </div>
            @endif

    </div>

</div>

@endsection

