<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-yellow-600 leading-tight">
            {{ __('Pool-maker') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Hello {{ Auth::user()->name }}!</h2>
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 bg-white border-b border-gray-200">
                    <h2>Your Polls:</h2>
                </div>
                {{$polls}}
                <div class="inline-flex flex-wrap gap-3 justify-around w-11/12 mx-auto">
                    @foreach($polls as $poll)
                    <x-card :x-data="$poll" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>