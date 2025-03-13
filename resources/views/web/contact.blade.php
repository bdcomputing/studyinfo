@extends('layouts.web')
@section('title')
Contact
@endsection
@section('content')

<div class="bg-gray-50 min-h-screen py-12">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12">
            <div class="bg-white p-8">
                <p class="py-5 font-bold text-xl md:text-2xl text-primary">Let’s Make Your Study Abroad Dream a Reality!</p>

                <h1 class="text-sm md:text-base text-accent-800 mb-6">
                    Have questions about studying abroad? Our team is here to
                    help with everything from university selection to visa processing.
                    Reach out to us today!</h1>

                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="mb-4">
                            <label class="block font-medium  text-gray-600 text-sm pb-2" for="firstName">
                                First Name
                            </label>
                            <input
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-primary text-sm rounded-lg block w-full p-2.5  "
                                id="firstName" type="text" placeholder="First Name">
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium  text-gray-600 text-sm pb-2" for="lastName">
                                Last Name
                            </label>
                            <input
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-primary text-sm rounded-lg block w-full p-2.5  "
                                id="lastName" type="text" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium  text-gray-600 text-sm pb-2" for="phone">
                            Phone Number
                        </label>
                        <input
                            class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-primary text-sm rounded-lg block w-full p-2.5  "
                            id="phone" type="text" placeholder="Phone Number">
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium  text-gray-600 text-sm pb-2" for="email">
                            Email Address
                        </label>
                        <input
                            class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-primary text-sm rounded-lg block w-full p-2.5  "
                            id="email" type="email" placeholder="your.email@example.com">
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium  text-gray-600 text-sm pb-2" for="message">
                            Message
                        </label>
                        <textarea
                            class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-primary text-sm rounded-lg block w-full p-2.5  "
                            id="message" rows="7" placeholder="Your message"></textarea>
                    </div>

                    <div class="flex items-start py-6">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox"
                                class="bg-gray-50 focus:border-primary-600 focus:ring-primary-600 border border-gray-200 text-primary text-sm rounded-lg block w-full p-2.5  "
                                formControlName="remember" />
                        </div>
                        <label for="remember" class="ms-2 text-sm font-medium text-primary ">
                            I agree with the
                            <a href="#" class="text-primary-500 hover:underline ">terms and
                                conditions</a>.
                        </label>
                    </div>


                    <div class="flex items-center justify-between w-full">
                        <button
                            class="bg-primary hover:bg-primary-900 text-white font-bold py-2 px-4 rounded w-full focus:outline-none focus:shadow-outline"
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
                <div class="bg-white rounded-3xl p-8">
                    <div class="">
                        <div class="space-y-3 rounded-lg p-5">
                            <div class="flex items-center gap-3">
                                <i class="bi bi-geo-alt text-2xl"></i> Address
                            </div>
                            <p class="text-gray-600 text-sm">Daima Towers, Uganda Rd, ELDORET</p>
                        </div>
                        <div class="space-y-3 rounded-lg p-5">
                            <div class="flex items-center gap-3">
                                <i class="bi bi-telephone text-2xl"></i> Phone
                            </div>
                            <p class="text-gray-600 text-sm">+254 799 965 066</p>
                        </div>
                        <div class="space-y-3 rounded-lg p-5">
                            <div class="flex items-center gap-3">
                                <i class="bi bi-envelope-at text-2xl"></i> Email
                            </div>
                            <p class="text-gray-600 text-sm">info@haitrac.com</p>
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


        <section class="">
            <div class="container mx-auto py-10">
                <div class="pb-5 px-4">
                    <p class="text-2xl font-semibold">How to Find Us</p>
                    <p class="text-sm">
                        Use the map below to locate our offices
                    </p>
                </div>

                <div class="flex justify-center">
                    <div class="w-full shadow-lg rounded-lg overflow-hidden bg-white">
                        <iframe class="w-full h-76 md:h-96 rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6566412235743!2d35.27946267586389!3d0.5158096994791491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178101986728c90f%3A0x485aa4f9417d759!2sDaima%20Towers%20(MUPS)!5e0!3m2!1sen!2ske!4v1741436100837!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection