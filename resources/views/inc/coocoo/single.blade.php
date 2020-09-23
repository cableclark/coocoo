<div class="p-5 rounded shadow">
        @include ('inc.coocoo.bare')
        <hr/>
        <div class="flex mt-5">
                @include('inc.buttons.like')
                @if (auth()->user()->id == $coocoo->user_id )
                    @include ('inc.buttons.deleteCoocoo')
                @else
                    @include('inc.buttons.unfollow')
                @endif
        </div>
</div>

