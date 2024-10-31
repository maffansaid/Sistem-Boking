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
    <div class="p-4 sm:ml-64 bg-[#A40000] min-h-screen">
        <div class="m-5 lg:m-20">
            <div class="flex m-auto text-center justify-center items-center text-[30px] font-bold text-white mb-10">
                Kelola Waktu</div>

            <div class="md:flex md:justify-between">
                <div class="flex md:justify-start gap-4">
                    <div class="flex flex-col w-full">
                        <label for="dateInput" class="mb-1 text-xs md:text-sm font-semibold text-white">Tanggal</label>
                        <input name="tanggalMulai" type="date" id="dateInput"
                            class="border rounded-lg p-3 w-full bg-white text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 text-xs md:text-sm"
                            placeholder="" onchange="updateDay()" />
                    </div>
                    <div class="flex flex-col w-full">
                        <label for="dayInput" class="mb-1 text-xs md:text-sm font-semibold text-white">Hari</label>
                        <input type="text" id="dayInput" name=""
                            class="border rounded-lg p-3 w-full bg-white text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 text-xs md:text-sm"
                            placeholder="Hari" readonly>
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
                </script>
            </div>

            <div class="mt-4">
                <div class="grid lg:grid-cols-6 lg:gap-4 p-4 grid-cols-3 gap-2">
                    <?php for ($hour = 6; $hour <= 24; $hour++): ?>
                    <button
                        class="btn border-none time-button bg-green-500 rounded-full p-4 text-white hover:bg-green-700"
                        data-time="<?= sprintf('%02d.00', $hour) ?>"><?= sprintf('%02d.00', $hour) ?></button>
                    <?php endfor; ?>
                </div>
                <div class="flex justify-end">
                    <button id="submit-btn"
                        class="mt-4 bg-[#FBB603] hover:bg-[#99FF33] text-white p-2 rounded font-bold">Kirim
                        Pilihan</button>
                </div>
                <div class="bg-white w-1/2 flex justify-start p-4 rounded-lg">
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
