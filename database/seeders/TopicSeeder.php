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
        $topicsUGM = [
            // Untuk matematika 2
            [
                'title' => 'Calculus for function',
                'subject_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Optimization of functions of n variables',
                'subject_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Constrained optimization',
                'subject_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Advanced topics in linear algebra: Vector and eigen value',
                'subject_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Comparative statics: Slutsky Equation and Envelope Theorem',
                'subject_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Concave programming and the Kuhn-Tucker conditions',
                'subject_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Introduction to economic dynamic: Modelling time',
                'subject_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Linear, first-order difference equations',
                'subject_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Nonlinear, first-order difference equations',
                'subject_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Linear, first-order differential equations',
                'subject_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Nonlinear, first-order differential equations',
                'subject_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Optimal control theory',
                'subject_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // Untuk abm a
            [
                'title' => 'Cost concepts and cost behavior for managerial decision making',
                'subject_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Calculate product costs under different product costing systems',
                'subject_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'How to allocate overhead and fixed costs to cost objects',
                'subject_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Concepts of inventory costing and inventory management',
                'subject_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Purpose of planning and budgeting in business organizations',
                'subject_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Comprehend the purpose and use of performance evaluation systems evaluating business units and divisions',
                'subject_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Comprehend how to use relevant costing for tactical decision making',
                'subject_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // untuk abm b
            [
                'title' => 'Cost concepts and cost behavior for managerial decision making',
                'subject_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Calculate product costs under different product costing systems',
                'subject_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'How to allocate overhead and fixed costs to cost objects',
                'subject_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Concepts of inventory costing and inventory management',
                'subject_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Purpose of planning and budgeting in business organizations',
                'subject_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Comprehend the purpose and use of performance evaluation systems evaluating business units and divisions',
                'subject_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Comprehend how to use relevant costing for tactical decision making',
                'subject_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // untuk akuntansi menengah 1
            [
                'title' => 'Akuntansi keuangan dan standar akuntansi',
                'subject_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kerangka konseptual pelaporan keuangan',
                'subject_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laporan laba komprehensif dan perubahan ekuitas',
                'subject_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laporan posisi keuangan',
                'subject_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laporan arus kas',
                'subject_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kas',
                'subject_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Piutang',
                'subject_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Persediaan: Definisi, aliran kos, dan konsep penilaian',
                'subject_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Aset tetap: Kos akuisisi, depresiasi, penurunan nilai, deplesi, dan penilaian kembali',
                'subject_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Aset takberwujud',
                'subject_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Liabilitas lancar, provisi dan kontinjensi',
                'subject_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Liabilitas taklancar',
                'subject_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Untuk akuntasi lanjutan
            [
                'title' => 'Kombinasi Bisnis',
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Investasi Saham',
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Statemen Keuangan Konsolidasian',
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Teknik dan Prosedur Konsolidasi',
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Transaksi laba intra-perusahaan : Persediaan',
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Transaksi laba intra-perusahaan : Aset Tetap',
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Transaksi laba intra-perusahaan : Obligasi',
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Perubahan Kepemilikan Perusahaan',
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kepemilikan Tak Langsung dan Mutual Holdings',
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Saham Preferen Perusahaan Anak dan EPS Konsolidasian',
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Teori Konsolidasi, Push-Down Accounting, dan Corporate Joint Ventures',
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pelaporan Keuangan Segmen dan Interim',
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Likuidasi dan Reorganisasi Korporasi',
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // Untuk mikroekonomi II
            [
                'title' => 'Technology',
                'subject_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Profit maximization',
                'subject_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cost minimization and cost curves',
                'subject_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cost curves',
                'subject_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Firm supply',
                'subject_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Industry supply',
                'subject_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Monopoly and behaviour',
                'subject_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Oligopoly',
                'subject_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Game theory',
                'subject_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Exchange',
                'subject_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Production',
                'subject_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Welfare',
                'subject_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // untuk makroekonomi II
            [
                'title' => 'Introductions',
                'subject_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Consumer and Firm behavior',
                'subject_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'A Closed-Economy One-Period Macroeconomic Model',
                'subject_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Search and Unemployment',
                'subject_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'A Two-Period Model',
                'subject_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Credit Market Imperfections',
                'subject_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'A Real Intertemporal Model with Investment',
                'subject_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Money, Banking, Prices, and Monetary Policy',
                'subject_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Business Cycle Models',
                'subject_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sticky Prices',
                'subject_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Inflation',
                'subject_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'International Trade in Goods and Assets',
                'subject_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Money in the Open Economy',
                'subject_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Economic Growth',
                'subject_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        $topicsUNAIR = [
            [
                'title' => 'Proses manajemen, peran akuntansi biaya, dan konsep dasar biaya',
                'subject_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Klasifikasi Biaya berdasarkan perilakunya, metode-metode untuk memisahkan biaya campuran',
                'subject_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Aliran biaya dalam perusahaan manufaktur',
                'subject_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Menyusun penjurnalan dan laporan harga pokok produksi menggunakan sistem perhitungan biaya berdasarkan pesanan',
                'subject_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Menyusun penjurnalan dan laporan harga pokok produksi menggunakan sistem perhitugnan biaya berdasarkan proses metode rata-rata',
                'subject_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Menyusun penjurnalan dan laporan harga pokok produksi menggunakan sistem perhitungan biaya berdasarkan proses metode FIFO',
                'subject_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Klasifikasi biaya kualitas dan kehilangan dalam proses produksi baik berdasarkan metode pesanan maupun proses',
                'subject_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Biaya gabungan dan biaya produk sampingan',
                'subject_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Konsep perencanaan dan pengendalian biaya bahan baku langsung, biaya akuisisi, biaya pemesanan tahunan, biaya penyimpanan tahunan, EOQ dan Order Point. Perbedaan antara perencanaan bahan baku konvensional dan JIT.',
                'subject_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Konsep perencanaan dan pengendalian tenaga kerja langsung, sistem insentif untuk meningkatkan produktifitas tenaga kerja langsung.',
                'subject_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Perencanaan dan pengendalian biaya OHP, sistem akuntansi antara OHP direncakanan, OHP dibebankan, dan OHP actual',
                'subject_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Konsep departementalisasi dan implikasinya terhadap biaya produksi, alokasi/distribusi biaya dari departemen jasa ke departemen produksi.',
                'subject_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Keterbatasan perhitungan biaya produksi konvensional, sistem perhitungan biaya berbasis aktifitas dan keutamaannya dibanding metode konvensional',
                'subject_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into the topics table
        DB::table('topics')->insert($topicsUGM);
        DB::table('topics')->insert($topicsUNAIR);
    }
}
