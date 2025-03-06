@extends('layouts.web')
@section('title')
    Team
@endsection
@section('content')
    <div class="bg-blue-950 min-h-screen py-48"
        style="background-image: url('/assets/svg/bg-curvy-lines.svg'); background-size: cover;">
        <div class="container mx-auto px-4">
            <div class="mb-10 ">
                <h1 class="text-4xl font-bold text-primary-50 mb-5 text-center">Our Leadership Team</h1>
                <p class="text-lg text-primary-50 text-center max-w-5xl mx-auto">
                    The visionary leadership team behind HAITRAC is comprised of education and industry experts who are
                    passionate about bridging the skills gap and empowering students to succeed in their careers. Our
                    leaders
                    are dedicated to fostering a culture of innovation and excellence, and are committed to ensuring that
                    our
                    institution continues to thrive and grow.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/api/placeholder/400/400" alt="Dr. Cheruiyot" class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h2 class="text-xl font-semibold text-blue-950">Dr. Cheruiyot</h2>
                        <p class="text-gray-600 mb-2">Board Chair</p>
                        <p class="text-sm text-gray-500">Strategic leadership and educational innovation expert</p>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/assets/leadership/a1.png" alt="Mr. Kiplagat" class="w-full h-64 object-contain">
                    <div class="p-6 text-center">
                        <h2 class="text-xl font-semibold text-blue-950">Mr. Kiplagat</h2>
                        <p class="text-gray-600 mb-2">CEO</p>
                        <p class="text-sm text-gray-500">Visionary leader driving institutional growth</p>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="/assets/leadership/a5.png" alt="Ms. Kapkiyai" class="w-full h-64 object-contain">
                    <div class="p-6 text-center">
                        <h2 class="text-xl font-semibold text-blue-950">Ms. Kapkiyai</h2>
                        <p class="text-gray-600 mb-2">Director</p>
                        <p class="text-sm text-gray-500">Dedicated to student development and educational excellence</p>
                    </div>
                </div>
            </div>

            <div class="mt-12 bg-white shadow-lg rounded-lg p-8">
                <h2 class="text-2xl font-semibold text-blue-950 mb-6 text-center">Our Team's Vision</h2>
                <p class="text-gray-600 text-center max-w-2xl mx-auto">
                    At HAITRAC, our leadership team is committed to transforming education through innovation, practical
                    training, and a deep commitment to student success. We believe in empowering students to become leaders,
                    problem-solvers, and change-makers in their respective fields.
                </p>
            </div>
        </div>
    </div>
@endsection
