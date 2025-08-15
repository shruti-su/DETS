<div class="p-6 md:p-10">
    <!-- Enhanced header and search bar section -->
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200">Add Expence</h1>
        <input type="text" wire:model.live="search" placeholder="Search to load more data..."
            class="w-full p-2 border border-gray-300 rounded-lg shadow-sm md:w-1/3 dark:border-gray-600 focus:ring-indigo-200 dark:focus:ring-indigo-400 focus:border-indigo-400 dark:bg-gray-700 dark:text-gray-200" />
    </div>

    <div class="overflow-x-auto rounded-xl">
        <table class="min-w-full border-collapse rounded-xl">
            <thead class="text-white bg-indigo-600 dark:bg-indigo-800">
                <tr>
                    <th class="px-4 py-3 text-sm font-semibold text-left">Name</th>
                    <th class="px-4 py-3 text-sm font-semibold text-left">Description</th>
                    <th class="px-4 py-3 text-sm font-semibold text-left">Amount</th>
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
                                <x-text-input type='number' placeholder='Enter the amount'
                                    wire:model.defer="amounts.{{ $item->id }}" />
                            </div>
                        </td>
                        <td class="relative px-4 py-3 text-sm text-gray-500">
                            <button wire:click="submitAmount('{{ $item->id }}')"
                                class="items-center block w-full px-4 py-2 text-lg font-bold text-white bg-green-500 rounded-lg dark:text-gray-300 hover:bg-green-600"
                                role="menuitem" tabindex="-1">
                                <i class="mr-2 fas fa-edit"></i>Submit
                            </button>
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
