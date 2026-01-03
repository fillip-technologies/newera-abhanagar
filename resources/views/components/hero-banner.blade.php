<!-- MASTER HERO BANNER -->
<section
    {{ $attributes->merge([
        'id' => 'hero-banner',
        'class' => 'relative w-full min-h-[55vh] sm:min-h-[60vh] lg:min-h-[65vh]
                    flex items-center overflow-hidden'
    ]) }}
    data-theme="primary">

    <!-- Background -->
    <div class="absolute inset-0">
        <img id="hero-image"
            src=""
            class="w-full h-full object-cover"
            alt="New Era High School">

        <!-- Overlay -->
        <div id="hero-overlay"
            class="absolute inset-0 bg-gradient-to-r opacity-90"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 text-white">

        <!-- Breadcrumb -->
        <nav id="hero-breadcrumb"
            class="text-sm mb-3 text-white/80 hidden">
            <span>Home</span>
            <span class="mx-2">/</span>
            <span id="breadcrumb-current"></span>
        </nav>

        <!-- Title -->
        <h1 id="hero-title"
            class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl
                   font-bold leading-tight mb-4">
        </h1>

        <!-- Description -->
        <p id="hero-desc"
            class="max-w-2xl text-base sm:text-lg text-white/90">
        </p>

    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {

        const hero = document.getElementById("hero-banner");
        if (!hero) return;

        const defaults = {
            title: "New Era High School",
            description: "A CBSE, English Medium institution focused on Holistic Education.",
            image: "/images/hero/default.jpg",
            theme: "primary",
            breadcrumb: ""
        };

        const title = hero.dataset.title || defaults.title;
        const desc = hero.dataset.description || defaults.description;
        const image = hero.dataset.image || defaults.image;
        const theme = hero.dataset.theme || defaults.theme;
        const breadcrumb = hero.dataset.breadcrumb || defaults.breadcrumb;

        // Apply content
        document.getElementById("hero-title").innerHTML = title;
        document.getElementById("hero-desc").innerHTML = desc;
        document.getElementById("hero-image").src = image;

        // Overlay gradient
        const overlay = document.getElementById("hero-overlay");
        overlay.classList.add(
            `from-${theme}`,
            `via-${theme}light`,
            `to-${theme}/30`
        );




        // Breadcrumb
        if (breadcrumb) {
            document.getElementById("breadcrumb-current").innerText = breadcrumb;
            document.getElementById("hero-breadcrumb").classList.remove("hidden");
        }

    });
</script>