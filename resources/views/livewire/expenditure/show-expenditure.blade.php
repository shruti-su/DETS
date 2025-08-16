<div class="min-h-screen p-6 bg-gray-300 dark:bg-slate-900 md:p-10 ">
    <!-- Enhanced header and search bar section -->
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200">Show All Expenses</h1>
        <input type="text" wire:model.live="search" placeholder="Search to load more data..."
            class="w-full p-2 border border-gray-300 rounded-lg shadow-sm md:w-1/3 dark:border-gray-600 focus:ring-indigo-200 dark:focus:ring-indigo-400 focus:border-indigo-400 dark:bg-gray-700 dark:text-gray-200" />
    </div>

    <div class="overflow-x-auto rounded-xl">
        <table class="min-w-full border-collapse rounded-xl">
            <thead class="text-white bg-indigo-600 dark:bg-indigo-800">
                <tr>
                    <th class="px-4 py-3 text-sm font-semibold text-left">User Name</th>
                    <th class="px-4 py-3 text-sm font-semibold text-left">Email</th>
                    <th class="px-4 py-3 text-sm font-semibold text-left">View Expences</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @forelse($User as $user)
                    <tr
                        class="transition-colors duration-200 odd:bg-white even:bg-gray-200 dark:odd:bg-gray-800 dark:even:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <td class="px-4 py-3 text-sm font-medium text-gray-900 dark:text-gray-100">
                            {{ $user->name }}
                        </td>
                        <td class="px-4 py-3 text-sm font-medium text-gray-900 dark:text-gray-100">
                            {{ $user->email }}
                        </td>
                        <td class="relative px-4 py-3 text-sm text-gray-500">
                            <a href="{{ route('expenditures.change_expenditure', $user->id) }}">
                                <button
                                    class="px-4 py-2 font-semibold text-white rounded-md bg-emerald-500 hover:bg-emerald-600 dark:bg-emerald-700"
                                    role="menuitem" tabindex="-1">
                                    <i class="mr-2 fas fa-edit"></i>View Expences
                                </button>
                            </a>
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
