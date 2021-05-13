<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Answers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex w-100 justify-right">
                    <h1 class="text-5xl">{{ $answer->question->text }}</h1>
                </div>

                <div class="flex items-center justify-start mt-4">
                    <h1 class="text-xl">{{ $answer->response }}</h1>
                </div>

                <div class="flex w-100 items-center justify-end mt-4">
                    <a href="{{ route('answers.index') }}">
                        <button class="h-10 px-5 m-2 text-blue-100 transition-colors duration-150 bg-blue-600 rounded-lg focus:shadow-outline hover:bg-blue-700">Voltar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
