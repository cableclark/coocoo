<div>
    <x-error-message />
    @include('inc.sessionStatus')
    <div class="card bg-gray-100 p-5 rounded shadow">
        <form wire:submit.prevent="save">
            <label for="Coocoo" class="text-gray-600 font-light mb-3 block"> Write a new coocooo...</label>
            <textarea
                wire:model.debounce="coocoo"
                wire:keydown.enter ="save"
                class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"" rows="3"
                name="coocoo"
             ></textarea>
            <button class="mt-2 text-xl g-transparent hover:bg-teal-500 text-teal-500 font-semibold hover:text-white py-3 px-4 border border-teal-500 hover:border-transparent rounded" type="submit">Save</button>
        </form>
    </div>
    @forelse ($this->latestCoocoos as $coocoo)
        @include('inc.coocoo.format')
        @empty
        <div>No coocos for you yet...</div>
    @endforelse
</div>
