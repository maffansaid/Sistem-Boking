<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagian Waktu Admin</title>
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
    <x-sideBarAdmin />
    <div class="min-h-screen bg-[#A40000] p-4 sm:ml-64">

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

        <div class="m-5 lg:m-20">
            <div class="m-auto mb-10 flex items-center justify-center text-center text-[30px] font-bold text-white">
                Kelola Waktu</div>

            <div class="md:flex md:justify-center">
                <div class="flex gap-4 md:justify-center">
                    <form class="flex w-full flex-col">
                        <label for="dateInput" class="mb-1 text-xs font-semibold text-white md:text-sm">Tanggal</label>
                        <input name="tanggal" type="date" id="dateInput" class="w-full rounded-lg border bg-white p-3 text-xs text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 md:text-sm" placeholder="" value="{{ $tanggal->format('Y-m-d') }}" onchange="this.form.submit()" />
                    </form>
                    <div class="flex w-full flex-col">
                        <label for="dayInput" class="mb-1 text-xs font-semibold text-white md:text-sm">Hari</label>
                        <input type="text" id="dayInput" name="" class="w-full rounded-lg border bg-white p-3 text-xs text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 md:text-sm" placeholder="Hari" readonly>
                    </div>
                </div>
                <script>
                    function updateDay() {
                        const dateInput = document.getElementById('dateInput').value;
                        const dayInput = document.getElementById('dayInput');

                        if (dateInput) {
                            const date = new Date(dateInput);
                            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                            const day = days[date.getUTCDay()];
                            dayInput.value = day;
                        } else {
                            dayInput.value = '';
                        }
                    }
                    window.onload = () => {
                        updateDay();
                    };
                </script>
            </div>

            <div class="mt-4">
                <form id="form" action="" method="POST" class="grid grid-cols-3 gap-2 p-4 lg:grid-cols-6 lg:gap-4">
                    @csrf
                    <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                    @foreach ($waktu as $item)
                    @php
                    $disabled = $pemesanan
                    ->where('waktu_awal_id', '<=', $item->id)
                        ->where('waktu_akhir_id', '>=', $item->id)
                        ->count();
                        @endphp
                        <div class="flex items-center justify-center">
                            <input type="checkbox" id="{{ $item->id }}" name="waktu[]" class="peer hidden" value="{{ $item->id }}" @checked($item->terhapus->count()) @disabled($disabled) />
                            <label for="{{ $item->id }}" class="{{ $disabled ? 'bg-yellow-300' : 'bg-green-500 hover:bg-gray-300 peer-checked:bg-gray-300 peer-focus:bg-gray-300' }} rounded-full border-none p-4 text-center text-white">{{ Str::substr($item->waktu, 0, 5) }}</label>
                        </div>
                        @endforeach
                </form>
                <div class="flex justify-end">
                    <button type="button" onclick="document.getElementById('form').submit()" class="mt-4 rounded bg-[#FBB603] p-2 font-bold text-white hover:bg-[#99FF33]">Kirim
                        Pilihan</button>
                </div>
                <div class="max-w-md mx-auto my-4 rounded-lg bg-gradient-to-r from-green-100 via-yellow-100 to-gray-100 p-6 shadow-lg">
                    <h2 class="text-lg font-bold text-gray-800 mb-4">Status Indikator</h2>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <div class="h-4 w-4 rounded-full bg-green-500 mr-3"></div>
                            <span class="text-sm md:text-base text-gray-700">Hijau : Aktif</span>
                        </div>
                        <div class="flex items-center">
                            <div class="h-4 w-4 rounded-full bg-gray-400 mr-3"></div>
                            <span class="text-sm md:text-base text-gray-700">Abu-Abu : Nonaktif</span>
                        </div>
                        <div class="flex items-center">
                            <div class="h-4 w-4 rounded-full bg-yellow-500 mr-3"></div>
                            <span class="text-sm md:text-base text-gray-700">Kuning : Terbooking</span>
                        </div>
                    </div>
                </div>

                <script>
                    var dateInputInput = document.getElementById('dateInput');

                    function setMindateInput() {
                        var now = new Date();
                        var year = now.getFullYear();
                        var month = (now.getMonth() + 1).toString().padStart(2, '0');
                        var day = now.getDate().toString().padStart(2, '0');
                        var hours = now.getHours().toString().padStart(2, '0');
                        var minutes = now.getMinutes().toString().padStart(2, '0');

                        var currentdateInput = `${year}-${month}-${day}T${hours}:${minutes}`;

                        dateInputInput.min = currentdateInput;
                    }

                    setMindateInput();
                    dateInputInput.addEventListener('focus', setMindateInput);

                    const selectedTimes = new Set();

                    const timeButtons = document.querySelectorAll('.time-button');
                    timeButtons.forEach(button => {
                        selectedTimes.add(button.getAttribute('data-time'));
                        button.classList.remove('bg-gray-300');
                    });

                    timeButtons.forEach(button => {
                        button.addEventListener('click', function() {
                            const time = this.getAttribute('data-time');
                            if (selectedTimes.has(time)) {
                                selectedTimes.delete(time);
                                this.classList.add('bg-gray-300');
                                this.classList.remove('bg-green-500');
                            } else {
                                selectedTimes.add(time);
                                this.classList.remove('bg-gray-300');
                                this.classList.add('bg-green-500');
                            }
                        });
                    });

                    document.getElementById('submit-btn').addEventListener('click', function() {
                        const dateValue = dateInputInput.value;
                        const allTimes = Array.from(timeButtons).map(button => button.getAttribute('data-time'));
                        const unselectedTimes = allTimes.filter(time => !selectedTimes.has(time));

                        console.log('Tanggal:', dateValue);
                        console.log('Waktu yang dipilih:', Array.from(selectedTimes));
                        console.log('Waktu yang tidak dipilih:', unselectedTimes);

                        fetch('/submit-time', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                    date: dateValue,
                                    selectedTimes: Array.from(selectedTimes),
                                    unselectedTimes: unselectedTimes
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                console.log('Success:', data);
                            })
                            .catch(error => {
                                console.error('Error:', error);
                            });
                    });
                </script>
            </div>

        </div>
    </div>

</body>

</html>