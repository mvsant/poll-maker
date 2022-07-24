<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="relative flex flex-col items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500  border border-red-500 hover:border-yellow-500">Log in</a>
            <button class="teste">Teste</button>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <h1 class="text-gray-600 dark:text-gray-400 h1 text-2xl mt-6">Latest Polls:</h1>
        {{$polls}}
        <div class="inline-flex flex-wrap gap-3 justify-around w-11/12 mx-auto">
            @foreach($polls as $poll)
            <div class="rounded overflow-hidden shadow-lg bg-slate-300 drop-shadow-md hover:drop-shadow-xl my-5 min-w-[400px] sm:min-w-[300px] md:min-w-[350px] lg:min-w-[450px]">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 dark:text-slate-700">{{$poll->poll_question}}</div>
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
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$poll->user_id}}</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
            </div>
            @endforeach
            @for ($i = 0; $i < 10; $i++) <div class="max-w-sm rounded overflow-hidden shadow-lg bg-slate-300 drop-shadow-md hover:drop-shadow-xl my-5">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 dark:text-slate-700">Poll {{$i + 1}}</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
            </div>
            @endfor
        </div>
    </div>
</body>

</html>