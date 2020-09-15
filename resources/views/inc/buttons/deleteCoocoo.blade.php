<form class="ml-auto" action="/coocoos/" method="POST">
    @csrf
    @method('DELETE')
    <input type="hidden" name="coocoo_id" value={{$coocoo->id}}>
    <button type="submit" class="btn btn-link" style="color:red" value="{{$coocoo->id}}"> Delete</button>
</form>
