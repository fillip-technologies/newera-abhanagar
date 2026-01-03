@section('content')

<x-hero-banner
    data-title="Mission, Vision & Values"
    data-description="Guiding principles that shape learning, character, and responsible global citizenship."
    data-image="/images/Slier2.jpeg"
    data-breadcrumb="Mission, Vision & Values" />

<!-- MISSION · VISION · VALUES -->
<section class="bg-white py-24 overflow-hidden">

    <div class="max-w-6xl mx-auto px-6">

        <!-- PAGE HEADING -->
        <div class="mb-16 reveal">
            <span class="inline-flex items-center gap-2 mb-3
                         text-sm font-semibold tracking-wide uppercase text-accent">
                <i class="fa-solid fa-bullseye"></i>
                Mission, Vision & Values
            </span>

            <h2 class="text-3xl sm:text-4xl font-bold text-textMain mb-4">
                Guiding Principles of New Era High School
            </h2>

            <p class="text-gray-600 max-w-3xl">
                Our mission, vision, and values define who we are as an institution
                and guide every step of our educational journey.
            </p>
        </div>

        <!-- MISSION -->
        <div class="mb-20 reveal delay-100">

            <div class="flex items-center gap-4 mb-5">
                <div class="text-primary text-3xl">
                    <i class="fa-solid fa-seedling"></i>
                </div>
                <h3 class="text-2xl font-semibold text-textMain">
                    Our Mission
                </h3>
            </div>

            <p class="text-gray-600 leading-relaxed max-w-4xl">
                At <strong>New Era High School</strong>, our mission is to help children
                learn and grow through quality education that nurtures intellectual,
                emotional, and moral development. We strive to build strong character,
                inspire a lifelong love for learning, and guide students to become
                well-rounded individuals who make a positive difference in the world.
            </p>
        </div>

        <!-- VISION -->
        <div class="mb-20 reveal delay-200">

            <div class="flex items-center gap-4 mb-5">
                <div class="text-primary text-3xl">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <h3 class="text-2xl font-semibold text-textMain">
                    Our Vision
                </h3>
            </div>

            <p class="text-gray-600 leading-relaxed max-w-4xl mb-4">
                We envision <strong>New Era High School</strong> as a center of
                educational excellence that inspires children to become kind,
                responsible, and globally aware leaders. We imagine a learning
                environment where every child discovers their unique potential
                and contributes meaningfully to society.
            </p>

            <p class="text-gray-600 leading-relaxed max-w-4xl">
                We aspire to remain at the forefront of educational innovation,
                embracing adaptability, continuous improvement, and community
                engagement while fostering a passion for lifelong learning.
            </p>
        </div>

        <!-- VALUES -->
        <div class="reveal delay-300">

            <div class="flex items-center gap-4 mb-6">
                <div class="text-primary text-3xl">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <h3 class="text-2xl font-semibold text-textMain">
                    Our Core Values
                </h3>
            </div>

            <!-- VALUES TEXT -->
            <p class="text-gray-600 leading-relaxed max-w-4xl mb-6">
                Our school nurtures a respectful and inclusive environment that
                encourages mutual respect among students and faculty from diverse
                religious, cultural, social, and economic backgrounds. We are united
                by our belief in humanity and shared responsibility.
            </p>

            <!-- VALUES QUOTE BLOCK -->
            <div class="bg-gray-50 border-l-4 border-accent p-6 rounded-xl max-w-4xl">
                <p class="text-gray-700 italic leading-relaxed">
                    “The Earth is but one country and mankind its citizens” <br>
                    <span class="not-italic font-semibold text-primary">
                        — Vasudhaiva Kutumbakam: The whole world is one family
                    </span>
                </p>
            </div>

            <p class="text-gray-600 leading-relaxed max-w-4xl mt-6">
                Our educational philosophy emphasizes balanced development across
                academic, spiritual, intellectual, social, moral, and physical
                dimensions. We aim to promote critical thinking, ethical conduct,
                and social responsibility, shaping individuals who excel academically
                and contribute positively to a global society.
            </p>

        </div>

    </div>
</section>
@endsection
@extends('layouts.app')