@section('content')

<x-hero-banner
    data-title="Corporate & Social Responsibility (CSR)"
    data-description="Encouraging students to care for society, protect the environment, and grow as responsible, compassionate global citizens."
    data-image="/images/Slier2.jpeg"
    data-breadcrumb="Corporate & Social Responsibility" />


<!-- CORPORATE & SOCIAL RESPONSIBILITY -->
<section class="bg-gray-50 py-24 overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <!-- SECTION HEADER -->
        <div class="max-w-3xl mb-16 reveal">
            <span class="inline-flex items-center gap-2 mb-3
                         text-sm font-semibold tracking-wide uppercase text-accent">
                <i class="fa-solid fa-hand-holding-heart"></i>
                Corporate & Social Responsibility
            </span>

            <h2 class="text-3xl sm:text-4xl font-bold text-textMain mb-4">
                Learning to Care, Act, and Make a Difference
            </h2>

            <p class="text-gray-600 text-base sm:text-lg">
                At New Era High School, social responsibility is an essential part
                of education. We believe that true learning goes beyond classrooms
                and textbooks—it is about empathy, awareness, and positive action.
            </p>
        </div>

        <!-- MAIN CONTENT -->
        <div class="grid lg:grid-cols-2 gap-16 items-start">

            <!-- LEFT : STORY -->
            <div class="reveal delay-100">

                <p class="text-gray-600 leading-relaxed mb-5">
                    Our approach to education encourages students to understand
                    their role in society and the impact of their actions on
                    people and the environment. Through daily learning and
                    real-life experiences, we help students grow into kind,
                    responsible, and socially aware individuals.
                </p>

                <p class="text-gray-600 leading-relaxed mb-5">
                    Students at New Era High School actively participate in
                    community service initiatives, environmental awareness
                    programs, and social responsibility projects. These
                    experiences help them realize that even small efforts
                    can bring meaningful change.
                </p>

                <p class="text-gray-600 leading-relaxed">
                    By encouraging students to take initiative and responsibility,
                    we nurture a sense of purpose and confidence, empowering
                    them to contribute positively to society and the planet.
                </p>

            </div>

            <!-- RIGHT : CSR PILLARS -->
            <div class="space-y-10">

                <!-- PILLAR 1 -->
                <div class="flex gap-5 reveal delay-200">
                    <div class="text-primary text-2xl mt-1">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-textMain mb-1">
                            Community Engagement
                        </h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Students take part in community outreach activities,
                            awareness drives, and social initiatives that promote
                            empathy, cooperation, and civic responsibility.
                        </p>
                    </div>
                </div>

                <!-- PILLAR 2 -->
                <div class="flex gap-5 reveal delay-300">
                    <div class="text-primary text-2xl mt-1">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-textMain mb-1">
                            Environmental Responsibility
                        </h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Environmental clean-up drives, sustainability projects,
                            and awareness programs teach students the importance
                            of protecting and preserving our planet.
                        </p>
                    </div>
                </div>

                <!-- PILLAR 3 -->
                <div class="flex gap-5 reveal delay-400">
                    <div class="text-primary text-2xl mt-1">
                        <i class="fa-solid fa-scale-balanced"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-textMain mb-1">
                            Ethics & Moral Values
                        </h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Ethical behavior and integrity are central to our
                            teaching. Our educators lead by example, guiding
                            students to become honest, respectful, and responsible
                            individuals.
                        </p>
                    </div>
                </div>

            </div>

        </div>

        <!-- QUOTE / CLOSING -->
        <div class="mt-20 reveal delay-500">

            <div class="bg-white border-l-4 border-accent p-8 rounded-xl max-w-4xl">
                <p class="text-gray-700 italic leading-relaxed text-lg">
                    “At New Era High School, we educate not only the mind,
                    but also the heart—preparing students to be thoughtful,
                    ethical, and responsible citizens of the world.”
                </p>
            </div>

        </div>

    </div>
</section>

@endsection
@extends('layouts.app')