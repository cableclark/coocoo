<svg class="mr-2" width="24" height="24" viewBox="0 0 24 24">
    <path class="fill-current" d="M12 21.638h-.014C9.403 21.59 1.95 14.856 1.95 8.478c0-3.064 2.525-5.754 5.403-5.754 2.29 0 3.83 1.58 4.646 2.73.813-1.148 2.353-2.73 4.644-2.73 2.88 0 5.404 2.69 5.404 5.755 0 6.375-7.454 13.11-10.037 13.156H12zM7.354 4.225c-2.08 0-3.903 1.988-3.903 4.255 0 5.74 7.035 11.596 8.55 11.658 1.52-.062 8.55-5.917 8.55-11.658 0-2.267-1.822-4.255-3.902-4.255-2.528 0-3.94 2.936-3.952 2.965-.23.562-1.156.562-1.387 0-.015-.03-1.426-2.965-3.955-2.965z"/>
</svg>
@if( !auth()->user()->isLikedBy($coocoo->id))
    <form class="mr-4" action="/likes/store" method="POST">
        @csrf
        <input type="hidden" name = "coocoo_id" value="{{$coocoo->id}}">
        <button type="submit" class="btn btn-link"> Like</button>
    </form>
    @else
    <form class="mr-4" action="/likes/" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name = "coocoo_id" value="{{$coocoo->id}}">
        <button type="submit" class="btn btn-link" > Liked by you
            @if ($coocoo->likes->count() > 1)
               and {{$coocoo->likes->count()}} others
            @endif
        </button>
    </form>
@endif
