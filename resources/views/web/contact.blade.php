@extends('layouts.web')
@section('title')
    Contact
@endsection
@section('content')
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white shadow-lg rounded-lg p-8">
                    <p class="text-primary-950">Get in Touch</p>
                    <h1 class="text-4xl font-bold text-secondary-800 mb-6">Let's Chat, Reach Out </br> to Us</h1>

                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="mb-4">
                                <label class="block font-medium dark:text-white text-gray-600 text-sm pb-2" for="firstName">
                                    First Name
                                </label>
                                <input
                                    class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white"
                                    id="firstName" type="text" placeholder="First Name">
                            </div>
                            <div class="mb-4">
                                <label class="block font-medium dark:text-white text-gray-600 text-sm pb-2" for="lastName">
                                    Last Name
                                </label>
                                <input
                                    class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white"
                                    id="lastName" type="text" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium dark:text-white text-gray-600 text-sm pb-2" for="phone">
                                Phone Number
                            </label>
                            <input
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white"
                                id="phone" type="text" placeholder="Phone Number">
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium dark:text-white text-gray-600 text-sm pb-2" for="email">
                                Email Address
                            </label>
                            <input
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white"
                                id="email" type="email" placeholder="your.email@example.com">
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium dark:text-white text-gray-600 text-sm pb-2" for="message">
                                Message
                            </label>
                            <textarea
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white"
                                id="message" rows="7" placeholder="Your message"></textarea>
                        </div>

                        <div class="flex items-start py-6">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox"
                                    class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white"
                                    formControlName="remember" />
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                I agree with the
                                <a href="#" class="text-primary-950 hover:underline dark:text-primary-500">terms and
                                    conditions</a>.
                            </label>
                        </div>


                        <div class="flex items-center justify-between w-full">
                            <button
                                class="bg-primary-600 hover:bg-primary-700 text-white font-bold py-2 px-4 rounded w-full focus:outline-none focus:shadow-outline"
                                type="button">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <div>
                    <div class="rounded-lg pb-5">
                        <img class="object-fit w-full h-96 rounded-3xl" src="/assets/images/contact.png" alt="">
                    </div>
                    <div class="bg-white shadow-lg rounded-3xl p-8">
                        <div class="space-y-4">
                            <div class="flex items-center bg-white shadow-lg rounded-lg p-5">
                                <div class="h-12 w-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div class="grid grid-cols-1 gap-1">
                                    <span class="text-secondary-950">Address</span>
                                    <span class="text-secondary-400">64 PLAZA, Eldoret-Kisumu Rd, ELDORET</span>
                                </div>
                            </div>
                            <div class="flex items-center bg-white shadow-lg rounded-lg p-5">
                                <div class="h-12 w-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="grid grid-cols-1 gap-1">
                                    <span class="text-secondary-950">Phone</span>
                                    <span class="text-secondary-400">+254 799 965 066</span>
                                </div>
                            </div>
                            <div class="flex items-center bg-white shadow-lg rounded-lg p-5">
                                <div class="h-12 w-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-primary-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="grid grid-cols-1 gap-1">
                                    <span class="text-secondary-950">Email</span>
                                    <span class="text-secondary-400">info@haitrac.com</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="bg-white shadow-lg rounded-lg p-8">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Office Hours</h2>
                        <div class="space-y-2 text-gray-600">
                            <div class="flex justify-between">
                                <span>Monday - Friday</span>
                                <span>8:00 AM - 5:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Saturday</span>
                                <span>9:00 AM - 1:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Sunday</span>
                                <span>Closed</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>


            <section class=" text-accent-300">
                <div class="container mx-auto py-10">
                    <div class="pb-5 px-4">
                        <p class="text-2xl font-semibold">How to Find Us</p>
                        <p class="text-sm text-secondary-300">
                            Use the map below to locate our offices
                        </p>
                    </div>

                    <div class="flex justify-center">
                        <div class="w-full shadow-lg rounded-lg overflow-hidden bg-white">
                            <iframe class="w-full h-76 md:h-96 rounded-lg"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d498.7095023588047!2d35.266306071296874!3d0.48391274263633166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1780fe2e3974caf9%3A0x23bacfef29871a70!2s64%20Plaza!5e0!3m2!1sen!2ske!4v1741155223727!5m2!1sen!2ske"
                                width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
