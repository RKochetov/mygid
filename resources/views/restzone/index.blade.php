<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-my-green">
@foreach($rest_zones as $rest_zone)
    <div
        class="m-3 flex flex-col bg-white border border-gray-500 shadow md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover object-center md:w-54 md:h-40 md:m-2 md:rounded-none"
             src="/storage/Belarus_1.jpg" alt="">
        <div class="flex flex-col justify-between pl-4 leading-normal">
            <h5 class="pt-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $rest_zone->name }}
            </h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{ $rest_zone->country }},
                {{ $rest_zone->region }},
                {{ $rest_zone->city }},
                {{ $rest_zone->street }},
                {{ $rest_zone->building }}
            </p>
            <p>
                {{ $rest_zone->description }}
            </p>
            <div>
                <a href="{{ route('rest_zone.show', $rest_zone->id) }}" class="inline-block focus:outline-none text-white bg-my-oran-l hover:bg-my-oran-d focus:ring-4 focus:ring-green-300 font-medium text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Подробнее...
                </a>
            </div>
        </div>
    </div>
@endforeach

</body>
</html>
