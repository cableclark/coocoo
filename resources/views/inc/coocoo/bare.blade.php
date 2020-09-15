<div>
    <a href="/user/{{$coocoo->user->name}}">
        {{$coocoo->user->name}}
    </a>
</div>
<div>
    <p>"{{$coocoo->coocoo}}"" - <i> {{$coocoo->created_at->diffForHumans()}}</i></p>
</div>
