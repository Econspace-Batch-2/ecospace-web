<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\SubjectUnivFaq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            [
                'image' => '',
                'title' => 'Matematika 2',
                'tutor' => 'kevin.svg',
                'majors' => json_encode(['Economics']),
                'category' => 'Economics',
                'semester' => 'Semester 2',
                'description' => 'Matematika untuk Ekonomi Bisnis II adalah mata kuliah tingkat tertinggi tentang matematika untuk ekonomi di tingkat sarjana. Mata kuliah ini akan mengkaji beberapa materi dari Matematik untuk Ekonomi Bisnis I untuk digunakan untuk studi yang lebih maju tentang matematika untuk ekonomi. Kursus ini memberikan pengetahuan menengah tentang kalkulus multivariat, optimasi terbatas, persamaan perbedaan, persamaan diferensial, dan optimasi dinamis.',
                'references' => json_encode(['No references']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM']),
                'appointlet_url' => 'https://appt.link/economic-space/matematika-ekonomi-2'
            ],
            [
                'image' => '',
                'title' => 'Akuntansi BIaya Manajemen A',
                'tutor' => 'evan.svg',
                'majors' => json_encode(['Accounting']),
                'category' => 'Accounting',
                'semester' => 'Semester 2',
                'description' => 'Mata kuliah ABM ini akan fokus pada informasi biaya dan bagaimana menggunakan informasi akuntansi untuk pengambilan keputusan manajerial. Materi akan mencakup analisis laba volume biaya, penganggaran operasional dan modal, evaluasi kinerja dan divisi, dan pengambilan keputusan taktis. Mata kuliah ini selanjutnya akan mencakup akumulasi biaya produk terutama dalam organisasi manufaktur, proses penetapan biaya, penggunaan informasi biaya untuk perencanaan dan kontrol, analisis profitabilitas dalam pengambilan keputusan.',
                'references' => json_encode(['No references']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM']),
                'appointlet_url' => 'https://appt.link/economic-space/akuntansi-biaya-dan-manajemen'
            ],
            [
                'image' => '',
                'title' => 'Akuntansi BIaya Manajemen B',
                'tutor' => 'evan.svg',
                'majors' => json_encode(['Accounting']),
                'category' => 'Accounting',
                'semester' => 'Semester 2',
                'description' => 'Mata kuliah ABM ini akan fokus pada informasi biaya dan bagaimana menggunakan informasi akuntansi untuk pengambilan keputusan manajerial. Materi akan mencakup analisis laba volume biaya, penganggaran operasional dan modal, evaluasi kinerja dan divisi, dan pengambilan keputusan taktis. Mata kuliah ini selanjutnya akan mencakup akumulasi biaya produk terutama dalam organisasi manufaktur, proses penetapan biaya, penggunaan informasi biaya untuk perencanaan dan kontrol, analisis profitabilitas dalam pengambilan keputusan.',
                'references' => json_encode(['No references']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM']),
                'appointlet_url' => 'https://appt.link/economic-space/akuntansi-biaya-dan-manajemen-b'
            ],
            [
                'image' => '',
                'title' => 'Akuntansi Menengah 1',
                'tutor' => 'raihan.svg',
                'majors' => json_encode(['Accounting']),
                'category' => 'Accounting',
                'semester' => 'Semester 2',
                'description' => 'Mata kuliah AKM 1 ini menjelaskan (i) konsep dan prinsip akuntansi keuangan seperti definisi, pengakuan, pengukuran dan
                    penilaian, dan penyajian dan pengungkapan informasi akuntansi keuangan, dan (ii) penerapan konsep terutama untuk
                    akun sebagai aset lancar, aset tetap, aset takberwujud, kewajiban lancar dan kewajiban taklancar. Dengan peningkatan
                    dan pengakuan yang luar biasa dari industri bisnis atas penerapan IFRS (International Financial Reporting Standards),
                    perkuliahan ini membahas konsep dan praktik yang mengacu pada IFRS dan Pernyataan Standar Akuntansi Keuangan
                    (PSAK). Fokus utama dari perkuliahan ini adalah penerapan konsep akuntansi keuangan, terlepas dari penilaian kritis
                    terhadap konsep tersebut, yang akan dibahas dalam mata kuliah Teori Akuntansi.',
                'references' => json_encode(['No references']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM']),
                'appointlet_url' => 'https://appt.link/economic-space/akuntansi-menengah-1'
            ],
            [
                'image' => '',
                'title' => 'Akuntansi Lanjutan',
                'tutor' => 'dewa.svg',
                'majors' => json_encode(['Accounting']),
                'category' => 'Accounting',
                'semester' => 'Semester 4',
                'description' => 'Membahas teori, konsep, dan standar akuntansi keuangan terkait penggabungan bisnis, laporan keuangan konsolidasian, perubahan kepemilikan, struktur kepemilikan, serta analisis laba per saham entitas konsolidasian.',
                'references' => json_encode(['No references']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM']),
                'appointlet_url' => 'https://appt.link/meet-with-economic-space-jljkk7ix/akuntansi-keuangan-lanjutan'
            ],
            [
                'image' => '',
                'title' => 'Mikroekonomi II',
                'tutor' => 'raihan.svg',
                'majors' => json_encode(['Economics']),
                'category' => 'Economics',
                'semester' => 'Semester 4',
                'description' => 'membahas konsep dasar ekonomi mikro dengan topik utama teori produsen, struktur pasar, dan kesejahteraan.',
                'references' => json_encode(['No references']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM']),
                'appointlet_url' => 'https://appt.link/meet-with-economic-space-jljkk7ix/mikroekonomika-2'
            ],
            [
                'image' => '',
                'title' => 'Makroekonomi II',
                'tutor' => 'raihan.svg',
                'majors' => json_encode(['Economics']),
                'category' => 'Economics',
                'semester' => 'Semester 4',
                'description' => 'Membahas teori ekonomi makro terkait pemahaman tentang fenomena ekonomi makro terkini dan isu-isu kebijakan terkini.',
                'references' => json_encode(['No references']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM']),
                'appointlet_url' => 'https://appt.link/meet-with-economic-space-jljkk7ix/makroekonomika-2'
            ],
            [
                'image' => '',
                'title' => 'Cost Accounting',
                'tutor' => 'rendra.svg',
                'majors' => json_encode(['Accounting']),
                'category' => 'Accounting',
                'semester' => 'Semester 2',
                'description' => 'Mata kuliah ini dirancang untuk menyiapkan mahasiswa menjadi akuntan di bidang manajemen dan manajer di era persaingan global. Mata kuliah ini memberikan pengetahuan mengenai proses perhitungan biaya produk khususnya di perusahaan manufaktur. Pengetahuan ini akan bermanfaat bagi mahasiswa saat memasuki dunia kerja, terutama apabila lapangan pekerjaan mereka berhubungan dengan industri manufaktur. Selain memberikan pengetahuan terkait perhitungan biaya produk, baik bagi perusahaan yang memakai job order costing maupun process costing, mata kuliah ini juga memberikan pengetahuan mengenai aspek perencanaan dan pengendalian biaya produksi.',
                'references' => json_encode(['No references']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UNAIR']),
                'appointlet_url' => ''
            ],
            [
                'image' => '',
                'title' => 'Intermediate Accounting 1',
                'tutor' => 'anjar.svg',
                'majors' => json_encode(['Accounting']),
                'category' => 'Accounting',
                'semester' => 'Semester 1-2',
                'description' => 'Mata kuliah ini memberikan pemahaman tentang laporan keuangan dan kegunaannya bagi investor dan kreditor; pemahaman kerangka konseptual yang mendasari penyusunan laporan keuangan; pemahaman dan implementasi perlakuan akuntansi akun kas, piutang dan persediaan; serta analisis informasi akuntansi.',
                'references' => json_encode(['No reference']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UNAIR']),
                'appointlet_url' => ''
            ],
            [
                'image' => '',
                'title' => 'Introduction to Economics 1',
                'tutor' => 'anjar.svg',
                'majors' => json_encode(['Economics']),
                'category' => 'Economics',
                'semester' => 'Semester 2',
                'description' => 'Mata kuliah ini mempelajari tentang pemahaman dasar mengenai prinsip-prinsip ekonomi mikro yang menjadi fondasi untuk analisis ekonomi pada tingkat individu, rumah tangga, dan perusahaan. Materi mencakup konsep-konsep seperti mekanisme pasar, perilaku konsumen dan produsen, elastisitas,dan  efisiensi. Di samping Mikro, Mata kuliah ini merupakan mata kuliah dasar yang mengantarkan mahasiswa tingkat awal kepada pemahaman tentang Teori Ekonomi Makro. Konsep dan topik-topik utama yang akan dibahas secara meluas meliputi pendapatan nasional, penentuan pendapatan nasional baik dalam perekonomian tertutup maupun perekonomian terbuka dan konsep pengganda, konsep dasar tentang permintaan dan penawaran agregat, pengangguran dan inflasi, teori-teori pertumbuhan ekonomi.',
                'references' => json_encode(['No reference']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UNAIR']),
                'appointlet_url' => ''
            ],
        ];

        // Insert data into the subjects table
        DB::table('subjects')->insert($subjects);

        // generate new subject Faq
        $subject_faqs = [
            [
                'faq_question' => 'Apa yang dimaksud dengan Management Accounting?',
                'faq_answer' => 'Management Accounting adalah proses pengukuran, analisis, dan pelaporan informasi keuangan yang membantu manajemen dalam membuat keputusan bisnis yang tepat.'
            ],
            [
                'faq_question' => 'Apa saja yang dipelajari dalam Management Accounting?',
                'faq_answer' => 'Dalam Management Accounting, kamu akan mempelajari tentang analisis biaya, perencanaan keuangan, pengendalian biaya, dan evaluasi kinerja.'
            ],
            [
                'faq_question' => 'Apa perbedaan antara Management Accounting dan Financial Accounting?',
                'faq_answer' => 'Management Accounting lebih berfokus pada informasi keuangan yang digunakan oleh manajemen dalam membuat keputusan bisnis, sedangkan Financial Accounting lebih berfokus pada informasi keuangan yang digunakan oleh pihak eksternal seperti investor dan kreditor.'
            ],
            [
                'faq_question' => 'Apa yang dimaksud dengan Intermediate Accounting I?',
                'faq_answer' => 'Intermediate Accounting I adalah mata kuliah yang membahas tentang konsep-konsep dasar akuntansi keuangan, seperti penyusunan laporan keuangan, perlakuan akuntansi untuk kas, piutang, persediaan, dan aset tetap.'
            ],
            [
                'faq_question' => 'Apa saja yang dipelajari dalam Intermediate Accounting I?',
                'faq_answer' => 'Dalam Intermediate Accounting I, kamu akan mempelajari tentang kerangka konseptual akuntansi, perlakuan akuntansi untuk kas, piutang, persediaan, dan aset tetap, serta bagaimana menyusun laporan keuangan'
            ],
        ];

        // Seed every subject 
        $subjects = Subject::all();

        foreach ($subjects as $subject) {
            foreach (json_decode($subject->univ) as $subject_univ) {
                foreach ($subject_faqs as $faq) {
                    SubjectUnivFaq::create([
                        'subject_id' => $subject->id,
                        'univ' => $subject_univ,
                        'faq_question' => $faq['faq_question'],
                        'faq_answer' => $faq['faq_answer'],
                    ]);
                }
            }
        }

        // Register all user to all subject
        $users = DB::table('users')->get();

        foreach ($users as $user) {
            foreach ($subjects as $subject) {
                DB::table('subject_user')->insert([
                    'subject_id' => $subject->id,
                    'user_id' => $user->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
