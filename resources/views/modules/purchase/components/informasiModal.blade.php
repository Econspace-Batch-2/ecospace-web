<h1 onclick="toggleModal('tutorModal')" class="text-black font-medium text-lg mb-6 mt-10 text-center">
    Sebelum melanjutkan proses registrasi, mohon cermati <span class="text-[#FF8412] font-bold cursor-pointer underline">INFORMASI PENTING</span> terlebih dahulu.
</h1>

<div id="tutorModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white overflow-scroll rounded-lg w-full max-w-2xl shadow-[0px_4px_10px_10px_rgba(0,0,0,0.2)] max-h-[80vh] md:max-h-full md:overflow-hidden overflow-y-auto">
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
                <button onclick="toggleModal('tutorModal')" class="bg-[#0f172a] text-white px-8 py-3 rounded-lg hover:bg-[#1e293b]">
                    Saya Paham!
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.toggle('hidden');
}
</script>