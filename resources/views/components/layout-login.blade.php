<div>
    <div class="min-h-full min-w-full h-screen w-screen flex">
        <div class="bg-[#A40000] hidden w-1/2 md:flex flex-col space-y-5 justify-center items-center">
            <p></p>
            <p></p>
            <p class="font-poppins w-1/2 text-sm lg:text-[25px] text-left text-white">Login Pengguna atau user </p>
            <div class="">
                <img class="" src="{{ url(asset('storage/img-login.svg')) }}" alt="">
            </div>
        </div>
        <div class="bg-[#D9D9D9] w-full md:w-1/2 flex justify-center items-center">
            {{ $slot }}
        </div>
    </div>
</div>
