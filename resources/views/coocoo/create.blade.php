@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action = "/coocoos/store" method="POST">
                @csrf
                <div class="form-group">
                    <label for="Coocoo">Coocooo</label>
                    <textarea class="form-control" rows="3" name="coocoo"></textarea>
                </div>
                  <button class="btn btn-primary" type="submit">Save</button>
            </form>

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
            </div>
        </div>
    </div>
</div>
@endsection
