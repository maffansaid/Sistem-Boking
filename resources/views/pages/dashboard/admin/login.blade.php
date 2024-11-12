<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="icon" type="image/x-icon" href="/assets/logo_polres.png">
    {{-- Awal Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    {{-- Akhir Tailwind --}}
    {{-- Awal Flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    {{-- Akhir Flowbite --}}
    {{-- Awal DeasyUi --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" /> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- Akhir DeasyUi --}}
</head>

<body>
    <x-layout-login title="Login">
        <div class="m-5 flex w-full flex-col items-center justify-center space-y-3 rounded-2xl bg-[#A40000] p-10 lg:m-0 xl:w-3/5">
            <div class="">
                <img src="/assets/logo_polres.png" class="hover:animation-all m-auto flex h-1/2 w-1/2" alt="">
            </div>
            <p class="font-poppins text-center text-3xl font-semibold text-white">Selamat Datang</p>
            <p class="font-poppins text-lg font-normal text-white">Halaman Login User</p>
            <form class="w-full space-y-2" action="" method="POST">
                @csrf
                <div>
                    <label for="email" class="font-poppins ml-1 block text-base font-normal text-white">Email</label>
                    <input type="text" name="email" id="email" class="block w-full rounded-md border border-gray-300 bg-gray-50 p-1.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500" placeholder="email@gmail.com" required />
                    @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="katasandi-baru" class="font-poppins ml-1 block text-base font-normal text-white">Password</label>
                    <div class="relative">
                        <input id="password" name="password" type="password" placeholder="Password" required class="block w-full rounded-md border border-gray-300 bg-gray-50 p-1.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500" />
                        <div class="absolute inset-y-0 right-0 mr-3 flex items-center">
                            <svg id="eye-icon-open" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="hidden h-6 w-6 cursor-pointer text-black">
                                <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                            <svg id="eye-icon-closed" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-black">
                                <path d="M2.99902 3L20.999 21M9.8433 9.91364C9.32066 10.4536 8.99902 11.1892 8.99902 12C8.99902 13.6569 10.3422 15 11.999 15C12.8215 15 13.5667 14.669 14.1086 14.133M6.49902 6.64715C4.59972 7.90034 3.15305 9.78394 2.45703 12C3.73128 16.0571 7.52159 19 11.9992 19C13.9881 19 15.8414 18.4194 17.3988 17.4184M10.999 5.04939C11.328 5.01673 11.6617 5 11.9992 5C16.4769 5 20.2672 7.94291 21.5414 12C21.2607 12.894 20.8577 13.7338 20.3522 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <p class="font-poppins text-end text-sm font-normal text-white"><a href="/Lupa-Password">Forget?</a></p>
                <button type="submit" class="font-poppins m-auto mb-2 mt-5 flex w-1/2 items-center justify-center rounded-lg bg-[#FBB603] py-2 text-base font-semibold text-black hover:ring-4 hover:ring-yellow-500">Login</button>
            </form>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const passwordField = document.getElementById("password");
                const eyeIconOpen = document.getElementById("eye-icon-open");
                const eyeIconClosed = document.getElementById("eye-icon-closed");
                eyeIconClosed.addEventListener("click", function() {
                    passwordField.type = "text";
                    eyeIconClosed.classList.add("hidden");
                    eyeIconOpen.classList.remove("hidden");
                });
                eyeIconOpen.addEventListener("click", function() {
                    passwordField.type = "password";
                    eyeIconOpen.classList.add("hidden");
                    eyeIconClosed.classList.remove("hidden");
                });
            });
        </script>
    </x-layout-login>
</body>

</html>
