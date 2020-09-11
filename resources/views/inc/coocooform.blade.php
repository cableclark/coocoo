<div class="mb-4 ">
    @error('coocooo')
    <div class="alert alert-danger mt-2">
        {{ $message }}
    </div>
    @enderror
    @if (session('status'))
    <div class="alert alert-success mt-2">
        {{ session('status') }}
    </div>
    @endif
    <form action = "/coocoos/store" method="POST">
        @csrf
        <div class="form-group">
            <label for="Coocoo"> Write a new coocooo...</label>
            <textarea class="form-control" rows="3" name="coocoo"></textarea>
        </div>
          <button class="btn btn-primary" type="submit">Save</button>
    </form>

</div>

