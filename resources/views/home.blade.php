<x-app-layout>

    <div class="mt-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-600 text-center font-bold">
                    <h2 class="font-semibold text-xl text-gray-100 leading-tight">All Polls: Please vote!!!</h2>
                </div>
                <div class="inline-flex flex-wrap gap-3 justify-around w-11/12 mx-auto">
                    @foreach($polls as $poll)
                    <x-card :x-data="$poll" :x-alternatives="[]" />
                    @endforeach
                </div>
                {{ $polls->links() }}
            </div>
        </div>
    </div>
</x-app-layout>