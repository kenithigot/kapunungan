<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kapunungan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Michroma&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-2 w-full text-sm">
        <nav
            class=" border-b-1 border-blue-400 mt-4 relative max-w-4xl w-full bg-white rounded-[24px] mx-2 flex flex-wrap md:flex-nowrap items-center justify-between p-1 ps-4 md:py-0 sm:mx-auto">
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
                <a class="text-base tracking-wider w-full sm:w-auto whitespace-nowrap py-2 px-3 inline-flex justify-center items-center gap-x-2 font-medium rounded-full border border-transparent bg-blue-400 text-white hover:bg-blue-500 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
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
                    class="text-base flex flex-col md:flex-row md:items-center md:justify-end gap-2 md:gap-3 mt-3 md:mt-0 py-2 md:py-0 md:ps-7">
                    <a class="py-0.5 md:py-3 px-4 md:px-1 text-gray-500 hover:text-gray-800 focus:text-gray-800 focus:outline-hidden"
                        href="#">Home</a>
                    <a class="py-0.5 md:py-3 px-4 md:px-1 text-gray-500 hover:text-gray-800 focus:text-gray-800 focus:outline-hidden"
                        href="#">Announcement</a>
                    <a class="py-0.5 md:py-3 px-4 md:px-1 text-gray-500 hover:text-gray-800 focus:text-gray-800 focus:outline-hidden"
                        href="#">Officials</a>
                    <a class="py-0.5 md:py-3 px-4 md:px-1 text-gray-500 hover:text-gray-800 focus:text-gray-800 focus:outline-hidden"
                        href="#">Members</a>
                    <a class="py-0.5 md:py-3 px-4 md:px-1 text-gray-500 hover:text-gray-800 focus:text-gray-800 focus:outline-hidden"
                        href="#">Projects</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- Hero -->
    <div class="relative overflow-hidden">
        <div class="max-w-[90rem] mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="max-w-2xl text-center mx-auto">
                <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl md:text-6xl/18 tracking-wide">Kapunungan:
                    <span class="text-blue-400">United</span> in <span class="text-blue-400">Compassion</span>
                </h1>
                <p class="mt-5 text-xl text-gray-800 font-semibold tracking-wider">A Community that Cares. A Commitment
                    that Lasts.
                </p>
            </div>

            <div class="mt-10 relative max-w-5xl mx-auto">
                <div class="border border-violet-300 w-full object-cover h-96 sm:h-120 bg-no-repeat bg-center bg-cover rounded-xl"
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
        <div class="max-w-7xl mx-auto px-4 xl:px-0 pt-0 ">
            <h1
                class="pb-2 sm:pb-0 pt-10 sm:pt-24 font-extrabold text-gray-800 text-2xl sm:text-4xl md:text-6xl tracking-wide text-start ">
                What is <span class="text-blue-400">Kapunungan?</span>
            </h1>
            <div class="mt-0 max-w-7xl">
                <p class="text-gray-800 text-sm sm:text-xl tracking-wider text-justify">
                    Kapunungan is a community-based membership organization dedicated to helping families during the
                    most difficult time—the loss of a loved one. We exist to lighten the burden by offering affordable
                    and accessible death care services through solidarity and support.
                </p>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Announcement -->
    <h1
        class="px-4 sm:px-0 pb-2 sm:pb-0 pt-10 sm:pt-24 font-extrabold text-blue-400 text-2xl sm:text-4xl md:text-6xl/18 tracking-wide max-w-5xl mx-auto text-start sm:text-center">
        Announcement
    </h1>
    <div class="max-w-5xl mx-auto px-4 xl:px-0">
        <p class="text-gray-800 text-sm sm:text-xl tracking-wider text-justify sm:text-center">Stay informed with the
            latest updates,
            events,
            and important notices from Kapunungan.
            Check this section
            regularly for community announcements and service-related information.</p>

        <div class="text-center py-3 space-x-6">
            <div class="inline-flex items-center">
                <span class="size-2 inline-block bg-blue-400 w-4 h-[6px] me-2 rounded-[2px]"></span>
                <span class="text-gray-800">General Announcement</span>
            </div>
            <div class="inline-flex items-center">
                <span class="size-2 inline-block bg-yellow-400 w-4 h-[6px] me-2 rounded-[2px]"></span>
                <span class="text-gray-800">Contribution</span>
            </div>
            <div class="inline-flex items-center">
                <span class="size-2 inline-block bg-red-400 w-4 h-[6px] me-2 rounded-[2px]"></span>
                <span class="text-gray-800">Meeting Schedule</span>
            </div>
            <div class="inline-flex items-center">
                <span class="size-2 inline-block bg-green-400 w-4 h-[6px] me-2 rounded-[2px]"></span>
                <span class="text-gray-800">Policy Update</span>
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <div class="max-w-6xl px-2 mx-auto">
        <div class="hs-accordion-group pb-2">
            <div class="hs-accordion hs-accordion-active:bg-gray-100 rounded-xl pb-2 px-4"
                id="hs-basic-with-title-and-arrow-stretched-heading-five">
                <button
                    class="bg-blue-400 px-2 mb-2 hs-accordion-toggle group py-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-white rounded-lg transition focus:outline-hidden"
                    aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-five">
                    <div class="inline-flex items-center gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-7">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
                        </svg>
                        <span class="text-sm sm:text-base">How do I get access to a theme I purchased?</span>
                    </div>
                    <div class="inline-flex items-center gap-x-2">
                        <span>
                            <p class="mt-1 text-[12px] text-white">
                                Last updated 5 mins ago
                            </p>
                        </span>
                        <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-white"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                        <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-white"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6" />
                        </svg>
                    </div>
                </button>
                <div id="hs-basic-with-title-and-arrow-stretched-collapse-five"
                    class="px-2 hs-accordion-content hidden w-full overflow-hidden transition-all duration-300 ease-in-out"
                    role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-five">
                    <p class="text-gray-800">
                        If you lose the link for a theme you purchased, don't panic! We've got you covered. You can
                        login to your account, tap your avatar in the upper right corner, and tap Purchases. If you
                        didn't create a login or can't remember the information, you can use our handy Redownload
                        page,
                        just remember to use the same email you originally made your purchases with.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!-- Organization Officials -->
    <h1
        class="pt-16 sm:pt-24 font-extrabold text-blue-400 text-4xl md:text-6xl/18 tracking-wide max-w-5xl mx-auto text-center">
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

        <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 gap-x-2"></div>
    </div>
    <!-- End Slider -->

    <!-- Members -->
    <h1
        class="pt-16 sm:pt-24 font-extrabold text-blue-400 text-4xl md:text-6xl/18 tracking-wide max-w-5xl mx-auto text-center">
        Members
    </h1>
    <div class="flex flex-col">
        <div class="w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-10">
            <div class="border border-blue-400 rounded-lg px-2">
                <div class="py-3 px-2">
                    <div class="relative max-w-sm w-full">
                        <label for="hs-table-input-search" class="sr-only">Search</label>
                        <input type="text" name="hs-table-search" id="hs-table-input-search"
                            class="text-gray-800 py-1.5 sm:py-2 px-3 ps-9 block w-full border border-blue-400 hover:border-blue-500 focus:border-blue-500 shadow-2xs rounded-lg sm:text-sm focus:z-10 disabled:opacity-50 disabled:pointer-events-none outline-hidden"
                            placeholder="Search for member" data-hs-datatable-search="">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                            <svg class="size-4 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.3-4.3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="min-h-56 overflow-x-auto px-2">
                    <div class="min-w-full inline-block align-middle">
                        <div class="w-full overflow-x-auto">
                            <table class="min-w-[640px] w-full">
                                <thead class="border-y border-gray-200">
                                    <tr class="bg-gray-100">
                                        <th class="text-start px-2.5 py-1.5 font-semibold">
                                            Name
                                        </th>

                                        <th class="text-start px-2.5 py-1.5 font-semibold">
                                            Purok
                                        </th>

                                        <th class="text-start px-2.5 py-1.5 font-semibold">
                                            Date Registered
                                        </th>

                                        <th class="text-start px-2.5 py-1.5 font-semibold">
                                            Membership Type
                                        </th>

                                        <th class="text-start px-2.5 py-1.5 font-semibold">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="p-3 whitespace-nowrap text-sm font-medium text-gray-800">
                                            Christina Bersh</td>
                                        <td class="p-3 whitespace-nowrap text-sm text-gray-800">
                                            45
                                        </td>
                                        <td class="p-3 whitespace-nowrap text-sm text-gray-800">
                                            4222
                                            River Rd, Columbus</td>
                                        <td class="p-3 whitespace-nowrap text-sm font-medium">
                                            <button type="button"
                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Projects -->
    <h1
        class="pt-16 sm:pt-24 font-extrabold text-blue-400 text-4xl md:text-6xl/18 tracking-wide max-w-5xl mx-auto text-center">
        Projects
    </h1>
</body>

</html>
