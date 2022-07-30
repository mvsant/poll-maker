<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg dark:text-white">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-600">
                    <h2>Hello {{ Auth::user()->name }}!</h2>
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="mb-16">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex items-baseline gap-10 pl-14 py-4 border-b border-gray-200 dark:text-white dark:border-gray-600">
                    <h2 class="font-semibold text-xl text-gray-100 leading-tight">Your Polls:</h2>
                    <a href="{{ route('polls.create') }}" class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">New Poll</a>
                </div>
                <!-- {{$polls}} -->
                <div class="inline-flex flex-wrap gap-3 justify-around w-11/12 mx-auto">
                    @foreach($polls as $poll)
                    <x-card :x-data="$poll" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>