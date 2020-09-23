<div>
    <form wire:submit.prevent="save">
        @csrf
        <div class="form-group">
            <textarea wire:model.lazy="message" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"" rows="3" name="comment" placeholder="Write a comment.."></textarea>
            <input type="hidden" name="coocoo" value= "{{$coocooid}}">
        </div>
        <button class="my-3 text-xl g-transparent hover:bg-teal-500 text-teal-500 font-semibold hover:text-white py-3 px-4 border border-teal-500 hover:border-transparent rounded" type="submit" >Comment</button>
    </form>
    @forelse ($comments as $comment)
        <div class="p-3 flex items-center">
            <img src="/images/unnamed.jpg" class="h-12 w-12 mr-3 rounded-full" />
             <a href="/user/{{$comment->user->name}}"> {{$comment->user->name}}</a> - <i> {{$comment->created_at->diffForHumans()}}</i>
        </div>
        <div class="p-3">
            <p>"{{$comment->comment}}"</p>
        </div>
        @if (auth()->user()->id === $comment->author)
        <button class="p-3" wire:click="remove({{$comment->id}})"> Remove</button>
        @endif
    @empty
    @endforelse
</div>


