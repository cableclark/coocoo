<div class="mb-4 ">

    @error('coocoo')
    <x-error-message type="danger" :message="$message" />
    @enderror

    @include('inc.sessionStatus')

    <form action = "/coocoos/store" method="POST">
        @csrf
        <div class="form-group">
            <label for="Coocoo"> Write a new coocooo...</label>
            <textarea class="form-control" rows="3" name="coocoo"></textarea>
        </div>
          <button class="btn btn-primary" type="submit">Save</button>
    </form>

</div>

