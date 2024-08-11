<div
    class="flex flex-col w-full lg:w-[32%] mx-auto justify-center px-6 py-8 lg:shadow-xl lg:dark:bg-slate-700 lg:rounded-lg duration-500">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="text-center text-2xl font-bold leading-9 text-gray-900 dark:text-white duration-500">Buat Akun
            Baru
        </h2>
    </div>

    <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm">

        <form class="space-y-6" action="{{ route('guest.store') }}" method="POST">
            @csrf
            <div>
                <x-label for="email" :value="__('Email Address')" />
                <div class="mt-1">
                    <x-auth.input type="text" id="email" name="email" />
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <div>
                    <x-label for="password" :value="__('Password Confirmation')" />
                </div>
                <div class="mt-1 ">
                    <x-auth.input type="password" id="password" name="password_confirmation" />
                    @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <x-auth.submit type="submit" :value="__('Buat Akun Sekarang')" />

            <div class="flex items-center justify-center">
                <p class="font-semibold text-xs text-slate-500 dark:text-white duration-500">Sudah Punya Akun ?
                    <x-link-href href="/" :value="__('Masuk Sekarang')" />
                </p>
            </div>
        </form>
    </div>

</div>
