@extends('_layouts.master')

@section('body')
    <section class="pb-6 pt-6">
        <h1 class="mt-6 text-5xl font-bold leading-normal">Hey, I'm Vanderlei, <br>a <span class="text-brand">passionate</span> Web Developer.</h1>
        <p class="text-2xl mt-6 font-light w-1/3 text-grey-darker">I can talk <strong class="text-grey-darkest">PHP, JavaScript, Sass, Less, relational databases, NoSQL, Agile</strong>...</p>
    </section>

    <section class="pb-6 pt-6 flex items-center justify-center">
        <img class="p-6" src="/assets/img/laravel-logo.png" alt="Laravel">
        <img class="p-6" src="/assets/img/vue-logo.png" alt="Vue.js">
        <img class="p-6" src="/assets/img/sass-logo.png" alt="Sass">
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
                <img src="/assets/img/planning.png" alt="Duties">
            </div>
        </div>
        <div class="my-6 flex justify-center">
            <a href="/assets/files/vanderlei-amancio-resume-cover-letter.pdf" target="_blank" class="bg-brand text-white no-underline p-6 text-2xl rounded-lg shadow hover:shadow-lg hover:bg-brand-dark">
                Download my <strong>Resume</strong>
            </a>
        </div>
    </section>
@endsection
