<form  class="ml-auto" action="/follow/{{$coocoo->user_id}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="hidden" name = "username" value={{$coocoo->user->name}}>
    <button type="submit" class="btn btn-link"> Unollow</button>
</form>
