@extends('_layouts.master')

@section('body')
    <main class="flex justify-center">
        <div class="w-full md:w-3/4 lg:w-2/3">
            <section class="p-6 text-center">
                <h1 class="mt-6 text-5xl font-bold leading-normal">Vanderlei Sbaraini Amancio</h1>
                <h2 class="text-3xl font-bold text-grey">Web Developer</h2>
            </section>

            <section class="flex p-6 justify-center">
                <figure class="rounded-full overflow-hidden p-2 shadow-lg">
                    <img src="/assets/img/profile.jpg" alt="Vanderlei Amancio" class="rounded-full">
                </figure>
            </section>

            <section class="p-6">
                <h3 class="text-3xl font-bold text-brand mb-8">Overview</h3>
                <p class="text-xl leading-normal text-grey-darkest mb-6">
                    I started with PHP using a custom framework, and I have used Zend and Symfony on the past. Lately, Laravel is my framework of choice. On the front-end side I like the concept of functional CSS, but I also work with
                    Bootstrap. I
                    have worked with jQuery for a long time, having migrated to VueJS since its first iterations.
                </p>
                <p class="text-xl leading-normal text-grey-darkest mb-6">
                    I developed web applications for large companies like Globo (one of largest broadcasting companies in the world), Danone and Rio Olympics 2016. I led developers on projects for the largest pipe manufacturer in South
                    America, Tigre. Currently I work for Meu Cambio, a Brazilian Fintech startup, using Laravel and VueJS.
                </p>
                <p class="text-xl leading-normal text-grey-darkest mb-6">
                    I have used Scrum and Kanban methodologies, and currently I am planning for my Bachelor’s Thesis a new Agile methodology targeted to digital agencies.
                </p>
                <p class="text-xl leading-normal text-grey-darkest mb-6">
                    I greatly enjoy new concepts, understanding their use and how it can fit into my development activities. Lately, I have been involved in back-end code, but I can write front-end code. If needed, I can also help with
                    DevOps-wise stuff.
                </p>
            </section>

            <section class="p-6">
                <h3 class="text-3xl font-bold text-brand mb-8">Experience</h3>

                @foreach ($jobs->sortByDesc('filename') as $job)
                    <article class="text-base text-grey-darkest mb-8 leading-normal">
                        <h4 class="text-2xl font-normal">{{ $job->company }}</h4>
                        <p class="text-base text-grey-darker">{{ $job->title }}</p>
                        <p class="text-sm text-grey my-4">
                            {{ $job->period }} <br> {{ $job->tech }}
                        </p>

                        {!! $job->getContent() !!}
                    </article>
                @endforeach
            </section>

            <section class="p-6">
                <h3 class="text-3xl font-bold text-brand mb-8">Education</h3>

                <article class="text-base text-grey-darkest mb-8 leading-normal">
                    <h4 class="text-2xl font-normal">University of Joinville</h4>
                    <p class="text-base text-grey-darker">Bsc Software Engineering</p>
                    <p class="text-sm text-grey my-4">
                        Mar 2014 - current (estimated to Nov 2018)
                    </p>

                    <ul>
                        <li>Researched, authored and presented a +50 pages document for a yearly project about Business Intelligence.</li>
                        <li>On my final thesis I'm researching how digital agencies apply agile methodologies to discover flaws and problems with these methodologies, with the objective of elaborating a new development process oriented to
                            digital agencies.
                        </li>
                    </ul>
                </article>
            </section>
        </div>
    </main>

    <div class="mb-6 pb-6 flex justify-center">
        @component('_components.resume-download-button') @endcomponent
    </div>
@endsection
