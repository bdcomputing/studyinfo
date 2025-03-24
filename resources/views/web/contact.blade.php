@extends('layouts.web')
@section('title')
    Contact
@endsection
@section('content')
    <div class="py-8">
        <div class="container mx-auto ">


            {{-- Contact Form --}}
            <div class="grid md:grid-cols-2  pt-5 md:pt-8 lg:pt-10">
                <div class="bg-white p-5">
                    <p class="py-5 font-bold text-xl md:text-2xl text-primary">Send us a Message
                    </p>



                    <form method="POST" action="{{ route('web.messages.store') }}">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="mb-4">
                                <label class="block font-medium  text-gray-600  pb-2" for="first_name">
                                    First Name
                                </label>
                                <input value="{{ old('first_name') }}"
                                    class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-primary  rounded-lg block w-full p-2.5  "
                                    name="first_name" type="text" placeholder="First Name">
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>
                            <div class="mb-4">
                                <label class="block font-medium  text-gray-600  pb-2" for="last_name">
                                    Last Name
                                </label>
                                <input value="{{ old('last_name') }}"
                                    class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-primary  rounded-lg block w-full p-2.5  "
                                    name="last_name" type="text" placeholder="Last Name">
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium  text-gray-600  pb-2" for="phone">
                                Phone Number
                            </label>
                            <input value="{{ old('phone') }}"
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-primary  rounded-lg block w-full p-2.5  "
                                name="phone" type="text" placeholder="Phone Number">
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium  text-gray-600  pb-2" for="email">
                                Email Address
                            </label>
                            <input value="{{ old('email') }}"
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-primary  rounded-lg block w-full p-2.5  "
                                name="email" type="email" placeholder="your.email@example.com">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium  text-gray-600  pb-2" for="message">
                                Message
                            </label>
                            <textarea
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-primary  rounded-lg block w-full p-2.5  "
                                name="message" rows="7" placeholder="Your message">{{ old('message') }}</textarea>
                            <x-input-error :messages="$errors->get('message')" class="mt-2" />
                        </div>

                        <div class="flex items-start py-6">
                            <div class="flex items-center h-5">
                                <input name="agree_terms" type="checkbox" value="1"
                                    {{ old('agree_terms') ? 'checked' : '' }}
                                    class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-primary  rounded-lg block w-full p-2.5  " />
                            </div>
                            <label for="agree_terms" class="ms-2  font-medium text-primary ">
                                I agree with the
                                <a href="#" class="text-primary-500 hover:underline ">terms and
                                    conditions</a>.
                            </label>
                        </div>
                        <x-input-error :messages="$errors->get('agree_terms')" class="mb-2" />


                        <div class="flex items-center justify-between w-full">
                            <button
                                class="bg-primary hover:bg-primary-900 text-white font-bold py-2 px-4 rounded h-full w-full focus:outline-none focus:shadow-outline"
                                type="submit">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <div>

                    <div class="bg-white rounded-3xl p-8">
                        <div class=" py-8">
                            <div class="py-5 space-y-3 text-gray-600">
                                <h1 class="text-2xl font-bold">Get in Touch with Us Today </h1>
                                <p>We're here to help you embark on your international education journey. Reach out to us
                                    with
                                    any questions!</p>
                            </div>
                            <h2 class="text-xl font-semibold text-gray-800 mb-4">Office Hours</h2>
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
            </div>



        </div>
        <div class="container mx-auto px-4 ">
            <div class="md:text-center">
                <p class="py-5 font-bold text-xl md:text-2xl text-primary prose mx-auto">Let’s Make Your Study Abroad Dream
                    a
                    Reality!
                </p>

                <h1 class=" md:text-base text-accent-800 mb-6 prose mx-auto">
                    Have questions about studying abroad? Our team is here to
                    help with everything from university selection to visa processing.
                    Reach out to us today!</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-12">

                {{-- Map --}}
                <div class="pb-5 md:px-4">
                    <p class="text-2xl font-semibold">How to Find Us</p>
                    <p class="">
                        Use the map below to locate our offices
                    </p>
                    <div class="flex justify-center pt-5">
                        <div class="w-full  rounded-lg overflow-hidden">
                            <iframe class="w-full h-72 md:h-96 rounded-lg"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6566412235743!2d35.27946267586389!3d0.5158096994791491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178101986728c90f%3A0x485aa4f9417d759!2sDaima%20Towers%20(MUPS)!5e0!3m2!1sen!2ske!4v1741436100837!5m2!1sen!2ske"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class=" pt-5">
                    <div class="">
                        <h2 class="py-5 font-bold text-xl">Contact Information</h2>
                        <div class="space-y-3 rounded-lg ">
                            <div class="flex items-center gap-3">
                                <i class="bi bi-geo-alt text-2xl"></i> Address
                            </div>
                            <p class="text-gray-600 ">Daima Towers, Uganda Rd, ELDORET</p>
                        </div>
                        <div class="space-y-3 rounded-lg ">
                            <div class="flex items-center gap-3">
                                <i class="bi bi-telephone text-2xl"></i> Phone
                            </div>
                            <p class="text-gray-600 ">+254 799 965 066</p>
                        </div>
                        <div class="space-y-3 rounded-lg ">
                            <div class="flex items-center gap-3">
                                <i class="bi bi-envelope-at text-2xl"></i> Email
                            </div>
                            <p class="text-gray-600 ">info@stufyinfo.com</p>
                        </div>

                        <h2 class="py-5 font-bold text-xl">Connect with us on our socials</h2>
                        <div class="flex items-center gap-3">
                            <a href="#" class="text-gray-600 hover:text-primary">
                                <i class="bi bi-facebook text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-primary">
                                <i class="bi bi-twitter-x text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-primary">
                                <i class="bi bi-instagram text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-primary">
                                <i class="bi bi-linkedin text-2xl "></i>
                            </a>
                        </div>

                    </div>
                </div>


            </div>
        </div>


    </div>
@endsection
