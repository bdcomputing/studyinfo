@extends('layouts.web')
@section('title')
Homepage
@endsection
@section('content')

<main class="min-h-screen  text-gray-800 ">
    <!-- Hero Section -->
    <section class="relative bg-primary-100  md:h-[75dvh] z-0">
        <div class="container mx-auto h-full grid grid-cols-1 md:grid-cols-2 md:gap-10">
            <div class="text-primary z-40 py-20 md:py-0 md:pl-20 pb-5 md:pb-0 px-5 md:px-0 flex flex-col justify-center">
                <h1 class="text-3xl md:text-5xl  mb-6 font-extrabold leading-loose tracking-wide text-transparent md:w-max bg-gradient-to-r from-secondary to-accent-700 bg-clip-text">
                    Your Global Future Starts Here <br class="md:block hidden">Study Abroad with Confidence!
                </h1>
                <p class="text-lg mb-8 opacity-90 font-semibold">
                    Find your dream university, apply for scholarships, and get visa assistance -
                    <span class="text-secondary">all in one place.</span>
                </p>
                <div class="flex flex-wrap gap-5">
                    <a href="#" class="bg-gradient-to-br from-secondary  via-secondary/50 to-secondary   hover:bg-secondary-500 text-white font-medium py-3 px-6 rounded-full transition duration-300">
                        Talk to Expert
                    </a>
                    <a href="{{ route('web.programs.index') }}" class="bg-transparent hover:bg-gradient-to-br from-secondary  via-secondary/50 to-secondary    text-secondary hover:text-white font-medium py-3 px-6 rounded-full border-2 border-secondary/80">
                        Programs
                    </a>
                </div>
            </div>
            <div class="h-full  overflow-y-hidden relative z-50">
                <!-- <img src="{{ asset('/assets/images/hero3.webp') }}" alt="STUDYINFO Students" class="w-full hidden md:block h-full object-cover object-left"> -->
                <img src="{{ asset('/assets/images/hero.webp') }}" alt="STUDYINFO Students" class=" md:h-full w-full object-cover object-top  ">
            </div>
        </div>
        <!-- <div class="absolute top-0 left-0 z-10  bg-white/20 blur-sm h-full w-full"></div> -->
    </section>

    <div class="bg-white py-10">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-lg/8 font-bold text-primary">
                Our Partner Institutions
            </h2>
            <div
                class="mx-auto mt-5 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="{{ asset('/assets/logos/Kalenjins-abroas-300x171.png') }}"
                    alt="Transistor" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="{{ asset('/assets/logos/Holmes-300x115.png') }}" alt="Reform"
                    width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="{{ asset('/assets/logos/SI-UK-300x157.png') }}" alt="Tuple"
                    width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                    src="{{ asset('/assets/logos/uGGSPLogo-square.jpg') }}" alt="SavvyCal"
                    width="158" height="48">
                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                    src="{{ asset('/assets/logos/KNQA.jpeg') }}" alt="Statamic"
                    width="158" height="48">
            </div>
        </div>
    </div>
    <section class="py-20 p-5">
        <div class="grid container md:p-5 mx-auto grid-cols-1 md:grid-cols-2">
            <div class="">
                <div class="space-y-5">
                    <p class="text-primary font-bold md:text-2xl">We are StudyInfo</p>
                    <p class="">We have been guiding students through every step from program choice to visa application, including scholarship to achieve their study abroad dreams.</p>
                </div>
                <div class=" md:p-5 py-5 grid grid-cols-2 gap-2 md:gap-5">
                    <div class=" flex gap-2 justify-around items-center  rounded-xl bg-white border border-accent-100 hover:shadow-xl p-5 min-h-40">
                        <div class="flex">
                            <div class="space-y-2">
                                <p class="font-extrabold text-2xl md:text-3xl">10+</p>
                                <p class="text-sm md:text-base">Years of Experience</p>
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>

                        </div>
                    </div>
                    <div class=" flex gap-2 justify-around items-center rounded-xl bg-white border border-accent-100 hover:shadow p-5">

                        <div class="flex items-center">
                            <div class="space-y-2">
                                <p class="font-extrabold text-2xl md:text-3xl">60+</p>
                                <p class="text-sm md:text-base">University Partners</p>
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                            </svg>

                        </div>
                    </div>
                    <div class=" flex gap-2 md:gap-5 w-max gap-x-8 items-center justify-around p-5 rounded-xl col-span-2 min-h-40 bg-white border border-accent-100 hover:shadow">

                        <div class="flex items-center">
                            <div class="space-y-2">
                                <p class="font-extrabold  text-2xl md:text-3xl">15000+</p>
                                <p class="text-sm md:text-base">Students Successfully Recruited</p>
                            </div>
                        </div>
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
            <div class="md:p-5 py-5 order-first md:order-last">
                <img class=" rounded-xl" src="https://img.freepik.com/free-photo/portrait-flight-attendant-with-plane-figurine_23-2150282826.jpg?uid=R60960801&ga=GA1.1.567502610.1740925298" alt="">
            </div>
        </div>
    </section>
    <section class="bg-primary-50 p-5">
        <div class="container mx-auto py-20">
            <div class="text-center text-mb-12">
                <h2 class="text-2xl md:text-3xl font-extrabold text-primary mb-6">
                    Services for Students
                </h2>
            </div>


            <div class="grid md:grid-cols-2 lg:grid-cols-3  gap-8">
                @php
                $services = [
                [
                'title' => 'Student Counselling',
                'description' => 'We provide comprehensive career counseling and university placement services, guiding students to select suitable academic paths and securing admissions to top-tier international institutions.',
                'icon' => 'bi-people',
                ],
                [
                'title' => 'Visa Counselling',
                'description' => 'We facilitate visa processing and passport application, ensuring a smooth and efficient experience by assisting with documentation, application submission, and providing guidance throughout the entire process.',
                'icon' => 'bi-passport'
                ],
                [
                'title' => 'IELTS Training & Embassy Prep',
                'description' => 'We offer tailored international standards IELTS training and embassy preparation services to equip students with the skills and confidence needed to excel in their language exams and secure successful university applications and visa interviews.',
                'icon' => 'bi-newspaper'
                ],


                ];
                @endphp


                {{-- Credential Section --}}
                @foreach ($services as $service)
                <div class="bg-white p-5  border border-accent-100 hover:shadow hover:border-secondary-200 rounded-xl max-w-sm">

                    <div class="md:p-5  w-full bg-white/90 space-y-3">
                        <div class="flex justify-center p-5">
                            <i class="bi {{$service['icon']}} text-secondary text-5xl"></i>
                        </div>
                        <p class="font-bold text-primary">{{$service['title']}}</p>
                        <p class="line-clamp-2 ">{{$service['description']}}</p>
                        <div class="pt-5">
                            <button class="p-3 py-1.5 rounded-md bg-primary text-sm text-white">View Details</button>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class=" bg-gradient-to-b from-secondary-50/20 via-secondary-200 to-secondary-50/20 p-5">
        <div class="container mx-auto md:p-5">
            <div class="text-center md:py-20">
                <h2 class="text-2xl md:text-3xl font-extrabold text-primary  mb-6">
                    How we work
                </h2>
            </div>
            <div class=" grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-8 ">
                <div class="bg-white border border-gray-100 p-5 rounded-xl ">
                    <span class=" bg-secondary text-white  py-1 px-3 rounded-full">Step 1</span>
                    <div class="py-3 space-y-3">
                        <p class="font-bold text-base md:text-xl">Consult</p>
                        <p class="">Connect with expert to assess your educational goals and visa requirements</p>
                    </div>

                </div>
                <div class="bg-white border border-gray-100 p-5 rounded-xl">
                    <span class=" bg-secondary text-white  py-1 px-3 rounded-full">Step 2</span>
                    <div class="py-3 space-y-3">
                        <p class="font-bold text-base md:text-xl">Apply</p>
                        <p class="text-sm md:text-base">We guide you in selecting the right program, university and provide support for your visa application.</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-100 p-5 rounded-xl">
                    <span class=" bg-secondary text-white  py-1 px-3 rounded-full">Step 3</span>
                    <div class="py-3">
                        <p class="font-bold text-base md:text-xl">Fly</p>
                        <p class="text-sm md:text-base">Once you are approved you can start your juorney to your dream destination.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-20 px-4 sm:px-6 lg:px-8">

        <div class="container mx-auto">
            <div class="text-center md:py-20">
                <h2 class="text-2xl md:text-3xl font-extrabold text-primary mb-6">
                    Choose Your Study Destination
                </h2>
                <p class="md:text-lg text-gray-600 mb-6 max-w-2xl mx-auto font-bold">
                    Featured Destinations
                </p>
            </div>


            <div class="grid md:grid-cols-2 lg:grid-cols-4  gap-8">
                @php
                $destinations = [
                [
                'destination' => 'UK',
                'description' => '',
                'image' => 'https://img.freepik.com/free-photo/group-five-african-american-woman-walking-together-parking-with-great-britain-flag_627829-503.jpg?uid=R60960801&ga=GA1.1.567502610.1740925298',
                ],
                [
                'destination' => 'USA',
                'description' => '',
                'image' => 'https://img.freepik.com/free-photo/group-five-african-american-woman-walking-together-parking-with-usa-flag_627829-531.jpg?uid=R60960801&ga=GA1.1.567502610.1740925298'
                ],
                [
                'destination' => 'Australia',
                'description' => 'https://img.freepik.com/free-photo/woman-signing-papers-street_23-2147657212.jpg?uid=R60960801&ga=GA1.1.567502610.1740925298',
                'image' => 'https://img.freepik.com/free-photo/woman-signing-papers-street_23-2147657212.jpg?uid=R60960801&ga=GA1.1.567502610.1740925298'
                ],
                [
                'destination' => 'New Zealand',
                'description' => '',
                'image' => 'https://img.freepik.com/free-photo/teenage-girl-holding-book-hand-looking-his-boyfriend-showing-something-near-lake_23-2148093543.jpg?uid=R60960801&ga=GA1.1.567502610.1740925298'
                ],
                [
                'destination' => 'Germany',
                'description' => '',
                'image' => ' https://img.freepik.com/free-photo/beautiful-redhead-woman-red-hat-sits-with-backpack-thermos-using-digital-tablet-outdoors-conn_1258-151886.jpg?uid=R60960801&ga=GA1.1.567502610.1740925298'
                ],
                [
                'destination' => 'Canada',
                'description' => '',
                'image' => 'https://img.freepik.com/free-photo/portrait-male-student-with-books_23-2148882433.jpg?uid=R60960801&ga=GA1.1.567502610.1740925298'
                ],
                ];
                @endphp


                {{-- Credential Section --}}
                @foreach ($destinations as $destination)
                <div class="bg-white group relative border border-accent-100 shadow-sm  hover:shadow-lg rounded-xl max-w-sm">
                    <div class="overflow-hidden rounded-xl">
                        <img src="{{$destination['image']}}" class="transition-transform duration-500 group-hover:scale-105 overflow-hidden rounded-t-xl max-h-30 overflow-y-hidden object-cover  w-full" alt="">
                    </div>
                    <div class="p-5 bottom-0 absolute z-50 w-full bg-gradient-to-t from-secondary-50 via-white to-transparent">
                        <p class="font-bold text-primary">Study in {{$destination['destination']}}</p>
                        <button class="p-1  md:text-sm py-2 bg-secondy hover:underline  text-secondary">Read More</button>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="bg-white ">
        <div class="container px-6 py-20 mx-auto">
            <h1 class="text-2xl font-semibold text-center text-primary capitalize lg:text-3xl ">
                Inspiring Journeys of Students Who <span class="text-secondary ">Made It Big</span>
            </h1>

            <p class="max-w-2xl mx-auto mt-6 text-center text-gray-600 ">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error
                alias, adipisci rem similique, at omnis eligendi optio eos harum.
            </p>

            <section class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 lg:grid-cols-2 xl:grid-cols-3">
                <div class="p-8 border rounded-lg ">
                    <blockquote class="leading-loose text-gray-600  rounded-l  pl-3">
                        "Studying at MIT was a dream I never thought possible. With StudyInfo’s guidance,
                        I secured a scholarship, adjusted to campus life, and even interned at Google.
                        Today, I work at Microsoft, and I owe a huge part of my success to my study abroad journey.
                        If you’re thinking about studying overseas—do it! It will change your life!"
                    </blockquote>

                    <div class="flex items-center mt-8 -mx-2">
                        <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-primary " src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">

                        <div class="mx-2">
                            <h1 class="font-semibold text-gray-800 ">Robert</h1>
                            <span class="text-sm text-gray-500">CTO, Robert Consultency</span>
                        </div>
                    </div>
                </div>

                <div class="p-8 border rounded-lg ">
                    <blockquote class="leading-loose text-gray-600  rounded-l  pl-3">
                        "I was passionate about medicine, but financial challenges almost stopped me.
                        StudyInfo helped me apply for a full scholarship at Oxford, and my life completely transformed.
                        Today, I’m a practicing neurosurgeon, and I mentor students just like me.
                        If you’re doubting yourself, remember—there’s always a way!"
                    </blockquote>

                    <div class="flex items-center mt-8 -mx-2">
                        <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-primary " src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">

                        <div class="mx-2">
                            <h1 class="font-semibold text-gray-800 ">Jeny Doe</h1>
                            <span class="text-sm text-gray-500">CEO, Jeny Consultency</span>
                        </div>
                    </div>
                </div>

                <div class="p-8 border rounded-lg ">
                    <blockquote class="leading-loose text-gray-600  rounded-l  pl-3">
                        "I was hesitant to move to France because of the language barrier, but with StudyInfo’s support, I took an
                        intensive French course and fully immersed myself in the culture. Now, I lead global marketing campaigns, and I
                        owe my confidence and success to my study abroad experience!"
                    </blockquote>


                    <div class="flex items-center mt-8 -mx-2">
                        <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-primary " src="https://images.unsplash.com/photo-1488508872907-592763824245?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                        <div class="mx-2">
                            <h1 class="font-semibold text-gray-800 ">Ema Watson </h1>
                            <span class="text-sm text-gray-500">Marketing Manager at Stech</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <section class="p-5">
        <div class="container mx-auto md:p-5 ">
            <h1 class="text-2xl font-semibold text-center text-primary capitalize lg:text-3xl ">
                Upcoming Study Abroad Events
            </h1>
            <p class="py-3 max-w-3xl mx-auto">Stay informed about our latest study abroad events, webinars, and workshops! Whether you're looking for scholarship opportunities, visa guidance, or networking with alumni, we've got something for you.</p>
            <div class="p-5 grid grid-cols-1 md:grid-cols-3 gap-5">
                @forelse($events as $event)
                <div class="bg-white group relative border border-accent-100  hover:shadow-lg rounded-xl max-w-sm">
                    <div class="overflow-hidden rounded-xl ">
                        <img src="{{ asset('storage/' . $event->image) }}" class="transition-transform duration-500 group-hover:scale-105 overflow-hidden rounded-t-xl max-h-30 overflow-y-hidden object-cover w-full" alt="{{$event->title}}">
                    </div>
                    <div class="p-5 bottom-0 absolute z-50 w-full bg-white/90">
                        <p class="font-bold text-primary">{{$event->description}}</p>
                        <div class="py-3">
                            <p>Date: {{ $event->formatted_date }}</p>
                            <p>Time: {{ $event->formatted_time }}</p>
                        </div>
                        <a href="{{ route('web.events.show', $event->id) }}" class="p-1  md:text-sm  bg-secondy hover:underline  text-secondary">Read More</a>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <section class="bg-gray-50  lg:py-12 lg:flex lg:justify-center">
        <div
            class="overflow-hidden bg-white  border border-gray-100 lg:flex container mx-auto lg:shadow-md lg:rounded-xl">
            <div class="lg:w-1/2 h-80 overflow-hidden ">
                <img src="{{ asset('/assets/images/cover.webp') }}" class="object-contain object-center w-full" alt="">
                <!-- <div class="h-64 bg-cover lg:h-full" style="background-image:url(`{{ asset('/assets/images/cover.webp') }}`)"></div> -->
            </div>

            <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
                <h2 class="text-2xl font-semibold text-primary  md:text-3xl">
                    Start your Journey <span class="text-secondary">Today</span>
                </h2>

                <p class="mt-4 text-gray-600 font-bold">
                    Are you ready to fly and pursue your dreams? Reach us today and we will make that happen for you!
                </p>

                <div class="inline-flex w-full mt-6 sm:w-auto">
                    <a href="#" class="inline-flex items-center justify-center w-full px-6 py-2  md:text-sm text-white duration-300 bg-primary rounded-lg hover:bg-primary-900 focus:ring ">
                        Get Started </a>
                </div>
            </div>
        </div>
    </section>



    <script>
        // Smooth scrolling for anchor links
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    const target = document.querySelector(targetId);

                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>

</main>
@endsection()