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
                'image' => 'ManagementAccounting.svg',
                'title' => 'Management Accounting',
                'tutor' => 'kevin.svg',
                'majors' => json_encode(['Accounting']),
                'category' => 'Managerial Accounting',
                'semester' => 'Semester 3-4',
                'description' => 'Menganalisa keuangan perusahaan untuk menilai performa suatu objek dalam jangka waktu tertentu yang berlaku. Laporan keuangan yang dihasilkan spesifik hanya untuk objek tersebut, tidak sama dengan objek lain.',
                'references' => json_encode(['Management Accounting The Cornerstone of Business Decision Making 7th Edition - Mowen, Hansen, and Heitger', 'Managerial Accounting 14th Edition - Garrison, Noreen, and Bower', 'Managerial accounting. 6th edition - Jerry J. Weygandt Paul D. Kimmel and  Donald E. Kieso']),
                'subject_univ' => json_encode(['ugm.svg', 'ub.png', 'ui.png', 'unj.png']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM']),
                'appointlet_url' => 'https://calendly.com/kevin-mentoring/management-accounting'
            ],
            [
                'image' => 'IntermediateAccountingI.svg',
                'title' => 'Intermediate Accounting I',
                'tutor' => 'evan.svg',
                'majors' => json_encode(['Accounting']),
                'category' => 'Financial Accounting',
                'semester' => 'Semester 1-2',
                'description' => 'Memberikan pemahaman tentang kerangka konseptual yang mendasari penyusunan laporan keuangan; pemahaman dan implementasi perlakuan akuntansi akun kas, piutang, persediaan, bangunan, tanah, peralatan, utang lancar, dan utang tidak lancar.',
                'references' => json_encode(['Intermediate Accounting IFRS Edition - Second Edition Kieso, Weygandt, Warfield Wiley']),
                'subject_univ' => json_encode(['binus.png', 'ugm.svg', 'trisakti.png', 'unair.svg', 'uinjkt.png']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM', 'UNAIR']),
                'appointlet_url' => 'https://calendly.com/evan-mentoring/intermediate-accounting-i'
            ],
            [
                'image' => 'IntermediateAccountingIII.svg',
                'title' => 'Intermediate Accounting III',
                'tutor' => 'rendra.svg',
                'majors' => json_encode(['Accounting']),
                'category' => 'Financial Accounting',
                'semester' => 'Semester 3-4',
                'description' => 'Memberikan pemahaman mengenai akuntansi keuangan secara mendalam, khususnya sewa, pengakuan pendapatan, pensiun & manfaat pasca pensiun, perubahan akuntansi, dan laporan arus kas.',
                'references' => json_encode(['Intermediate Accounting IFRS Edition - Second Edition Kieso, Weygandt, Warfield Wiley']),
                'subject_univ' => json_encode(['ub.png', 'unair.svg', 'ugm.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM', 'UNAIR']),
                'appointlet_url' => 'https://calendly.com/rendra-mentoring/intermediate-accounting-iii'
                
            ],
            [
                'image' => 'TaxationII.svg',
                'title' => 'Taxation II',
                'tutor' => 'raihan.svg',
                'majors' => json_encode(['Accounting']),
                'category' => 'Tax',
                'semester' => 'Semester 3-4',
                'description' => 'Membahas perhitungan perpajakan seperti perhitungan harga perolehan harta, tarif pajak penghasilan, rekonsiliasi fiskal, PBB, PPnBM, dan PPN sesuai UU HPP yang berlaku.',
                'references' => json_encode(['No references']),
                'subject_univ' => json_encode(['ugm.svg', 'binus.png', 'unair.svg', 'uinjkt.png']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM', 'UNAIR']),
                'appointlet_url' => 'https://calendly.com/raihan-mentoring/taxation-ii'
            ],
            [
                'image' => 'FinancialManagement.svg',
                'title' => 'Financial Management',
                'tutor' => 'dewa.svg',
                'majors' => json_encode(['Accounting', 'Management']),
                'category' => 'Finance',
                'semester' => 'Semester 1-2',
                'description' => 'Memberikan pengetahuan tentang konsep-konsep dasar manajemen keuangan, metode pengelolaan keuangan di suatu perusahaan, terutama berkaitan dengan keputusan investasi & pembelanjaan, kebijakan pembagian dividen.',
                'references' => json_encode(['Fundamentals of Financial Management 15th Edition - Brigham and Houston']),
                'subject_univ' => json_encode(['ubaya.svg', 'binus.png', 'unair.svg', 'unj.png']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UNAIR']),
                'appointlet_url' => 'https://calendly.com/dewa-mentoring/financial-management'
            ],
            [
                'image' => 'StatisticsForAccounting.svg',
                'title' => 'Statistics For Accounting',
                'tutor' => 'raihan.svg',
                'majors' => json_encode(['Accounting']),
                'category' => 'Specialized Areas',
                'semester' => 'Semester 1-2',
                'description' => 'Memberikan gambar mengenai analisis data dan penggunaan perangkat lunak statistik, uji hipotesis, analisis varians, korelasi, regresi, serta asumsi klasik dan analisis regresi dengan aplikasi praktis.',
                'references' => json_encode(['Basic econometrics - Gujarati', 'Statistical Techniques in Business & Economics - Lind, D. A., Marchal, W. G., & Wathen, S. A. ']),
                'subject_univ' => json_encode(['unnes.png', 'ui.png', 'unair.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UNAIR']),
                'appointlet_url' => 'https://calendly.com/raihan-mentoring/statistics-for-accounting'
            ],
            [
                'image' => 'EconomicsII.svg',
                'title' => 'Economics II',
                'tutor' => 'hanum.svg',
                'majors' => json_encode(['Economic']),
                'category' => 'Macroeconomics',
                'semester' => 'Semester 1-2',
                'description' => 'Memberikan gambaran awal mengenai teori dasar makroekonomi seperti ruang lingkup makroekonomi, ekonomi riil dalam jangka panjang, peran uang dan harga dalam jangka panjang, konsep makroekonomi dalam perekonomian terbuka dan fluktuasi perekonomian.',
                'references' => json_encode(['Macroeconomics 9th Edition - N.Gregory Mankiw', 'Principles of Macroeconomics 9th Edition - N.Gregory Mankiw']),
                'subject_univ' => json_encode(['ugm.svg', 'ub.png', 'unair.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM', 'UNAIR']),
                'appointlet_url' => 'https://calendly.com/hanum-mentoring/economics-ii'
            ],
            [
                'image' => 'AdvancedStatistics.svg',
                'title' => 'Advanced Statistics',
                'tutor' => 'rendra.svg',
                'majors' => json_encode(['Economic']),
                'category' => 'Statistics',
                'semester' => 'Semester 1-2',
                'description' => 'Membahas bahasan lanjutan mengenai statistik seperti berbagai metode inferensi, khususnya dalam pengujian hipotesis yang sering digunakan dalam ekonomi dan bisnis. Akan ada juga topik mengenai analisis deret waktu non-inferensi.',
                'references' => json_encode(['Statistical Techniques in Business and Economics 15th Edition - Lind, Marchal, and Wathe', 'Business Statistics Communication With Numbers 2nd Edition - Jaggia and Kelly']),
                'subject_univ' => json_encode(['ui.png', 'unnes.png']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM', 'UNAIR']),
                'appointlet_url' => 'https://calendly.com/rendra-mentoring/advanced-statistics'
            ],
            [
                'image' => 'AdvancedMathematics.svg',
                'title' => 'Advanced Mathematics',
                'tutor' => 'anjar.svg',
                'majors' => json_encode(['Economic']),
                'category' => 'Mathematics',
                'semester' => 'Semester 1-2',
                'description' => 'Menyajikan konsep dan teknik matematika tingkat lanjut untuk menganalisis situasi ekonomi, bisnis, dan keuangan. Materi melibatkan optimasi dengan kendala, kalkulus integral, persamaan diferensial, persamaan beda, serta Pengantar Analisis Real.',
                'references' => json_encode(['No reference']),
                'subject_univ' => json_encode(['unair.svg', 'ui.png', 'unnes.png']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UNAIR']),
                'appointlet_url' => 'https://calendly.com/anjar-mentoring/advanced-mathematics'
            ],

            // old course
            [
                'image' => 'IntroductionToAccounting.svg',
                'title' => 'Introduction to Accounting',
                'tutor' => 'kevin.svg',
                'majors' => json_encode(['Accounting']),
                'category' => 'Financial Accounting',
                'semester' => 'Semester 1-2',
                'description' => 'Memberikan ilmu mengenai dasar-dasar penyusunan laporan keuangan, memahami konsep persamaan dasar akuntansi, dan menganalisis laporan keuangan.',
                'references' => json_encode(['Financial Accounting with International Financial Reporting Standards 4th Edition - Weygandt, Kimmel, Kieso']),
                'subject_univ' => json_encode(['unair.svg', 'ubaya.svg', 'ugm.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM', 'UNAIR']),
                'appointlet_url' => 'https://calendly.com/kevin-mentoring/introduction-to-accounting'
            ],
            [
                'image' => 'BasicEconomics.svg',
                'title' => 'Basic Economics',
                'tutor' => 'anjar.svg',
                'majors' => json_encode(['Accounting']),
                'category' => 'Financial Accounting',
                'semester' => 'Semester 1-2',
                'description' => 'Memberikan pengetahuan tentang konsep dasar yang mengatur produksi, distribusi, dan konsumsi barang dan jasa, serta memahami bagaimana suatu pihakmengambil keputusan mengenai alokasi sumber daya yang langka.',
                'references' => json_encode(['Economics (2009) by Paul Samuelson and William Nordhaus (19th edition)', 'Principles of Microeconomics (2017) by N. Gregory Mankiw (8th edition)']),
                'subject_univ' => json_encode(['unair.svg','ubaya.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UNAIR']),
                'appointlet_url' => 'https://calendly.com/anjar-mentoring/basic-economics'
            ],
            [
                'image' => 'CostAccounting.svg',
                'title' => 'Cost Accounting',
                'tutor' => 'dewa.svg',
                'majors' => json_encode(['Accounting']),
                'category' => 'Financial Accounting',
                'semester' => 'Semester 3-4',
                'description' => 'Memberikan pengetahuan tentang proses perhitungan biaya produk pada perusahaan manufaktur dan mempertimbang aspek perencanaan & pengendalian biaya produksi.',
                'references' => json_encode(['Cost Accounting Edisi ke 14 - Charles T. Hongren, Srikant M. Datar, Madhav V.Rajan']),
                'subject_univ' => json_encode(['ugm.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM']),
                'appointlet_url' => 'https://calendly.com/dewa-mentoring/cost-accounting'
            ],
            [
                'image' => 'IntermediateAccountingII.svg',
                'title' => 'Intermediate Accounting II',
                'tutor' => 'marcheline.svg',
                'majors' => json_encode(['Accounting']),
                'category' => 'Financial Accounting',
                'semester' => 'Semester 3-4',
                'description' => 'Memberikan pengetahuan tentang konsep pengukuran, penilaian, pelaporan, pengungkapan & analisis akun-akun Aset, Kewajiban Lancar, Kewajiban Jangka Panjang, Investasi, Ekuitas pada Laporan Keuangan.',
                'references' => json_encode(['Intermediate Accounting IFRS Edition - Second Edition Kieso, Weygandt, Warfield Wiley']),
                'subject_univ' => json_encode(['ugm.svg', 'unair.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM', 'UNAIR']),
                'appointlet_url' => 'https://calendly.com/marcheline-mentoring/intermediate-accounting-ii'
            ],
            [
                'image' => 'IntroductionToTaxation.svg',
                'title' => 'Introduction to Taxation',
                'tutor' => 'daffa.svg',
                'majors' => json_encode(['Taxation']),
                'category' => 'Taxation & Business Law',
                'semester' => 'Semester 1-2',
                'description' => 'Memberikan gambaran menyeluruh tentang kebijakan fiskal, hukum pajak, serta prosedur perpajakan di Indonesia, serta mencakup prinsip-prinsip dasar & memberikan pemahaman mengenai kepatuhan pajak.',
                'references' => json_encode(['Hukum Pajak Edisi ke-7 - Erly Suandy']),
                'subject_univ' => json_encode(['unair.svg', 'ugm.svg']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
                'univ' => json_encode(['UGM', 'UNAIR']),
                'appointlet_url' => 'https://calendly.com/daffa-mentoring/introduction-to-taxation'
            ]
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
            foreach (json_decode($subject->subject_univ) as $subject_univ) {
                foreach ($subject_faqs as $faq) {
                    SubjectUnivFaq::create([
                        'subject_id' => $subject->id,
                        'univ'=> $subject_univ,
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
