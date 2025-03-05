@extends('layouts.web')
@section('title')
    Apply for Admission
@endsection
@section('content')
    <div class="bg-gradient-to-br from-blue-100 to-white min-h-screen py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto bg-white shadow-2xl rounded-xl p-8">
                <h1 class="text-3xl md:text-4xl font-bold text-primary-900 mb-8 text-center">
                    Application Form
                </h1>

                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <label for="firstName" class="block font-medium dark:text-white text-gray-600 text-sm pb-2">First
                                Name</label>
                            <input type="text" placeholder="Enter your first name"
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white" />
                        </div>
                        <div>
                            <label for="lastName" class="block font-medium dark:text-white text-gray-600 text-sm pb-2">Last
                                Name</label>
                            <input type="text" placeholder="Enter your last name"
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white" />
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <label for="email" class="block font-medium dark:text-white text-gray-600 text-sm pb-2">Email
                                Address</label>
                            <input type="email" placeholder="your.email@example.com"
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white" />
                        </div>
                        <div>
                            <label for="phone" class="block font-medium dark:text-white text-gray-600 text-sm pb-2">Phone
                                Number
                            </label>
                            <input type="phone" placeholder="+2547 1234 5678"
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white" />
                        </div>
                    </div>

                    <div>
                        <label class="block font-medium dark:text-white text-gray-600 text-sm pb-2">Program of
                            Interest</label>
                        <select
                            class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white">
                            <option value="">Select a program</option>
                            <option>Nursing</option>
                            <option>ICT</option>
                            <option>Mechanical Engineering</option>
                            <option>Short Courses</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-medium dark:text-white text-gray-600 text-sm pb-2">Message</label>
                        <textarea placeholder="Tell us about your educational background and why you're interested in this program"
                            class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white"
                            rows="6"></textarea>
                    </div>

                    <div class="text-center">
                        <button class="bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700 transition-colors">
                            Submit Application
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
