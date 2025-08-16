<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Items') }}
        </h2> --}}
    </x-slot>
    @livewire('expenditure.change-expenditure', ['user' => $user ?? null])
</x-app-layout>
