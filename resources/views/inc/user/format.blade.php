<div class="min-w-1/3 px-3">
    <h1 class="py-5">{{$user->name}}</h1>
    <p><i>Member since {{$user->created_at->diffForHumans()}}</i></p>
    <div class="mb-4">
        @include('inc.buttons.follow')
    </div>
    <p>{{$user->name}}'s coocos:</p>
</div>
