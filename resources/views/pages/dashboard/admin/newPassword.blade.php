<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password Admin</title>
    <link rel="icon" type="image/x-icon" href="/assets/">
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
        <div
            class="p-10 w-full xl:w-3/5 space-y-3 flex flex-col justify-center items-center bg-[#A40000] rounded-2xl m-5 lg:m-0">
            <div class="">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="flex justify-center w-10 h-10">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M12.12 12.78C12.05 12.77 11.96 12.77 11.88 12.78C10.12 12.72 8.71997 11.28 8.71997 9.50998C8.71997 7.69998 10.18 6.22998 12 6.22998C13.81 6.22998 15.28 7.69998 15.28 9.50998C15.27 11.28 13.88 12.72 12.12 12.78Z"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path
                            d="M18.74 19.3801C16.96 21.0101 14.6 22.0001 12 22.0001C9.40001 22.0001 7.04001 21.0101 5.26001 19.3801C5.36001 18.4401 5.96001 17.5201 7.03001 16.8001C9.77001 14.9801 14.25 14.9801 16.97 16.8001C18.04 17.5201 18.64 18.4401 18.74 19.3801Z"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path
                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </g>
                </svg>
            </div>
            <p class="font-poppins font-semibold text-3xl text-white text-center">Selamat Datang</p>
            <p class="font-poppins font-normal text-lg text-white">Halaman New Password</p>
            <form class="w-full space-y-2" action="">
                <div>
                    <label for="katasandi-baru"
                        class="block ml-1 text-base text-white font-poppins font-normal">Password</label>
                    <div class="relative">
                        <input id="password" type="password" placeholder="Password" required
                            class="bg-gray-50 border rounded-md border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block p-1.5 w-full " />
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3">
                            <svg id="eye-icon-open" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black cursor-pointer hidden">
                                <path
                                    d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                                <path
                                    d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                            </svg>
                            <svg id="eye-icon-closed" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black cursor-pointer">
                                <path
                                    d="M2.99902 3L20.999 21M9.8433 9.91364C9.32066 10.4536 8.99902 11.1892 8.99902 12C8.99902 13.6569 10.3422 15 11.999 15C12.8215 15 13.5667 14.669 14.1086 14.133M6.49902 6.64715C4.59972 7.90034 3.15305 9.78394 2.45703 12C3.73128 16.0571 7.52159 19 11.9992 19C13.9881 19 15.8414 18.4194 17.3988 17.4184M10.999 5.04939C11.328 5.01673 11.6617 5 11.9992 5C16.4769 5 20.2672 7.94291 21.5414 12C21.2607 12.894 20.8577 13.7338 20.3522 14.5"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="katasandi-baru"
                        class="block ml-1 text-base text-white font-poppins font-normal">Password Baru</label>
                    <div class="relative">
                        <input id="password1" type="password" placeholder="Password Baru" required
                            class="bg-gray-50 border rounded-md border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block p-1.5 w-full " />
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3">
                            <svg id="eye-icon-open1" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black cursor-pointer hidden">
                                <path
                                    d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                                <path
                                    d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                            </svg>
                            <svg id="eye-icon-closed1" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black cursor-pointer">
                                <path
                                    d="M2.99902 3L20.999 21M9.8433 9.91364C9.32066 10.4536 8.99902 11.1892 8.99902 12C8.99902 13.6569 10.3422 15 11.999 15C12.8215 15 13.5667 14.669 14.1086 14.133M6.49902 6.64715C4.59972 7.90034 3.15305 9.78394 2.45703 12C3.73128 16.0571 7.52159 19 11.9992 19C13.9881 19 15.8414 18.4194 17.3988 17.4184M10.999 5.04939C11.328 5.01673 11.6617 5 11.9992 5C16.4769 5 20.2672 7.94291 21.5414 12C21.2607 12.894 20.8577 13.7338 20.3522 14.5"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <p class="font-poppins font-normal text-sm text-white text-end"><a href="/Login">Login?</a></p>
                <a href="/Login">
                    <button type="button"
                        class="mt-5 bg-[#FBB603] text-black w-1/2 flex justify-center items-center m-auto font-poppins font-semibold text-base py-2 mb-2 rounded-lg hover:ring-4 hover:ring-yellow-500">Simpan</button>
                </a>
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

            document.addEventListener("DOMContentLoaded", function() {
                const passwordField1 = document.getElementById("password1");
                const eyeIconOpen1 = document.getElementById("eye-icon-open1");
                const eyeIconClosed1 = document.getElementById("eye-icon-closed1");
                eyeIconClosed1.addEventListener("click", function() {
                    passwordField1.type = "text";
                    eyeIconClosed1.classList.add("hidden");
                    eyeIconOpen1.classList.remove("hidden");
                });
                eyeIconOpen1.addEventListener("click", function() {
                    passwordField1.type = "password";
                    eyeIconOpen1.classList.add("hidden");
                    eyeIconClosed1.classList.remove("hidden");
                });
            });
        </script>
    </x-layout-login>
</body>

</html>
