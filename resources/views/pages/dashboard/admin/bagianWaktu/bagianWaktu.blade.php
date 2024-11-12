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
        <div class="m-5 lg:m-20">
            <div class="m-auto mb-10 flex items-center justify-center text-center text-[30px] font-bold text-white">
                Kelola Waktu</div>

            <div class="md:flex md:justify-between">
                <div class="flex gap-4 md:justify-start">
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
                <div class="flex w-1/2 justify-start rounded-lg bg-white p-4">
                    <div class="">
                        <h2 class="text-sm md:text-base">Hijau : Aktif</h2>
                        <h2 class="text-sm md:text-base">Abu-Abu : Nonaktif</h2>
                        <h2 class="text-sm md:text-base">Kuning : Terbooking</h2>
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
