<div>
    <a href="/user/{{$comment->user->name}}">
        {{$comment->user->name}}
    </a>
</div>
<div>
    <p>"{{$comment->comment}}"" - <i> {{$comment->created_at->diffForHumans()}}</i></p>
</div>


