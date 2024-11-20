<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Waktu</title>
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
    <x-sideBarUser />
    <div class="min-h-screen bg-neutral-200 p-4 sm:ml-64">
        <form id="filter-tanggal" action="" class="hidden">
            <input id="tanggal" type="date" name="tanggal" value="{{ $tanggal->format('Y-m-d') }}">
        </form>
        <form action="" method="POST" class="m-5 lg:m-10">
            @csrf
            <div
                class="m-auto mb-5 flex items-center justify-center text-center text-[30px] font-bold text-black md:mb-10">
                Kelola Waktu</div>
            <div class="md:flex md:justify-between">
                <div class="flex gap-4 md:justify-start">
                    <div class="flex w-full flex-col">
                        <label for="dateInput" class="mb-1 text-xs font-semibold text-black md:text-sm">Tanggal</label>
                        <input name="tanggal" type="date" id="dateInput"
                            class="w-full rounded-lg border bg-white p-3 text-xs text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 md:text-sm"
                            placeholder="" onchange="updateDay(this.value)" value="{{ $tanggal->format('Y-m-d') }}" />
                    </div>

                    <div class="flex w-full flex-col">
                        <label for="dayInput" class="mb-1 text-xs font-semibold text-black md:text-sm">Hari</label>
                        <input type="text" id="dayInput" name=""
                            class="w-full rounded-lg border bg-white p-3 text-xs text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 md:text-sm"
                            placeholder="Hari" readonly>
                    </div>
                </div>
                <div class="flex items-center p-6 md:p-4 h-10 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 justify-center md:mt-8 mt-4"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Informasi!</span> Harga Lapangan : 30 k / jam
                    </div>
                </div>
            </div>
            <div class="mt-4">
                @error('tanggal')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                @error('waktu')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                <div class="grid grid-cols-3 gap-2 lg:grid-cols-5 lg:gap-4">
                    @foreach ($waktu as $item)
                        @php
                            $disabled =
                                $pemesanan
                                    ->where('waktu_awal_id', '<=', $item->id)
                                    ->where('waktu_akhir_id', '>=', $item->id)
                                    ->count() || $item->terhapus->count();
                        @endphp
                        <div class="flex items-center justify-center">
                            <input type="checkbox" id="{{ $item->id }}" name="waktu[]" class="peer hidden"
                                value="{{ $item->id }}" @checked(in_array($item->id, session('waktu') ?? [])) @disabled($disabled) />
                            <label for="{{ $item->id }}"
                                class="rounded-full border-none bg-white p-4 text-center text-black hover:bg-[#81C125] peer-checked:bg-[#81C125] peer-focus:bg-[#81C125] peer-disabled:bg-red-500 cursor-pointer transition transform duration-300 hover:scale-110">{{ Str::substr($item->waktu, 0, 5) }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="flex justify-between">
                <div class="div">
                    <a href="/UserPemesanan"
                        class="mt-10 block rounded-lg bg-[#F8C104] px-5 py-2.5 text-sm font-bold text-black hover:bg-[#B58D05] focus:outline-none focus:ring-4 focus:ring-blue-300 font-bold transition transform duration-300 hover:scale-110">
                        <div class="flex gap-2">
                            <svg class="h-5 w-5" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path>
                                    <path fill="#000000"
                                        d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z">
                                    </path>
                                </g>
                            </svg>
                            <div>Kembali</div>
                        </div>
                    </a>
                </div>
                <div class="div">
                    <div
                        class="mt-10 block rounded-lg bg-[#F8C104] px-5 py-2.5 text-sm font-bold text-black hover:bg-[#B58D05] focus:outline-none focus:ring-4 focus:ring-blue-300 font-bold transition transform duration-300 hover:scale-110">
                        <button type="submit" class="flex gap-2">
                            <div class="div">Selanjutnya</div>
                            <svg class="h-5 w-5" viewBox="0 0 24 24" id="_24x24_On_Light_Next"
                                data-name="24x24/On Light/Next" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <rect id="view-box" width="24" height="24" fill="#141124" opacity="0">
                                    </rect>
                                    <path id="Shape"
                                        d="M10.22,9.28a.75.75,0,0,1,0-1.06l2.72-2.72H.75A.75.75,0,0,1,.75,4H12.938L10.22,1.281A.75.75,0,1,1,11.281.22l4,4a.749.749,0,0,1,0,1.06l-4,4a.75.75,0,0,1-1.061,0Z"
                                        transform="translate(4.25 7.25)" fill="#141124"></path>
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        const dateInput = document.getElementById("dateInput");

        function setDateLimits() {
            const today = new Date();
            const minDate = today; // Tanggal hari ini
            const maxDate = new Date(today.getFullYear(), today.getMonth() + 1, today
                .getDate()); // Tanggal satu bulan ke depan

            const formatDate = (date) => {
                const year = date.getFullYear();
                const month = String(date.getMonth() + 1).padStart(2, "0");
                const day = String(date.getDate()).padStart(2, "0");
                return `${year}-${month}-${day}`;
            };

            dateInput.setAttribute("min", formatDate(minDate));
            dateInput.setAttribute("max", formatDate(maxDate));
        }
        setDateLimits();
    </script>
    <script>
        window.onload = function() {
            updateDay({{ $tanggal->format('Y-m-d') }}, false);
        }

        function updateDay(value, reload = true) {
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
            if (reload) {
                document.getElementById('tanggal').value = value;
                document.getElementById('filter-tanggal').submit();
            }
        }

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

        document.querySelectorAll('.time-button').forEach(button => {
            button.addEventListener('click', function() {
                const selectedTime = this.getAttribute('data-time');
                if (selectedTime) {
                    if (selectedTimes.has(selectedTime)) {
                        selectedTimes.delete(selectedTime);
                        this.classList.remove('bg-green-500');
                        this.classList.add('bg-gray-300');
                    } else {
                        selectedTimes.add(selectedTime);
                        this.classList.remove('bg-gray-300');
                        this.classList.add('bg-green-500');
                    }
                }
            });
        });

        document.getElementById('submit-btn').addEventListener('click', function() {
            if (selectedTimes.size === 0) {
                alert('Tidak ada waktu yang dipilih');
                return;
            }

            const selectedTimesArray = Array.from(selectedTimes);
            alert(`Waktu yang dipilih: ${selectedTimesArray.join(', ')}`);

            fetch('/submit-time', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        times: selectedTimesArray
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
</body>

</html>
