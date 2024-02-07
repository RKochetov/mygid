@extends('layouts.main')
@section('content')

    <a href="{{ route('rest_zone.index') }}"
       class="font-display mt-3 inline-block focus:outline-none text-white bg-my-oran-l hover:bg-my-oran-d font-medium text-sm px-5 py-2.5 me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
        Назад к списку
    </a>
    <div
        class="mt-3 bg-white justify-center border border-gray-500 shadow md:flex-row dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

        <h2 class="flex justify-center p-2 font-display text-2xl font-bold text-gray-900">{{ $rest_zone->name }}</h2>

        <div class="flex flex-row">
        <div id="default-carousel" class="relative w-full p-3 basis-2/3" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="/storage/image-4.jpg"
                         class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="/storage/image-4.jpg"
                         class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="/storage/image-4.jpg"
                         class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="/storage/image-4.jpg"
                         class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="/storage/image-4.jpg"
                         class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
            </button>
            <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
            </button>
        </div>
            <div>
                <p class="font-display text-lg uppercase text-my-oran-d font-medium pl-2 pt-2">Адрес:</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 px-2">
                    {{ $rest_zone->country }},<br>
                    {{ $rest_zone->region }},
                    {{ $rest_zone->city }},
                    {{ $rest_zone->street }},
                    {{ $rest_zone->building }}
                </p>
                <p class="font-display text-lg uppercase text-my-oran-d font-medium pl-2">Контакты:</p>
                <div class="flex flex-row items-center pl-2">
                    <a href="//{{ $rest_zone->facebook }}" class="pl-1">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                            <g fill="#da6a00" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M9.99805,3c-3.859,0 -6.99805,3.14195 -6.99805,7.00195v10c0,3.859 3.14195,6.99805 7.00195,6.99805h10c3.859,0 6.99805,-3.14195 6.99805,-7.00195v-10c0,-3.859 -3.14195,-6.99805 -7.00195,-6.99805zM22,7c0.552,0 1,0.448 1,1c0,0.552 -0.448,1 -1,1c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1zM15,9c3.309,0 6,2.691 6,6c0,3.309 -2.691,6 -6,6c-3.309,0 -6,-2.691 -6,-6c0,-3.309 2.691,-6 6,-6zM15,11c-2.20914,0 -4,1.79086 -4,4c0,2.20914 1.79086,4 4,4c2.20914,0 4,-1.79086 4,-4c0,-2.20914 -1.79086,-4 -4,-4z"></path></g></g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="px-3">
            <p class="font-display text-lg uppercase text-my-oran-d font-medium">Обшая информация:</p>
            <div class="ml-3 mb-3">
                <?php
                echo($rest_zone->description) ?>
            </div>
            <p class="font-display text-lg uppercase text-my-oran-d font-medium">Номерной фонд:</p>
            <div class="ml-3 mb-3">
                <?php
                echo($rest_zone->apartment) ?>
            </div>
            <p class="font-display text-lg uppercase text-my-oran-d font-medium">Питание:</p>
            <div class="ml-3 mb-3">
                <?php
                echo($rest_zone->food) ?>
            </div>
            <p class="font-display text-lg uppercase text-my-oran-d font-medium">Дополнительные услуги:</p>
            <div class="ml-3 mb-3">
                <?php
                echo($rest_zone->service) ?>
            </div>
            <p class="font-display text-lg uppercase text-my-oran-d font-medium">Пляж:</p>
            <div class="ml-3 mb-3">
                <?php
                echo($rest_zone->beach) ?>
            </div>
            <p class="font-display text-lg uppercase text-my-oran-d font-medium">Для детей:</p>
            <div class="ml-3 mb-3">
                <?php
                echo($rest_zone->for_kids) ?>
            </div>
            <p class="font-display text-lg uppercase text-my-oran-d font-medium">Спорт:</p>
            <div class="ml-3 mb-3">
                <?php
                echo($rest_zone->sport) ?>
            </div>
            <p class="font-display text-lg uppercase text-my-oran-d font-medium">Бассейн:</p>
            <div class="ml-3 mb-3">
                <?php
                echo($rest_zone->pool) ?>
            </div>
            <p class="font-display text-lg uppercase text-my-oran-d font-medium">SPA:</p>
            <div class="ml-3 mb-3">
                <?php
                echo($rest_zone->spa) ?>
            </div>


        </div>

    </div>
@endsection
