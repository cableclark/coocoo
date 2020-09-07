@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

                @foreach ($coocoos as $coocoo)

                    <div class="shadow card p-3 m-3">

                        <p><b>{{$coocoo->user->name}}</b></p>

                        <p>Published on {{$coocoo->created_at->format('M d, Y')}}

                        </p>

                        <p>{{$coocoo->coocoo}}</p>

                        <form action="/coocoos/{{$coocoo->id}}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger" value="{{$coocoo->id}}"> Delete</button>

                        </form>

                    </div>
                @endforeach

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
