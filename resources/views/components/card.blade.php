<div>
  <!-- 
  Iterable with pools table
 -->

  <div class="rounded overflow-hidden shadow-lg bg-slate-300 drop-shadow-md hover:drop-shadow-xl my-5 min-w-[400px] sm:min-w-[300px] md:min-w-[350px] lg:min-w-[450px]">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2 dark:text-slate-700">{{$xData->poll_question}}</div>
      <div class="mt-1">
        <label class="inline-flex items-center">
          <input type="checkbox" class="form-checkbox h-8 w-8">
          <span class="ml-4 text-xl">Option 3</span>
        </label>
      </div>
      <div class="form-check flex">
        <label class="form-check-label inline-block text-gray-800 mt-1 cursor-pointer" for="flexRadioDefault1">
          Default radio
        </label>
        <input class="form-check-input appearance-none rounded-full border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-right ml-2 cursor-pointer h-6 w-6" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
      </div>
    </div>

    <div class="px-6 pt-4 pb-2">
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$xData->user_id}}</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
    </div>
  </div>
</div>