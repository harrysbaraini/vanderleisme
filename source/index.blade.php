@extends('_layouts.master')

@section('body')
    <section class="pb-6 pt-6">
        <h1 class="mt-6 text-5xl font-bold leading-normal">Hey, I'm Vanderlei, <br>a <span class="text-brand">passionate</span> Web Developer.</h1>
        <p class="text-2xl mt-6 font-light w-1/3 text-grey-darker">I can talk <strong class="text-grey-darkest">PHP, JavaScript, Sass, Less, relational databases, NoSQL, Agile</strong>...</p>
    </section>

    <section class="pb-6 pt-6 flex items-center justify-center">
        <img class="p-6" src="http://via.placeholder.com/200x200" alt="Laravel">
        <img class="p-6" src="http://via.placeholder.com/200x200" alt="Vue.js">
        <img class="p-6" src="http://via.placeholder.com/200x200" alt="Sass">
    </section>

    <section class="bg-brand-lightest p-6 mb-6">
        <div class="mb-6 flex justify-around items-center">
            <div class="w-1/2 p-6">
                <p class="font-normal text-lg leading-loose text-grey-darkest">
                    I developed web applications for large companies like Globo - one of largest broadcasting companies in the world, Danone and Rio Olympics 2016. I led developers on projects for the largest pipe
                    manufacturer in South America, Tigre. Lately I have been working for Meu Cambio, a Brazilian Fintech startup, using <em class="text-brand-darker">Laravel</em> and <em class="text-brand-darker">Vue.js</em>.
                </p>
            </div>
            <div class="w-1/2 p-6 text-center">
                <img class="p-6" src="http://via.placeholder.com/320x320" alt="Duties">
            </div>
        </div>
        <div class="my-6 flex justify-center">
            <a href="#" class="bg-brand text-white no-underline p-6 text-2xl rounded-lg shadow hover:shadow-lg hover:bg-brand-dark">
                Download my <strong>Resume</strong>
            </a>
        </div>
    </section>

    <form class="bg-brand p-6 mt-6 mb-6 text-center">
        <h1 class="text-4xl text-white font-light mt-2">Get in touch!</h1>
        <div class="mt-6 mb-6 flex">
            <div class="w-1/2 p-4">
                <input type="text" required class="no-outline w-full p-4 bg-transparent text-grey-lightest border-b-2 border-white shadow hover:shadow-lg focus:shadow-lg" placeholder="Your name">
            </div>
            <div class="w-1/2 p-4">
                <input type="email" required class="no-outline w-full p-4 bg-transparent text-grey-lightest border-b-2 border-white shadow hover:shadow-lg focus:shadow-lg" placeholder="Your email">
            </div>
        </div>
        <div class="w-full p-4">
            <textarea name="message" required rows="6" class="no-outline w-full p-4 bg-transparent text-grey-lightest border-b-2 border-white shadow hover:shadow-lg focus:shadow-lg" placeholder="Your message"></textarea>
        </div>
        <div class="w-full text-center p-6">
            <button class="bg-brand border-2 border-white rounded-lg text-white p-4 text-xl shadow hover:shadow-lg hover:bg-brand-lighest">
                Send message
            </button>
        </div>
    </form>

    <footer class="mt-6 py-6 flex justify-between items-center text-grey-darker">
        <div class="flex-shrink">
            Copyright © 2018 Vanderlei Sbaraini Amancio.
        </div>
        <div class="flex-shrink text-right leading-normal">
            <a href="mailto:hello@vanderleis.me" class="text-grey-darker">hello@vanderleis.me</a> <br>
            <a href="https://api.whatsapp.com/send?phone=5547996911154" class="text-grey-darker">+55 47 99691-1154</a>
        </div>
    </footer>
@endsection
