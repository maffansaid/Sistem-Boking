<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagian Waktu Admin</title>
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
    <x-sideBarAdmin />
    <div class="p-4 sm:ml-64 bg-[#A40000] min-h-screen">
        <div class="m-5 lg:m-20">
            <div class="flex m-auto text-center justify-center items-center text-[30px] font-bold text-white mb-10">
                Kelola Waktu</div>
            <div class="flex flex-col flex-1 mb-4">
                <label for="DateTime" class="text-[26px] font-bold text-white mb-5">Tanggal dan Waktu</label>
                <input name="" type="datetime-local" id="DateTime"
                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-[50%]"
                    placeholder="Masukkan Tanggal dan Waktu" required />
            </div>
            <div class="div">
                <div class="grid lg:grid-cols-6 lg:gap-4 p-4 grid-cols-3 gap-2">
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="06.00">06.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="07.00">07.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="08.00">08.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="09.00">09.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="10.00">10.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="11.00">11.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="12.00">12.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="13.00">13.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="14.00">14.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="15.00">15.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="16.00">16.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="17.00">17.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="18.00">18.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="19.00">19.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="20.00">20.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="21.00">21.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="22.00">22.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="23.00">23.00</button>
                    <button
                        class="btn border-none time-button bg-gray-300 rounded-full p-4 text-white hover:bg-green-500"
                        data-time="24.00">24.00</button>
                </div>
                <button id="submit-btn"
                    class="flex m-auto mt-4 bg-[#FBB603] hover:bg-[#99FF33] text-white p-2 rounded  font-bold">Kirim
                    Pilihan</button>
            </div>
            <div class="flex justify-end">
                <a href="/BagianWaktu2"
                    class="block text-black bg-[#FBB603] hover:bg-[#99FF33] focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 mt-10 font-bold">
                    Edit
                </a>
            </div>
        </div>
    </div>
    <script>
        var dateTimeInput = document.getElementById('DateTime');

        function setMinDateTime() {
            var now = new Date();
            var year = now.getFullYear();
            var month = (now.getMonth() + 1).toString().padStart(2, '0');
            var day = now.getDate().toString().padStart(2, '0');
            var hours = now.getHours().toString().padStart(2, '0');
            var minutes = now.getMinutes().toString().padStart(2, '0');

            var currentDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;

            dateTimeInput.min = currentDateTime;
        }

        setMinDateTime();

        dateTimeInput.addEventListener('focus', setMinDateTime);

        //
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

            // mengirim data ke udut
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
