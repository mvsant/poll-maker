<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg dark:text-white">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-600">
                    <h2>Vote many times you want!</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-16">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
                @if (isset(auth()->user()->id) && $poll->user_id === auth()->user()->id)
                <div class="flex items-baseline gap-10 pl-14 py-4 border-b border-gray-200 dark:text-white dark:border-gray-600">
                    <h2 class="font-semibold text-xl text-gray-100 leading-tight">Your Polls:</h2>
                    <a href="{{ route('polls.create') }}" class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">New Poll</a>
                    <a href="{{ route('polls.edit', $poll) }}" class="inline-flex items-center px-4 py-2 bg-cyan-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-cyan-600 active:bg-cyan-900 focus:outline-none focus:border-cyan-900 focus:ring ring-cyan-300 disabled:opacity-25 transition ease-in-out duration-150">Edit this Poll</a>
                    <form action="{{ route('polls.destroy',$poll->id) }}" method="Post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">Delete this poll</button>
                    </form>
                </div>
                @endif
                <div class="inline-flex flex-wrap gap-3 justify-around w-11/12 mx-auto">
                    <x-card :x-data="$poll" :x-alternatives="$alternatives" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>