<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagian Waktu 2 Admin</title>
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
                <input name="tanggalMulai" type="datetime-local" id="DateTime"
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
            <div class="flex justify-between">
                <div class="div">
                    <a href="/BagianWaktu"
                        class="block text-black bg-[#FBB603] hover:bg-[#99FF33] focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 mt-10 font-bold">
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
                            <div class="div">Kembali</div>
                        </div>
                    </a>
                </div>
                <div class="div">
                    <button type="button" data-modal-target="popUp-modal-simpan" data-modal-toggle="popUp-modal-simpan"
                        class="block text-black bg-[#FBB603] hover:bg-[#99FF33] focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 mt-10 font-bold">
                        Simpan
                    </button>
                    <div id="popUp-modal-simpan" tabindex="-1"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow">
                                <button type="button"
                                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                    data-modal-hide="popUp-modal-simpan">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-4 md:p-5 text-center">
                                    <div class="bg-transparent">
                                        <svg class="mx-auto mb-4 w-12 h-12 bg-transparent" fill="#99FF33"
                                            viewBox="-7.6 0 93.973 93.973" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path id="checklist2"
                                                    d="M572.822,452.824c-2.939-1.625-3.463-5.666-3.705-9.985.841-16.276.252-33.982.856-50.5.266-5.442.043-11.367.851-16.265,1.176-1.867,3.227-2.86,4.854-4.279a109.4,109.4,0,0,1,22.54,1.142c.8-.429.992-1.478,1.139-2.57.52-.616-.056-2.334.569-2.85a23.764,23.764,0,0,1,.572-6.561,5.687,5.687,0,0,1,3.707-1.428c.463.08.492-.269.858-.285a14.671,14.671,0,0,0,4.277-.045,14.264,14.264,0,0,1,4.854.045c2.186.547,6.295.555,7.988,2.283,1.182,2.821.142,6.524.285,9.987,3.08.461,6.59-.725,9.982-.859.393-.56,1.748-.154,2.281-.57a2.386,2.386,0,0,0,1.359-.13,2.408,2.408,0,0,1,1.213-.155,30.729,30.729,0,0,1,5.418-.284c1.285.423,1.638,1.783,2.281,2.85.693,1.022.949,2.475,1.713,3.424q1.069,18.047.857,37.375c0,6.365-.106,12.852.285,18.828-.117,3.021.276,6.553-.285,9.131.006,3.146-.131,6.144-1.144,8.271-1.02.881-2.834.967-4.847.86a18.968,18.968,0,0,1-5.135.568c-3.088.629-7.386.219-10.556,0-9.037.283-17.553,1.088-26.248,1.711-6.028.194-12.712.45-19.036.45C577.92,452.987,575.3,452.941,572.822,452.824Zm17.689-5.992c3.194-.025,6.414-.014,9.591,0,2.945.011,5.853.021,8.668,0a1.437,1.437,0,0,0,.923-.158,1.458,1.458,0,0,1,1.076-.128c10.912-.026,20.875-.994,31.1-1.711-.6-20.785-.334-42.856.285-63.337a8.98,8.98,0,0,0-.285-5.705c-2.308-1.552-5.967-.067-8.56.572.043,4.047,3.07,8.377.857,11.982a266.843,266.843,0,0,1-44.79.857c-2.948-3.138-1.35-10.826-5.135-13.126a19.431,19.431,0,0,1-4.849.287c-.184,1.814-.832,3.164-.858,5.134a7.173,7.173,0,0,0-.285,2.856c-.832.214.258,2.349-.57,2.564.222,2.316-.412,3.775-.285,5.994a10.031,10.031,0,0,0-.284,2.854c.4,1.089-.747,2.076,0,2.566.615-1.666,1.2-3.361,3.709-3.137.083.581.769.559.856,1.14-2.478,3.894-3.673,9.072-5.423,13.693.183,1.055-.368,2.842.287,3.425.68-1.89,1.231-3.906,4.28-3.425.445.41.992.716,1.139,1.426.146,1.67-1,2.049-1.139,3.424-.554.968-.59,2.454-1.144,3.424-.4,2.638-1.45,4.635-1.708,7.416.139.143.468-.049.858-.239.578-.284,1.288-.567,1.708.239-.6,3.011-1.785,5.443-2.283,8.56-.658,1.149-.767,2.849-1.427,3.992.282,1.717-1.666,2.7-.571,4.284a26.919,26.919,0,0,1,2.569-4.284,23.787,23.787,0,0,1,1.427-1.994c.678-.556.777-1.695,2.283-1.427.608.815-.414,1.912-.856,2.569-.073,1.354-.876,1.976-1.142,3.137-.816,2.037-1.595,4.111-2.283,6.275h3.425c1.546-1.117,1.694-3.627,3.993-3.992.655.689-.292,1.385-.285,2.282-.473,0-.16.791-.572.856.184.623-.806.908.287.855C586.779,446.938,588.674,446.85,590.512,446.832Zm13.979-81.309c-.067,1.876.5,3.111.286,5.134-.555,2.488-.969,5.117-3.137,5.992-2.25.317-4.424.711-6.846.858-.074,2.683.285,5.8-.571,7.7a2.413,2.413,0,0,0,1.42.032,5.878,5.878,0,0,1,1.717-.032,17.611,17.611,0,0,0,3.712-.285c1.424-.042,2.912-.021,4.4,0a48.789,48.789,0,0,0,7.864-.286c.765-.026,1.57-.013,2.375,0a19.249,19.249,0,0,0,4.757-.286,30.093,30.093,0,0,0,9.13,0,72.754,72.754,0,0,1,0-8.276,11.32,11.32,0,0,0-4.015-.287,23.591,23.591,0,0,1-2.548,0c-1.646-.539-4.492.121-5.135-1.427-.113-3.2.815-6.416.284-9.13a31.229,31.229,0,0,0-7.414-.853C608.9,364.986,605.779,364.34,604.49,365.523Zm-5.418,69.9c-.486-.559-.669-1.428-1.429-1.711.2-.766-.589-.551-.854-.855-.245-.231-.172-.782-.572-.858-.68-1.408-1.813-2.37-2.567-3.707-1.785-2.4-3.7-4.672-4.851-7.7a17.5,17.5,0,0,1,4.568-2.854c1.016-1.359,2.958-1.795,4.85-2.283,2.394.645,3.16,2.926,4.277,4.85a6.727,6.727,0,0,1,1.711,2.853,26.022,26.022,0,0,0,2.283,2,5.176,5.176,0,0,0,2.282-2c1.352-.076,1.607-1.248,2.567-1.711a36.859,36.859,0,0,1,4-4.849c1.43-1.424,2.567-3.139,3.992-4.565a63.254,63.254,0,0,1,9.989-7.421,1.841,1.841,0,0,0,1.423-.283c.332,1.822.051,2.592,0,4.565-.945,1.431-1.314,3.441-2.566,4.566-.627,1.749-2.022,2.731-2.854,4.278-2.306,2.352-4.3,5.019-6.56,7.418-.2.881-1.278,1.065-1.715,2-.459.678-1.022,1.256-1.426,2-1.263,1.114-2.078,2.675-3.422,3.711a50.428,50.428,0,0,1-6.562,7.417C602.688,439.412,601.371,436.926,599.072,435.42Zm4.278-54.205c-.514-.512-1.362-1.633-.856-2.282,1.346-.014,2.16.5,3.425.57,5.172-.057,9.35-1.107,14.83-.856.482.567,1.639.458,2,1.143.779-.209.574.565,1.143.568-.06.489.489.739,0,.858,0,1.789-2.174,1.662-3.425,1.428a38.436,38.436,0,0,1-4.565-.856c-4.09-.289-6.638.968-10.269,1.139A3.3,3.3,0,0,1,603.35,381.215Zm3.71-8.561c-.066-1.205.438-1.841.569-2.851,1.048-1.435,4.4-1.931,6.277-.856.418.914,1.078,1.584.856,3.139a5.384,5.384,0,0,1-3.424,3.707C609.5,375.16,607.867,374.322,607.06,372.654Z"
                                                    transform="translate(-569.117 -359.013)"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500">
                                        Berhasil Simpan Data</h3>
                                    <button data-modal-hide="popUp-modal-simpan" type="submit"
                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                        Mengerti
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
