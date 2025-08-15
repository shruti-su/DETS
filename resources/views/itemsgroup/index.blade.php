<x-app-layout>
    <x-slot name="header">
        <h2 class="flex justify-between text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            <span>
                Items Group List
            </span>
            <span>
                <a href="{{ route('itemgroups.create') }}"><x-primary-button>Add Item Group</x-primary-button></a>
            </span>
        </h2>
    </x-slot>
    @livewire('item-group.itemgroup-list')
</x-app-layout>
