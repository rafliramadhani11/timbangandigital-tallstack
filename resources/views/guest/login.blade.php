<x-app-layout>
    <div class="lg:grid lg:grid-cols-2 w-screen h-screen relative bg-white dark:bg-slate-800 duration-500">
        <div class="flex flex-col items-center justify-center ">
            <div class="hidden lg:block mx-40">
                <h1 class="font-bold text-5xl dark:text-white transition duration-500">Timbangan Digital
                </h1>
                <p
                    class="font-semibold text-sm text-slate-500 dark:text-slate-400 py-3 subpixel-antialiased tracking-wide duration-500">
                    Timbang Tuntas, Kontrol Penuh: Selamat Datang di Aplikasi Timbangan Digital Kami!
                </p>
                <x-theme-toggle />
            </div>

        </div>

        <div class="flex items-center h-screen">
            <livewire:login-user />
        </div>
    </div>

</x-app-layout>
