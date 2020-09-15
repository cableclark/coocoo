@if( !auth()->user()->isLikedBy($coocoo->id))
<form  action="/likes/store" method="POST">
    @csrf
    <input type="hidden" name = "coocoo_id" value="{{$coocoo->id}}">
    <button type="submit" class="btn btn-link"> Like</button>
</form>
@else
<form  action="/likes/" method="POST">
    @csrf
    @method('DELETE')
    <input type="hidden" name = "coocoo_id" value="{{$coocoo->id}}">
    <button type="submit" class="btn btn-link" > Liked by you </button>
</form>
@endif
