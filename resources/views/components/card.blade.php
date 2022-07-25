<div>
  <!-- 
  Iterable with pools table
 -->

  <div class="rounded overflow-x-scroll shadow-lg bg-slate-300 drop-shadow-md hover:drop-shadow-xl my-5 sm:min-w-[300px] md:min-w-[350px] lg:min-w-[450px]">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2 dark:text-slate-700">{{$xData->poll_question}}</div>
      <div class="form-check flex align-baseline ">
        <label class="form-check-label inline-block text-gray-800 mb-2 pr-2 cursor-pointer text-xl" for="flexRadioDefault1">
          Default radio
        </label>
        <input class="form-check-input appearance-none rounded-full border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-right ml-2 cursor-pointer h-6 w-6" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
      </div>
      <div class="form-check flex align-baseline">
        <label class="form-check-label inline-block text-gray-800 pb-2 pr-2 cursor-pointer text-xl" for="flexRadioDefault1">
          Default radio and other things
        </label>
        <input class="form-check-input appearance-none rounded-full border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-right ml-2 cursor-pointer h-6 w-6" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
      </div>
      <div class="flex items-center mb-4">
        <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 ">Default radio</label>
        <input id="default-radio-1" type="radio" value="" name="default-radio" class=" text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 h-6 w-6">
      </div>
      <div class="flex items-center">
        <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked state</label>
      </div>
    </div>
    <div class="px-6 pt-4 pb-2">
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$xData->user_id}}</span>
      @if(isset(Auth::user()->id) && $xData->user_id === Auth::user()->id)
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Edit Poll</span>
      <x-button class="bg-red-300 hover:bg-red-500">Teste</x-button>
      @endif
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
    </div>
  </div>
</div>