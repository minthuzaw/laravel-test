<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($tasks as $task)
                    <div class="p-4 text-gray-900 dark:text-gray-100">
                        {{ $task->name }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
