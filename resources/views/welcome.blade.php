<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kapunungan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <img src="{{ asset('images/bg-vortex.svg') }}" alt="background vortex"
        class="absolute inset-0 w-full h-screen object-cover z-[-1]">
    <!-- ========== HEADER ========== -->
    <header class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-sm">
        <nav
            class="mt-4 relative max-w-4xl w-full bg-white rounded-[24px] mx-2 flex flex-wrap md:flex-nowrap items-center justify-between p-1 ps-4 md:py-0 sm:mx-auto">
            <div class="flex items-center">
                <!-- Logo -->
                <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80"
                    href="../templates/personal/index.html" aria-label="Preline">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-24 h-auto">
                </a>
                <!-- End Logo -->

                <div class="ms-1 sm:ms-2">

                </div>
            </div>

            <div class="flex items-center gap-1 md:order-4 md:ms-4">
                <a class="tracking-wider w-full sm:w-auto whitespace-nowrap py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-400 text-white hover:bg-blue-500 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                    href="{{ route('login') }}">
                    Login
                </a>

                <div class="md:hidden">
                    <!-- Toggle Button -->
                    <button type="button"
                        class="hs-collapse-toggle flex justify-center items-center size-9.5 border border-gray-200 text-gray-500 rounded-full hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200"
                        id="hs-navbar-header-floating-collapse" aria-expanded="false"
                        aria-controls="hs-navbar-header-floating" aria-label="Toggle navigation"
                        data-hs-collapse="#hs-navbar-header-floating">
                        <svg class="hs-collapse-open:hidden shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                    <!-- End Toggle Button -->
                </div>
            </div>

            <div id="hs-navbar-header-floating"
                class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow md:block"
                aria-labelledby="hs-navbar-header-floating-collapse">
                <div
                    class="flex flex-col md:flex-row md:items-center md:justify-end gap-2 md:gap-3 mt-3 md:mt-0 py-2 md:py-0 md:ps-7">
                    <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-gray-800 font-medium text-gray-800 hover:text-gray-800 focus:outline-hidden"
                        href="index.html" aria-current="page">Home</a>
                        <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-transparent text-gray-500 hover:text-gray-800 focus:outline-hidden"
                        href="work.html">Officials</a>
                    <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-transparent text-gray-500 hover:text-gray-800 focus:outline-hidden"
                        href="work.html">Members</a>
                    <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-transparent text-gray-500 hover:text-gray-800 focus:outline-hidden"
                        href="reviews.html">Projects</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- Hero -->
    <div class="relative overflow-hidden">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="max-w-4xl text-center mx-auto">
                <h1 class="block text-3xl font-bold text-white sm:text-4xl md:text-6xl/18 tracking-wide">Kapunungan:
                    <span class="text-blue-400">United</span> in Compassion
                </h1>
                <p class="mt-5 text-lg text-white font-semibold tracking-wider">A Community that Cares. A Commitment
                    that Lasts.
                </p>
            </div>

            <div class="mt-10 relative max-w-5xl mx-auto">
                <div class="w-full object-cover h-96 sm:h-120 bg-no-repeat bg-center bg-cover rounded-xl"
                    style="background-image: url('{{ asset('images/bg-banner.jpg') }}');">
                </div>
                <div class="absolute inset-0 size-full">
                    <div class="flex flex-col justify-center items-center size-full">
                        <a class="tracking-wider py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-blue-200 bg-blue-400 text-white hover:text-gray-800 shadow-2xs hover:bg-gray-200 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" />
                            </svg>
                            Apply for Membership
                        </a>
                    </div>
                </div>

                <div
                    class="absolute bottom-12 -start-20 -z-1 size-48 bg-linear-to-b from-violet-500 to-white p-px rounded-lg">
                    <div class="bg-white size-48 rounded-lg"></div>
                </div>
                <div
                    class="absolute -top-12 -end-20 -z-1 size-48 bg-linear-to-t from-blue-600 to-cyan-300 p-px rounded-full">
                    <div class="bg-white size-48 rounded-full"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Hero -->
    <div class="overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 xl:px-0 pt-13 sm:pt-16 pb-24">
            <h1 class="font-semibold sm:text-gray-800 text-4xl md:text-6xl tracking-wide text-center sm:text-start">
                What is <span class="text-blue-400">Kapunungan?</span>
            </h1>
            <div class="mt-5 max-w-7xl">
                <p class="text-gray-800 text-lg tracking-wider">
                    Kapunungan is a community-based membership organization dedicated to helping families during the
                    most difficult time—the loss of a loved one. We exist to lighten the burden by offering affordable
                    and accessible death care services through solidarity and support.
                </p>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Organization Officials -->
    <h1 class="font-extrabold text-blue-400 text-4xl md:text-6xl/18 tracking-wide max-w-5xl mx-auto text-center">
        Organizational Officials
    </h1>

    <!-- Slider -->
    <div data-hs-carousel='{
  "loadingClasses": "opacity-0",
  "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer",
  "slidesQty": {
    "xs": 1,
    "lg": 3
  }
}'
        class="relative max-w-7xl mx-auto">
        <div class="hs-carousel w-full overflow-hidden bg-white rounded-lg mt-8 sm:mt-10">
            <div class="relative min-h-72 -mx-1">
                <!-- transition-transform duration-700 -->
                <div
                    class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap opacity-0 transition-transform duration-700">
                    <div class="hs-carousel-slide px-1">
                        <div class="flex justify-center h-full bg-gray-100 p-6">
                            <span class="self-center text-sm text-gray-800 transition duration-700">First
                                slide</span>
                        </div>
                    </div>
                    <div class="hs-carousel-slide px-1">
                        <div class="flex justify-center h-full bg-gray-200 p-6">
                            <span class="self-center text-sm text-gray-800 transition duration-700">Second
                                slide</span>
                        </div>
                    </div>
                    <div class="hs-carousel-slide px-1">
                        <div class="flex justify-center h-full bg-gray-300 p-6">
                            <span class="self-center text-sm text-gray-800 transition duration-700">Third
                                slide</span>
                        </div>
                    </div>
                    <div class="hs-carousel-slide px-1">
                        <div class="flex justify-center h-full bg-gray-100 p-6">
                            <span class="self-center text-sm text-gray-800 transition duration-700">Fourth
                                slide</span>
                        </div>
                    </div>
                    <div class="hs-carousel-slide px-1">
                        <div class="flex justify-center h-full bg-gray-200 p-6">
                            <span class="self-center text-sm text-gray-800 transition duration-700">Fifth
                                slide</span>
                        </div>
                    </div>
                    <div class="hs-carousel-slide px-1">
                        <div class="flex justify-center h-full bg-gray-300 p-6">
                            <span class="self-center text-sm text-gray-800 transition duration-700">Sixth
                                slide</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="button"
            class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-s-lg">
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </button>
        <button type="button"
            class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-e-lg">
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </span>
        </button>

        <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 flex gap-x-2"></div>
    </div>
    <!-- End Slider -->
</body>

</html>
