<div class="rounded min-w-full overflow-hidden shadow mt-3 mb-3">
    <div class= "p-5">
        @include ('inc.coocoo.bare')
        <hr/>
        <div class="flex mt-5">
            @auth
                @include('inc.buttons.like')
                @include('inc.buttons.comment')
                @include ('inc.buttons.deleteCoocoo')
            @endauth
        </div>
    </div>
</div>

