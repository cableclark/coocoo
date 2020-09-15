<form action = "/comments/store" method="POST">
    @csrf
    <div class="form-group mt-3">
        <label for="Coocoo"> Write a new reply...</label>
        <textarea class="form-control" rows="3" name="comment"></textarea>
    <input type="hidden" name="coocoo" value= "{{$coocoo->id}}">
    </div>
      <button class="btn btn-primary" type="submit">Comment</button>
</form>
