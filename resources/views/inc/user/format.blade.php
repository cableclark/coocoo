<h1>{{$user->name}}</h1>
<p><i>Member since {{$user->created_at->diffForHumans()}}</i></p>
<div class="mb-4">
    @include('inc.buttons.follow')
</div>
<p>{{$user->name}}'s coocos:</p>
