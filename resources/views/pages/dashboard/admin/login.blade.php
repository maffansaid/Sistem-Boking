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
    <!-- Pop-up Messages -->
    @if(session('success') || session('error'))
    <div id="popup-message"
        class="fixed top-4 left-1/2 z-50 w-11/12 max-w-sm -translate-x-1/2 transform rounded-lg p-4 shadow-lg 
                transition-all duration-500 ease-in-out opacity-100 bg-{{ session('success') ? 'green-500' : 'red-500' }} 
                text-white slide-in">
        <!-- Ikon -->
        <div class="flex items-center space-x-3">
            <div class="flex-shrink-0">
                <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg" stroke="white">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M12.4 21.75C9.81413 21.75 7.33418 20.7228 5.5057 18.8943C3.67722 17.0658 2.64999 14.5859 2.64999 12C2.64999 9.41414 3.67722 6.93419 5.5057 5.10571C7.33418 3.27723 9.81413 2.25 12.4 2.25C12.5989 2.25 12.7897 2.32902 12.9303 2.46967C13.071 2.61032 13.15 2.80109 13.15 3C13.15 3.19891 13.071 3.38968 12.9303 3.53033C12.7897 3.67098 12.5989 3.75 12.4 3.75C10.212 3.75 8.11354 4.61919 6.56636 6.16637C5.01919 7.71354 4.14999 9.81196 4.14999 12C4.14999 14.188 5.01919 16.2865 6.56636 17.8336C8.11354 19.3808 10.212 20.25 12.4 20.25C13.4932 20.2536 14.5761 20.0377 15.5844 19.6151C16.5927 19.1926 17.5059 18.5719 18.27 17.79C18.4106 17.6481 18.6017 17.5679 18.8015 17.5669C19.0012 17.566 19.1931 17.6444 19.335 17.785C19.4769 17.9256 19.5571 18.1167 19.5581 18.3165C19.559 18.5162 19.4806 18.7081 19.34 18.85C18.4349 19.7715 17.3547 20.5028 16.1629 21.0008C14.971 21.4989 13.6917 21.7536 12.4 21.75Z" fill="white"></path>
                        <path d="M12.1 15.45C12.0015 15.4505 11.9038 15.4312 11.8128 15.3935C11.7218 15.3557 11.6392 15.3001 11.57 15.23L7.56999 11.23C7.43751 11.0878 7.36539 10.8998 7.36881 10.7055C7.37224 10.5112 7.45096 10.3258 7.58837 10.1884C7.72578 10.051 7.91117 9.97225 8.10547 9.96882C8.29977 9.9654 8.48782 10.0375 8.62999 10.17L12.1 13.64L20.1 5.64C20.1687 5.56631 20.2515 5.50721 20.3435 5.46622C20.4355 5.42523 20.5348 5.40318 20.6355 5.40141C20.7362 5.39963 20.8362 5.41816 20.9296 5.45588C21.023 5.4936 21.1078 5.54974 21.179 5.62096C21.2502 5.69218 21.3064 5.77701 21.3441 5.8704C21.3818 5.96379 21.4004 6.06382 21.3986 6.16452C21.3968 6.26522 21.3748 6.36454 21.3338 6.45654C21.2928 6.54854 21.2337 6.63134 21.16 6.7L12.66 15.2C12.5904 15.2798 12.5042 15.3435 12.4075 15.3867C12.3108 15.4298 12.2059 15.4514 12.1 15.45Z" fill="white"></path>
                    </g>
                </svg>
            </div>
            <div class="flex-1">
                <!-- Pesan -->
                <p class="font-semibold text-center">{{ session('success') ?? session('error') }}</p>
            </div>
            <!-- Tombol Close -->
            <button id="close-button" class="text-white hover:text-gray-800">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const popup = document.getElementById('popup-message');
            const closeButton = document.getElementById('close-button');

            // Hilangkan otomatis setelah 3 detik
            setTimeout(() => {
                if (popup) {
                    popup.classList.add('opacity-0', '-translate-y-4');
                    setTimeout(() => popup.remove(), 300);
                }
            }, 3000);

            if (closeButton) {
                closeButton.addEventListener('click', () => {
                    popup.classList.add('opacity-0', '-translate-y-4');
                    setTimeout(() => popup.remove(), 300);
                });
            }
        });
    </script>

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