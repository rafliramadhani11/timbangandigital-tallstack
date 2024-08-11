<div
    class="flex flex-col w-full lg:w-[55%] mx-auto justify-center px-6 py-8 lg:shadow-xl lg:dark:bg-slate-700 lg:rounded-lg duration-500">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">

        <h2 class="text-center text-2xl font-bold leading-9 text-gray-900 dark:text-white duration-500">
            Masukan Akun
        </h2>
    </div>

    <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="#" method="POST">
            <div>
                <x-label for="email" :value="__('Email Address')" />
                <div class="mt-1">
                    <x-auth.input type="email" id="email" name="email" />
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <x-label for="password" :value="__('Password')" />
                    <div class="text-sm">
                        <x-link-href href="#" :value="__('Lupa Password ?')" />
                    </div>
                </div>
                <div class="mt-1 ">
                    <x-auth.input type="password" id="password" name="password" />
                </div>
            </div>

            <x-auth.submit type="submit" :value="__('Masuk')" />

            <div class="flex items-center justify-center">
                <p class="font-semibold text-xs text-slate-500 dark:text-white duration-500">Tidak punya akun ?
                    <x-link-href href="/register" :value="__('Daftar Sekarang')" />
                </p>
            </div>

            <div class="flex items-center justify-center">
                <x-mobile-theme-toggle />
            </div>

        </form>

    </div>

</div>
