<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topics = [
            // untuk subject 1 MANAGEMENT ACCOUNTING
            [
                'title' => 'Pengantar Akuntansi Manajerial dan Basic Managerial Accounting Concepts',
                'materials' => json_encode(['Arti Akuntansi Manajerial ', 'Akuntansi Keuangan dan Akuntansi Manajerial', 'Fokus Akuntansi Manajerial Saat Ini', 'Rantai Nilai dan TQM ', 'Arti dan Kegunaan Biaya', 'Biaya Produk dan Jasa', 'Menyusun Laporan Laba Rugi']),
                'description' => 'Memahami arti, perbedaan, fokus, dan hubungan dengan rantai nilai serta TQM dan memahami arti, kegunaan biaya, biaya produk, dan laporan laba rugi.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Perilaku Biaya',
                'materials' => json_encode(['Dasar-dasar Perilaku Biaya', 'Biaya Campuran dan Biaya Langkah', 'Metode Pemisahan Biaya Campuran menjadi Biaya Tetap dan Komponen Variabel', 'Keputusan Manajerial']),
                'description' => 'Memahami dasar-dasar, biaya campuran, metode pemisahan biaya, dan keputusan manajerial dalam konteks biaya tetap dan variabel.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Penyerapan & Penetapan Biaya Variabel & Manajemen Inventaris ',
                'materials' => json_encode(['Overview Biaya Variabel dan Penyerapan', 'Laporan Laba Rugi Tersegmentasi dan Kontribusinya Pendekatan', 'Penilaian Persediaan', 'Memahami kelebihan dan kekurangan biaya variabel dan biaya penyerapan']),
                'description' => 'Memahami biaya variabel, laporan laba rugi tersegmentasi, pendekatan penilaian persediaan, serta kelebihan dan kekurangan biaya variabel dan biaya penyerapan.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Analisis Laba Volume Biaya dan Penetapan Biaya & Manajemen Berbasis Aktivitas ',
                'materials' => json_encode(['Titik Impas dalam Unit dan Dolar Penjualan',
                'Unit dan Dolar Penjualan yang Dibutuhkan untuk Mencapai Target Pendapatan',
                'Analisis Multi-Produk',
                'Analisis Biaya-Volume-Laba serta Risiko dan Ketidakpastian',
                'Keterbatasan Sistem Akuntansi Biaya Berbasis Fungsional',
                'Penetapan Biaya Produk Berbasis Aktivitas',
                'Penetapan Biaya Pelanggan Berbasis Aktivitas dan Penetapan Biaya Pemasok Berbasis Aktivitas',
                'Analisis Proses-Nilai']),
                'description' => 'Memahami konsep titik impas, target pendapatan, analisis multi-produk, dan risiko dan memahami konsep keterbatasan, penetapan biaya berbasis aktivitas, dan analisis proses-nilai.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Perencanaan Keuntungan dan Penetapan Biaya Standar: Alat Kontrol Manajerial',
                'materials' => json_encode(['Uraian Penganggaran',
                'Menyusun Anggaran Operasional',
                'Menyusun Anggaran Keuangan',
                'Standar Satuan dan Konsep Dasar Penetapan Biaya Standar',
                'Analisis Varians: Bahan dan Tenaga Kerja']),
                'description' => 'Menguraikan konsep dan metode penganggaran, serta menyusun anggaran operasional dan keuangan dan memahami penetapan biaya standar, termasuk analisis varian bahan dan tenaga kerja untuk evaluasi kinerja perusahaan.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Anggaran Fleksibel dan Analisis Overhead',
                'materials' => json_encode(['Penggunaan Anggaran untuk Evaluasi Kinerja',
                'Analisis Overhead',
                'Akuntansi Varians']),
                'description' => 'Memahami penggunaan anggaran untuk evaluasi kinerja, analisis overhead, dan akuntansi varian.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Evaluasi Kinerja, Desentralisasi, dan Balanced Scorecard',
                'materials' => json_encode(['Pusat Desentralisasi dan Tanggung Jawab',
                'Mengukur Kinerja Pusat Investasi dengan Menggunakan Pengembalian Investasi',
                'Penetapan Harga Transfer',
                'Balanced Scorecard—Konsep Dasar',
                'Akuntansi Lingkungan']),
                'description' => 'Memahami konsep pusat desentralisasi, pengukuran kinerja pusat investasi, penetapan harga transfer, konsep dasar Balanced Scorecard, dan akuntansi lingkungan.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pengambilan Keputusan Jangka Pendek: Penetapan Biaya yang Relevan ',
                'materials' => json_encode(['Pengambilan Keputusan Jangka Pendek',
                'Beberapa Penerapan Biaya Umum yang Relevan',
                'Keputusan Bauran Produk',
                'Penggunaan Biaya dalam Keputusan Penetapan Harga']),
                'description' => 'Memahami cara pengambilan keputusan, penerapan biaya umum yang relevan, keputusan bauran produk, dan penggunaan biaya dalam penetapan harga.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // subject 2 INTERMEDIATE ACCOUNTING 1
            [
                'title' => 'Kerangka Konseptual dan Akuntansi dan Nilai Waktu Uang',
                'materials' => json_encode(['Tujuan Dasar', 'Konsep Dasar', 'Konsep Pengakuan, Pengukuran, dan Pengungkapan', 'Konsep Dasar Nilai Waktu', 'Masalah Jumlah Tunggal', 'Anuitas']),
                'description' => 'Mampu memahami conceptual framework secara keseluhan, Konsep Pengakuan, Pengukuran, dan Pengungkapan Serta Basic Time Value Concepts',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kas dan Piutang',
                'materials' => json_encode(['Kas : Apa itu Kas?', 'Pelaporan Kas', 'Piutang : Piutang Usaha : Pengakuan, Penilaian, dan Penurunan Nilai', 'Piutang Wesel : Pengakuan dan Penilaian']),
                'description' => 'Mampu memahami kas dan setara kas, pengakuan dan penguruan piutang dagang dan piutang wesel ',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Persediaan',
                'materials' => json_encode(['Pendekatan Biaya Barang Fisik yang Termasuk dalam Persediaan', 'Asumsi Aliran Biaya : Identifikasi Spesifik, Biaya Rata-Rata, dan FIFO', 'Isu Penilaian Tambahan LCNRV', 'Estimasi Persediaan : Laba Kotor dan Metode Ritel']),
                'description' => 'Mampu memahami dan menguasasi pencatatan Inventory dan konsep LCNRV, Gross Profit dan Retail Method ',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Aset Tetap',
                'materials' => json_encode(['Perolehan', 'Penilaian', 'Pelepasan']),
                'description' => 'Mampu memahami akuisisi, valuasi dari property, plant, and equipment ',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Aset Tetap',
                'materials' => json_encode(['Penyusutan', 'Penurunan Nilai', 'Pengurasan', 'Penilaian Kembali']),
                'description' => 'Mampu memahami depresiasi, impairment, deplesi, dan revaluasi dari aset',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Aset Tidak Berwujud',
                'materials' => json_encode(['Isu Aset Tidak Berwujud', 'Jenis Aset Tidak Berwujud', 'Penurunan Nilai Aset Tidak Berwujud', 'Biaya Penelitian dan Pengembangan']),
                'description' => 'Mampu memahami terkait intangible asset dan jenisnya',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Liabilitas Jangka Pendek',
                'materials' => json_encode(['Liabilitas Jangka Pendek', 'Provisi - Halaman 1010. Kontinjensi']),
                'description' => 'Mampu memahami konsep dari akun current liabilities, provision, dan contingencies ',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Liabilitas Jangka Panjang',
                'materials' => json_encode(['Utang Obligasi', 'Utang Jangka Panjang', 'Akuntansi untuk Liabilitas Jangka Panjang']),
                'description' => 'Mampu memahami konsep dari bonds payable dan long term notes payable',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // subject 3 INTERMEDIATE ACCOUNTING 3
            [
                'title' => 'Pengakuan Pendapatan',
                'materials' => json_encode(['Ikhtisar Pengakuan Pendapatan', 'Proses Lima Langkah', 'Isu Lain dalam Pengakuan Pendapatan']),
                'description' => 'Memahami konsep dasar pengakuan dan pengukuran pendapatan serta menerapkan proses pengakuan pendapatan lima langkah.',
                'subject_id' => 3, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Akuntansi Pajak Penghasilan',
                'materials' => json_encode(['Dasar-Dasar Akuntansi Pajak Penghasilan', 'Akuntansi Kerugian Operasi Bersih', 'Representasi Laporan Keuangan']),
                'description' => 'Memahami dasar akuntansi pajak penghasilan, mengidentifikasi masalah tambahan, menjelaskan carryforwards kerugian, dan mempresentasikannya.',
                'subject_id' => 3, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Akuntansi Pensiun dan Manfaat Purna Kerja',
                'materials' => json_encode(['Dasar-Dasar Akuntansi Rencana Pensiun', 'Menggunakan Lembar Kerja Pensiun', 'Akuntansi untuk Biaya Jasa Lampau', 'Akuntansi untuk Pengukuran Ulang', 'Pelaporan Rencana Pensiun dalam Laporan Keuangan']),
                'description' => 'Memahami dasar akuntansi rencana pensiun, menggunakan lembar kerja untuk entri rencana pensiun, menjelaskan akuntansi biaya layanan masa lalu, merinci pengukuran kembali, dan menerangkan akuntansi manfaat pasca pensiun lainnya.',
                'subject_id' => 3, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Akuntansi Sewa',
                'materials' => json_encode(['Lingkungan Sewa', 'Akuntansi oleh Lessee', 'Akuntansi oleh Lessor', 'Masalah Khusus Akuntansi']),
                'description' => 'Memahami lingkungan transaksi sewa, akuntansi sewa untuk penyewa dan lessor, dan laporan fitur khusus perjanjian sewa.',
                'subject_id' => 3, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Perubahan dan Analisis Kesalahan Akuntansi',
                'materials' => json_encode(['Perubahan dalam Kebijakan Akuntansi', 'Perubahan dalam Estimasi Akuntansi', 'Kesalahan Akuntansi', 'Analisis Kesalahan']),
                'description' => 'Memahami jenis perubahan akuntansi, akuntansi kebijakan akuntansi, perkiraan, dan perbaikan kesalahan.',
                'subject_id' => 3, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laporan Arus Kas',
                'materials' => json_encode(['Laporan Arus Kas', 'Menyusun Laporan Arus Kas', 'Metode Langsung & Tidak Langsung', 'Masalah Khusus dalam Persiapan Laporan']),
                'description' => 'Memahami kegunaan dan format laporan arus kas, menyusunnya, membandingkan metode langsung dan tidak langsung, dan mendiskusikan masalah khususnya.',
                'subject_id' => 3, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Penyajian dan Pengungkapan dalam Pelaporan Keuangan',
                'materials' => json_encode(['Prinsip Pengungkapan Penuh', 'Isu Pengungkapan', 'Laporan Auditor dan Manajemen', 'Isu Pelaporan Saat Ini']),
                'description' => 'Memahami prinsip pengungkapan penuh dan cara implementasinya serta membahas persyaratan pengungkapan lainnya.',
                'subject_id' => 3, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],




            // subject 4 TAXATION 2
            [
                'title' => 'Subyek, Obyek, dan Pengecualian dalam UU HPP dan PP RI',
                'materials' => json_encode(['Pengertian PP', 'Subyek, Obyek, dan Pengecualian nya', 'Deductible / Non Deductible Expense', 'Perlakuan fiscal Natura & kenikmatan sesuai UU HPP dan PP RI No. 55/2022)', 'Faktor Pengurang (Zakat, kompensasi kerugian, dan PTKP)',
                'Harga perolehan/harga penjualan harta', 'Metode Penilaian persediaan', 'NPPN', 'Tarif PPh', 'Pelunasan PPh', 'Kasus PPh']
               ),
                'description' => 'Memahami UU HPP dan PP RI No. 55/2022, mencakup subyek, obyek, pengecualian, biaya yang dapat dibiayakan, dan faktor pengurang lainnya, serta perhitungan termasuk harga perolehan harta, metode penilaian persediaan, NPPN, tarif PPh, dan pelunasan PPh.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Analisis Implementasi Perjanjian Internasional dalam Perpajakan (UU HPP & PP No. 55/2022)',
                'materials' => json_encode(['Pengertian Hubungan Istimewa', 'Instrumen Pencegahan Penghindaran Pajak', 'Kesepakatan harga transfer (APA)', 'Penerapan Perjanjian Internasional di Bidang Perpajakan sesuai ketentuan UU HPP dan PP No. 55/2022', 'Kasus Hubungan Istimewa dan Penerapan Perjanjian Internasional di bidang perpajakan',
                'Metode Penyusutan & amortisasi', 'Penarikan Aset tetap', 'Penilaian Kembali AT', 'Kasus Perhitungan penyusutan &,amortisasi', 'Kasus penilaian Kembali AT']
               ),
                'description' => 'Memahami UU HPP dan PP RI No. 55/2022 mengenai hubungan istimewa, perjanjian internasional perpajakan, dan perhitungan penyusutan/amortisasi harta.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Perhitungan Withholding Tax sesuai UU HPP - Subjek, Objek, dan Tarif PPh Pasal 22, 23/26',
                'materials' => json_encode(['Subjek, Objek, dan Tarif PPh Pasal 22', 'Pemungut PPh Pasal 22', 'Saat Terhutang dan Tata Cara Pemungutan, Penyetoran, dan Pelaporan Psl 22', 'Subjek, Objek, Pemotong, dan Mekanisme Pemotongan PPh Pasal 23/26', 'Saat Terhutang Penyetoran dan Pelaporan PPh Pasal 23/26', 'Cara Perhitungan PPh Pasal 22, dan 23/26', 'PPh UMKM (PP No 23/2018 dan PP No.55/2022)', 'Kasus PPh Pasal 22, PPh Pasal 23/26, dan PPh UMKM',
                'Prinsip Pemotongan PPh Final', 'Objek dan Tarif PPh Final', 'Cara Perhitungan PPh Pasal 4(2) dan PPh Psl 15', 'Kasus PPh Pasal 4(2) dan PPh Psl 15']
               ),
                'description' => 'Memahami perhitungan withholding tax, mencakup subjek, objek, tarif, PPh pasal 22, 23/26, pemotongan, penyetoran, pelaporan, dan kasus. Juga, perhitungan PPh Final pasal 4(2) dan 15.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Optimalkan Pajak Penghasilan: Rinci PPh Pasal 24 dan Perhitungannya',
                'materials' => json_encode(['Prinsip Pemungutan PPh Pasal 24', 'Pengertian dan Mekanisme Pengkreditan PPh Pasal 24', 'Perhitungan Kredit Pajak Luar Negeri WP OP dan Badan', 'Penentuan PPh WP OPPT', 'Tata Cara Penyetoran dan Pelaporan PPh Pasal 25', 'Penentuan Besarnya Angsuran PPh Pasal 25', 'Insentif di Bidang PPh (Pasal 31A dan 31E)', 'Kasus PPh Pasal 24, PPh Pasal 25, PPh WP OPPT, PPh Pasal 31A dan 31E']
            ),
                'description' => 'Memahami PPh Pasal 24, mekanisme pengkreditan, perhitungan kredit pajak luar negeri, PPh WP OPPT, angsuran PPh pasal 25, dan insentif PPh.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Dasar Pajak Penghasilan: Pemahaman Mendalam tentang PPh Pasal 21/26 Menurut UU HPP dan PP No. 55/2022',
                'materials' => json_encode(['Pengertian PPh Pasal 21/26', 'Subyek dan Obyek PPh Pasal 21/26', 'Pemotong PPh Pasal 21/26', 'Hak dan Kewajiban WP dan Pemotong Pajak', 'Tata Cara Penyetoran dan Pelaporan PPh Pasal 21/26', 'Perlakuan Fiscal atas Natura / Kenikmatan dalam PPh Pasal 21/26']
            ),
                'description' => 'Memahami PPh pasal 21/26, mencakup pengertian, subyek, obyek, pemotong, hak dan kewajiban, tarif pajak, serta tata cara penyetoran dan pelaporan sesuai UU HPP dan PP No. 55/2022.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Perhitungan PPh Pasal 21/26: Panduan Lengkap untuk Pegawai Tetap sesuai UU HPP dan PP No. 55/2022',
                'materials' => json_encode(['Cara Menghitung PPh Pasal 21: Pegawai Tetap, Pegawai Tidak Tetap, Bukan Pegawai, Penerima Pensiun, Peserta Kegiatan, Penerima Pesangon, PNS / TNI Polri, WP Luar Negeri', 'Pelaporan PPh Pasal 21/26 Melalui Form SPT 1721', 'Kasus PPh Pasal 21/26']
            ),
                'description' => 'Memahami PPh pasal 21/26 sesuai UU HPP dan PP No. 55/2022 untuk berbagai kategori, termasuk pegawai, pensiunan, peserta kegiatan, dan WP luar negeri.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kasus PPh WP OP dan WP Badan: Langkah-langkah Penghitungan dan Rekonsiliasi Fiskal',
                'materials' => json_encode(['PPh WP OP (Pembukuan dan/atau Norma Penghitungan Penghasilan Neto)', 'PPh WP Badan']
            ),
                'description' => 'Mampu menyelesaikan kasus PPh untuk WP OP dan WP badan, termasuk pembukuan, norma penghitungan penghasilan neto, dan rekonsiliasi fiskal.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Evolusi Perubahan PPn menjadi PPN: Latar Belakang dan Implikasinya Menurut UU HPP dan PP No. 44/2022',
                'materials' => json_encode(['Latar Belakang Penggantian PPn dengan PPN', 'Dasar Hukum dan Pengertian Umum PPN', 'Karakteristik dan Mekanisme Pemungutan PPN', 'Subjek, Objek, dan Pengecualian', 'Tarif PPN', 'Kewajiban PKP', 'Pembukuan yang Wajib Diselenggarakan PKP', 'Pengertian, Karakteristik, Tarif, dan Penghitungan PPnBM', 'Saat dan Tempat Pajak Terutang', 'Dasar Hukum Pembuatan FP', 'Jenis, Kewajiban, dan Saat Pembuatan Faktur Pajak serta Tata Cara Pembetulannya', 'Penyerahan BKP/JKP yang Pembayarannya Menggunakan Valuta Asing', 'Nota Retur, Pembatalan', 'Sanksi Administrasi']),
                'description' => 'Memahami latar belakang perubahan dari PPn ke PPN, termasuk pengertian, karakteristik, mekanisme pemungutan, subjek, objek, tarif, DPP, dan kewajiban PKP sesuai UU HPP dan PP No. 44/2022. Serta kewajiban pembukuan, PPnBM, saat dan tempat pajak terutang, faktur pajak, nota retur, pembatalan, dan sanksi administrasi.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Optimalkan Keuangan Bisnis: Penghitungan Pengkreditan Pajak Masukan Menurut UU HPP dan PP No. 44/2022',
                'materials' => json_encode(['Dasar Hukum dan Mekanisme Pengkreditan PM', 'Penghitungan Kembali PM yang Telah Dikreditkan', 'Perhitungan Pembagi WP yang Menggunakan Pedoman Penghitungan', 'Dasar Hukum, Pengertian Restitusi, dan Jangka Waktu Penyelesaiannya', 'Dasar Hukum dan Pengertian Pemungut PPN dan Penyerahan kepada Pemungut', 'Fasilitas Perpajakan di Bidang PPN/PPnBM', 'Pelaporan PPN/PPnBM pada Form SPT Masa PPN',
                'Dasar Hukum, Pengenaan Pajak Karbon', 'Subjek, Objek, dan Pengecualiannya', 'DPP, Tarif Pajak, dan Cara Perhitungannya', 'Saat Terutang Pajak Karbon', 'Ketentuan Perpajakan yang Dapat Diindikasikan untuk Penurunan Emisi Karbon (PPN dan PPnBM, Pajak Daerah Propinsi/Kabupaten/Kota)', 'Perpajakan atas Perdagangan Karbon']),
                'description' => 'Memahami perpajakan menurut UU HPP dan PP No. 44/2022, meliputi penghitungan PPN, restitusi, pemungut PPN, fasilitas, dan pajak karbon.',
                'subject_id' => 4, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // subject 5 FINANCIAL MANAGEMENT
            [
                'title' => 'Ikhtisar Manajemen Keuangan dan Pasar dan Institusi Keuangan dan Analisis Laporan Keuangan',
                'materials' => json_encode(['Apa itu Keuangan?', 'Tujuan Utama Keuangan', 'Konflik Manajemen dan Pemegang Utang',
                'Proses Alokasi Modal', 'Pasar Keuangan', 'Bursa Saham', 'Pasar Saham Umum', 'Pasar Saham dan Pengembalian', 'Efisiensi Pasar Saham',
                'Analisis Rasio', 'Rasio Likuiditas', 'Rasio Manajemen Aset', 'Rasio Manajemen Utang', 'Rasio Profitabilitas', 'Rasio Nilai Pasar', 'Persamaan Du Pont']
            ),
                'description' => 'Mampu memahami financial management secara keseluhan, mengetahui jenis-jenis market, dan mampu melakukan analisa laporan keuangan',
                'subject_id' => 5, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Nilai Waktu Uang dan Risiko dan Tingkat Pengembalian',
                'materials' => json_encode(['Garis Waktu', 'Nilai Masa Depan', 'Nilai Sekarang', 'Nilai Masa Depan Anuitas Biasa dan Anuitas Biasa', 'Nilai Sekarang Anuitas Biasa dan Anuitas Biasa', 'Perpetuitas', 'Arus Kas Tidak Teratur',
                'Keseimbangan Risiko-Pengembalian dan Perdagangan', 'Risiko Berdiri Sendiri', 'CAPM', 'Hubungan Antara Risiko dan Tingkat Pengembalian']
               ),
                'description' => 'Mampu memahami konsep nilai waktu uang dan risiko dari suatu project',
                'subject_id' => 5, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Biaya Modal',
                'materials' => json_encode(['Ikhtisar Biaya Modal Tertimbang Rata-Rata (WACC)', 'Definisi Dasar', 'Biaya Utang', 'Biaya Saham Preferen', 'Biaya Laba Ditahan', 'Biaya Saham Umum Baru', 'Komposit, atau WACC', 'Faktor yang Mempengaruhi WACC']
            ),
                'description' => 'Mampu memahami perhitungan biaya modal dengan baik',
                'subject_id' => 5, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Dasar-Dasar Anggaran Modal',
                'materials' => json_encode(['Ikhtisar Anggaran Modal', 'Nilai Saat Ini (NPV)', 'Tingkat Pengembalian Internal (IRR)', 'Tingkat Pengembalian Internal yang Dimodifikasi (MIRR)', 'Periode Pengembalian Modal', 'Kriteria Keputusan yang Digunakan dalam Praktek']
            ),
                'description' => 'Mampu memahami dasar dari alokasi modal',
                'subject_id' => 5, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Estimasi Arus Kas dan Analisis Risiko',
                'materials' => json_encode(['Isu Konseptual dalam Estimasi Arus Kas', 'Analisis Proyek Ekspansi', 'Analisis Penggantian', 'Analisis Risiko dalam Anggaran Modal', 'Pengukuran Risiko Berdiri Sendiri', 'Siklus Proyek yang Tidak Merata']
            ),
                'description' => 'Mampu menganalisis estimasi cash flow suatu perusahaan',
                'subject_id' => 5, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Struktur Modal dan Leverage',
                'materials' => json_encode(['Risiko Bisnis dan Risiko Keuangan', 'Menentukan Struktur Modal Optimal', 'Teori Struktur Modal', 'Checklist untuk Keputusan Struktur Modal']
            ),
                'description' => 'Mampu memahami struktur modal dan hutang suatu perusahaan',
                'subject_id' => 5, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Manajemen Modal Kerja',
                'materials' => json_encode(['Latar Belakang Modal Kerja', 'Kebijakan Investasi Aset Lancar', 'Kebijakan Pendanaan Aset Lancar', 'Siklus Pengonversian Kas', 'Anggaran Kas', 'Persediaan', 'Piutang']
            ),
                'description' => 'Mampu memahami kinerja model dari suatu perusahaan',
                'subject_id' => 5, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // subject 6 STATISTICS
            [
                'title' => 'What are Statistics and Descriptive Statistics',
                'materials' => json_encode(['Uji Validitas', 'Uji Reliabilitas (Konsistensi)', 'Uji Normalitas', 'Uji Beda Satu Kategori', 'Independent Sample t-Test', 'Wilcoxon Mann Whitney Test', 'Paired atau Dependent Sample t-Test', 'Wilcoxon Signed-Rank']
            ),
                'description' => 'Memahami dasar-dasar analisis data serta memperoleh keterampilan praktis dalam mengelola dan menyajikan data secara informatif.',
                'subject_id' => 6, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Validitas dan Reliabilitas Instrumen: Aspek Kunci dalam Penelitian Statistik',
                'materials' => json_encode(['One-Way Anova', 'Kruskal-Wallis Test', 'Chi Square', 'Korelasi Pearson', 'Uji Korelasi Spearman', 'Uji Regresi']
            ),
                'description' => 'Mampu mengevaluasi dan memastikan keandalan, ketepatan, dan distribusi normalitas instrumen serta menguji perbedaan antara dua kelompok atau sampel data.',
                'subject_id' => 6, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Analysis of Variance Nonparametric Methods: Goodness-of-Fit Tests dan Uji Korelasi dan Uji Regresi',
                'materials' => json_encode(['Uji Normalitas Residual', 'Multicollinearity', 'Heteroscedasticity', 'Autocorrelation']
            ),
                'description' => 'Mengeksplorasi perbedaan varian, kesesuaian distribusi, dan hubungan antar variabel dengan Uji Korelasi Pearson, Uji Korelasi Spearman, dan Uji Regresi.',
                'subject_id' => 6, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Uji Asumsi Klasik',
                'materials' => json_encode(['Uji Normalitas', 'Uji Regresi', 'Konsep Dasar', 'Jenis-jenis', 'Interpretasi Koefisien', 'Evaluasi Model']
            ),
                'description' => 'Mampu mengevaluasi kepatuhan model regresi terhadap prasyarat dasar statistik.',
                'subject_id' => 6, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Dummy Variable Regression Models dan Qualitative Response Regression Models',
                'materials' => json_encode(['Panel Data Introduction', 'Model Analisis Data Panel', 'Evaluasi Model Panel', 'Interpretasi Hasil', 'Perbedaan Reflective dan Formative', 'Pembentukan Faktor', 'Analisis dan Interpretasi']
            ),
                'description' => 'Mampu melakukan uji normalitas dan uji regresi pada model regresi respons kualitatif dengan berfokus pada konsep dasar, jenis-jenis, interpretasi koefisien, dan evaluasi model.',
                'subject_id' => 6, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Panel Data Regression Models dan Factor Analysis (Reflective vs Formative)',
                'materials' => json_encode(['Perbedaan Reflective dan Formative', 'Pembentukan Faktor', 'Analisis dan Interpretasi']),
                'description' => 'Memahami model regresi data panel dengan tahap pengenalan, analisis model data panel, evaluasi model panel, dan interpretasi hasil, serta konsep perbedaan antara analisis reflective dan formative dalam analisis faktor, pembentukan faktor, dan analisis serta interpretasi hasilnya.',
                'subject_id' => 6, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Path Analysis',
                'materials' => json_encode(['Path Analysis Overview', 'Direct and Indirect Effects', 'Mediation Analysis', 'Model Fit and Interpretation']
            ),
                'description' => 'Memahami path analysis dengan membahas pengantar path analysis, efek langsung dan tidak langsung, analisis mediasi, serta penilaian kesesuaian model dan interpretasi hasil.',
                'subject_id' => 6, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Moderated Regression Analysis (MRA)',
                'materials' => json_encode(['Introduction to Moderated Regression', 'Interaction Effects', 'Interpretation of Interaction', 'Practical Applications']            ),
                'description' => 'Memahami analisis regresi yang dimoderasi (MRA) dengan pengantar moderated regression, efek interaksi, interpretasi interaksi, dan aplikasi praktisnya.',
                'subject_id' => 6, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // subject 7 INTRODUCTION TO ECONOMICS 2
            [
                'title' => 'Ruang lingkup makroekonomi',
                'materials' => json_encode(['Pendekatan Historis Teori Makroekonomi', 'Diagram Lingkar Makroekonomi', 'Peran Pemerintah']
            ),
                'description' => 'Memahami ruang lingkup makroekonomi',
                'subject_id' => 7, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Data makroekonomi serta pengukurannya',
                'materials' => json_encode(['Pengukuran Pendapatan Nasional', 'Pengukuran Biaya Hidup', 'Pengukuran Pengangguran']
            ),
                'description' => 'Memahami data makroekonomi serta pengukurannya',
                'subject_id' => 7, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ekonomi riil dalam jangka panjang',
                'materials' => json_encode(['Produksi dan Pertumbuhan', 'Tabungan, Investasi, dan Sistem Keuangan', 'Pengangguran dan Tingkat Alamiah Pengangguran']
            ),
                'description' => 'Memahami ekonomi riil dalam jangka panjang',
                'subject_id' => 7, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Peran uang dan tingkat harga dalam jangka panjang',
                'materials' => json_encode(['Sistem Moneter', 'Pertumbuhan Uang dan Inflasi']
            ),
                'description' => 'Memahami peran uang dan tingkat harga dalam jangka panjang',
                'subject_id' => 7, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Konsep makroekonomi dalam perekonomian terbuka',
                'materials' => json_encode(['Konsep Dasar', 'Teori Perekonomian Terbuka']
            ),
                'description' => 'Memahami konsep makroekonomi dalam perekonomian terbuka',
                'subject_id' => 7, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fluktuasi perekonomian dalam jangka pendek',
                'materials' => json_encode(['Permintaan Agregat', 'Pengaruh Kebijakan Fiskal dan Kebijakan Moneter terhadap AD', 'Trade-off Jangka Pendek antara Inflasi dan Pengangguran']
            ),
                'description' => 'Memahami fluktuasi perekonomian dalam jangka pendek',
                'subject_id' => 7, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Debat terkait kebijakan makroekonomi dan ekonomi politik kebijakan makroekonomi',
                'materials' => json_encode(['Haruskah Pembuat Kebijakan Moneter dan Fiskal Mencoba untuk Menstabilkan Ekonomi?', 'Haruskah Kebijakan Moneter Dibuat Berdasarkan Aturan?', 'Haruskah Bank Sentral Menargetkan Inflasi Nol Persen?', 'Haruskah Pemerintah Menyeimbangkan Anggaran?', 'Haruskah Regulasi Pajak Dibentuk untuk Meningkatkan Tabungan?', 'Ekonomi Politik Kebijakan Makroekonomi']
            ),
                'description' => 'Mengetahui debat terkait kebijakan makroekonomi dan ekonomi politik kebijakan makroekonomi',
                'subject_id' => 7, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kompleksitas makroekonomi dalam fluktuasi jangka pendek (krisis finansial)',
                'materials' => json_encode(['Kebangkrutan', 'Krisis dan Siklus Finansial', 'Ketidaksimetrisan Informasi', 'Ketidakpastian', 'Pertimbangan Institusi dan Sosial Politik', 'Instabilitas dan Krisis', 'Behavioral Macroeconomics']
            ),
                'description' => 'Mengetahui kompleksitas makroekonomi dalam fluktuasi jangka pendek (krisis finansial)',
                'subject_id' => 7, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // subject 8 ADVANCED STATISTICS
            [
                'title' => 'Review untuk materi inference',
                'materials' => json_encode(['Rumus umum Interval Kepercayaan dan prosedur umum pengujian hipotesis menggunakan distribusi normal']),
                'description' => 'Memahami konsep dasar inference',
                'subject_id' => 8, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Inference berdasarkan 2 sampel',
                'materials' => json_encode(['Interval Kepercayaan untuk Perbedaan antara Dua Mean (Sampel Independen)', 'Interval Kepercayaan untuk Rata-rata Perbedaan (Pengambilan Sampel Berpasangan Tergantung atau Berpasangan)', 'Interval Kepercayaan untuk Proporsi Dua Populasi Independen', 'Pengujian Hipotesis untuk Perbedaan antara Dua Mean (Sampel Independen)', 'Pengujian Hipotesis untuk Mengetahui Rata-rata Perbedaan (Pengambilan Sampel Berpasangan Tergantung atau Berpasangan)', 'Pengujian Hipotesis untuk Proporsi Dua Populasi Independen', 'Menggunakan Excel untuk Menguji Dua Populasi']
            ),
                'description' => 'Memahami konsep-konsep inference berdasarkan 2 sampel dan uji hipotesisnya',
                'subject_id' => 8, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Inference untuk variance and Uji Chi-Square',
                'materials' => json_encode(['Pengujian Varian Tunggal', 'Pengujian Dua Varians', 'Menggunakan Excel untuk Pengujian Varians', 'Uji Kelayakan (untuk Multinomial dan Beberapa Distribusi Teoretis Lainnya)', 'Menggunakan Excel untuk Menguji Independensi']
            ),
                'description' => 'Memahami inference untuk variance dan uji Chi-Square serta memahami konsep-konsep  ANOVA',
                'subject_id' => 8, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ANOVA',
                'materials' => json_encode(['Kegunaan Anova', 'Statistik Pengujian', 'Tabel Anova', 'Beberapa Perbandingan menggunakan LSD (Fisher)', 'Anova Dua Arah tanpa Replikasi', 'Anova Dua Arah dengan Replikasi', 'Menggunakan Excel untuk Anova']
            ),
                'description' => 'Memahami inference untuk variance dan uji Chi-Square serta memahami konsep-konsep  ANOVA',
                'subject_id' => 8, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Regresi Sederhana',
                'materials' => json_encode(['Pengertian Regresi dan Korelasi', 'Menduga Garis Regresi menggunakan Metode Ordinary', 'Menguji Parameter Garis Regresi', 'Interval Kepercayaan Prediksi', 'Menggunakan Excel untuk Garis Regresi']
            ),
                'description' => 'Memahami konsep-konsep dasar regresi linear sederhana',
                'subject_id' => 8, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Regresi Berganda',
                'materials' => json_encode(['Arti Regresi Berganda', 'Pengujian pada Regresi Berganda', 'Penggunaan Variabel Dummy pada Variabel Independen Kualitatif', 'Pengenalan Bentuk Fungsional dalam Analisis Regresi', 'Menggunakan Excel untuk Regresi Berganda']
            ),
                'description' => 'Memahami konsep-konsep dasar regresi linear berganda',
                'subject_id' => 8, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Analisis Time Series',
                'materials' => json_encode(['Arti Analisis Time Series', 'Komponen Data Time Series', 'Berbagai Model Tren: Linier dan Eksponensial', 'Variasi Musiman', 'Peramalan dalam Time Series menggunakan Tren dan Indeks Musiman', 'Menggunakan Excel untuk Analisis Time Series']
            ),
                'description' => 'Mengetahui dan memahami konsep dasar analisis data time series',
                'subject_id' => 8, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Non-Parametric Test',
                'materials' => json_encode(['Pengenalan Metode Nonparametrik', 'Wilcoxon Sign Rank Test', 'Wilcoxon Rank Sum Test', 'Tes Kruskal-Wallis', 'Spearman Rank Correlation Test']
            ),
                'description' => 'Memahami konsep-konsep dasar Non-Parametric Test',
                'subject_id' => 8, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // subject 9 ADVANCED MATHEMATICS

            [
                'title' => 'Komparatif Statis: Pendekatan Ekonomi',
                'materials' => json_encode(['Diferensial', 'Derivatif', 'Comparative Statics of General-Function Models']
            ),
                'description' => 'Mengetahui konsep dasar komparatif statis',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Optimisasi tanpa kendala (1 variabel dan 2 variabel): Pendekatan Ekonomi',
                'materials' => json_encode(['Nilai Optimum dan Ekstrimum', 'Uji Turunan Pertama', 'Uji Turunan Kedua', 'Maclaurin and Taylor Series', 'Nth-Derivative Test for Relative Extremum of a Function of One Variable', 'The Differential Version of Optimization Conditions', 'Extreme Values of a Function of Two Variables', 'Quadratic Forms—An Excursion', 'Objective Functions with More than Two Variables', 'Second-Order Conditions in Relation to Concavity and Convexity', 'Economic Applications', 'Comparative-Static Aspects of Optimization']
            ),
                'description' => 'Memahami konsep optimisasi tanpa kendala untuk 1 dan 2 variabel',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Optimasi dengan kendala persamaan: Pendekatan Ekonomi ',
                'materials' => json_encode(['Effects of a Constraint', 'Finding the Stationary Values', 'Second-Order Conditions', 'Quasiconcavity and Quasiconvexity', 'Utility Maximization and Consumer Demand', 'Homogeneous Functions', 'Least-Cost Combination of Inputs']
            ),
                'description' => 'Memahami konsep optimisasi dengan kendala persamaan',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Optimisasi dengan kendala ketidaksamaan',
                'materials' => json_encode(['Pengenalan dan Konsep Dasar dan Pendekatan Grafis', 'Nonlinear Programming and Kuhn-Tucker Conditions', 'The Constraint Qualification', 'Economic Applications', 'Sufficiency Theorems in Nonlinear Programming', 'Maximum-Value Functions and the Envelope Theorem', 'Duality and the Envelope Theorem']
            ),
                'description' => 'Memahami konsep optimisasi dengan kendala ketidaksamaan',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Economic Dynamics and Integral Calculus',
                'materials' => json_encode(['Dynamics and Integration', 'Indefinite Integrals', 'Definite Integrals', 'Improper Integrals', 'Some Economic Applications of Integrals', 'Domar Growth Model']
            ),
                'description' => 'Memahami dinamika ekonomi dan kalkulus integral',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'First-Order Differential Equations ',
                'materials' => json_encode(['First-Order Linear Differential Equations with Constant Coefficient and Constant Term', 'Dynamics of Market Price', 'Variable Coefficient and Variable Term', 'Exact Differential Equations', 'Nonlinear Differential Equations of the First Order and First Degree', 'The Qualitative-Graphic Approach', 'Solow Growth Model']
            ),
                'description' => 'Memahami konsep dalam First-Order Differential Equations dan aplikasinya dalam ekonomi',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second-Order Differential Equations',
                'materials' => json_encode(['Second-Order Linear Differential Equations with Constant Coefficients and Constant Term', 'Complex Numbers and Circular Functions', 'Analysis of the Complex-Root Case', 'A Market Model with Price Expectations', 'The Interaction of Inflation and Unemployment', 'Differential Equations with a Variable Term', 'Higher-Order Linear Differential Equations']
            ),
                'description' => 'Memahami konsep dalam Second-Order Differential Equations dan aplikasinya dalam ekonomi',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'First-Order Difference Equations',
                'materials' => json_encode(['Discrete Time, Differences, and Difference Equations', 'Solving a First-Order Difference Equation', 'The Dynamic Stability of Equilibrium', 'The Cobweb Model', 'A Market Model with Inventory', 'Nonlinear Difference Equations— The Qualitative-Graphic Approach']
            ),
                'description' => 'Memahami konsep First-Order Difference Equation dan aplikasinya pada model ekonomi dinamis',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second-Order Difference Equations',
                'materials' => json_encode(['Second-Order Linear Difference Equations with Constant Coefficients and Constant Term', 'Samuelson Multiplier-Acceleration Interaction Model', 'Inflation and Unemployment in Discrete Time', 'Generalizations to Variable-Term and Higher-Order Equations']
            ),
                'description' => 'Memahami konsep Second-Order Difference Equation dan aplikasinya pada model dinamika ekonomi yang lebih kompleks',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Introduction to Real Analysis (1)',
                'materials' => json_encode(['Basic Concept of Set', 'Set Operation', 'Set Types (Open Balls, Open Sets, Closed Sets, Bounded Sets, Compact Sets, Convex Set)', 'Convergence Sequences', 'Divergence Sequences', 'Subsequences', 'Monotonic Sequences', 'Supremum & Infimum', 'Maximum & Minimum']),
                'description' => 'Memahami dan menganalisis konsep-konsep dasar real analysis',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Introduction to Real Analysis (2)',
                'materials' => json_encode(['Mapping and Functions', 'Limits', 'Continuous Function', 'Differentiable Functions', 'Convex Function', 'Concave Function', 'Hessian Matrices', 'Existence of Solutions: Bolzano Weierstrass Theorem and Applications']),
                'description' => 'Memahami konsep-konsep real analysis seperti limit, dan kontinuitas untuk memahami model ekonomi ',
                'subject_id' => 9, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // OLD SUBJECT

            // SUBJECT 10
            [
                'title' => 'Pengantar Akuntansi & Proses Pencatatan',
                'materials' => json_encode(['Penggunaan Akuntansi dan Aktivitas', 'Fondasi-fondasi Akuntansi', 'Dasar-dasar dan Penggunaan Persamaan Akuntansi', 'Laporan Keuangan', 'Akun', 'Langkah-langkah dalam Proses Pencatatan', 'The Trial Balance']),
                'description' => 'Mampu memahami fundamental accounting dan membuat jurnal umum',
                'subject_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Menyesuaikan Akun & Menyelesaikan Siklus Akuntansi',
                'materials' => json_encode(['Masalah Waktu', 'Dasar-dasar Jurnal Penyesuaian', 'Neraca Saldo Disesuaikan dan Laporan Keuangan', 'Menggunakan Kertas Kerja', 'Menutup Buku', 'Ringkasan Siklus Akuntansi', 'Pernyataan Posisi Keuangan Terklasiifikasi']),
                'description' => 'Mampu membuat jurnal penyesuaian dan melengkapi siklus akuntansi jasa (worksheet, laporan keuangan, dan jurnal penutup)',
                'subject_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Akuntansi untuk Perusahaan Dagang & Persediaan',
                'materials' => json_encode(['Operasi Dagang', 'Pencatatan Pembelian Perusahaan Dagang', 'Pencatatan Penjualan Perusahaan Dagang', 'Menyelesaikan Siklus Akuntansi', 'Bentuk Laporan Keuangan', 'Klasifikasi dan Penentuan Persediaan', 'Biaya Persediaan', 'Kesalahan Persediaan', 'Presentasi Pernyataan dan Analisis']),
                'description' => 'Mampu memahami siklus akuntansi dagang dan memahami persediaan dan kas dari suatu perusahaan',
                'subject_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Penipuan, Pengendalian Internal, dan Kas',
                'materials' => json_encode(['Penipuan dan Pengendalian Internal', 'Pengendalian Kas', 'Fitur Pengendalian: Penggunaan Bank', 'Pelaporan Kas']),
                'description' => 'Mampu memahami dan mengendalikan risiko penipuan, pengendalian internal, dan manajemen kas.',
                'subject_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Akuntansi untuk Piutang & Aset Tetap, SDA, & Aset Tidak Berwujud',
                'materials' => json_encode(['Jenis Piutang', 'Piutang Usaha', 'Piutang Wesel', 'Aset Tetap', 'Sumber Daya Alam yang Dapat Diekstraksi', 'Aset Tidak Berwujud']),
                'description' => 'Memahami piutang dan aset tetap dari suatu perusahaan',
                'subject_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Utang Jangka Pendek & Utang Jangka Panjang',
                'materials' => json_encode(['Wesel Bayar', 'Pendapatan Diterima Dimuka', 'Gaji dan Upah', 'Jatuh Tempo Kewajiban Jangka Panjang', 'Gambaran Umum Obligasi', 'Transaksi Obligasi', 'Akuntansi untuk Kewajiban Jangka Panjang']),
                'description' => 'Memahami utang lancar dan tidak lancar dari suatu perusahaan',
                'subject_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Korporasi: Organisasi, Transaksi Saham, Ekuitas & Investasi',
                'materials' => json_encode(['Akuntansi untuk Transaksi Saham', 'Dividen', 'Akuntansi untuk Investasi Obligasi', 'Akuntansi untuk Investasi Saham']),
                'description' => 'Memahami pencatatan akuntansi dalam investasi dan saham',
                'subject_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Laporan Arus Kas & Analisis Laporan Keuangan: Gambaran Umum',
                'materials' => json_encode(['Laporan Arus Kas: Kegunaan dan Format', 'Menyiapkan Laporan Arus Kas - Metode Tidak Langsung', 'Dasar-dasar Analisis Laporan Keuangan', 'Analisis Horizontal', 'Analisis Vertikal', 'Analisis Rasio']),
                'description' => 'Memahami cash flow dan analisa laporan keuangan',
                'subject_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // SUBJECT 11
            [
                'title' => 'Konsep Dasar Ekonomi & Permintaan dan Penawaran',
                'materials' => json_encode(['Mengapa Belajar Ekonomi', 'Ekonomi Positif vs. Normatif', 'Kurva Kemungkinan Produksi', 'Biaya Peluang', 'Ekonomi Campuran Modern', 'Kurva Permintaan', 'Kurva Penawaran', 'Keseimbangan Pasar']),
                'description' => 'Memahami konsep dasar ekonomi secara komprehensif dan permintaan & penawaran serta pasar',
                'subject_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Elastisitas dan Aplikasi',
                'materials' => json_encode(['Elastisitas Harga Permintaan', 'Elastisitas dan Pendapatan', 'Elastisitas Harga Penawaran']),
                'description' => 'Memahami konsep elastisitas dan perhitungannya',
                'subject_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Produksi & Analisis Biaya',
                'materials' => json_encode(['Konsep Dasar Produksi', 'Skala Hasil Produksi', 'Elastisitas Harga Penawaran', 'Keuntungan Ekonomi vs. Keuntungan Akuntansi', 'Berbagai Ukuran Biaya', 'Biaya dalam Jangka Pendek dan Jangka Panjang']),
                'description' => 'Memahami produksi dan biaya secara keseluruhan',
                'subject_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Pasar Persaingan Sempurna & Pasar Monopoli',
                'materials' => json_encode(['Apa Itu Pasar Persaingan', 'Maksimalisasi Keuntungan dan Kurva Penawaran Perusahaan dalam Pasar Persaingan', 'Kurva Penawaran dalam Pasar Persaingan', 'Mengapa Monopoli Muncul', 'Bagaimana Monopoli Mengambil Keputusan', 'Produksi dan Harga', 'Biaya Kesejahteraan Monopoli', 'Diskriminasi Harga', 'Kebijakan Publik Terhadap Monopoli']),
                'description' => 'Memahami output market dengan baik beserta kondisi-kondisinya',
                'subject_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Pasar Monopolistik & Oligopoli',
                'materials' => json_encode(['Antara Monopoli dan Persaingan Sempurna', 'Persaingan dengan Produk yang Terdiferensiasi', 'Periklanan', 'Konsep Dasar Makroekonomi', 'Penawaran dan Permintaan Agregat']),
                'description' => 'Memahami konsep ekonomi makro dan perhitungan pendapatan nasional.',
                'subject_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Gambaran Umum Makroekonomi & Akuntansi Pendapatan Nasional',
                'materials' => json_encode(['Konsep Makroekonomi', 'Penawaran dan Permintaan Agregrat', 'Pengukuran Produk Domestik Bruto', 'Ukuran Pendapatan Lainnya', 'Komponen PDB', 'PDB Riil vs. PDB Nominal']),
                'description' => 'Memahami perhitungan pendapatan nasional dengan sistem perekonomian terbuka dan tertutup.',
                'subject_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Uang dan Lembaga Finansial & Siklus Bisnis',
                'materials' => json_encode(['Arti Uang', 'Permintaan Uang', 'Bank dan Penawaran Uang', 'Apa Itu Siklus Bisnis?', 'Kurva Permintaan Agregat', 'Kurva Penawaran Agregat', 'Model Permintaan Agregat dan Penawaran Agregat']),
                'description' => 'Memahami konsep sistem keuangan di suatu negara dan siklus bisnis.',
                'subject_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Pengangguran dan Inflasi',
                'materials' => json_encode(['Tingkat Pengangguran', 'Inflasi', 'Kompromi Jangka Pendek antara Inflasi dan Pengangguran']),
                'description' => 'Memahami konsep pengangguran dan inflasi.',
                'subject_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // SUBJECT 12
            [
                'title' => 'Manajer dan Manajemen Akuntansi & Pengantar Syarat dan Tujuan Biaya & Menentukan Bagaimana Perilaku Biaya',
                'materials' => json_encode([
                    'Akuntansi Keuangan, Akuntansi Manajemen, dan Akuntansi Biaya',
                    'Keputusan Strategis dan Akuntan Manajemen',
                    'Pengambilan Keputusan, Perencanaan, dan Pengendalian: Proses Pengambilan Keputusan Lima Langkah',
                    'Struktur Organisasi dan Akuntan Manajemen',
                    'Etika Profesi',
                    'Biaya dan Terminologi Biaya',
                    'Pola Perilaku Biaya: Biaya Variabel dan Biaya Tetap',
                    'Total Biaya dan Biaya Satuan',
                    'Bidang Usaha, Jenis Persediaan, Biaya Persediaan, dan Biaya Periode',
                    'Mengilustrasikan Aliran Biaya Persediaan dan Biaya Periode Mengukur Biaya Membutuhkan Pertimbangan',
                    'Kerangka Akuntansi Biaya dan Biaya Manajemen',
                    'Asumsi Dasar dan Contoh Fungsi Biaya',
                    'Mengidentifikasi Penggerak Biaya',
                    'Metode Estimasi Biaya',
                    'Langkah-Langkah Estimasi Fungsi Biaya Menggunakan Kuantitatif Analisis',
                    'Mengevaluasi Penggerak Biaya dari Estimasi Biaya Fungsi'
                ]),
                'description' => 'Mampu memahami peran manajer dalam akuntansi manajemen, konsep dasar biaya, serta analisis perilaku biaya dalam pengambilan keputusan.',
                'subject_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Siklus Akuntansi Biaya, Sistem Biaya, dan Metode Akumulasi Biaya & Analisis Laba Volume Biaya',
                'materials' => json_encode([
                    'Jenis Siklus Kegiatan Usaha',
                    'Jenis Laporan Sistem Laporan dan Metode Akumulasi Biaya',
                    'Esensi Analisis CVP',
                    'Titik Impas dan Target Pendapatan Operasional',
                    'Target Pendapatan Bersih dan Pajak Penghasilan',
                    'Menggunakan Analisis CVP untuk Pengambilan Keputusan',
                    'Analisis Sensitivitas dan Margin Keamanan',
                    'Perencanaan Biaya dan CVP',
                    'Pengaruh Bauran Penjualan terhadap Pendapatan',
                    'Analisis CVP pada Organisasi Jasa dan Nirlaba'
                ]),
                'description' => 'Mampu memahami siklus akuntansi biaya, sistem biaya, metode akumulasi biaya, dan analisis biaya-volume-laba (CVP) dalam pengambilan keputusan.',
                'subject_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Penetapan Job Costing',
                'materials' => json_encode([
                    'Konsep Dasar Sistem Penetapan Biaya',
                    'Penetapan Job Order Costing: Evaluasi dan Implementasi',
                    'Penetapan Biaya Normal',
                    'Biaya Aktual',
                    'Sistem Penetapan Biaya Pekerjaan yang Normal di Manufaktur',
                    'Biaya Tidak Langsung yang Dianggarkan dan Penyesuaian Akhir Tahun Buku',
                    'Variasi dari Penetapan Biaya Normal: Contoh Sektor Jasa'
                ]),
                'description' => 'Mampu memahami konsep biaya pekerjaan, sistem biaya normal, dan implementasinya dalam pengambilan keputusan akuntansi.',
                'subject_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Process Costing - Average & Process Costing - FIFO',
                'materials' => json_encode([
                    'Alur Biaya Produksi dan Penjurnalannya',
                    'Perhitungan Process Costing menggunakan metode Rata-rata',
                    'Langkah-langkah Menyusun Laporan Biaya Produksi',
                    'Format Standar Laporan Biaya Produksi',
                    'Perbedaan Metode Rata-Rata dan Metode FIFO',
                    'Perhitungan Process Costing menggunakan metode FIFO',
                    'Penyajian Laporan Biaya Produksi dengan Metode FIFO'
                ]),
                'description' => 'Mampu memahami konsep biaya proses, metode rata-rata, dan metode FIFO dalam akuntansi biaya.',
                'subject_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Biaya Kualitas & Spoilage, Rework, and Scrap',
                'materials' => json_encode([
                    'Produk Berkualitas',
                    'Jenis Biaya Kualitas',
                    'Mendefinisikan Spoilage, Rework dan Scrap',
                    'Kerusakan dalam Penetapan Biaya Proses Menggunakan Rata-Rata Tertimbang dan FIFO',
                    'Titik Inspeksi dan Alokasi Biaya Kerusakan Normal',
                    'Pentapan Biaya dan Spoilage',
                    'Penetapan Biaya Pekerjaan dan Rework',
                    'Akuntansi Scrap'
                ]),
                'description' => 'Mampu memahami konsep biaya kualitas serta spoilage, rework, dan scrap dalam konteks akuntansi biaya.',
                'subject_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Alokasi Biaya: Joint Products and Byproducts',
                'materials' => json_encode([
                    'Dasar-Dasar Joint Cost',
                    'Mengalokasikan Joint Cost',
                    'Memilih Metode Alokasi',
                    'Tidak Relevansi Joint Cost untuk Pengambilan Keputusan',
                    'Akuntansi Produk Sampingan'
                ]),
                'description' => 'Mampu memahami konsep alokasi biaya untuk produk bersama (joint products) dan produk sampingan (byproducts) dalam konteks akuntansi biaya.',
                'subject_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Anggaran Fleksibel, Varians Biaya Langsung, dan Pengendalian Manajemen & Overhead Pabrik: Terencana, Aktual, dan Terapan, Departementalisasi',
                'materials' => json_encode([
                    'Anggaran Statis dan Varians',
                    'Anggaran Fleksibel',
                    'Varians Harga dan Varians Efisiensi untuk Biaya Langsung Masukan',
                    'Penerapan Penetapan Biaya Standar',
                    'Penggunaan Varians dalam Manajemen',
                    'Perencanaan Biaya Overhead Variabel dan Tetap',
                    'Varians Biaya Overhead Variabel',
                    'Varians Biaya Overhead Tetap',
                    'Analisis Terpadu Varians Biaya Overhead',
                    'Analisis Varians dan Penetapan Biaya Berbasis Aktivitas',
                    'Varians Overhead dalam Pengaturan Nonmanufaktur'
                ]),
                'description' => 'Mampu memahami konsep anggaran fleksibel, varians biaya langsung, pengendalian manajemen, serta perencanaan dan analisis biaya overhead pabrik.',
                'subject_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Manajemen Inventaris, Just-in-Time, dan Metode Penetapan Biaya yang Disederhanakan & Penetapan Biaya Berbasis Aktivitas dan Berbasis Aktivitas Manajemen',
                'materials' => json_encode([
                    'Manajemen Inventaris di Organisasi Ritel',
                    'Memperkirakan Biaya Relevan Terkait Persediaan dan Dampaknya',
                    'Pembelian Tepat Waktu',
                    'Manajemen Inventaris, Produksi MRP dan JIT',
                    'Biaya Backflush',
                    'Akuntansi Lean',
                    'Rata-rata Luas dan Konsekuensinya',
                    'Sistem Penetapan Biaya Sederhana di Plastim Corporation',
                    'Menyempurnakan Sistem Penetapan Biaya',
                    'Sistem dan Penerapan Penetapan Biaya Berbasis Aktivitas'
                ]),
                'description' => 'Mampu memahami konsep manajemen persediaan, metode pengendalian persediaan Just-in-Time, serta sistem biaya sederhana dan Activity-Based Costing dalam akuntansi biaya.',
                'subject_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // SUBJECT 13
            [
                'title' => 'Aset Tetap, Tanah, & Peralatan',
                'materials' => json_encode([
                    'Properti, Tanah, dan Peralatan',
                    'Perolehan Properti, Tanah, dan Peralatan',
                    'Biaya Bunga Selama Konstruksi',
                    'Penilaian Properti, Tanah, dan Peralatan',
                    'Biaya Setelah Perolehan',
                    'Pelepasan Properti, Tanah, dan Peralatan'
                ]),
                'description' => 'Mampu mendeskripsikan aset tetap dan memahami perolehan, valuasi dan pelepasan dari aset tetap dan memahami penyusutan, penurunan nilai, deplesi, dan revaluasi dari aset tetap',
                'subject_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Aset Tetap, Tanah, & Peralatan',
                'materials' => json_encode([
                    'Penyusutan—Metode Alokasi Biaya',
                    'Masalah Penyusutan Lainnya',
                    'Masalah Akuntansi yang Berkaitan dengan Penurunan Nilai Aset',
                    'Prosedur Akuntansi untuk Penyusutan Sumber Daya Mineral',
                    'Akuntansi untuk Penilaian Ulang',
                    'Cara Melaporkan dan Menganalisis Properti, Tanah, Peralatan, dan Sumber Daya Mineral'
                ]),
                'description' => 'Mampu memahami penyusutan, penurunan nilai, deplesi, dan revaluasi dari aset tetap.',
                'subject_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Aset Tidak Berwujud',
                'materials' => json_encode([
                    'Karakteristik, Penilaian, dan Amortisasi Aset Tidak Berwujud',
                    'Akuntansi untuk Berbagai Jenis Aset Tidak Berwujud',
                    'Masalah Akuntansi untuk Pencatatan Goodwill',
                    'Prosedur Penurunan Nilai dan Persyaratan Penyajian untuk Aset Tidak Berwujud',
                    'Akuntansi dan Penyajian untuk Biaya Penelitian dan Pengembangan serta Biaya Serupa'
                ]),
                'description' => 'Mampu memahami karakteristik, valuasi, dan amortisasi dari aset tak berwujud dan jenisnya serta memahami isu-isu dan pencatatan terkait dengan goodwill',
                'subject_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Utang Lancar',
                'materials' => json_encode([
                    'Karakteristik, Penilaian, dan Pelaporan Kewajiban Jangka Pendek',
                    'Akuntansi untuk Jenis-Jenis Ketentuan',
                    'Akuntansi untuk Ketentuan Kerugian dan Keuntungan',
                    'Cara Menyajikan dan Menganalisis Informasi yang Berkaitan dengan Kewajiban'
                ]),
                'description' => 'Mampu memahami sifat, jenis, dan penilaian liabilitas jangka pendek dan jenisnya serta memahami akuntansi untuk berbagai jenis provisi.',
                'subject_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Utang Jangka Panjang',
                'materials' => json_encode([
                    'Sifat Obligasi dan Indikasi Akuntansi untuk Penerbitan Obligasi',
                    'Akuntansi untuk Utang Jangka Panjang',
                    'Akuntansi untuk Penghapusan Kewajiban Non-Jangka Panjang',
                    'Cara Menyajikan dan Menganalisis Kewajiban Non-Jangka Panjang'
                ]),
                'description' => 'Mampu memahami sifat dan akuntansi untuk penilaian pada waktu penerbitan dan pelunasan utang jangka panjang dan jenisnya, serta menerapkan metode amortisasi diskonto dan premi.',
                'subject_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Ekuitas',
                'materials' => json_encode([
                    'Bentuk Perusahaan dan Penerbitan Saham',
                    'Akuntansi dan Pelaporan untuk Saham Treasury',
                    'Masalah Akuntansi dan Pelaporan yang Berkaitan dengan Dividen',
                    'Cara Menyajikan dan Menganalisis Ekuitas'
                ]),
                'description' => 'Mampu memahami karakteristik dari bentuk organisasi perusahaan, akuntansi untuk penerbitan saham, saham preferen, dan treasuri, serta memahami kebijakan yang digunakan dalam membagikan dividen.',
                'subject_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Dilutive Securities dan Earnings per Share',
                'materials' => json_encode([
                    'Akuntansi untuk Penerbitan, Konversi, dan Penghapusan Efek Konversi',
                    'Akuntansi untuk Waran Saham dan Waran Saham yang Diterbitkan Bersama dengan Efek Lain',
                    'Akuntansi dan Pelaporan untuk Rencana Kompensasi Saham',
                    'Laba per Saham Dasar',
                    'Laba per Saham Dilusi'
                ]),
                'description' => 'Mampu memahami akuntansi untuk penerbitan, konversi, dan penghentian efek konversi, akuntansi untuk saham preferen, waran saham, program kompensasi saham, dan memahami perhitungan laba per saham dalam struktur modal sederhana maupun kompleks.',
                'subject_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Investasi',
                'materials' => json_encode([
                    'Akuntansi untuk Investasi Obligasi',
                    'Akuntansi untuk Investasi Saham',
                    'Metode Ekuitas dalam Akuntansi',
                    'Masalah Besar Lainnya yang Berkaitan dengan Investasi Obligasi dan Saham'
                ]),
                'description' => 'Mampu memahami akuntansi untuk investasi utang dan ekuitas, membandingkan metode ekuitas dengan metode nilai wajar, dan memahami isu-isu terkait lainnya',
                'subject_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // SUBJECT 14
            [
                'title' => 'Dasar Perpajakkan & Review Perpajakkan di Indonesia',
                'materials' => json_encode([
                    'Kebijakan Fiskal',
                    'Definisi dan Sejarah Pengumpulan Pajak',
                    'Sumber Pendapatan Negara, Filosofi, dan Fungsi Pajak',
                    'Posisi dan Hubungan Hukum Pajak dengan Hukum Sipil dan Hukum Pidana, Sistematisasi Hukum Pajak, dan Interpretasi dalam Hukum Pajak',
                    'Resistensi Pajak Aktif dan Pasif',
                    'Prinsip Pengumpulan Pajak',
                    'Teori-Teori Justifikasi Pengumpulan Pajak',
                    'Sistem Pajak dan Distribusi Pajak',
                    'Metode-Metode Pengumpulan Pajak',
                    'Jenis-Jenis Tarif Pajak',
                    'Definisi Utang Pajak, Timbul dan Berakhirnya Utang Pajak',
                    'Sistem Pengumpulan Pajak'
                ]),
                'description' => 'Memberikan pengetahuan mengenai dasar perpajakkan dan review dari perpajakkan di Indonesia',
                'subject_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Pajak Internasional & Pengenalan pada KUP',
                'materials' => json_encode([
                    'Definisi Hukum Pajak Internasional',
                    'Sumber Hukum Pajak Internasional',
                    'Subjek dan Objek Pajak dalam Pajak Internasional',
                    'Pajak Ganda (Double Taxation)',
                    'Perjanjian Pajak (Tax Treaty)',
                    'Dasar Hukum & Pemahaman Umum dalam Ketentuan Umum Perpajakkan (KUP)',
                    'Fungsi dan Manfaat NPWP/NPPKP',
                    'Pendaftaran, perubahan alamat, pencabutan NPWP/NPPKP',
                    'Subjek Pajak (mulai dan berakhir), kewajiban pajak subjektif, dan pengecualian mereka.',
                    'Objek Pajak, Objek Pajak final, dan Bukan Objek Pajak.',
                    'Aturan untuk format baru NPWP: NIK sebagai NPWP'
                ]),
                'description' => 'Memahami pajak internasional suatu negara dan pengantar pada UU KUP',
                'subject_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'SPT Tahunan & SPT Masa, Pencatatan & Pembukuan',
                'materials' => json_encode([
                    'Jenis-jenis laporan pajak berkala dan tahunan.',
                    'Prosedur pembayaran dan pelaporan pajak.',
                    'Koreksi laporan pajak sebelum dan setelah pemeriksaan.',
                    'Perpanjangan pengajuan laporan pajak tahunan beserta alasannya.',
                    'Pajak Penghasilan Final dari Laporan Pajak dan pelaporannya.',
                    'Pemotongan Pajak Penghasilan pada Laporan Pajak (Periode).',
                    'Pembukuan & Pencatatan serta kewajiban yang harus dipenuhi.',
                    'Pembukuan menggunakan bahasa asing dan mata uang asing serta penyimpanan dokumen dan batas waktu yang harus dipatuhi.',
                    'Pengecualian dari kewajiban melakukan pembukuan dan sanksi terkait pembukuan.'
                ]),
                'description' => 'Memahami maksud dari SPT beserta pencatatan dan pembukuan dalam perpajakkan',
                'subject_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Pengenalan pada Penyidikan & Pengenalan Pajak dan Restitusi',
                'materials' => json_encode([
                    'Definisi Penelitian, Pemeriksaan, dan Investigasi',
                    'Jenis-jenis dan sanksi untuk laporan pajak berkala dan tahunan',
                    'Tujuan dari Penelitian, Pemeriksaan, dan Investigasi',
                    'Hak dan Kewajiban dari wajib pajak yang diperiksa',
                    'Prosedur untuk pemeriksaan dan investigasi',
                    'Fungsi, jenis Surat Ketetapan Pajak (SKP), pembayaran pajak, dan kadaluwarsa penentuan',
                    'Angsuran, penundaan pembayaran pajak, dan pencabutan piutang pajak',
                    'Definisi, dasar hukum, dan prosedur pengembalian pajak (Pasal 17, 17B; 17C)',
                    'Persyaratan untuk mengajukan pengembalian pajak dan Pengembalian Awal (Preliminary Returns)'
                ]),
                'description' => 'Memahami penyidikan secara mendalam dan pembayaran pajak & restitusi',
                'subject_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Penetapan, Penagihan, Sanksi Pajak & Pemungutan Pajak',
                'materials' => json_encode([
                    'Keberatan, Banding, dan prosedur pengajuan Keberatan/Banding serta syarat yang harus dipenuhi oleh Wajib Pajak.',
                    'Pembatalan keputusan (Pasal 16 dan Pasal 36) dan syarat yang harus dipenuhi dalam pengajuan peninjauan kembali.',
                    'Denda untuk keberatan dan banding.',
                    'Imbalan Bunga (Interest Rewards).',
                    'Dasar Pengumpulan Pajak.',
                    'Prosedur Pengumpulan Pajak mulai dari surat peringatan hingga lelang.',
                    'Kadaluwarsa Penagihan.',
                    'Hak-hak yang mendahului Penagihan.',
                    'Penagihan segera dan semua dalam satu berdasarkan Undang-Undang Ketentuan Umum Perpajakan (KUP).',
                    'Penundaan penagihan akibat keberatan dan banding.',
                    'Pajak Dengan Surat Paksa (PPSP) termasuk pencegahan dan penyanderaan.'
                ]),
                'description' => 'Memahami penetapan, penagihan, & sanksi pajak, beserta pemungutan pajak',
                'subject_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Tindak Pidana Fiskal & Bea Meterai',
                'materials' => json_encode([
                    'Lingkup Tindak Pidana Fiskal',
                    'Sanksi Administratif',
                    'Hak & Kewajiban Wajib Pajak dalam UU KUP',
                    'Kewenangan dan Kewajiban Otoritas Pajak dalam UU KUP',
                    'Subjek dan Objek Bea Meterai',
                    'Tarif Bea Meterai',
                    'Metode pembayaran Bea Meterai dan pengelembungan kemudian',
                    'Prosedur untuk mengajukan penggunaan mesin ukur (measuring machine)'
                ]),
                'description' => 'Memahami mengenai tindak pidana fiskal dan bea meterai',
                'subject_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'PBB, BPHTB, Pajak Daerah & Retribusi',
                'materials' => json_encode([
                    'Pajak Bumi dan Bangunan (PBB) P2  dan Bea Perolehan Hak atas Tanah dan Bangunan (BPHTB)',
                    'Tujuan dan Sasaran dari Undang-Undang Pajak Daerah dan Retribusi Daerah (PDRD)',
                    'Jenis-Jenis Pajak dan Retribusi, Wilayah, metode perhitungan, dan distribusi pendapatan pajak daerah.',
                    'Sistem pengumpulan pajak daerah dan prosedur pembayaran',
                    'Prosedur pengajuan keberatan dan banding.'
                ]),
                'description' => 'Memahami mengenai Pajak Bumi dan Bangunan (PBB) P2, Bea Perolehan Hak atas Tanah dan Bangunan (BPHTB), serta pajak daerah dan retribusi daerah.',
                'subject_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        // Insert data into the topics table
        DB::table('topics')->insert($topics);
    }
}
