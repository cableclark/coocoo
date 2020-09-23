<div class="bg-white p-3">
    <div class="p-3">
        <a href="/user/{{$comment->user->name}}">{{$comment->user->name}}</a>
    </div>
    <div class="p-3">
        <p>"{{$comment->comment}}"" - <i> {{$comment->created_at->diffForHumans()}}</i></p>
    </div>
    {{-- An auth user can only remove his or her own comments --}}
    @if (auth()->user()->id === $comment->author)
    <button class="p-3" wire:click="remove({{$comment->id}})"> Remove</button>
    @endif
</div>
