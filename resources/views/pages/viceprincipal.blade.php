@section('content')

<x-hero-banner
    data-title="Vice Principal's Message"
    data-description="Inspiring students to grow with integrity, discipline, and a strong commitment to academic excellence."
    data-image="/images/Slier2.jpeg"
    data-breadcrumb="Vice Principal's Message" />



<!-- MESSAGE FROM THE VICE PRINCIPAL -->
<section class="bg-gray-50 py-24 overflow-hidden">

    <div class="max-w-5xl mx-auto px-6">

        <div class="reveal">

            <!-- Label -->
            <span class="inline-flex items-center gap-2 mb-4
                         text-sm font-semibold tracking-wide uppercase text-accent">
                <i class="fa-solid fa-user-shield"></i>
                Message from the Vice Principal
            </span>

            <!-- Heading -->
            <h2 class="text-3xl sm:text-4xl font-bold text-textMain mb-6">
                Welcome to New Era High School, Abha Nagar
            </h2>

            <!-- Message Content -->
            <p class="text-gray-600 leading-relaxed mb-5">
                It is our commitment at <strong>New Era High School</strong> to provide
                a well-rounded and quality education that supports the intellectual,
                emotional, and moral development of every child. We believe that
                education is not confined to textbooks, but is a continuous process
                of learning, exploration, and self-discovery.
            </p>

            <p class="text-gray-600 leading-relaxed mb-5">
                Guided by the principles of the <strong>CBSE curriculum</strong>, our
                focus remains on developing critical thinking, creativity, discipline,
                and strong values in our students. With the dedicated efforts of our
                teachers and the active cooperation of parents, we strive to create
                a safe, inclusive, and stimulating learning environment where each
                learner feels encouraged to grow with confidence.
            </p>

            <p class="text-gray-600 leading-relaxed">
                As we prepare our students to meet the challenges of a changing world,
                we emphasize responsibility, respect, and lifelong learning. Let us
                continue to inspire young minds to dream together, to learn, and to
                lead with integrity.
            </p>

            <!-- Divider -->
            <div class="w-16 h-1 bg-accent my-8 rounded-full"></div>

            <!-- Signature -->
            <div>
                <p class="font-semibold text-textMain">
                    Warm regards,
                </p>
                <p class="font-bold text-primary text-lg">
                    Dinah Mariam Jerry
                </p>
                <p class="text-sm text-gray-600">
                    Vice Principal<br>
                    New Era High School, Abha Nagar
                </p>
            </div>

        </div>

    </div>
</section>



@endsection
@extends('layouts.app')