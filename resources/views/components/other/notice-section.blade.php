<section class="max-w-7xl mx-auto px-6 py-20">

    <!-- Heading -->
    <div class="text-center mb-14">
        <h2 class="text-4xl font-bold text-gray-900 mb-3">
            School Notices & Circulars
        </h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
            Stay informed with the latest school announcements and important updates.
        </p>
    </div>

    <!-- Notices -->
    <div class="bg-white border rounded-2xl shadow overflow-hidden">

        <!-- Notice Item -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 px-6 py-5 border-b">
            <div>
                <p class="text-sm text-gray-500">10 Jan 2026</p>
                <h3 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
                    Republic Day Celebration Notice

                    <!-- NEW BADGE -->
                    <span onclick="openNewNoticePopup()"
                        class="cursor-pointer text-xs bg-red-100 text-red-600 px-2 py-0.5 rounded-full animate-pulse">
                        NEW
                    </span>
                </h3>
            </div>

            <!-- VIEW PDF -->
            <a href="/documents/notices/republic-day-notice.pdf"
                target="_blank"
                class="text-blue-600 font-medium hover:underline">
                View Notice
            </a>
        </div>

        <!-- Notice Item -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 px-6 py-5 border-b">
            <div>
                <p class="text-sm text-gray-500">05 Jan 2026</p>
                <h3 class="text-lg font-semibold text-gray-800">
                    Winter Vacation Schedule
                </h3>
            </div>

            <a href="/documents/notices/winter-vacation.pdf"
                target="_blank"
                class="text-blue-600 font-medium hover:underline">
                View Notice
            </a>
        </div>

        <!-- Notice Item -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 px-6 py-5 border-b">
            <div>
                <p class="text-sm text-gray-500">28 Dec 2025</p>
                <h3 class="text-lg font-semibold text-gray-800">
                    Parent-Teacher Meeting (PTM)
                </h3>
            </div>

            <a href="/documents/notices/ptm-notice.pdf"
                target="_blank"
                class="text-blue-600 font-medium hover:underline">
                View Notice
            </a>
        </div>

        <!-- Notice Item -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 px-6 py-5">
            <div>
                <p class="text-sm text-gray-500">15 Dec 2025</p>
                <h3 class="text-lg font-semibold text-gray-800">
                    Annual Examination Schedule
                </h3>
            </div>

            <a href="/documents/notices/exam-schedule.pdf"
                target="_blank"
                class="text-blue-600 font-medium hover:underline">
                View Notice
            </a>
        </div>

    </div>

</section>

<div id="newNoticePopup"
    class="fixed inset-0 bg-black/60 hidden items-center justify-center z-50">

    <div class="bg-white rounded-xl p-6 max-w-sm w-full mx-4 shadow-xl relative">

        <button onclick="closeNewNoticePopup()"
            class="absolute top-2 right-3 text-gray-500 text-2xl">
            &times;
        </button>

        <div class="text-center">
            <div class="mx-auto mb-4 w-12 h-12 rounded-full bg-red-600 flex items-center justify-center">
                <i class="fa-solid fa-bell text-white"></i>
            </div>

            <h3 class="text-lg font-bold text-gray-800 mb-2">
                New Notice
            </h3>

            <p class="text-sm text-gray-600 mb-4">
                A new school notice has been published.
                Please click <strong>View Notice</strong> to read the PDF.
            </p>

            <button onclick="closeNewNoticePopup()"
                class="px-6 py-2 rounded-lg bg-accent text-white text-sm font-medium">
                OK
            </button>
        </div>

    </div>
</div>
<script>
    function openNewNoticePopup() {
        const popup = document.getElementById('newNoticePopup');
        popup.classList.remove('hidden');
        popup.classList.add('flex');
    }

    function closeNewNoticePopup() {
        document.getElementById('newNoticePopup').classList.add('hidden');
    }
</script>