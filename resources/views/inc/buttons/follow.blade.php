@if(auth()->user() && !auth()->user()->followsAUser($user->id))
    <form action="/follow/" method="POST">
        @csrf
        <input type="hidden" name = "followed_id" value={{$user->id}}>
        <input type="hidden" name = "username" value={{$user->name}}>
        <button type="submit" class="btn btn-primary" > Follow</button>
    </form>
@endif
