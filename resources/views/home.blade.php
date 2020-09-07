
@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            @if (session('status'))

                <div class="alert alert-success" role="alert">

                    {{ session('status') }}

                </div>

            @endif

            @forelse ($coocoosCollection as $coocoo)

            <div class="card p-3 m-3 rounded shadow">

                <h2>
                    <a href="/users/{{$coocoo->user->name}}">
                        {{$coocoo->user->name}}
                    </a>
                </h2>

                <p>{{$coocoo->coocoo}}</p>

                <p>
                    Published on {{$coocoo->created_at->format('M d, Y')}}
                </p>

                @auth

                    @if (auth()->user()->id == $coocoo->user_id )

                        <form action="/coocoos/{{$coocoo->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" value="{{$coocoo->id}}"> Delete</button>
                        </form>

                    @else

                        <form action="/follow/{{$coocoo->user_id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary" name="follwed_user_id"> Unollow</button>
                        </form>

                    @endif

                @endauth

                @error('coocooo')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror

            </div>

            @empty
                <p>No coocos for you yet...</p>
            @endforelse
    </div>
</div>
@endsection

