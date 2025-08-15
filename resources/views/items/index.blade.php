<x-app-layout>
    <x-slot name="header">
        <h2 class="flex justify-between text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            <span>
                Items List
            </span>
            <span>
                <a href="{{ route('items.create') }}"><x-primary-button>Add Item</x-primary-button></a> </span>
        </h2>
    </x-slot>
    @livewire('items.item-list')
</x-app-layout>
