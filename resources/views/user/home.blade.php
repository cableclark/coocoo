
@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center ">

        <div class="col-md-8">

            {{$user[0]->name}}

            @if(auth()->user() && !$user->isFollowedBy(auth()->user()->id))

            <form action="/follow/{{$user[0]->id}}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-primary"> Follow</button>

            </form>

            @endif

    </div>

</div>

@endsection

