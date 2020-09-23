@if (session('status'))
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 my-3 rounded" role="alert">
    <strong class="font-bold">Holy smokes!</strong>
    <span class="block sm:inline">{{ session('status') }}.</span>
  </div>
@endif
