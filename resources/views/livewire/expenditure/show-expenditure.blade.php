<div class="p-6 md:p-10">
    <!-- Enhanced header and search bar section -->
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200">Show All Expence</h1>
        <input type="text" wire:model.live="search" placeholder="Search to load more data..."
            class="w-full p-2 border border-gray-300 rounded-lg shadow-sm md:w-1/3 dark:border-gray-600 focus:ring-indigo-200 dark:focus:ring-indigo-400 focus:border-indigo-400 dark:bg-gray-700 dark:text-gray-200" />
    </div>

    <div class="overflow-x-auto rounded-xl">
        <table class="min-w-full border-collapse rounded-xl">
            <thead class="text-white bg-indigo-600 dark:bg-indigo-800">
                <tr>
                    <th class="px-4 py-3 text-sm font-semibold text-left">User Name</th>
                    <th class="px-4 py-3 text-sm font-semibold text-left">No of Expences</th>
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
                        <td class="flex px-4 py-3 text-sm text-gray-500 dark:text-gray-300">
                            <svg class="w-4 h-4" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 5v2h4c1.704 0 3.94 1.038 4.72 3H8v2h8.97c-.31 2.61-2.996 4-4.97 4H8v2.47L18.25 27h3.125l-10.813-9H12c3.234 0 6.674-2.39 6.97-6H24v-2h-5.188C18.51 8.816 17.86 7.804 17 7h7V5H8z"
                                    fill="currentColor" />
                            </svg>
                            {{ $item->expenditure_amount ?? '00.00' }}
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
