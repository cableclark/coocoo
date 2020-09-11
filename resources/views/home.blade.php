
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 m-4">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @include('inc.coocooform')
        @forelse ($latestCoocoos as $coocoo)

            <div class="card p-3 rounded shadow">
                <div>
                    <a href="/user/{{$coocoo->user->name}}">
                        {{$coocoo->user->name}}
                    </a>
                </div>
                <div>
                    <p>"{{$coocoo->coocoo}}"" - <i> {{$coocoo->created_at->diffForHumans()}}</i></p>

                </div>

                <div class="d-flex">

                    @auth

                    <form  action="/like/{{$coocoo->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link" value="{{$coocoo->id}}"> Like</button>
                    </form>

                        @if (auth()->user()->id == $coocoo->user_id )
                        <form class="ml-auto" action="/coocoos/{{$coocoo->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" value="{{$coocoo->id}}"> Delete</button>
                        </form>

                        @else
                        <form  class="ml-auto" action="/follow/{{$coocoo->user_id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link" name="follwed_user_id"> Unollow</button>
                        </form>
                        @endif

                    @endauth
                </div>

            @error('coocooo')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror

            </div>

            @empty
             <div>No coocos for you yet...</div>
        @endforelse

        <div class="p-3 d-flex justify-content-center">
             {{ $latestCoocoos->links()}}
        </div>
    </div>
</div>
@endsection

