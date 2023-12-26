<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem</title>
    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>
</head>

<body class="h-screen bg-gray-100">
    <div class="[ flex justify-center item-center w-full ]">
        <div class="[ w-full   ] [ md:w-full ] [ lg:w-[1300px] ]">

            <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
            <!-- Main navigation container -->
            <nav class="flex-no-wrap relative flex w-full items-center justify-between bg-[#FBFBFB] py-2 shadow-md shadow-black/5 dark:bg-neutral-600 dark:shadow-black/10 lg:flex-wrap lg:justify-start lg:py-4">
                <div class="flex w-full flex-wrap items-center justify-between px-3">
                    <!-- Hamburger button for mobile view -->
                    <button class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden" type="button" data-te-collapse-init data-te-target="#navbarSupportedContent12" aria-controls="navbarSupportedContent12" aria-expanded="false" aria-label="Toggle navigation">
                        <!-- Hamburger icon -->
                        <span class="[&>svg]:w-7">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
                                <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>

                    <!-- Collapsible navigation container -->
                    <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto" id="navbarSupportedContent12" data-te-collapse-item>
                        <!-- Logo -->
                        <a class="mb-4 ml-2 mr-5 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0" href="#">
                            <img src="https://tecdn.b-cdn.net/img/logo/te-transparent-noshadows.webp" style="height: 15px" alt="TE Logo" loading="lazy" />
                        </a>
                        <!-- Left navigation links -->
                        <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>
                            <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                                <!-- Dashboard link -->
                                <a class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-zinc-400" href="#" data-te-nav-link-ref>MilResultados</a>
                            </li>

                        </ul>
                    </div>

                    <!-- Right elements -->
                    <div class="relative flex items-center gap-3">
                        <!-- Cart Icon -->
                        <a class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400" href="#" data-te-nav-link-ref>Inicio</a>

                        <a class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400" href="#" data-te-nav-link-ref>Acerca De</a>

                        <!-- Second dropdown container -->
                        <div class="relative" data-te-dropdown-ref data-te-dropdown-alignment="end">
                            <!-- Second dropdown trigger -->
                            <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none" href="#" id="dropdownMenuButton2" role="button" data-te-dropdown-toggle-ref aria-expanded="false">
                                <!-- User avatar -->
                                <img src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg" class="rounded-full" style="height: 25px; width: 25px" alt="" loading="lazy" />
                            </a>
                            <!-- Second dropdown menu -->

                        </div>
                    </div>
                </div>
            </nav>

            <section class="w-full    p-3 ">
                <div id="carouselExampleCaptions" class="relative" data-te-carousel-init="" data-te-carousel-slide="">
                    <div class="absolute right-0 bottom-0 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0" data-te-carousel-indicators="">
                        <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 1"></button>
                        <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none !opacity-100" aria-label="Slide 2" data-te-carousel-active="" aria-current="true"></button>
                        <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 3"></button>
                    </div>
                    <div class="relative w-full overflow-hidden  rounded-xl   after:clear-both after:block after:content-['']">
                        <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none hidden" data-te-carousel-item="" style="backface-visibility: hidden">
                            <img src="https://lotoven.com/assets/images/ads/trioactivo-pc-min.jpg" class="block h-96 brightness-50 object-cover w-full" alt="...">
                            <div class="[ absolute inset-x-[15%] bottom-5  py-5 text-center text-white  ] [ md:block ]">
                                <h5 class="text-xl"> </h5>
                                <p>
                                    lorem
                                </p>
                            </div>
                        </div>
                        <div class="relative float-left rounded-xl overflow-hidden -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none !block data-[te-carousel-fade]:opacity-100 data-[te-carousel-fade]:z-[1]" data-te-carousel-item="" style="backface-visibility: hidden" data-te-carousel-active="">
                            <img src="https://lotoven.com/assets/images/ads/trioactivo-pc-min.jpg" class="block h-96 brightness-50 object-cover w-full" alt="...">
                            <div class="[ absolute inset-x-[15%] bottom-5  py-5 text-center text-white  ] [ md:block ]">
                                <h1>lorem

                                </h1>
                                <h2>
                                    lorem
                                </h2>
                            </div>
                        </div>
                        <div class="relative float-left rounded-xl overflow-hidden -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item="" style="backface-visibility: hidden">
                            <img src="https://lotoven.com/assets/images/ads/trioactivo-pc-min.jpg" class="block h-96 brightness-50 object-cover w-full" alt="...">
                            <div class="[ absolute inset-x-[15%] bottom-5  py-5 text-center text-white  ] [ md:block ]">
                                <h1>
                                    lorem
                                </h1>
                                <h2>
                                    lorem
                                </h2>
                            </div>
                        </div>
                    </div>
                    <button class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
                        <span class="inline-block h-8 w-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5">
                                </path>
                            </svg>
                        </span>
                        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
                    </button>
                    <button class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
                        <span class="inline-block h-8 w-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5">
                                </path>
                            </svg>
                        </span>
                        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
                    </button>
                </div>
            </section>

            <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
            <!--Tabs navigation-->
            <ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0" role="tablist" data-te-nav-ref>
                <li role="presentation">
                    <a href="#tabs-animalitos" onclick="consultar_resultados(1)" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary data-[te-nav-active]:bg-white" data-te-toggle="pill" data-te-target="#tabs-animalitos" data-te-nav-active role="tab" aria-controls="tabs-animalitos" aria-selected="true">Animalitos</a>
                </li>
                <li role="presentation">
                    <a href="#tabs-terminales" onclick="consultar_resultados(2)" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary data-[te-nav-active]:bg-white" data-te-toggle="pill" data-te-target="#tabs-terminales" role="tab" aria-controls="tabs-terminales" aria-selected="false">Triples</a>
                </li>
                <li role="presentation">
                    <a href="#tabs-triples" onclick="consultar_resultados(3)" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary data-[te-nav-active]:bg-white" data-te-toggle="pill" data-te-target="#tabs-triples" role="tab" aria-controls="tabs-triples" aria-selected="false">Terminales</a>
                </li>

            </ul>

            <!--Tabs content-->
            <div class="mb-6">
                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-animalitos" role="tabpanel" aria-labelledby="tabs-animalitos-tab" data-te-tab-active>
                    <div class="[ grid grid-cols-1 w-full gap-3 mt-3 p-3 ] [ lg:p-3 lg:grid-cols-2 ] " id="resultados_del_dia_animalito">

                    </div>
                </div>
                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-terminales" role="tabpanel" aria-labelledby="tabs-terminales-tab">
                    <div class="[ grid grid-cols-1 w-full gap-3 mt-3 p-3 ] [ md:p-1 md:grid-cols-2 ] [ lg:p-3 lg:grid-cols-4 ] " id="resultados_del_dia_triples">








                    </div>
                </div>

                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-triples" role="tabpanel" aria-labelledby="tabs-triples-tab" data-te-tab-active>
                    <div class="[ grid grid-cols-1 w-full gap-3 mt-3 p-3 ] [ md:p-1 md:grid-cols-2 ] [ lg:p-3 lg:grid-cols-4 ]" id="resultados_del_dia_terminales">



                    </div>
                </div>

            </div>





            <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
            <section class="text-neutral-700  bg-[#f0f2f0] rounded-lg p-3 mt-3">
                <div class="  text-center w-full   bg-stone-800 px-5 py-10 rounded-lg">
                    <h3 class=" text-3xl font-bold text-white text-center">Informacion de los Sorteos</h3>

                </div>

                <!--First Testimonial-->
                <div class="grid gap-6 text-center md:grid-cols-3 mt-3">
                    <div>
                        <div class="block rounded-lg bg-white h-full shadow-lg ">
                            <div class="h-28 overflow-hidden rounded-t-lg bg-green-600"></div>
                            <div class="mx-auto -mt-12 w-24 h-24  overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
                                <img src="./src/img/LottoClub.png" />
                            </div>
                            <div class="p-6">
                                <div class="[ flex flex-nowrap gap-1 w-full justify-center flex-row items-center ]">
                                    <h4 class=" text-2xl font-semibold">LottoClub </h4>
                                    <svg viewBox="0 0 22 22" aria-label="Cuenta verificada" role="img" class="w-5 h-5 fill-blue-500" data-testid="icon-verified">
                                        <g>
                                            <path d="M20.396 11c-.018-.646-.215-1.275-.57-1.816-.354-.54-.852-.972-1.438-1.246.223-.607.27-1.264.14-1.897-.131-.634-.437-1.218-.882-1.687-.47-.445-1.053-.75-1.687-.882-.633-.13-1.29-.083-1.897.14-.273-.587-.704-1.086-1.245-1.44S11.647 1.62 11 1.604c-.646.017-1.273.213-1.813.568s-.969.854-1.24 1.44c-.608-.223-1.267-.272-1.902-.14-.635.13-1.22.436-1.69.882-.445.47-.749 1.055-.878 1.688-.13.633-.08 1.29.144 1.896-.587.274-1.087.705-1.443 1.245-.356.54-.555 1.17-.574 1.817.02.647.218 1.276.574 1.817.356.54.856.972 1.443 1.245-.224.606-.274 1.263-.144 1.896.13.634.433 1.218.877 1.688.47.443 1.054.747 1.687.878.633.132 1.29.084 1.897-.136.274.586.705 1.084 1.246 1.439.54.354 1.17.551 1.816.569.647-.016 1.276-.213 1.817-.567s.972-.854 1.245-1.44c.604.239 1.266.296 1.903.164.636-.132 1.22-.447 1.68-.907.46-.46.776-1.044.908-1.681s.075-1.299-.165-1.903c.586-.274 1.084-.705 1.439-1.246.354-.54.551-1.17.569-1.816zM9.662 14.85l-3.429-3.428 1.293-1.302 2.072 2.072 4.4-4.794 1.347 1.246z">
                                            </path>
                                        </g>
                                </div>
                                </svg>
                                <hr />
                                <p class="mt-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-7 w-7 pr-2" viewBox="0 0 24 24">
                                        <path d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
                                    </svg>
                                    LottoClub es tu oportunidad de participar en emocionantes sorteos de lotería donde
                                    la suerte puede cambiar tu vida. Con premios increíbles y una amplia gama de juegos,
                                    LottoClub te ofrece la emoción de apostar y ganar grandes premios. Únete a esta
                                    comunidad de jugadores apasionados y sé parte de la emoción y diversión de cada
                                    sorteo. ¡Descubre la emoción de LottoClub y persigue tus sueños con cada número!
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--Second Testimonial-->
                    <div>
                        <div class="block rounded-lg bg-white h-full shadow-lg ">
                            <div class="h-28 overflow-hidden rounded-t-lg bg-[#EBC670]"></div>
                            <div class="mx-auto -mt-12 w-24 h-24 object-cover overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
                                <img src="./src/img/LottoElementos.png" />
                            </div>
                            <div class="p-6">

                                <div class="[ flex flex-nowrap gap-1 w-full justify-center flex-row items-center ]">
                                    <h4 class=" text-2xl font-semibold">LottoElementos</h4>
                                    <svg viewBox="0 0 22 22" aria-label="Cuenta verificada" role="img" class="w-5 h-5 fill-blue-500" data-testid="icon-verified">
                                        <g>
                                            <path d="M20.396 11c-.018-.646-.215-1.275-.57-1.816-.354-.54-.852-.972-1.438-1.246.223-.607.27-1.264.14-1.897-.131-.634-.437-1.218-.882-1.687-.47-.445-1.053-.75-1.687-.882-.633-.13-1.29-.083-1.897.14-.273-.587-.704-1.086-1.245-1.44S11.647 1.62 11 1.604c-.646.017-1.273.213-1.813.568s-.969.854-1.24 1.44c-.608-.223-1.267-.272-1.902-.14-.635.13-1.22.436-1.69.882-.445.47-.749 1.055-.878 1.688-.13.633-.08 1.29.144 1.896-.587.274-1.087.705-1.443 1.245-.356.54-.555 1.17-.574 1.817.02.647.218 1.276.574 1.817.356.54.856.972 1.443 1.245-.224.606-.274 1.263-.144 1.896.13.634.433 1.218.877 1.688.47.443 1.054.747 1.687.878.633.132 1.29.084 1.897-.136.274.586.705 1.084 1.246 1.439.54.354 1.17.551 1.816.569.647-.016 1.276-.213 1.817-.567s.972-.854 1.245-1.44c.604.239 1.266.296 1.903.164.636-.132 1.22-.447 1.68-.907.46-.46.776-1.044.908-1.681s.075-1.299-.165-1.903c.586-.274 1.084-.705 1.439-1.246.354-.54.551-1.17.569-1.816zM9.662 14.85l-3.429-3.428 1.293-1.302 2.072 2.072 4.4-4.794 1.347 1.246z">
                                            </path>
                                        </g>
                                </div>

                                <hr />
                                <p class="mt-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-7 w-7 pr-2" viewBox="0 0 24 24">
                                        <path d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
                                    </svg>
                                    los animales emblemáticos y los poderosos elementos naturales se
                                    entrelazan para crear una experiencia de juego fascinante. Cada sorteo es un viaje
                                    hacia la conexión entre la tierra, el fuego, el aire y el agua, representados por
                                    criaturas singulares que simbolizan la esencia de cada elemento. Es una oportunidad
                                    para explorar la belleza y la energía de la naturaleza mientras se persigue la
                                    suerte y la emoción de ganar. ¡Prepárate para sumergirte en un mundo donde la magia
                                    de la lotería se mezcla con la grandeza de la naturaleza!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="block rounded-lg bg-white h-full shadow-lg ">
                            <div class="h-28 overflow-hidden rounded-t-lg bg-[#616161]"></div>
                            <div class="mx-auto -mt-12 w-24 h-24 object-cover overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
                                <img src="https://placehold.jp/616161/ffffff/200x200.png?text=S" />
                            </div>
                            <div class="p-6">

                                <div class="[ flex flex-nowrap gap-1 w-full justify-center flex-row items-center ]">
                                    <h4 class=" text-2xl font-semibold">Lorem</h4>
                                    <svg viewBox="0 0 22 22" aria-label="Cuenta verificada" role="img" class="w-5 h-5 fill-blue-500" data-testid="icon-verified">
                                        <g>
                                            <path d="M20.396 11c-.018-.646-.215-1.275-.57-1.816-.354-.54-.852-.972-1.438-1.246.223-.607.27-1.264.14-1.897-.131-.634-.437-1.218-.882-1.687-.47-.445-1.053-.75-1.687-.882-.633-.13-1.29-.083-1.897.14-.273-.587-.704-1.086-1.245-1.44S11.647 1.62 11 1.604c-.646.017-1.273.213-1.813.568s-.969.854-1.24 1.44c-.608-.223-1.267-.272-1.902-.14-.635.13-1.22.436-1.69.882-.445.47-.749 1.055-.878 1.688-.13.633-.08 1.29.144 1.896-.587.274-1.087.705-1.443 1.245-.356.54-.555 1.17-.574 1.817.02.647.218 1.276.574 1.817.356.54.856.972 1.443 1.245-.224.606-.274 1.263-.144 1.896.13.634.433 1.218.877 1.688.47.443 1.054.747 1.687.878.633.132 1.29.084 1.897-.136.274.586.705 1.084 1.246 1.439.54.354 1.17.551 1.816.569.647-.016 1.276-.213 1.817-.567s.972-.854 1.245-1.44c.604.239 1.266.296 1.903.164.636-.132 1.22-.447 1.68-.907.46-.46.776-1.044.908-1.681s.075-1.299-.165-1.903c.586-.274 1.084-.705 1.439-1.246.354-.54.551-1.17.569-1.816zM9.662 14.85l-3.429-3.428 1.293-1.302 2.072 2.072 4.4-4.794 1.347 1.246z">
                                            </path>
                                        </g>
                                </div>

                                <hr />
                                <p class="mt-4">

                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla officiis quibusdam
                                    tempore debitis accusantium! In, expedita. Accusamus maxime, libero excepturi et
                                    beatae quam quo tenetur! Esse accusamus perspiciatis vero debitis?
                                </p>
                            </div>
                        </div>
                    </div>



                </div>
            </section>

            <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
            <!-- Footer section with social media icons and newsletter sign-up -->
            <footer class="flex flex-col items-center bg-neutral-900 text-center text-white mt-3">
                <div class="container px-6 pt-6">
                    <!-- Social media icons container -->
                    <div class="mb-6 flex justify-center">
                        <a href="#!" type="button" class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0" data-te-ripple-init data-te-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                            </svg>
                        </a>

                        <a href="#!" type="button" class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0" data-te-ripple-init data-te-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>

                        <a href="#!" type="button" class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0" data-te-ripple-init data-te-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z" fill-rule="evenodd" clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="#!" type="button" class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0" data-te-ripple-init data-te-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>

                        <a href="#!" type="button" class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0" data-te-ripple-init data-te-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                            </svg>
                        </a>

                        <a href="#!" type="button" class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0" data-te-ripple-init data-te-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                        </a>
                    </div>

                    <!-- Newsletter sign-up form -->


                    <!-- Copyright information -->
                    <div class="mb-6">
                        <p>
                            Descargo de responsabilidad: Los resultados exhibidos en esta página buscan reflejar
                            fielmente los resultados oficiales de las loterías. En caso de discrepancia, siempre
                            prevalecerán los resultados oficiales reflejados en las actas notariales. Si notas alguna
                            inexactitud, no dudes en contactarnos para corregir el problema y continuar ofreciendo un
                            servicio confiable.
                        </p>
                    </div>

                    <!-- Links section -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-4">
                        <div class="mb-6">
                            <h5 class="mb-2.5 font-bold uppercase"></h5>

                            <ul class="mb-0 list-none">

                            </ul>
                        </div>

                        <div class="mb-6">

                            <div class="mb-6">
                                <h5 class="mb-2.5 font-bold uppercase">Animalitos</h5>

                                <ul class="mb-0 list-none">
                                    <li>
                                        <a href="#!" class="text-white">LottoClub</a>
                                    </li>
                                </ul>
                            </div>


                        </div>

                        <div class="mb-6">
                            <h5 class="mb-2.5 font-bold uppercase">Numeros</h5>

                            <ul class="mb-0 list-none">
                                <li>
                                    <div class="[ flex flex-nowrap hover:underline gap-3 w-full justify-center  ]">
                                        <svg class="w-5 h-5   fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                                            </path>
                                        </svg>
                                        <a href="https://wa.me/+584248321872/" class="text-white">+58-4248321872</a>

                                    </div>
                                </li>

                            </ul>
                        </div>

                        <div class="mb-6">
                            <h5 class="mb-2.5 font-bold uppercase"></h5>

                            <ul class="mb-0 list-none">

                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Copyright section -->
                <div class="w-full p-4 text-center" style="background-color: rgba(0, 0, 0, 0.2)">
                    Políticas de privacidad Términos y condiciones
                    © 2023. MilResultados. Todos los derechos reservados.
                </div>
            </footer>

        </div>
    </div>

    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>


    <script>
        $(document).ready(() => {
            consultar_resultados(1);
        })
        let datosAgrupados = [];

        function consultar_resultados(tipo) {
            $.ajax({
                // la URL para la petición
                url: './api_v1/resultados/',

                // la información a enviar
                // (también es posible utilizar una cadena de datos)
                data: {
                    tipo_sorteo: tipo
                },
                beforeSend: () => {

                    let cargando_html = `  <article class="border  mx-auto border-gray-400 rounded-lg md:p-4 bg-white w-full shadow-lg ">
                                <div role="presentation">
                                    <div>
                                        <div class="m-2">
                                            <div class="flex items-center">
                                                <div class="mr-2">
                                                    <a target="_blank">
                                                        <img class="[ rounded-full w-16 object-cover ] [ md:w-16 ] [ lg:w-[40px] ]" src="https://placehold.jp/616161/ffffff/60x60.png?text=S" alt="hagnerd profile" loading="lazy">
                                                    </a>
                                                </div>
                                                <div>
                                                    <p>
                                                        <a class="text text-gray-700 text-sm hover:text-black" target="_blank">Sistema</a>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="[  p-5  ] [ xs:pl-10 ] [ md:pl-10 md:pl-12 ] [ lg:pl-10 lg:pl-12 ]">
                                            <h2 class="text-2xl font-bold mb-2 hover:text-blue-600 leading-7">
                                                <a id="article-link-151230" target="_blank">
                                                    Cargando..
                                                </a>
                                            </h2>


                                        </div>
                                    </div>
                                </div>
                            </article>`;
                    if (tipo == 1) {
                        $('#resultados_del_dia_animalito').html(cargando_html);
                    } else if (tipo == 2) {
                        $('#resultados_del_dia_triples').html(cargando_html);
                    } else if (tipo == 3) {
                        $('#resultados_del_dia_terminales').html(cargando_html);
                    }
                },

                // especifica si será una petición POST o GET
                type: 'GET',

                // código a ejecutar si la petición es satisfactoria;
                // la respuesta es pasada como argumento a la función
                success: function(json) {

                    if (!json.result) {
                        console.log("Error");
                        return;
                    }




                    // Tu array original de objetos
                    const datos = json.data;

                    if (datos.length == 0) {

                        // Template con la estructura final que contiene los hijos_resultados

                        let html_content = `<article class="border  mx-auto border-gray-400 rounded-lg md:p-4 bg-white w-full shadow-lg2">
                                                        <div role="presentation">
                                                            <div>
                                                                <div class="m-2">
                                                                    <div class="flex items-center">
                                                                        <div class="mr-2">
                                                                            <a target="_blank">
                                                                                <img class="[ rounded-full w-16 object-cover ] [ md:w-16 ] [ lg:w-[40px] ]" src="https://placehold.jp/616161/ffffff/60x60.png?text=S" alt="hagnerd profile" loading="lazy">
                                                                            </a>
                                                                        </div>
                                                                        <div>
                                                                            <p>
                                                                                <a class="text text-gray-700 text-sm hover:text-black" target="_blank">Sistema</a>
                                                                            </p>
    
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="[  p-5  ] [ xs:pl-10 ] [ md:pl-10 md:pl-12 ] [ lg:pl-10 lg:pl-12 ]">
                                                                    <h2 class="text-2xl font-bold mb-2 hover:text-blue-600 leading-7">
                                                                        <a id="article-link-151230" target="_blank">
                                                                            Sin Resultados
                                                                        </a>
                                                                    </h2>
                                                                        

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>`;
                        if (tipo == 1) {
                            $('#resultados_del_dia_animalito').html(`${html_content}`);
                        } else if (tipo == 2) {
                            $('#resultados_del_dia_triples').html(html_content);
                        } else if (tipo == 3) {
                            $('#resultados_del_dia_terminales').html(html_content);

                        }


                    }

                    // Objeto para almacenar los resultados agrupados por nombre
                    datosAgrupados = datos.reduce((agrupados, dato) => {
                        const {
                            nombre
                        } = dato;

                        // Si la clave nombre no existe en el objeto agrupados, la creamos
                        if (!agrupados[nombre]) {
                            agrupados[nombre] = [];
                        }

                        // Agregamos el objeto al array correspondiente a su nombre
                        agrupados[nombre].push(dato);

                        return agrupados;
                    }, {});







                    // Variable para almacenar los hijos con el formato dado

                    let templateFinal = '';

                    if (tipo == 1) {
                        // Recorrer cada clave en el JSON
                        Object.keys(datosAgrupados).forEach((clave) => {
                            let hijos_resultados = '';



                            let nombre_sorteo = clave;
                            var subcadenas = nombre_sorteo.split(" "); // Divide la cadena en un array de subcadenas
                            var nombre_sorteo_modificado = subcadenas.join(""); // Une las subcadenas sin espacios


                            const valores = datosAgrupados[clave];

                            // Crear divs con la estructura proporcionada para cada valor de la clave


                            const divsHijos = valores.map((valor) => {
                                let hora_sorteo = valor.sorteo;
                                hora_sorteo = hora_sorteo.split(" ");
                                hora_sorteo = hora_sorteo[1];



                                let ganador = valor.ganador == "Pendiente" ? 'sin_resultado' : valor.ganador;


                                let img_ganador_html = valor.ganador == "Pendiente" ? `<svg class="mx-auto mt-2 w-10 h-10 text-gray-200 animate-spin   fill-blue-500" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">

                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"></path>

                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"></path>

                                        </svg>` : `<img onerror="this.onerror=null;this.src='./src/img/default/${valor.ganador}.png?v=1';" src="./src/img/${nombre_sorteo_modificado}/${valor.ganador}.png?v=1" class="[ w-32 mx-auto rounded-full ]" alt="" />`;
                                return `
                                    <div>
                                        ${img_ganador_html}
                                        <p class="[ text-center text-sm ] [ md:text-sm ] [ lg:text-sm ]">${hora_sorteo}</p>
                                    </div>
                                    `;




                            }).join('');


                            // Agregar los divs de hijos al string 'hijos_resultados'
                            hijos_resultados += divsHijos;
                            console.log(nombre_sorteo_modificado);
                            templateFinal += `<article class="border  mx-auto border-gray-400 rounded-lg md:p-4 bg-white w-full shadow-lg ">
                                                        <div role="presentation">
                                                            <div>
                                                                <div class="m-2">
                                                                    <div class="flex items-center justify-between">
                                                                        <div class='[ flex flex-nowrap items-center ]'>
                                                                            <div class="mr-2">
                                                                                <a target="_blank">
                                                                                    <img class="[ rounded-full w-16 object-cover ] [ md:w-16 ] [ lg:w-[40px] ]"
                                                                                    onerror="this.onerror=null;this.src='https://placehold.jp/616161/ffffff/60x60.png?text=${nombre_sorteo.charAt(0)}';" src="./src/img/${nombre_sorteo_modificado}.png" alt="hagnerd profile" loading="lazy">
                                                                                </a>
                                                                            </div>
                                                                            <div>
                                                                                <p>
                                                                                    <a class="text text-gray-700 text-sm hover:text-black" target="_blank">${nombre_sorteo}</a>
                                                                                </p>
                                                                                <!--------
                                                                                <a class="text-xs text-gray-600 hover:text-black" target="_blank">
                                                                                    <time datetime="2019-08-02T13:58:42.196Z">13/12/2023
                                                                                    </time>
                                                                                </a>
                                                                                ---->
                                                                            </div>
                                                                        </div>   
                                                                        <a href="javascript:ShareResult('${nombre_sorteo}')" class="[ flex flex-nowrap items-center ]">
                                                                         
                                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                                                class="h-6 w-6">
                                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                                    d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z">
                                                                                </path>
                                                                            </svg>
                                                                       
                                                                           
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="[  p-5  ] [ xs:pl-10 ] [ md:pl-10 md:pl-12 ] [ lg:pl-10 lg:pl-12 ]">
                                                                    <h2 class="text-2xl font-bold mb-2 hover:text-blue-600 leading-7">
                                                                        <a id="article-link-151230" target="_blank">
                                                                            Resultados
                                                                        </a>
                                                                    </h2>
                                                                        <div class="[ grid grid-cols-3 gap-5 ] [ md:grid-cols-4 ] [ lg:grid-cols-6 ]">
                                                                            ${hijos_resultados}
                                                                        </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article> `;

                        });
                        $('#resultados_del_dia_animalito').html(templateFinal);
                        return;
                    } else if (tipo == 2) {

                        Object.keys(datosAgrupados).forEach((clave) => {
                            let hijos_resultados = '';

                            let nombre_sorteo = clave;


                            var subcadenas = nombre_sorteo.split(" "); // Divide la cadena en un array de subcadenas
                            var nombre_sorteo_modificado = subcadenas.join(""); // Une las subcadenas sin espacios


                            const valores = datosAgrupados[clave];

                            // Crear divs con la estructura proporcionada para cada valor de la clave


                            const divsHijos = valores.map((valor) => {

                                let hora_sorteo = valor.sorteo;
                                let ganador = valor.ganador;
                                /*    hora_sorteo = hora_sorteo.split(" ");
                                    hora_sorteo = hora_sorteo[1];*/

                                return `
                                        <tr class="border-b">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">${hora_sorteo}</td>
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">${ganador}</td>
                                    
                                        </tr>
                                        `;
                            }).join('');

                            // Agregar los divs de hijos al string 'hijos_resultados'
                            hijos_resultados += divsHijos;

                            templateFinal += `
                                <div class="block rounded-lg  bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
                                    <div class="h-20 p-3 flex w-full flex-row justify-between flex-nowrap items-center gap-3 border-b-2 ">
                                        
                                        <img onerror="this.onerror=null;this.src='https://placehold.jp/616161/ffffff/60x60.png?text=${nombre_sorteo.charAt(0)}';" src="./src/img/${nombre_sorteo_modificado}.png"   loading="lazy" class="w-20" alt="${nombre_sorteo}" />
                                        <h5 class="border-neutral-100 px-6 py-3 text-xl mx-auto font-medium leading-tight">${nombre_sorteo}</h5>

                                        <a href="javascript:ShareResult('${nombre_sorteo}')" class="[ flex flex-nowrap items-center ]">

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="h-6 w-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z">
                                                </path>
                                            </svg>


                                        </a>
                                    </div>
                                <div class="p-6">
                                    <table class="min-w-full text-center text-sm font-light">
                                    <thead class="border-b font-medium">
                                        <th>Horario</th>
                                        <th>Resultados</th>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b">
                                
                                            ${divsHijos}
                                    
                                        </tr>

                                    
                                    </tbody>
                                    </table>
                                </div>
                                </div> `;
                        });
                        $('#resultados_del_dia_triples').html(templateFinal);
                        return;
                    } else if (tipo == 3) {

                        Object.keys(datosAgrupados).forEach((clave) => {
                            let hijos_resultados = '';

                            let nombre_sorteo = clave;
                            const valores = datosAgrupados[clave];
                            var subcadenas = nombre_sorteo.split(" "); // Divide la cadena en un array de subcadenas
                            var nombre_sorteo_modificado = subcadenas.join(""); // Une las subcadenas sin espacios
                            // Crear divs con la estructura proporcionada para cada valor de la clave


                            const divsHijos = valores.map((valor) => {
                                let hora_sorteo = valor.sorteo;
                                hora_sorteo = hora_sorteo.split(" ");
                                hora_sorteo = hora_sorteo[1];




                                let img_ganador_html = valor.ganador == "Pendiente" ? `<svg class="mx-auto w-5 h-5 text-gray-200 animate-spin   fill-blue-500" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"></path>

                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"></path>

                                    </svg>` : `<span class='[ font-bold  ]'>${valor.ganador}</span>`;


                                return `
                                    <tr class="border-b">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium">${hora_sorteo}</td>
                                        <td class="whitespace-nowrap px-6 py-4">${img_ganador_html}</td>
                                    </tr>
                                    `;
                            }).join('');




                            // Agregar los divs de hijos al string 'hijos_resultados'
                            hijos_resultados += divsHijos;

                            templateFinal += `
            
                                <div class="relative block  rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
                                    <div class="h-[110px] overflow-hidden bg-gradient-to-r from-blue-300 via-blue-400 to-blue-500">
                                        <div class="absolute flex w-full flex-nowrap items-center gap-3 p-3">

                                      


                                    <img onerror="this.onerror=null;this.src='https://placehold.jp/616161/ffffff/60x60.png?text=${nombre_sorteo.charAt(0)}';" src="./src/img/${nombre_sorteo_modificado}.png"   loading="lazy"  class="h-20   object-cover" alt="img" loading="lazy">
                                        <h5 class="text-xl font-medium leading-tight text-black">${nombre_sorteo}</h5>
                                        </div>
                                    </div>

                                    <div class="flex flex-col">
                                        <div class="overflow-x-auto lg:-mx-8">
                                        <div class="inline-block min-w-full sm:px-6 lg:px-8">
                                            <div class="overflow-hidden">
                                            <table class="min-w-full text-center text-sm font-light">
                                                <thead class="border-b bg-neutral-800 font-medium text-white"></thead>
                                                <tbody>
                                                    ${hijos_resultados}
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="w-full p-3 text-center">
                                    <a href="javascript:ShareResult('${nombre_sorteo}')" class="[ flex flex-nowrap items-center justify-center ]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="h-6 w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z">
                                            </path>
                                        </svg>
                                    </a>
                                    </div>
                                    <hr class="my-3 h-px border-0 bg-gray-200" />
                                </div>`;
                        });
                        $('#resultados_del_dia_terminales').html(templateFinal);
                        return;
                    }







                },
                error: function() {
                    console.log("No se ha podido obtener la información");
                }
            });
        }

        function ShareResult(nombre_sorteo) {

            let hijos = datosAgrupados[nombre_sorteo];
            let title = hijos[0].nombre;
            let templateResult = "";

            for (let index = 0; index < hijos.length; index++) {
                let hora_sorteo = hijos[index].sorteo;
                let palabras = hora_sorteo.split(" "); // Dividir la cadena en palabras
                let hora = palabras[1]; // Obtener la hora del sorteo
                templateResult += `${hora} - ${hijos[index].ganador +" "+ hijos[index].descripcion } \n`;
            }

            var plantilla = `${title} \nResultados: \n${templateResult}`;

            navigator.share({
                title: "Resultados",
                text: plantilla,
                url: window.location.href
            }).then(() => console.log('Successful share')).catch((error) => console.log('Error sharing', error));
        }
    </script>

    <script src="https://cdn.onesignal.com/sdks/web/v16/OneSignalSDK.page.js" defer></script>
    <script>
        window.OneSignalDeferred = window.OneSignalDeferred || [];
        OneSignalDeferred.push(function(OneSignal) {
            OneSignal.init({
                appId: "b5aebd47-e928-44d1-b2fd-ce4bfa6c3f24",
                safari_web_id: "web.onesignal.auto.3cbb98e8-d926-4cfe-89ae-1bc86ff7cf70",
                notifyButton: {
                    enable: true,
                },
            });
        });
    </script>


</body>

</html>