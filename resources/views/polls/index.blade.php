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
                <div class="p-2 border-b border-gray-200 dark:text-white dark:border-gray-600">
                    <h2 class="pl-4 font-semibold text-xl text-gray-100 leading-tight">Your Polls:</h2>
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