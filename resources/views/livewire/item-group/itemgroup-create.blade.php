<div class="w-full max-w-lg p-6 mx-auto mt-24 font-serif bg-white shadow-lg rounded-xl dark:bg-gray-800">
    <h2 class="mb-6 text-3xl font-bold text-center text-gray-800 dark:text-gray-200">Create New Item Group</h2>


    <form wire:submit.prevent='save' class="space-y-4">
        <div>
            <label for="name" class="block text-sm font-bold text-gray-700 dark:text-gray-300">Item Group Name</label>
            <input type="text" id="name" wire:model.defer="name"
                class="block w-full px-4 py-2 mt-1 transition-colors duration-200 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 focus:border-indigo-500 focus:ring-indigo-500 dark:focus:border-indigo-400 dark:focus:ring-indigo-400">
            {{-- <!-- @error('name')
    <span class="text-sm text-red-500">{{ $message }}</span>
@enderror --> --}}
        </div>

        <div>
            <label for="description"
                class="block text-sm font-bold text-gray-700 dark:text-gray-300">Description</label>
            <textarea id="description" wire:model.defer="description" rows="4"
                class="block w-full px-4 py-2 mt-1 transition-colors duration-200 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 focus:border-indigo-500 focus:ring-indigo-500 dark:focus:border-indigo-400 dark:focus:ring-indigo-400"></textarea>
            {{-- <!-- @error('description')
    <span class="text-sm text-red-500">{{ $message }}</span>
@enderror --> --}}
        </div>

        <div class="flex justify-center pt-4">
            <button type="submit"
                class="w-full px-6 py-2 text-lg font-semibold text-white transition-all duration-300 transform bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 hover:scale-105">
                Save Item Group
            </button>
        </div>
    </form>
</div>
