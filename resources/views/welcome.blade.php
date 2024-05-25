<x-layouts.guest>
    @section('guest')
        @include('components.navbar')
        <!-- Jumbotron -->
        <div class="relative text-center my-5 rounded-3">
            <img src="{{ asset('img/banner/banner-dekstop.png') }}" class="w-full filter brightness-50 hidden md:block">
            <img src="{{ asset('img/banner/banner-mobile.png') }}" class="w-full filter brightness-50 block md:hidden">
            <div class="absolute bottom-10 md:bottom-5 w-3/4 md:w-full left-1/2 transform -translate-x-1/2 text-white p-4">
                <div class="flex flex-col items-center">
                    <h1 class="font-serif font-bold text-4xl md:text-6xl mb-8 md:mb-0">
                        Pesantren Integratif Holistik Pertama di Indonesia
                    </h1>
                    <p class="font-sans text-base md:text-xl mb-4 md:mb-0">
                        Selamat datang di Pesantren Integratif Holistik SMK Skill Village Islamic School, rumah pendidikan
                        akhlakul karimah untuk calon pemimpin, pengusaha, profesional yang alim dan terampil teknologi di
                        masa depan
                    </p>
                    <div class="flex mt-5">
                        <button type="button"
                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Biaya</button>
                        <a href="https://bit.ly/PPDBSkillVillageIslamicSchool">
                            <button type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pendaftaran</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skema Unggulan -->
        <div class="container mx-auto flex flex-col justify-center items-center py-10">
            <div class="text-center mb-4">
                <h5 class="text-yellow-500 font-medium text-lg">Memperkenalkan</h5>
                <h2 class="text-blue-500 font-semibold text-2xl md:text-4xl">
                    Pesantren Integratif Holistik,<br />Pesantren Seperti Apa?
                </h2>
            </div>
            <div class="mb-4 w-4/5 sm:w-3/5 md:w-2/5 lg:w-1/3">
                <img src="{{ asset('img/skema-unggulan.png') }}" class="w-60 h-auto mx-auto">
            </div>
            <div class="text-center">
                <p class="mx-auto text-gray-800 font-medium text-lg md:text-xl md:w-1/2 leading-relaxed">
                    Pesantren dengan program kejuruan mempersiapkan santri memiliki kemampuan unggul di dunia kerja, bisa
                    mengelola/memiliki bisnis, bisa melanjutkan kuliah berbasis kompetensi, menguasai bahasa Inggris/Arab,
                    dan Go Internasional.
                </p>
            </div>
        </div>

        <!-- PPDB Tahun Ajaran -->
        <div class="container mx-auto my-5 py-5">
            <div class="flex flex-col md:flex-row justify-center items-center">
                <div class="flex flex-col mb-4 md:mb-0 md:w-1/2 space-y-9">
                    <div class="font-medium text-2xl md:text-3xl">
                        <h1 class="text-[#09496f]">PPDB Tahun Ajaran 2024/2025</h1>
                        <h2 class="text-[#d1ae6c]">SMK Skill Village Islamic School</h2>
                    </div>
                    <div class="text-gray-800 font-medium text-lg md:text-xl leading-relaxed">
                        <p class="mb-4">Penerimaan Peserta Didik Baru Tahun Ajaran 2025/2025 Dibuka untuk putra dan putri.
                        </p>
                        <p>Ayo bergabung menjadi lulusan Technopreneur yang Alim dan Alim yang Technopreneur</p>
                    </div>
                    <a href="" download="brosur-smk-skillage.pdf">
                        <button class="bg-blue-500 text-white font-medium text-sm md:text-base w-full max-w-xs h-11">
                            LIHAT BROSUR DIGITAL SEKOLAH
                        </button>
                    </a>
                </div>
                <div class="flex justify-center items-center md:w-1/2">
                    <iframe class="rounded w-full max-w-xl h-80"
                        src="https://www.youtube.com/embed/zVPwLI3T4EA?si=7gqbXMFtBrVL1qPg" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    @endsection
</x-layouts.guest>
