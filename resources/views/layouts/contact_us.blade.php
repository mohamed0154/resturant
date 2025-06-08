@extends('master')

@section('title', 'welcome')
@section('content')
    <section id="contact" class="py-16 px-6 bg-gray-100">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-4xl text-center text-red-600 font-bold mb-8">Contact Us</h2>
            <form class="space-y-6">
                <input type="text" placeholder="Your Name" class="w-full border border-gray-300 p-3 rounded" />
                <input type="email" placeholder="Your Email" class="w-full border border-gray-300 p-3 rounded" />
                <textarea placeholder="Your Message" rows="5" class="w-full border border-gray-300 p-3 rounded"></textarea>
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white py-3 px-6 rounded">Send
                    Message</button>
            </form>
        </div>
    </section>
@endsection
