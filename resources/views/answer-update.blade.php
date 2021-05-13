<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Answer > Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ Form::open(array('route' => array('answers.update', $answer->id), 'method' => 'PUT')) }}
                        @csrf

                        <div>
                            <x-label for="question_id" :value="__('Question')" />

                            <div class="relative inline-block w-full text-gray-700">
                                <select id="question_id" value="{{ $answer->question_id }}" name="question_id" :value="old('question_id')" class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" placeholder="Select a question" required autofocus>
                                    @foreach ($questions as $question)
                                        <option
                                            {{ $question->id === $answer->question_id ? 'selected' : '' }}
                                            value="{{ $question->id }}"
                                        >
                                            {{ $question->text }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mt-2">
                            <x-label for="response" :value="__('Answer')" />

                            <textarea name="response" value="{{ $answer->response }}" class="w-full h-16 px-3 py-2 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" required>{{ $answer->response }}</textarea>
                        </div>

                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" />

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
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
