@extends('layouts.web')
@section('title')
    Apply for Admission
@endsection
@section('content')
    <div class="bg-gradient-to-br from-blue-100 to-white min-h-screen py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto bg-white shadow-2xl rounded-xl p-8">
                <div>
                    <h1 class="text-2xl md:text-3xl font-extrabold text-primary-500 mb-3 text-left">
                        Application Form
                    </h1>
                    <p class="text-gray-600 mb-8 text-left">
                        Please fill in the form below to apply for admission to HAITRAC.
                    </p>
                </div>
                <form class="space-y-6">
                    <!-- Personal Information -->
                    <div class="space-y-6">
                        <h2 class="text-xl font-semibold text-gray-700">Personal Information</h2>
                        <div class="grid md:grid-cols-2 gap-5">
                            <div>
                                <label for="firstName"
                                    class="block font-medium dark:text-white text-gray-600 text-sm pb-2">First
                                    Name</label>
                                <input type="text" placeholder="Enter your first name"
                                    class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white" />
                            </div>
                            <div>
                                <label for="lastName"
                                    class="block font-medium dark:text-white text-gray-600 text-sm pb-2">Last
                                    Name</label>
                                <input type="text" placeholder="Enter your last name"
                                    class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white" />
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-5">
                            <div>
                                <label for="dateOfBirth"
                                    class="block font-medium dark:text-white text-gray-600 text-sm pb-2">Date of
                                    Birth</label>
                                <input type="date"
                                    class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white" />
                            </div>
                            <div>
                                <label for="gender"
                                    class="block font-medium dark:text-white text-gray-600 text-sm pb-2">Gender</label>
                                <select
                                    class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white">
                                    <option value="">Select gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                    <option value="prefer-not-to-say">Prefer not to say</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-5">
                            <div>
                                <label for="email"
                                    class="block font-medium dark:text-white text-gray-600 text-sm pb-2">Email
                                    Address</label>
                                <input type="email" placeholder="your.email@example.com"
                                    class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white" />
                            </div>
                            <div>
                                <label for="phone"
                                    class="block font-medium dark:text-white text-gray-600 text-sm pb-2">Phone
                                    Number
                                </label>
                                <input type="phone" placeholder="+2547 1234 5678"
                                    class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white" />
                            </div>
                        </div>

                        <div>
                            <label for="country" class="block font-medium dark:text-white text-gray-600 text-sm pb-2">Where
                                are you from?</label>
                            <input type="text" placeholder="Enter your country"
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white" />
                        </div>
                    </div>

                    <!-- Educational Background -->
                    <div class="space-y-6">
                        <h2 class="text-xl font-semibold text-gray-700">Educational Background</h2>
                        <div>
                            <label class="block font-medium dark:text-white text-gray-600 text-sm pb-2">Highest Level of
                                Education</label>
                            <select
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white">
                                <option value="">Select education level</option>
                                <option>High School</option>
                                <option>Certificate</option>
                                <option>Diploma</option>
                                <option>Bachelor's Degree</option>
                                <option>Master's Degree</option>
                                <option>PhD</option>
                            </select>
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
                            <label class="block font-medium dark:text-white text-gray-600 text-sm pb-2">Preferred Class
                                Start Date</label>
                            <input type="date"
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white" />
                        </div>
                    </div>

                    <!-- Professional Background -->
                    <div class="space-y-6">
                        <h2 class="text-xl font-semibold text-gray-700">Professional Background</h2>
                        <div>
                            <label class="block font-medium dark:text-white text-gray-600 text-sm pb-2">Professional
                                Experience</label>
                            <textarea placeholder="How would you describe your professional background?"
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white"
                                rows="4"></textarea>
                        </div>

                        <div>
                            <label class="block font-medium dark:text-white text-gray-600 text-sm pb-2">Industry</label>
                            <select
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white">
                                <option value="">Select your industry</option>
                                <option>Technology</option>
                                <option>Healthcare</option>
                                <option>Manufacturing</option>
                                <option>Education</option>
                                <option>Finance</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div>
                            <label class="block font-medium dark:text-white text-gray-600 text-sm pb-2">How did you hear
                                about us?</label>
                            <select
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-coal-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-white">
                                <option value="">Select an option</option>
                                <option>Social Media</option>
                                <option>Friend/Family</option>
                                <option>Search Engine</option>
                                <option>Advertisement</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="text-center">
                        <button
                            class="bg-primary-600 text-white px-8 py-3 rounded-full hover:bg-primary-700 transition-colors">
                            Submit Application
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
