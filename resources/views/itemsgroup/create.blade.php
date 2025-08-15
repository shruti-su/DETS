<x-app-layout>
    <x-slot name="header">
        <h2 class="flex justify-between text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            <span>
                Create Item Group
            </span>
            <span>
                <a href="{{ route('itemgroups.index') }}"><x-primary-button>Go to List</x-primary-button></a>
            </span>
        </h2>
    </x-slot>
    @livewire('item-group.itemgroup-create')
</x-app-layout>
