<h1 class="text-black font-medium text-lg mb-6 mt-10 text-center">
    Sebelum melanjutkan proses registrasi, mohon cermati
    <span onclick="informasi_modal.showModal()" class="text-[#FF8412] font-bold cursor-pointer underline">INFORMASI
        PENTING</span> terlebih dahulu.
</h1>

<dialog id="informasi_modal" class="modal">
    <div class="modal-box p-0">
        <div class="bg-[#ff6600] text-white text-center py-4 ">
            <h2 class="text-2xl font-bold">INFORMASI PENTING</h2>
        </div>

        <div class="p-6 space-y-4">
            <ul class="list-disc pl-6 space-y-3">
                <li>Satu sesi dapat diisi 1-6 orang selama 90 menit.</li>
                <li>Sesi dapat dilaksanakan secara offline/online, tergantung kesepakatan tutor dan pendaftar.</li>
                <li>Jadwal flexible sesuai dengan jadwal tutor dan para peserta.</li>
                <li>Setiap hari akan ada update jadwal mengajar tutor.</li>
                <li>Diberikan modul dan latihan soal, tetapi tidak diberikan record.</li>
                <li>Peserta akan segera dihubungi oleh Teaching Team setelah submit form pendaftaran.</li>
                <li>Harga satu sesi sebesar Rp 120.000/sesi.</li>
            </ul>
        </div>

        <div class="p-6 flex justify-center">
            <button onclick="informasi_modal.close()"
                class="bg-[#0f172a] text-white px-8 py-3 rounded-lg hover:bg-[#1e293b]">
                Saya Paham!
            </button>
        </div>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
