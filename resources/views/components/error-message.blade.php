@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
    role="alert">
            @foreach ($errors->all() as $error)
                <strong class="font-bold">Holy smokes!</strong>
                <span class="block sm:inline">{{ $error }}</span>
            @endforeach
    </div>
@endif




