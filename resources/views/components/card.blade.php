@vite(['resources/js/voteButtonHandler.js'])

<!-- 
  Iterable with pools table
 -->

<div class="max-w-sm md:max-w-md lg:w-[35%] bg-gray-100 rounded-lg border border-gray-200 drop-shadow-md hover:drop-shadow-xl sm:p-4 lg:p-6 dark:bg-gray-800 dark:border-gray-700 my-4">
  <form action="{{ route('polls.vote', $xData->id) }}" action="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @method('PUT')
    <a href="{{url('polls/'.$xData->id)}}">
      <h5 class="px-4 py-1 m-2 text-xl font-medium text-gray-900 hover:text-gray-700 dark:text-white dark:hover:text-gray-200 break-words whitespace-normal">{{$xData->poll_question}}</h5>
    </a>
    <hr class="p-4 m-2">

    @if(Request::is('polls/*'))
    @foreach($xAlternatives as $item)
    <div class="rounded border border-gray-200 dark:border-gray-700 hover:border-cyan-600">
      <input id="{{$item->id}}" type="radio" value="{{$item->id}}" name="vote" class="peer hidden">
      <label for="{{$item->id}}" class="block p-4 pl-2 text-sm sm:text-lg font-medium text-gray-900 dark:text-gray-300 whitespace-normal break-words peer-checked:bg-cyan-600 cursor-pointer transition duration-150 ease-in-out">{{$item->alternative}}</label>
      <div class="text-gray-100 p-2 bg-gray-900">{{$item->votes}} votes</div>
    </div>
    @endforeach

    <div class="flex justify-center">
      <button type="submit" id="submitButton" class="w-[60%] text-white text-xl bg-cyan-800 disabled:bg-gray-700 hover:bg-cyan-600 disabled:hover:bg-gray-600 active:bg-cyan-900 disabled:active:bg-gray-900 focus:border-cyan-900 disabled:focus:border-gray-900 focus:ring ring-cyan-300 disabled:ring-gray-300 rounded-lg px-5 py-2.5 text-center font-bold transition ease-in-out duration-150 uppercase tracking-widest">Vote!</button>
    </div>
    @endif
    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
      <p class="p-2">Poll closes at {{date('d/m/Y - H:i', strtotime($xData->end_date))}}h </p>
    </div>
  </form>
</div>