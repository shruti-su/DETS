<div class="p-6 md:p-10">
    <!-- Enhanced header and search bar section -->
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200">Item List</h1>
        <input type="text" wire:model.live="search" placeholder="Search to load more data..."
            class="w-full p-2 border border-gray-300 rounded-lg shadow-sm md:w-1/3 dark:border-gray-600 focus:ring-indigo-200 dark:focus:ring-indigo-400 focus:border-indigo-400 dark:bg-gray-700 dark:text-gray-200" />
    </div>

    <div class="overflow-x-auto rounded-xl">
        <table class="min-w-full border-collapse rounded-xl">
            <thead class="text-white bg-indigo-600 dark:bg-indigo-800">
                <tr>
                    <th class="px-4 py-3 text-sm font-semibold text-left">Name</th>
                    <th class="px-4 py-3 text-sm font-semibold text-left">Description</th>
                    <th class="px-4 py-3 text-sm font-semibold text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @forelse($items as $item)
                    <tr
                        class="transition-colors duration-200 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700">
                        <td class="px-4 py-3 text-sm font-medium text-gray-900 dark:text-gray-100">
                            {{ $item->Name }}
                        </td>
                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">
                            {{ $item->Description ?? '—' }}
                        </td>

                        <td class="px-4 py-3 text-sm text-gray-500">

                            <div class="relative inline-block text-left">
                                @if ($item->item_group_id)
                                    <button wire:click="removefromGroup('{{ $item->id }}')"
                                        class="inline-flex justify-center w-full p-2 text-lg font-bold text-white bg-red-500 rounded-md shadow-sm dark:bg-red-500 dark:text-gray-300 dark:hover:bg-gray-700 focus:outline-none ">
                                        <svg class="w-6 h-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 12a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                @else
                                    <button wire:click="addtoGroup('{{ $item->id }}')"
                                        class="inline-flex justify-center w-full p-2 text-lg font-bold text-white bg-green-500 rounded-md shadow-sm dark:bg-green-500 dark:text-gray-300 dark:hover:bg-gray-700 focus:outline-none ">
                                        <svg class="w-6 h-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 9V4H9v5H4v2h5v5h2v-5h5V9z" fill="currentColor" />
                                        </svg>
                                    </button>
                                @endif

                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-4 text-center text-gray-500">No items found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
