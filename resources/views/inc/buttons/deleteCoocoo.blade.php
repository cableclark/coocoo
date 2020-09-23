@if (auth()->user()->id == $coocoo->user_id )
<form class="ml-auto" action="/coocoos/" method="POST">
    @csrf
    @method('DELETE')
    <input type="hidden" name="coocoo_id" value={{$coocoo->id}}>
    <button type="submit" class="btn btn-link" value="{{$coocoo->id}}"> Delete</button>
</form>
@endif
