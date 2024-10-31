<div>
    <div class="min-h-full min-w-full h-screen w-screen flex z-50">
        <div class="bg-[#A40000] hidden w-1/2 md:flex flex-col space-y-5 justify-end items-center">
            <div class="">
                <img class="animate-fadeIn" src="/assets/logoLogin.png" alt="">
            </div>
        </div>
        <div class="bg-[#D9D9D9] w-full md:w-1/2 flex justify-center items-center animate-fadeIn">
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
            transform: translateY(0);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
