<div class="card bg-gray-100 p-5 rounded shadow">
    <form action = "/comments/store" method="POST">
        @csrf
        <div class="form-group m-5">
            <label for="Coocoo" class="text-gray-600 font-light mb-3 block"> Write new...</label>
            <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"" rows="3" name="comment"></textarea>
            <input type="hidden" name="coocoo" value= "{{$coocoo->id}}">
        </div>
        <button class="mt-2 m-5 text-xl g-transparent hover:bg-teal-500 text-teal-500 font-semibold hover:text-white py-3 px-4 border border-teal-500 hover:border-transparent rounded" type="submit">Comment</button>
    </form>
</div>
