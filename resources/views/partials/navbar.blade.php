<!-- HEADER -->
<header
    class="fixed top-0 w-full z-50
           bg-gradient-to-r from-primary to-primaryDark
           backdrop-blur-md border-b border-gray-200">

    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-20 relative">

            <!-- LOGO -->
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/neweragyanchak.png') }}"
                    alt="New Era High School"
                    class="h-16 w-auto">
            </a>

            <!-- DESKTOP NAV -->
            <nav class="hidden lg:flex items-center gap-8 text-sm font-medium text-white">

                <!-- ABOUT -->
                <div class="relative nav-item">
                    <button class="nav-btn flex items-center gap-1">
                        About
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div class="dropdown-menu absolute left-0 top-full mt-3 w-72 bg-white
                    rounded-xl shadow-xl hidden z-50">
                        <ul class="py-3 text-sm text-gray-700">
                            <li class="px-6 py-2">
                                <a href="{{ route('about') }}"
                                    class="block hover:text-accent transition">
                                    About Us
                                </a>
                            </li>

                            <li class="px-6 py-2">
                                <a href="{{ route('why') }}"
                                    class="block hover:text-accent transition">
                                    Why Choose Us
                                </a>
                            </li>
                            <li class="px-6 py-2">
                                <a href="{{ route('principalmessage') }}"
                                    class="block hover:text-accent transition">
                                    Principal's Message
                                </a>
                            </li>
                            <li class="px-6 py-2">
                                <a href="{{ route('viceprincipalmessage') }}"
                                    class="block hover:text-accent transition">
                                    Vice Principal's Message
                                </a>
                            </li>
                            <li class="px-6 py-2">
                                <a href="{{ route('missionvision') }}"
                                    class="block hover:text-accent transition">
                                    Mission & Vision
                                </a>
                            </li>

                            <li class="px-6 py-2">
                                <a href="{{ route('csr') }}"
                                    class="block hover:text-accent transition">
                                    CSR
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <!-- ADMISSION -->
                <div class="relative nav-item">
                    <button class="nav-btn flex items-center gap-1">
                        Admission
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div class="dropdown-menu absolute left-0 top-full mt-3 w-72 bg-white
                    rounded-xl shadow-xl hidden z-50">
                        <ul class="py-3 text-sm text-gray-700">

                            <li class="px-6 py-2">
                                <a href="{{ route('procedures') }}" class="block hover:text-accent transition">
                                    Procedure
                                </a>
                            </li>

                            <li class="px-6 py-2">
                                <a href="{{ route('annualfeestructure') }}" class="block hover:text-accent transition">
                                    Annual Fee Structure
                                </a>
                            </li>

                            <li class="px-6 py-2">
                                <a href="{{ route('transfercertificate') }}" class="block hover:text-accent transition">
                                    Transfer Certificate
                                </a>
                            </li>

                            <li class="px-6 py-2">
                                <a href="{{ route('academiccalendar') }}" class="block hover:text-accent transition">
                                    Academic Calendar
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- STUDENTS -->
                <div class="relative nav-item">
                    <button class="nav-btn flex items-center gap-1">
                        Students
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div class="dropdown-menu absolute left-0 top-full mt-3 w-72 bg-white
                    rounded-xl shadow-xl hidden z-50">
                        <ul class="py-3 text-sm text-gray-700">
                            <li class="px-6 py-2">Students Life</li>
                            <li class="px-6 py-2">For Parents</li>
                            <li class="px-6 py-2">New Era Bulletin</li>
                        </ul>
                    </div>
                </div>

                <!-- TEAM -->
                <div class="relative nav-item">
                    <button class="nav-btn flex items-center gap-1">
                        Team
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div class="dropdown-menu absolute left-0 top-full mt-3 w-72 bg-white
                    rounded-xl shadow-xl hidden z-50">
                        <ul class="py-3 text-sm text-gray-700">
                            <li class="px-6 py-2">Teaching Staff</li>
                            <li class="px-6 py-2">Administrative Team</li>
                        </ul>
                    </div>
                </div>

                <a href="#">Infrastructure</a>
                <a href="#">Mandatory</a>
                <a href="#">Gallery</a>
                <a href="#">Contact</a>
            </nav>


            <!-- CTA + MOBILE MENU -->
            <div class="flex items-center gap-4">
                <a href="#"
                    class="hidden lg:inline-flex items-center gap-2 px-5 py-2 rounded-lg
               bg-accent text-white text-sm font-medium animate-pulse">

                    <!-- Font Awesome Notice Icon -->
                    <i class="fa-solid fa-bell text-sm"></i>

                    New Notice
                </a>

                <button onclick="openDrawer()" class="lg:hidden text-white">
                    <svg class="w-8 h-8"
                        fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>


        </div>
    </div>
</header>

<!-- OVERLAY -->
<div id="drawerOverlay"
    onclick="closeDrawer()"
    class="fixed inset-0 bg-black/50 z-40 hidden"></div>

<!-- MOBILE DRAWER -->
<div id="mobileDrawer"
    class="fixed top-0 right-0 h-full w-80 bg-white text-gray-800
           transform translate-x-full transition-transform duration-300
           z-50 flex flex-col">

    <!-- HEADER -->
    <div class="p-6 flex items-center justify-between border-b">
        <span class="font-semibold text-lg">Menu</span>
        <button onclick="closeDrawer()" class="text-2xl">&times;</button>
    </div>

    <!-- MENU -->
    <ul class="px-6 py-6 space-y-5 text-sm font-medium overflow-y-auto">

        <!-- ABOUT -->
        <li class="border border-gray-200 rounded-xl overflow-hidden">
            <button
                class="mobile-nav-btn w-full flex justify-between items-center
                   px-4 py-3 bg-gray-50 hover:bg-gray-100 transition">
                <span class="font-semibold text-gray-800">About</span>
                <i class="fa-solid fa-chevron-down text-xs text-gray-500
                      transition-transform duration-300"></i>
            </button>

            <ul class="mobile-dropdown hidden bg-white px-4 py-3 space-y-2
                   border-t border-gray-200 text-gray-600 text-[13.5px]">
                <li><a href="{{ route('about') }}" onclick="closeDrawer()" class="block hover:text-accent">About Us</a></li>
                <li><a href="{{ route('why') }}" onclick="closeDrawer()" class="block hover:text-accent">Why Choose Us</a></li>
                <li><a href="{{ route('principalmessage') }}" onclick="closeDrawer()" class="block hover:text-accent">Principal's Message</a></li>
                <li><a href="{{ route('viceprincipalmessage') }}" onclick="closeDrawer()" class="block hover:text-accent">Vice Principal's Message</a></li>
                <li><a href="{{ route('missionvision') }}" onclick="closeDrawer()" class="block hover:text-accent">Mission & Vision</a></li>
                <li><a href="{{ route('csr') }}" onclick="closeDrawer()" class="block hover:text-accent">CSR</a></li>
            </ul>
        </li>

        <!-- ADMISSION -->
        <li class="border border-gray-200 rounded-xl overflow-hidden">
            <button
                class="mobile-nav-btn w-full flex justify-between items-center
                   px-4 py-3 bg-gray-50 hover:bg-gray-100 transition">
                <span class="font-semibold text-gray-800">Admission</span>
                <i class="fa-solid fa-chevron-down text-xs text-gray-500
                      transition-transform duration-300"></i>
            </button>

            <ul class="mobile-dropdown hidden bg-white px-4 py-3 space-y-2
                   border-t border-gray-200 text-gray-600 text-[13.5px]">
                <li><a href="{{ route('procedures') }}" onclick="closeDrawer()" class="block hover:text-accent">Procedure</a></li>
                <li><a href="{{ route('annualfeestructure') }}" onclick="closeDrawer()" class="block hover:text-accent">Annual Fee Structure</a></li>
                <li><a href="#" onclick="closeDrawer()" class="block hover:text-accent">Transfer Certificate</a></li>
                <li><a href="#" onclick="closeDrawer()" class="block hover:text-accent">Academic Calendar</a></li>
            </ul>
        </li>

        <!-- STUDENTS -->
        <li class="border border-gray-200 rounded-xl overflow-hidden">
            <button
                class="mobile-nav-btn w-full flex justify-between items-center
                   px-4 py-3 bg-gray-50 hover:bg-gray-100 transition">
                <span class="font-semibold text-gray-800">Students</span>
                <i class="fa-solid fa-chevron-down text-xs text-gray-500
                      transition-transform duration-300"></i>
            </button>

            <ul class="mobile-dropdown hidden bg-white px-4 py-3 space-y-2
                   border-t border-gray-200 text-gray-600 text-[13.5px]">
                <li><a href="#" onclick="closeDrawer()" class="block hover:text-accent">Students Life</a></li>
                <li><a href="#" onclick="closeDrawer()" class="block hover:text-accent">For Parents</a></li>
                <li><a href="#" onclick="closeDrawer()" class="block hover:text-accent">New Era Bulletin</a></li>
            </ul>
        </li>

        <!-- SIMPLE LINKS -->
        <li class="border border-gray-200 rounded-xl px-4 py-3 font-semibold text-gray-800 hover:bg-gray-50">
            <a href="#" onclick="closeDrawer()">Infrastructure</a>
        </li>

        <li class="border border-gray-200 rounded-xl px-4 py-3 font-semibold text-gray-800 hover:bg-gray-50">
            <a href="#" onclick="closeDrawer()">Mandatory</a>
        </li>

        <li class="border border-gray-200 rounded-xl px-4 py-3 font-semibold text-gray-800 hover:bg-gray-50">
            <a href="#" onclick="closeDrawer()">Gallery</a>
        </li>

        <li class="border border-gray-200 rounded-xl px-4 py-3 font-semibold text-gray-800 hover:bg-gray-50">
            <a href="#" onclick="closeDrawer()">Contact</a>
        </li>

    </ul>


    <!-- CTA -->
    <div class="px-6 pb-6 mt-auto">
        <a href="#"
            onclick="closeDrawer()"
            class="flex items-center justify-center gap-2 w-full py-3 rounded-lg
                  bg-accent text-white font-medium animate-pulse">
            <i class="fa-solid fa-bell text-sm"></i>
            New Notice
        </a>
    </div>
</div>



<!-- JS -->
<script>
    document.addEventListener('DOMContentLoaded', () => {

        /* ======================
           DESKTOP DROPDOWNS
        ====================== */
        const navButtons = document.querySelectorAll('.nav-btn');
        const dropdowns = document.querySelectorAll('.dropdown-menu');

        navButtons.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();

                const dropdown = btn.nextElementSibling;
                const isOpen = !dropdown.classList.contains('hidden');

                // Close all
                dropdowns.forEach(d => d.classList.add('hidden'));

                // Open only current
                if (!isOpen) dropdown.classList.remove('hidden');
            });
        });

        // Close desktop dropdown on outside click
        document.addEventListener('click', () => {
            dropdowns.forEach(d => d.classList.add('hidden'));
        });

        // Prevent dropdown click bubbling
        dropdowns.forEach(menu => {
            menu.addEventListener('click', e => e.stopPropagation());
        });


        /* ======================
           MOBILE DRAWER
        ====================== */
        window.openDrawer = function() {
            document.getElementById('mobileDrawer')?.classList.remove('translate-x-full');
            document.getElementById('drawerOverlay')?.classList.remove('hidden');
        };

        window.closeDrawer = function() {
            document.getElementById('mobileDrawer')?.classList.add('translate-x-full');
            document.getElementById('drawerOverlay')?.classList.add('hidden');

            // Close all mobile dropdowns
            document.querySelectorAll('.mobile-dropdown')
                .forEach(d => d.classList.add('hidden'));

            // Reset chevron rotation
            document.querySelectorAll('.mobile-nav-btn i')
                .forEach(icon => icon.classList.remove('rotate-180'));
        };


        /* ======================
           MOBILE ACCORDION
        ====================== */
        document.querySelectorAll('.mobile-nav-btn').forEach(btn => {
            btn.addEventListener('click', () => {

                const dropdown = btn.nextElementSibling;
                const icon = btn.querySelector('i');
                const isOpen = !dropdown.classList.contains('hidden');

                // Close all
                document.querySelectorAll('.mobile-dropdown')
                    .forEach(d => d.classList.add('hidden'));

                document.querySelectorAll('.mobile-nav-btn i')
                    .forEach(i => i.classList.remove('rotate-180'));

                // Open current
                if (!isOpen) {
                    dropdown.classList.remove('hidden');
                    icon?.classList.add('rotate-180');
                }
            });
        });

    });
</script>