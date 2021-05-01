<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Question > Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="">
                        @csrf

                        <div>
                            <x-label for="question" :value="__('Question')" />

                            <div class="relative inline-block w-full text-gray-700">
                                <select id="question" name="question" :value="old('question')" class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" placeholder="Select a question" required autofocus>
                                    <option>A regular sized select input</option>
                                    <option>Another option</option>
                                    <option>And one more</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-2">
                            <x-label for="answer" :value="__('Answer')" />

                            <textarea name="answer" class="w-full h-16 px-3 py-2 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" required></textarea>
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ url()->previous() }}">
                                <button type="button" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-3">
                                    {{ __('Cancel') }}
                                </button>
                            </a>

                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-3">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
