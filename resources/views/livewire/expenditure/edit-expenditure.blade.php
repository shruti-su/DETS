<div class="min-h-screen p-6 bg-gray-300 md:p-10 dark:bg-slate-900">
    <div class="w-full max-w-lg p-6 mx-auto mt-24 font-serif bg-white shadow-lg rounded-xl dark:bg-gray-800">
        <h2 class="mb-6 text-3xl font-bold text-center text-gray-800 dark:text-gray-200"> Edit Amount</h2>


        <form wire:submit.prevent='save' class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-bold text-gray-700 dark:text-gray-300">Enter New
                    Amount</label>
                <input type="text" id="name" value="{{ $amount }}" wire:model.defer="amount"
                    class="block w-full px-4 py-2 mt-1 transition-colors duration-200 ease-in-out border border-gray-300 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 focus:border-indigo-500 focus:ring-indigo-500 dark:focus:border-indigo-400 dark:focus:ring-indigo-400">
                {{-- <!-- @error('name')
    <span class="text-sm text-red-500">{{ $message }}</span>
@enderror --> --}}
                <div class="flex justify-center pt-4">
                    <button type="submit"
                        class="w-full px-6 py-2 text-lg font-semibold text-white transition-all duration-300 transform bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 hover:scale-105">
                        Save Item
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
