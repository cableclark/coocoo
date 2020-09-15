@extends('layouts.app')

@section('content')

@include('inc.sessionStatus')

<div class="row justify-content-center mt-4">
    <div class="col-md-8">
    <x-error-message />
    @include('inc.coocoo.single')
    @include('inc.coocoo.comment')

    {{-- needs to be extracted into its own include --}}

    <div class="mt-3">
        @forelse ($coocoo->comments as $comment)
        <div>
            <a href="/user/{{$comment->user->name}}">
                {{$comment->user->name}}
            </a>
        </div>
        <div>
            <p>"{{$comment->comment}}"" - <i> {{$comment->created_at->diffForHumans()}}</i></p>
        </div>
        @empty
        <p>No comments yet</p>
        @endforelse
        {{-- ends here --}}
    </div>
    </div>
</div>



@endsection
