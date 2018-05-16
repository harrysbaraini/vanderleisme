@extends('_layouts.master')

@section('body')
    <section class="pb-6 pt-6">
        <h1 class="mt-6 text-4xl font-bold leading-normal text-center md:text-left md:text-5xl">
            Hey, I'm Vanderlei, <br>a <span class="text-brand">passionate</span> Web Developer.
        </h1>
        <p class="mt-6 font-light text-2xl text-grey-darker w-full text-center md:text-left md:w-1/3">I can talk <strong class="text-grey-darkest">PHP, JavaScript, Sass, Less, relational databases, NoSQL, Agile</strong>...</p>
    </section>

    <section class="pb-6 pt-6 flex items-center justify-center flex-col md:flex-row">
        <img class="p-6" src="/assets/img/laravel-logo.png" alt="Laravel">
        <img class="p-6" src="/assets/img/vue-logo.png" alt="Vue.js">
        <img class="p-6" src="/assets/img/sass-logo.png" alt="Sass">
    </section>

    <section class="bg-brand-lightest p-6 mb-6">
        <div class="mb-6 flex flex-col-reverse justify-around md:items-center md:flex-row">
            <div class="w-full md:w-1/2 md:p-6">
                <p class="font-normal text-lg leading-loose text-grey-darkest pb-2">
                    I developed web applications for large companies like Globo - one of largest broadcasting companies in the world, Danone and Rio Olympics 2016.
                </p>
                <p class="font-normal text-lg leading-loose text-grey-darkest pb-2">
                    I led developers on projects for the largest pipe manufacturer in South America, Tigre.
                </p>
                <p class="font-normal text-lg leading-loose text-grey-darkest">
                    Lately I have been working for Meu Cambio, a Brazilian Fintech startup, using <em class="text-brand-darker">Laravel</em> and <em class="text-brand-darker">Vue.js</em>.
                </p>
            </div>
            <div class="text-center w-full md:w-1/2 md:p-6">
                <img src="/assets/img/planning.png" alt="Duties">
            </div>
        </div>
        <div class="my-6 flex justify-center">
            @component('_components.resume-download-button') @endcomponent
        </div>
    </section>
@endsection
