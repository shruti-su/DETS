<div class="flex items-center justify-center min-h-screen p-6 bg-gray-100 dark:bg-gray-900">
  <div class="w-full max-w-lg p-8 bg-white shadow-md rounded-xl dark:bg-gray-800">
    <!-- Heading -->
    <h2 class="mb-6 text-2xl font-bold text-gray-800 dark:text-gray-100">
      Create New Item
    </h2>

    <!-- Form -->
    <form class="space-y-5">
      <!-- Name -->
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
          Item Name
        </label>
        <input
          type="text"
          id="name"
          name="name"
          placeholder="Enter item name"
          class="block w-full mt-1 border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100"
          required
        >
      </div>

      <!-- Description -->
      <div>
        <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
          Description
        </label>
        <textarea
          id="description"
          name="description"
          rows="3"
          placeholder="Enter description (optional)"
          class="block w-full mt-1 border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100"
        ></textarea>
      </div>

      <!-- Item Group -->
      <div>
        <label for="item_group_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
          Item Group
        </label>
        <select
          id="item_group_id"
          name="item_group_id"
          class="block w-full mt-1 bg-white border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
        >
          <option value="">Select a group</option>
          <option value="1">Electronics</option>
          <option value="2">Furniture</option>
          <option value="3">Stationery</option>
        </select>
      </div>

      <!-- Submit Button -->
      <div>
        <button
          type="submit"
          class="flex justify-center w-full px-4 py-2 font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500"
        >
          Create Item
        </button>
      </div>
    </form>
  </div>
</div>
