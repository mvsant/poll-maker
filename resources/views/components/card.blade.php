<!-- 
  Iterable with pools table
 -->

<div class="p-4 max-w-sm md:max-w-md bg-white rounded-lg border border-gray-200 drop-shadow-md hover:drop-shadow-xl sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700 my-4">
  <form class="space-y-6" action="#">
    <h5 class="text-xl font-medium text-gray-900 dark:text-white  break-words whitespace-normal">{{$xData->poll_question}} a aaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa lorem ipsum dolor sit amet</h5>
    <hr>

    <div class="flex items-center pl-4 rounded border border-gray-200 dark:border-gray-700 hover:border-orange-600">
      <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      <label for="bordered-radio-1" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300 whitespace-normal break-words">Default radio aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaa lorem ipsum dolor sit amet</label>
    </div>
    <div class="flex items-center pl-4 rounded border border-gray-200 dark:border-gray-700">
      <input checked="" id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      <label for="bordered-radio-2" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Checked state</label>
    </div>

    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-xl font-bold">Vote!</button>
    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
      Not registered? <a href="{{ route('register') }}" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
    </div>
  </form>
</div>