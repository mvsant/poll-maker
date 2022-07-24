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
                @foreach($polls as $poll)
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-slate-300 drop-shadow-md hover:drop-shadow-xl my-5">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 dark:text-slate-700">{{$poll->poll_question}}</div>
                        <div class="mt-1">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox h-8 w-8">
                                <span class="ml-4 text-xl">Option 3</span>
                            </label>
                        </div>
                    </div>

                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    </div>
</x-app-layout>