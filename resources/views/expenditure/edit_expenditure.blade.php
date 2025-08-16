<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="flex justify-between text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">

        </h2> --}}
    </x-slot>
    @livewire('expenditure.edit-expenditure', ['expenditure' => $expenditure ?? null])
</x-app-layout>
