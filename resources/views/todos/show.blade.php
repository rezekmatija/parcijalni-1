<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $todo->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mb-6">
                        <p class="text-gray-700 font-bold mb-2">Created At:</p>
                        <p class="text-gray-600">{{ $todo->created_at }}</p>
                    </div>

                    <div class="mb-6">
                        <p class="text-gray-700 font-bold mb-2">Updated At:</p>
                        <p class="text-gray-600">{{ $todo->updated_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>