<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="overflow-hidden sm:rounded-lg">
            @livewire('catalogo')
            </div>
        </div>
    </div>
</x-app-layout>
