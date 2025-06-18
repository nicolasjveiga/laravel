<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __($user->name) }}
        </h2>
    </x-slot>
</x-app-layout>
