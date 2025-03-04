@extends('layouts.web')
@section('title')
    Apply for Admission
@endsection
@section('content')
    <div class="bg-gradient-to-br from-blue-100 to-white min-h-screen py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto bg-white shadow-2xl rounded-xl p-8">
                <h1 class="text-3xl md:text-4xl font-bold text-blue-900 mb-8 text-center">
                    Application Form
                </h1>

                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">First Name</label>
                            <input type="text"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Last Name</label>
                            <input type="text"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Email Address</label>
                        <input type="email"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Program of Interest</label>
                        <select
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>Nursing</option>
                            <option>ICT</option>
                            <option>Mechanical Engineering</option>
                            <option>Short Courses</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Message</label>
                        <textarea class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4"></textarea>
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
