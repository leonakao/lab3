<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subject > Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ Form::open(array('route' => array('questions.update', $question->id), 'method' => 'PUT')) }}
                        @csrf

                        <div>
                            <x-label for="text" :value="__('Question')" />
                            <x-input id="text" class="block mt-1 w-full" type="text" name="text" :value="$question->text" required autofocus />
                        </div>

                        <div class="mt-2">
                            <x-label for="subject" :value="__('Subject')" />

                            <div class="relative inline-block w-full text-gray-700">
                                <select name="subject_id" :value="old('subject_id')" class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" placeholder="Select subject" required>
                                    @foreach ($subjects as $subject)
                                        <option
                                            :selected="$subject->id === $question->subject_id"
                                            value="{{ $subject->id }}"
                                        >
                                            {{ $subject->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
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
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
