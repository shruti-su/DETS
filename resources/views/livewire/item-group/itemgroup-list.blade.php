 <div class="p-6 md:p-10">
     <!-- Enhanced header with search bar -->
     <div class="flex flex-col items-center justify-between mb-6 space-y-4 md:flex-row md:space-y-0">
         <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200">Item Groups</h1>
         <input type="text" wire:model.live="search" placeholder="Search item groups..."
             class="w-full p-2 border border-gray-300 rounded-lg shadow-sm md:w-1/3 dark:border-gray-600 focus:ring-indigo-200 dark:focus:ring-indigo-400 focus:border-indigo-400 dark:bg-gray-700 dark:text-gray-200" />
     </div>

     <div class="overflow-x-auto rounded-xl">
         <table class="min-w-full border-collapse rounded-xl">
             <thead class="text-white bg-indigo-600 dark:bg-indigo-800">
                 <tr>
                     <th class="px-4 py-3 text-sm font-semibold text-left">Name</th>
                     <th class="px-4 py-3 text-sm font-semibold text-left">Description</th>
                     <th class="px-4 py-3 text-sm font-semibold text-left">Total no of Items</th>
                     <th class="px-4 py-3 text-sm font-semibold text-left">Created</th>
                     <th class="px-4 py-3 text-sm font-semibold text-left">Actions</th>
                 </tr>
             </thead>
             <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                 {{-- The dynamic data loop, adjusted for your variable names --}}
                 @forelse($item-group as $itemgroup)
                     <tr
                         class="transition-colors duration-200 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700">
                         <td class="px-4 py-3 text-sm font-medium text-gray-900 dark:text-gray-100">
                             {{ $itemgroup->Name }}
                         </td>
                         <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">
                             {{ $itemgroup->Description ?? '—' }}
                         </td>
                         <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">
                             {{-- Assuming item_group has a count of items. This needs to be calculated in your backend --}}
                             {{ $itemgroup->items_count ?? 0 }}
                         </td>
                         <td class="px-4 py-3 text-sm text-gray-500 dark:text-gray-400">
                             {{ $itemgroup->created_at->format('Y-m-d') }}
                         </td>
                         <td class="relative px-4 py-3 text-sm text-gray-500">
                             <!-- Three-dot dropdown menu -->
                             <div class="relative inline-block text-left">
                                 <button onclick="toggleDropdown('dropdown-{{ $itemgroup->id }}')"
                                     class="inline-flex justify-center w-full px-2 py-1 text-sm font-medium text-gray-700 bg-white rounded-md shadow-sm dark:bg-gray-800 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                     <i class="fas fa-ellipsis-v"></i>
                                 </button>
                                 <div id="dropdown-{{ $itemgroup->id }}"
                                     class="absolute right-0 z-10 hidden w-40 mt-1 origin-top-right bg-white rounded-md shadow-lg top-full dark:bg-gray-800 ring-1 ring-black ring-opacity-5 focus:outline-none"
                                     role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
                                     tabindex="-1">
                                     <div class="py-1" role="none">
                                         <button
                                             class="block w-full px-4 py-2 text-sm text-left text-green-500 hover:bg-gray-100 dark:hover:bg-gray-700"
                                             role="menuitem" tabindex="-1">
                                             <i class="mr-2 fas fa-plus-circle"></i>Add Item
                                         </button>
                                         <button
                                             class="block w-full px-4 py-2 text-sm text-left text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700"
                                             role="menuitem" tabindex="-1">
                                             <i class="mr-2 fas fa-edit"></i>Edit
                                         </button>
                                         <button
                                             class="block w-full px-4 py-2 text-sm text-left text-red-500 hover:bg-gray-100 dark:hover:bg-gray-700"
                                             role="menuitem" tabindex="-1">
                                             <i class="mr-2 fas fa-trash-alt"></i>Delete
                                         </button>
                                     </div>
                                 </div>
                             </div>
                         </td>
                     </tr>
                 @empty
                     <tr>
                         <td colspan="5" class="px-4 py-4 text-center text-gray-500">No item groups found.</td>
                     </tr>
                 @endforelse
             </tbody>
         </table>
     </div>
 </div>
 <script>
     // This function toggles the dropdown menu based on its ID
     function toggleDropdown(dropdownId) {
         const dropdown = document.getElementById(dropdownId);
         if (dropdown) {
             // Close any other open dropdowns
             document.querySelectorAll('[role="menu"]').forEach(menu => {
                 if (menu.id !== dropdownId) {
                     menu.classList.add('hidden');
                 }
             });
             // Toggle the clicked dropdown
             dropdown.classList.toggle('hidden');
         }
     }
     // Hide dropdowns when clicking outside
     window.onclick = function(event) {
         const isClickInside = event.target.closest('[role="menu"]') || event.target.closest('button');
         if (!isClickInside) {
             document.querySelectorAll('[role="menu"]').forEach(dropdown => {
                 dropdown.classList.add('hidden');
             });
         }
     }
 </script>
