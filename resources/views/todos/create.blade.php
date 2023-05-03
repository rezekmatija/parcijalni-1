<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <form action="{{ route('todos.store') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                            <input type="text" name="title" id="title" class="border-2 border-gray-300 p-2 w-full" required>
                            @error('title')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Create Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>