<div class="min-h-screen p-6 bg-gray-300 md:p-10 dark:bg-slate-900">
    <!-- Enhanced header and search bar section -->
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200">Item List</h1>
        <input type="text" wire:model.live="search" placeholder="Search items..."
            class="w-full p-2 border border-gray-300 rounded-lg shadow-sm md:w-1/3 dark:border-gray-600 focus:ring-indigo-200 dark:focus:ring-indigo-400 focus:border-indigo-400 dark:bg-gray-700 dark:text-gray-200" />
    </div>

    <div class="overflow-x-auto rounded-xl">
        <table class="min-w-full border-collapse rounded-xl">
            <thead class="text-white bg-indigo-600 dark:bg-indigo-800">
                <tr>
                    <th class="px-4 py-3 text-sm font-semibold text-left">Name</th>
                    <th class="px-4 py-3 text-sm font-semibold text-left">Description</th>
                    <th class="px-4 py-3 text-sm font-semibold text-left">Item Group</th>
                    <th class="px-4 py-3 text-sm font-semibold text-left">Created</th>
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
                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">
                            {{ $item->item_group_name ?? '—' }}
                        </td>
                        <td class="px-4 py-3 text-sm text-gray-500 dark:text-gray-400">
                            {{ $item->created_at->format('Y-m-d') }}
                        </td>
                        <td class="px-4 py-3 text-sm text-gray-500">
                            <!-- Three-dot dropdown menu -->
                            <div class="relative inline-block text-left">
                                <button onclick="toggleDropdown(this)"
                                    class="inline-flex justify-center w-full p-2 text-sm font-medium text-gray-700 rounded-md shadow-sm dark:bg-gray-800 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <svg class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.5 13a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0z"
                                            fill="currentColor" />
                                    </svg>
                                </button>
                                <div class="absolute right-0 z-10 hidden w-40 mt-2 origin-top-right bg-white rounded-md shadow-lg dark:bg-gray-800 ring-1 ring-black ring-opacity-5"
                                    role="menu">
                                    <div class="py-1">
                                        <button
                                            class="block w-full px-4 py-2 text-sm text-left text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <i class="mr-2 fas fa-edit"></i>Edit
                                        </button>
                                        <button wire:click="deleteItem('{{ $item->id }}')"
                                            class="block w-full px-4 py-2 text-sm text-left text-red-500 hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <i class="mr-2 fas fa-trash-alt"></i>Delete
                                        </button>
                                    </div>
                                </div>
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

<script>
    // Toggle dropdown menu
    function toggleDropdown(button) {
        const dropdown = button.nextElementSibling;
        // Close all other dropdowns
        document.querySelectorAll('[role="menu"]').forEach(menu => {
            if (menu !== dropdown) menu.classList.add('hidden');
        });
        // Toggle current dropdown
        dropdown.classList.toggle('hidden');
    }

    // Close dropdown if clicking outside
    document.addEventListener('click', function(event) {
        const isClickInside = event.target.closest('[role="menu"]') || event.target.closest(
            'button[onclick="toggleDropdown(this)"]');
        if (!isClickInside) {
            document.querySelectorAll('[role="menu"]').forEach(menu => menu.classList.add('hidden'));
        }
    });
</script>
