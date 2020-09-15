@if(auth()->user())
    <div class= "btn btn-link">
        <a href="/coocoos/{{$coocoo->id}}"> Comment </a>
    </div>
@endif
