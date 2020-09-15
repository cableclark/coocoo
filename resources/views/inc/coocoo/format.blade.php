<div class="card p-3 rounded shadow">
    <div class= "p-3">
        @include ('inc.coocoo.bare')
        <hr/>
        <div class="d-flex">
            @auth
                @include('inc.buttons.like')
                @include('inc.buttons.comment')
                @if (auth()->user()->id == $coocoo->user_id )
                    @include ('inc.buttons.deleteCoocoo')
                @else
                    @include('inc.buttons.unfollow')
                @endif
            @endauth
        </div>
    </div>
</div>

