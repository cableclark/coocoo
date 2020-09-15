<div class="card p-3 rounded shadow">
    <div class= "p-3">
        @include ('inc.coocoo.bare')
        <hr/>
        <div class="d-flex">

                @include('inc.buttons.like')

                @if (auth()->user()->id == $coocoo->user_id )
                    @include ('inc.buttons.deleteCoocoo')
                @else
                    @include('inc.buttons.unfollow')
                @endif
        </div>
    </div>
</div>

