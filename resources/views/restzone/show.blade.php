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
                <p class="font-display text-lg uppercase text-my-oran-d font-medium pl-2">Соц.сети:</p>
                <div class="flex flex-row items-center pl-2 mb-2">
                    @if (isset($rest_zone->instagram))
                        <a href="//{{ $rest_zone->instagram }}" target="_blank" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                 viewBox="0,0,256,256">
                                <g fill="#da6a00" fill-rule="nonzero" stroke="none" stroke-width="1"
                                   stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                   stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                   font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M9.99805,3c-3.859,0 -6.99805,3.14195 -6.99805,7.00195v10c0,3.859 3.14195,6.99805 7.00195,6.99805h10c3.859,0 6.99805,-3.14195 6.99805,-7.00195v-10c0,-3.859 -3.14195,-6.99805 -7.00195,-6.99805zM22,7c0.552,0 1,0.448 1,1c0,0.552 -0.448,1 -1,1c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1zM15,9c3.309,0 6,2.691 6,6c0,3.309 -2.691,6 -6,6c-3.309,0 -6,-2.691 -6,-6c0,-3.309 2.691,-6 6,-6zM15,11c-2.20914,0 -4,1.79086 -4,4c0,2.20914 1.79086,4 4,4c2.20914,0 4,-1.79086 4,-4c0,-2.20914 -1.79086,-4 -4,-4z"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    @endif
                    @if (isset($rest_zone->facebook))
                        <a href="//{{ $rest_zone->facebook }}" target="_blank" class="pl-1">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                                <g fill="#da6a00" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.016 4.432,10.984 10.206,11.852v-8.672h-2.969v-3.154h2.969v-2.099c0,-3.475 1.693,-5 4.581,-5c1.383,0 2.115,0.103 2.461,0.149v2.753h-1.97c-1.226,0 -1.654,1.163 -1.654,2.473v1.724h3.593l-0.487,3.154h-3.106v8.697c5.857,-0.794 10.376,-5.802 10.376,-11.877c0,-6.627 -5.373,-12 -12,-12z"></path></g></g>
                            </svg>
                        </a>
                    @endif
                        @if (isset($rest_zone->whatsapp))
                            <a href="//{{ $rest_zone->whatsapp }}" target="_blank" class="pl-1">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                                    <g fill="#da6a00" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M15,3c-6.627,0 -12,5.373 -12,12c0,2.25121 0.63234,4.35007 1.71094,6.15039l-1.60352,5.84961l5.97461,-1.56836c1.74732,0.99342 3.76446,1.56836 5.91797,1.56836c6.627,0 12,-5.373 12,-12c0,-6.627 -5.373,-12 -12,-12zM10.89258,9.40234c0.195,0 0.39536,-0.00119 0.56836,0.00781c0.214,0.005 0.44692,0.02067 0.66992,0.51367c0.265,0.586 0.84202,2.05608 0.91602,2.20508c0.074,0.149 0.12644,0.32453 0.02344,0.51953c-0.098,0.2 -0.14897,0.32105 -0.29297,0.49805c-0.149,0.172 -0.31227,0.38563 -0.44727,0.51563c-0.149,0.149 -0.30286,0.31238 -0.13086,0.60938c0.172,0.297 0.76934,1.27064 1.65234,2.05664c1.135,1.014 2.09263,1.32561 2.39063,1.47461c0.298,0.149 0.47058,0.12578 0.64258,-0.07422c0.177,-0.195 0.74336,-0.86411 0.94336,-1.16211c0.195,-0.298 0.39406,-0.24644 0.66406,-0.14844c0.274,0.098 1.7352,0.8178 2.0332,0.9668c0.298,0.149 0.49336,0.22275 0.56836,0.34375c0.077,0.125 0.07708,0.72006 -0.16992,1.41406c-0.247,0.693 -1.45991,1.36316 -2.00391,1.41016c-0.549,0.051 -1.06136,0.24677 -3.56836,-0.74023c-3.024,-1.191 -4.93108,-4.28828 -5.08008,-4.48828c-0.149,-0.195 -1.21094,-1.61031 -1.21094,-3.07031c0,-1.465 0.76811,-2.18247 1.03711,-2.48047c0.274,-0.298 0.59492,-0.37109 0.79492,-0.37109z"></path></g></g>
                                </svg>
                            </a>
                        @endif
                        @if (isset($rest_zone->telegram))
                            <a href="//{{ $rest_zone->telegram }}" target="_blank" class="pl-1">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28" viewBox="0,0,256,256">
                                    <g fill="#da6a00" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,2c12.703,0 23,10.297 23,23c0,12.703 -10.297,23 -23,23c-12.703,0 -23,-10.297 -23,-23c0,-12.703 10.297,-23 23,-23zM32.934,34.375c0.423,-1.298 2.405,-14.234 2.65,-16.783c0.074,-0.772 -0.17,-1.285 -0.648,-1.514c-0.578,-0.278 -1.434,-0.139 -2.427,0.219c-1.362,0.491 -18.774,7.884 -19.78,8.312c-0.954,0.405 -1.856,0.847 -1.856,1.487c0,0.45 0.267,0.703 1.003,0.966c0.766,0.273 2.695,0.858 3.834,1.172c1.097,0.303 2.346,0.04 3.046,-0.395c0.742,-0.461 9.305,-6.191 9.92,-6.693c0.614,-0.502 1.104,0.141 0.602,0.644c-0.502,0.502 -6.38,6.207 -7.155,6.997c-0.941,0.959 -0.273,1.953 0.358,2.351c0.721,0.454 5.906,3.932 6.687,4.49c0.781,0.558 1.573,0.811 2.298,0.811c0.725,0 1.107,-0.955 1.468,-2.064z"></path></g></g>
                                </svg>
                            </a>
                        @endif
                </div>
                <p class="font-display text-lg uppercase text-my-oran-d font-medium pl-2">Веб-сайт:</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 px-2">
                    {{ $rest_zone->website }}
                </p>
                <p class="font-display text-lg uppercase text-my-oran-d font-medium pl-2">Телефон:</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 px-2">
                    {{ $rest_zone->phone }}
                </p>
                <p class="font-display text-lg uppercase text-my-oran-d font-medium pl-2">Цена:</p>
                <p class="font-display text-lg text-my-oran-d font-medium pl-2">от 20000 тенге/сутки</p>
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
