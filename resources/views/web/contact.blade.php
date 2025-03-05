@extends('layouts.web')
@section('title')
    Contact
@endsection
@section('content')
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h1 class="text-4xl font-bold text-primary-400 mb-6">Contact HAITRAC</h1>
                    <form class="bg-white shadow-lg rounded-lg p-8">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Full Name
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name" type="text" placeholder="Your Name">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                                Phone Number
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="phone" type="text" placeholder="Phone Number">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                Email Address
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" type="email" placeholder="your.email@example.com">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                                Message
                            </label>
                            <textarea
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="message" rows="4" placeholder="Your message"></textarea>
                        </div>
                        <div class="flex items-center justify-between">
                            <button
                                class="bg-primary-600 hover:bg-primary-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="button">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <div>
                    <div class="bg-white shadow-lg rounded-lg p-8 mb-8">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Contact Information</h2>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-primary-500 mr-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>64 PLAZA, Eldoret-Kisumu Rd, ELDORET</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-primary-500 mr-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                <span>+254 799 965 066</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-primary-500 mr-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span>info@haitrac.com</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white shadow-lg rounded-lg p-8">
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
                    </div>
                </div>
            </div>


            <section class=" text-accent-300">
                <div class="container mx-auto py-10">
                    <div class="pb-5 px-4">
                        <p class="text-2xl font-semibold">How to find us</p>
                        <p class="text-sm text-secondary-300">
                            Use the map below to locate our offices
                        </p>
                    </div>

                    <div class="flex justify-center">
                        <div class="w-full shadow-lg rounded-lg overflow-hidden bg-white">
                            <iframe class="w-full h-64 md:h-80 rounded-lg"
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
