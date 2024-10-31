<div class="flex min-h-screen min-w-full">
    <!-- Sisi Kiri: Login Banner -->
    <div class="hidden w-1/2 md:flex flex-col items-center justify-center bg-gradient-to-br from-[#A40000] to-[#7A0000] p-8 text-white space-y-6">
        <p class="text-2xl font-bold font-poppins lg:text-3xl animate-fadeIn">Selamat Datang</p>
        <p class="w-1/2 text-center text-sm lg:text-lg font-light opacity-90 animate-fadeIn">Login Pengguna atau User</p>
        <div class="w-3/4 mt-5 animate-fadeIn">
            <img class="w-full object-contain" src="/assets/logoLogin.png" alt="Logo Login">
        </div>
    </div>

    <!-- Sisi Kanan: Form Login -->
    <div class="flex items-center justify-center w-full md:w-1/2 bg-gray-200 p-6">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md animate-fadeIn">
            <!-- Slot untuk Form -->
            {{ $slot }}
        </div>
    </div>
</div>

<!-- Tailwind Animations CSS -->
<style>
    .animate-fadeIn {
        animation: fadeIn 1.5s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
