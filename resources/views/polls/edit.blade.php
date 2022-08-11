@vite(['resources/js/pollCreation.js'])
<x-app-layout>
    
    <div class="mb-16 my-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-4 border-b border-gray-200 dark:text-white dark:border-gray-600">
                    <h2 class="font-semibold text-xl text-center text-gray-100 leading-tight">Edit your Poll</h2>
                    <p class="font-semibold text-xl text-center text-gray-100 leading-tight"><strong>Note:</strong>Note</p>
                </div>

                <div class="inline-flex flex-wrap gap-5 justify-around w-11/12 mx-auto my-10">
                    <form action="{{ route('polls.update', $poll->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="relative z-0 mb-6 group w-[40vw]">
                            <input type="text" name="poll_question" id="poll_question" value="{{$poll->poll_question}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="poll_question" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">The question is:</label>
                        </div>

                        <div class="flex flex-col lg:flex-row  gap-4 justify-between">
                            <div>
                                <label for="start_date" class="inline-flex items-center px-4 py-2 mr-2 mb-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Start Date:</label>
                                <input type="date" id="start_date" disabled value="{{date('Y-m-d',strtotime($poll->start_date))}}" class="px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">

                            </div>
                            <div>
                                <label for="end_date" class="inline-flex items-center px-4 py-2 mr-2 mb-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">End Date:</label>
                                <input type="date" id="end_date" value="{{date('Y-m-d',strtotime($poll->end_date))}}" name="end_date" value="{{$poll->end_date}}" class=" py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">

                            </div>
                        </div>
                        <br>
                        <p class="dark:text-white mb-5">Please insert at least 3 alternatives</p>
                        <div id="alternativesList">
                            @foreach($alternatives as $alternative)
                            <div class="relative z-0 mb-6 group w-[40vw]">
                                <input type="text" name="alternative[]" value="{{$alternative->alternative}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="alternative[]" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alternative {{ $loop->index + 1 }}</label>
                            </div>
                            @endforeach
                        </div>
                        <div class="flex flex-row-reverse justify-between">
                            <button id="addAlternativeBtn" class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">+1</button>
                            <button id="removeAlternativeBtn" class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">-1</button>
                        </div>
                        <br>
                        <div class="flex items-center mx-auto content-center">
                            <button type="submit" id="submitButton" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-[80%] mx-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>