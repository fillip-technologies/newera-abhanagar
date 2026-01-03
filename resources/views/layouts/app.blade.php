<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'New Era School')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- =====================================================
         TAILWIND CSS (Responsive by default)
    ====================================================== -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0F2E4A', // Deep academic teal
                        primaryDark: '#0C273F', // Darker shade
                        accent: '#B80212', // Warm gold (highlight)
                        light: '#ffffff',
                        textMain: '#1f2937',
                        glass: 'rgba(255,255,255,0.08)'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    },
                    borderRadius: {
                        menu: '18px'
                    }
                }
            }
        }
    </script>



    <!-- =====================================================
         GOOGLE FONT (Professional & Clean)
    ====================================================== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <!-- =====================================================
         FONT AWESOME (Icons)
    ====================================================== -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- =====================================================
         AOS – SCROLL ANIMATIONS
    ====================================================== -->
    <link rel="stylesheet"
        href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

    <!-- =====================================================
         FLATPICKR – DATE PICKER (Admissions, Exams, Events)
    ====================================================== -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- =====================================================
         SWEETALERT – Alerts & Popups (Optional but useful)
    ====================================================== -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="bg-gray-50 text-black-800 font-sans antialiased">

    {{-- Navbar --}}
    @include('partials.navbar')


    {{-- Page Content --}}
    <main class="">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    <!-- =====================================================
         JS CDNs
    ====================================================== -->

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 800
        });
    </script>

    <!-- Flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</body>

</html>