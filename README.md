# Tutorial APAP

## Authors

**Gamma Farrel**
**2206025035**
**C** 
---
=======

## Tutorial 1
### Apa yang telah saya pelajari hari ini
Pada hari ini saya telah belajar menggunakan spring boot dengan implementasi pembuatan converter angka roman dan integer.
### GitLab
1. Apa itu Issue Tracker? Apa saja masalah yang dapat diselesaikan dengan Issue Tracker?
   Issue Tracker merupakan sebuah alat yang dapat digunakan untuk melihat dan mengelola bug maupun permintaan dalam sebuah project. Issue Tracker dapat membantu pengembangan dalam beberapa hal, antara lain:
    1. Bug
    2. Penambahan fitur
    3. Pengelolaan tugas
    4. Permasalahan seperti teknis dan support

2. Saat membuat Merge Request, terdapat 2 merge options yang diceklis. Jelaskan fungsi dari kedua pilihan tersebut! Mengapa hanya squash yang diceklis?
    1. Delete source branch when merge request is accepted
        Memungkin untuk branch yang telah dimerge (branch awal) dihapus menyisakan branch tujuan. Hal ini membuat repo tetap bersih dari branch yang tidak terpakai
    2. Squash commits when merge request is accepted
        Squash commits menjaga riwayat commit di branch utama tetap bersih dengan hanya satu commit yang mewakili semua perubahan dari branch fitur. Tipe ini tidak menghampus branch sumber commit.
3. Apa keunggulan menggunakan Version Control System seperti Git dalam pengembangan suatu aplikasi?
    Terdapat beberapa keuntungan dalam menggunakan VCS seperti git, antara lain:
    1. Dapat menyimpan riwayat (commits) tiap ada perubahan
    2. Memungkin tim bekerja bersamaan dalam sebuah proyek
    3. Dapat dilakukan mergin dan branching, hal ini memungkin pengembang melakukan debugging maupun pengerjaan proyek secara terpisah
    4. Adanya backup
    5. Pengelolaan konflik (ketika merge)

### Spring
4. Apa itu library & dependency?
    Library: 
        Library adalah kumpulan kode, kelas, fungsi, dan resource yang dapat digunakan oleh aplikasi untuk menyelesaikan tugas tertentu. Pada Spring, library biasanya berisi berbagai fitur yang dapat diintegrasikan ke dalam aplikasi Anda untuk memberikan fungsionalitas tambahan.
    Dependency: 
        Dependency adalah komponen perangkat lunak yang dibutuhkan oleh aplikasi untuk berjalan dengan benar. Dependency merujuk pada library, framework, atau modul lain yang diperlukan oleh aplikasi untuk berfungsi. Dependency juga mencakup versi spesifik dari library yang digunakan.
    
5. Apa itu Gradle? Mengapa kita menggunakan Gradle? Apakah ada alternatif dari Gradle?
    Gradle adalah alat build otomasi yang fleksibel dan efisien, dirancang untuk mengelola proyek perangkat lunak dari yang kecil hingga besar dengan berbagai bahasa pemrograman dan teknologi. Dengan kemampuan konfigurasi yang kuat, performa tinggi, dan dukungan untuk proyek multi-modul, Gradle memudahkan manajemen build dan dependency.

    Alternatif Gradel : Apache Maven, Ant, SBT, Make, Bazel

6. Apa itu DTO? Apakah DTO harus selalu digunakan? Kapan sebaiknya kita menggunakan DTO?
    DTO, atau Data Transfer Object, adalah pola desain yang digunakan untuk mentransfer data antara sistem atau lapisan aplikasi dengan cara yang efisien dan terstruktur. DTO biasanya merupakan objek sederhana yang hanya berisi data tanpa logika bisnis atau metode kompleks.

    DTO baik digunakan saat:
    1. Pengiriman data antar layer atau sistem
    2. Untuk menghindari overfetching dan underfetching
    3. Melakukan format data
    4. Keamanan dan Valisasi

    DTO tidak perlu digunakaan saat:
    1. Proyek sederhana
    2. Terbatasnya sumber daya

7. Jelaskan bagaimana alur ketika kita menjalankan http://localhost:8080/roman-converter/MMXXIV sampai dengan muncul keluarannya di browser!
    1. HTTP Request diterima oleh host dalam bentuk GET
    2. URL berbentuk /roman-converter/MMXXIV akan masuk ke sistem pada GetMapping
    3. Pattern tersebut dicocokkan dengan function romanConverterWithPathVariable, function dieksekusi
    4. method getRomanConverterPage akan dipanggil dan menentukan apakah nilai valid atau tidak. Jika tidak, keluar halaman error. Sebaliknya, function akan membuat object RomanConverter dan mengirimkan data roman ke model.addAttribute
    5. Sistem akan merender view yang ada di HTML
    6. Hasil angka integer ditampilkan

8. Jelaskan bagaimana alur ketika kita menjalankan http://localhost:8080/roman-converter?roman=MMXXIV sampai dengan muncul keluarannya di browser!
    Perbedaan yang terjadi pada soalan ini dengan soalan 7 adalah ketika sistem melakuka GetMapping untuk pattern dari URL, function yang terpanggil adalah romanConveerterWithReqParam. Pada function tersebut digunakan anotasi @RequestParam untuk roman. URL tersebut akan mendapatkan nilai parameternya yaitu MMXXIV.

9. Jelaskan bagaimana alur ketika kita menjalankan http://localhost:8080/convert sampai dengan muncul keluarannya di browser!
    1. HTTP Request diterima oleh host dalam bentuk GET
    2. URL berbentuk /convert akan masuk ke sistem pada GetMapping
    3. Pattern cocok dengan function getRomanConverterWithView
    4. Pada function, akan terbuat RequestDTO dan diterukan ke model.addAttribute
    5. form.html muncul
    6. form.html yang terisi kemudian disubmit akan mengirimkan HTTP Request POST yang diproses oleh postRomanConverterWithView.
    7. Function akan mengambil angka roman dari user dengan requestDTO.getRoman()
    8. Jika tidak valid maka akan muncul laman error, jika valid maka akan dibuat object RomanConverter
    9. Dilakukan render untuk HTML pada view-conversion-result.html

10. Pada Tutorial 1 - Panduan bagian Spring Boot > VS Code / IDE > langkah 4, kita mendapati error. Apa penyebabnya? Tip: Kamu bisa melihat commit dengan nama `feat: tutorial 1 - initialize spring boot project` untuk melihat versi kode di langkah tersebut.

Error terjadi karena belum ada controller yang menangani URL dengan pattern "/". Akibatnya, saat aplikasi web dijalankan untuk pertama kalinya dan mengakses halaman "/", sistem akan mengeluarkan error tersebut.

## Tutorial 2

### Apa yang telah saya pelajari hari ini

Pada hari ini saya mempelajari cara pembuatan secara manual untuk Model, Controller, Service, Controller, serta HTML. Disini saya mempelajari apa saja yang diperlukan untuk membangun web. Saya juga mencoba untuk memahami untuk service dan interface.

1. Jelaskan kegunaan DTO pada proyek ini? Apakah bisa jika sebuah proyek tidak menggunakan DTO sama sekali?
Jawaban : DTO digunakan sebagai pola untuk melakukan transfer data, hal ini ditandai dengan penggunaan DTO pada controller untuk memanggil data yang akan digunakan. Pada berkas DTO terdapat constructor, getter, dan setter yang kemudian akan digunakan padad controller
Sumber : https://medium.com/@ksaquib/leveraging-the-data-transfer-object-dto-pattern-in-spring-boot-enhancing-data-transfer-efficiency-5bd2dc488d0d#:~:text=The%20DTO%20pattern%20is%20a%20powerful%20tool%20in%20Spring%20Boot,applications%20more%20maintainable%20and%20scalable.

2. Apa itu UUID? Mengapa UUID digunakan? Pada proyek ini, UUID digunakan sebagai apa?
Jawaban : UUID adalah sebuah kode unik universal yang beriskan 128-bit value, digunakan sebagai identifikasi objek unik. UUID digunakan untuk memberikan label unik pada suatu objek agar tidak memiliki ID duplikat. Pada proyek ini UUID digunakan untuk memberikan label pada proyek sehingga proyek merupaka unik.
Sumber : https://www.techtarget.com/searchapparchitecture/definition/UUID-Universal-Unique-Identifier

3. Pada service, mengapa perlu ada pemisahan antara interface dan implementasinya? Apa keuntungan pemisahan tersebut?
Jawaban : Perlu dilakukan pemisahan agar client tidak mengetahui cara kerja suatu servie (utamanya). Keuntungan lain yang didapatkan dari pemisahan ini adalah antara lain kemudahan dalam melakukan polymorphism pada kode, kemudahan maintainability, membolehkan penggunaan implementasi berbeda untuk kebutuhan yang berbeda
Sumber: https://stackoverflow.com/questions/69185721/should-every-service-class-in-a-springboot-app-implement-an-interface 
https://davidgiard.com/java-services-and-interfaces-in-a-spring-boot-application

4. Menurut kamu anotasi @Autowired pada class Controller tersebut merupakan implementasi dari konsep apa? Dan jelaskan secara singkat cara kerja @Autowired tersebut dalam konteks service dan controller yang telah kamu buat.
Jawaban : @Autowired digunakan untuk menjadi salah satu contoh penggunaan Dependency Injection. Hal ini merupakan sebuah teknik yang membuat sebuah objek dapat menerima dependensi ketimbang membuatnya sendiri. Pada kasus proyek @Autowired dipasangkan pada ProyekController dengan "inject bean" dari ProyekService. ProyekService disini memanggil constructor, getter, dan setter pada model Proyek sehingga ProyekController dapat memakainya.
Sumber : https://www.baeldung.com/spring-autowire, https://vicksheet.medium.com/understanding-autowired-in-spring-framework-benefits-and-types-5ce8815d99d7

5. Apa perbedaan @GetMapping dan @PostMapping? Kapan @GetMapping dan @PostMapping digunakan?
Jawaban : Secara singkat @GetMapping digunakan untuk menghandle GET dan @PostMapping digunakan untuk POST. Perbedaannya disini GET untuk mengambil data sedangkan POST untuk mengirimkan data. @GetMapping digunakan untuk memetakan permintaan HTTP GET (biasanya ketika mengambil data dari server). @PostMapping digunakan untuk memetakan permintaan HTTP POST (biasanya mengirmkan data baru ke server)
Sumber : https://www.javaguides.net/2018/11/spring-getmapping-postmapping-putmapping-deletemapping-patchmapping.html#:~:text=From%20the%20naming%20convention%2C%20we,type%20of%20request%20method%2C%20etc.

6. Apakah terdapat jenis mapping lain yang dapat digunakan? Jelaskan minimal 3 jenis mapping lain!
Jawaban : 
1. @PutMapping = Digunakan untuk memetakan PUT, biasanya memperbarui data yang ada pada server
2. @DeleteMapping = Digunakan untuk memetakan DELETE, secara harfiah menghapus data
3. @PatchMapping = Digunakan untuk memetakan PARCH, digunakan untum memperbarui sebagian data
Sumber: https://www.javaguides.net/2018/11/spring-getmapping-postmapping-putmapping-deletemapping-patchmapping.html#:~:text=From%20the%20naming%20convention%2C%20we,type%20of%20request%20method%2C%20etc.

7. Jelaskan proses yang terjadi di controller, model, dan service pada proses create proyek, mulai dari fungsi addFormProyek hingga pengguna menerima halaman success-add-proyek.
Jawaban :
1. Pengguna membuka form untuk menambahkan proyek (GET /proyek/add)
Pada tahap ini, controller melalui method addProyekForm akan membuat objek baru ProyekDTO yang kemudian ditambahkan ke model. Controller ini juga mengembalikan tampilan HTML form-add-proyek yang berisi form agar pengguna dapat mengisi data proyek.

2. Pengguna mengirimkan form (POST /proyek/add)
Setelah form di-submit, method addProyek pada controller akan menangani input dari pengguna, termasuk memvalidasi tanggal mulai dan tanggal selesai proyek. Jika validasi gagal, sistem akan mengarahkan pengguna ke halaman error. Jika validasi berhasil, objek proyek baru akan dibuat dari model Proyek dan diteruskan ke service untuk diproses lebih lanjut.

3. Pemrosesan di service
Di sini, method createProyek pada service bertanggung jawab menyimpan objek proyek yang baru ke dalam ArrayList listProyek.

4. Tampilan halaman sukses
Setelah objek proyek berhasil disimpan, controller menambahkan atribut sukses ke model dan mengarahkan pengguna ke tampilan HTML success-add-proyek, yang berfungsi menampilkan pesan bahwa proyek telah berhasil ditambahkan.

Sumber: Kode pada tutorial

8. Jelaskan mengenai th:object!
Jawaban : Merupakan atribut pada Thymeleaf yang mendefinisikan objek model yang akan digunakan pada template (HTML). Nantinya, th:object akan mengikat object mana yang akan digunakan

Sumber : https://www.thymeleaf.org/doc/tutorials/2.1/thymeleafspring.html

9. Jelaskan mengenai th:field!
Jawaban : Merupakan atribut pada Thymeleaf yang menerima input objek model yang ada pada template (HTML). Nantinya, th:field akan mengikat object mana yang akan di-passing.

Sumber : https://www.thymeleaf.org/doc/tutorials/2.1/thymeleafspring.html

10. Apakah terdapat jenis “th” lainnya? Jelaskan minimal 3 jenis “th” lainnya yang kamu temukan!
Jawaban : 
1. th:text = digunakan untuk set konten text dari sebuah elemen
2. th:each = digunakan untuk iterasi
3. th:value = digunakan untuk set value dari sebuah elemen, biasanya berdasarkan input user

Sumber: https://www.baeldung.com/java-thymeleaf-text-vs-value, https://www.baeldung.com/thymeleaf-iteration

### Apa yang belum saya pahami
- [X] Cara agar halaman validasi tidak usah banyak banyak 

## Tutorial 3
### Apa yang telah saya pelajari hari ini
Pada hari saya mempelajari cara untuk menautkan web dengan database. Mempelajari pula penggunaan docker dan beaver. Pada web, saya mempelajari cara melempar error, membuat form, dan delete tanpa menghilangkan dari database

1. Jelaskan seluruh configuration properties (application, datasource, jpa) yang terdapat di dalam file application.yml!
    a. spring.application.name = berguna untuk menetapkan nama aplikasi. Disini nama aplikasi adalah manpromanpro
    b. spring.datasource= digunakan untuk koneksi db, misal url: untuk URL dari jenis db PostgreSql, dengan hostserver localhost, port 15001, dan nama db manpromanpro. username digunakan untuk mengakses db begitu pula dengan passwordnya
    c. Spring JPA: mengatur JPA ata Java Persistence API, digunakan untuk mengelola data

    Sumber: https://docs.spring.io/spring-boot/appendix/application-properties/index.html

2. Pada tutorial ini, kita menggunakan docker container untuk membentuk database. Apa keuntungan menggunakan docker container dibandingkan tanpa menggunakannya?
    Container adalah entitas yang bersifat independen dan memiliki semua kebutuhan untuk berjalan tanpa bergantung pada dependensi yang ada di host machine. Mereka beroperasi secara terisolasi, sehingga mengurangi dampak terhadap host maupun container lain, yang pada gilirannya meningkatkan keamanan aplikasi. Ketika menggunakan Docker container, setiap container dikelola secara terpisah, sehingga menghapus satu container tidak akan memengaruhi container lain. Selain itu, Docker container bersifat portabel, artinya container yang berjalan di perangkat lokal akan berfungsi sama baiknya di data center maupun di cloud. Docker juga mendukung skalabilitas dan manajemen yang lebih mudah dengan bantuan tools seperti Kubernetes, yang mempercepat proses pengembangan dan pengujian, memberikan kemampuan konfigurasi yang fleksibel, serta mendukung rollback dan manajemen versi secara efisien. Fitur-fitur ini menjadikan Docker solusi yang optimal untuk deployment database dalam arsitektur aplikasi.

    Sumber: https://docs.docker.com/get-started/docker-concepts/the-basics/what-is-a-container/

3. Jelaskan secara singkat apa itu dan kegunaan dari annotation dibawah ini (@Entity, @Table, @Column)!

    @Entity: Menandakan bahwa class tersebut merupakan sebuah entitas yang akan dipetakan ke tabel di database. Anotasi ini menginformasikan framework bahwa class tersebut adalah bagian dari model data.

    @Table: Memberikan detail tambahan mengenai tabel yang berhubungan dengan entitas, seperti nama tabel dan skema database. Anotasi ini digunakan untuk mengonfigurasi aspek-aspek tertentu dari tabel, seperti pemetaan ke tabel yang spesifik dalam database.

    @Column: Berfungsi untuk mendefinisikan bagaimana sebuah atribut atau field dari class dipetakan ke kolom dalam tabel database. Anotasi ini memungkinkan penyesuaian konfigurasi kolom seperti nama kolom, ukuran, dan pengaturan nullable.

    Sumber: https://www.baeldung.com/jpa-entities

4. Pada model, kita dapat menentukan relasi antarmodel dengan menggunakan JPA Annotation. Sebutkan seluruh JPA Annotation yang dapat digunakan untuk mendefinisikan relasi antarmodel beserta perbedaannya!

    @OneToOne: Menyatakan relasi satu-ke-satu antara dua entitas, di mana setiap instance di satu entitas memiliki tepat satu pasangan instance di entitas lain.

    @OneToMany: Menandakan adanya relasi satu-ke-banyak, di mana satu entitas dapat terhubung dengan beberapa entitas di sisi lainnya.

    @ManyToOne: Relasi banyak-ke-satu yang merupakan kebalikan dari @OneToMany, umumnya digunakan untuk mendefinisikan foreign key pada sisi "many".

    @ManyToMany: Mewakili relasi banyak-ke-banyak antara dua entitas, di mana kedua entitas dapat memiliki banyak hubungan satu sama lain.

    Sumber: https://medium.com/@zgokceaynaci/spring-jpa-annotations-863574d13121

5. Pada model Proyek, terdapat annotation @JoinTable seperti berikut! Jelaskan kegunaan annotation tersebut beserta seluruh parameternya!

    @JoinTable: Digunakan untuk mendefinisikan tabel penghubung dalam relasi many-to-many antara dua entitas.

    - name: Menyatakan nama tabel penghubung, misalnya *pekerja_proyek*.
    - joinColumns: Mengidentifikasi kolom di tabel penghubung yang berhubungan dengan primary key dari entitas yang memiliki koleksi. Contohnya, *id_proyek* adalah kolom pada tabel *pekerja_proyek* yang merujuk pada primary key dari entitas *Proyek*. Kolom ini bertindak sebagai foreign key yang menghubungkan entitas *Proyek* dengan *Pekerja*.
    - inverseJoinColumns: Menentukan kolom di tabel penghubung yang terhubung dengan primary key dari entitas di sisi lain dari relasi. Misalnya, *id_pekerja* adalah kolom yang merujuk pada primary key entitas *Pekerja*. Kolom ini bertindak sebagai foreign key yang menghubungkan *Pekerja* kembali ke *Proyek*.

    Sumber: https://www.javaguides.net/2023/07/jpa-jointable-annotation.html

6. Jelaskan mengapa kita harus membentuk JPA Repository!
    JPA Repository menyediakan abstraksi yang efektif untuk akses data, memungkinkan pengembang bekerja dengan model data sebagai objek domain tanpa harus menulis banyak kode boilerplate untuk operasi database. Ini menjadi alasan penting untuk menggunakan JPA Repository.

    - Akses data menjadi lebih sederhana: Repository mengurangi kompleksitas dalam penulisan dan pemeliharaan kode untuk berinteraksi dengan database dengan menyediakan metode CRUD yang sudah siap digunakan serta memudahkan implementasi mekanisme query.
    - Pemisahan tanggung jawab yang lebih jelas: Dengan repository, logika bisnis dapat dipisahkan dari logika akses data, sehingga kode tetap bersih dan mudah dipahami.
    - Query yang fleksibel: Spring Data JPA memungkinkan pembuatan query method secara dinamis berdasarkan aturan penamaan, serta mendukung penulisan query khusus menggunakan anotasi @Query.
    - Efisiensi operasional: JPA Repository mendukung paging dan sorting secara native, membuat fitur ini mudah diterapkan pada aplikasi, terutama yang menangani data dalam jumlah besar.

    Sumber: https://docs.spring.io/spring-data/jpa/docs/1.6.0.RELEASE/reference/html/jpa.repositories.html

7. Sebutkan beberapa alternatif dari Java Faker!

    Java Faker adalah library yang sering digunakan untuk menghasilkan data palsu. Berikut beberapa alternatif untuk Java Faker dalam konteks Spring Boot:

    - Mockito: Meskipun bukan library untuk menghasilkan data, Mockito sangat berguna dalam pembuatan objek mock untuk unit testing, terutama ketika diperlukan simulasi interaksi dengan komponen eksternal.
    - Easy Random: Library ini secara otomatis mengisi POJO (Plain Old Java Object) dengan data acak, sehingga cocok digunakan dalam pengujian unit dan integrasi.
    - JMockData: Sebuah library yang dapat menghasilkan data acak untuk berbagai struktur data Java seperti array, list, dan map.
    - Testcontainers: Menyediakan lingkungan pengujian berbasis container Docker untuk database, memungkinkan pengembang untuk melakukan pengujian dengan database nyata yang diisi dengan data uji.

    Sumber: 
    https://www.baeldung.com/mockito-series
    https://www.baeldung.com/java-easy-random
    https://central.sonatype.com/artifact/com.github.jsonzou/jmockdata
    https://docs.spring.io/spring-boot/reference/testing/testcontainers.html

### Apa yang belum saya pahami
-[X] kalau di controller untuk validasi dipakai model proyek, itu hasil error pada nama dan deskripsi tidak muncul, namun kalau dibuat proyekDTO bisa

## Tutorial 4
### Apa yang telah saya pelajari hari ini
Pada hari saya mempelajari mengenai dynamic form, bulk delete, membuat fragments, error page

1. Jelaskan apa yang terjadi ketika pengguna mengakses URL yang tidak valid? (Contoh: localhost:8080/abcde)

    Ketika pengguna mengakses URL yang tidak valid, seperti `localhost:8080/abcde`, aplikasi Spring Boot secara default akan mengembalikan error 404 (Not Found). Ini menunjukkan bahwa aplikasi tidak dapat menemukan endpoint atau resource yang sesuai dengan URL tersebut. Pada situasi ini, DispatcherServlet dari Spring Boot akan mencoba mencocokkan URL dengan peta handler mapping yang tersedia. Jika tidak ada yang cocok, error 404 akan dikirim sebagai respons. Untuk memperbaiki pengalaman pengguna, kita bisa membuat halaman error kustom, seperti `404.html`, yang akan muncul ketika URL yang diminta tidak valid. Dengan halaman error yang kustom, kita dapat memberikan pesan yang lebih jelas dan membantu pengguna menavigasi kembali ke halaman yang benar dalam aplikasi.

    Sumber: https://www.geeksforgeeks.org/create-a-404-page-using-html-and-css/

2. Apa yang dimaksud dengan spring profiles dan apa kegunaannya?

    Spring Profiles adalah fitur dalam Spring Framework yang memungkinkan pengaturan konfigurasi aplikasi secara terpisah berdasarkan lingkungan, seperti development (dev), testing (test), atau production (prod). 

    Fungsi utama:
    1. Manajemen Konfigurasi Berdasarkan Lingkungan: Spring Profiles memungkinkan Anda memisahkan konfigurasi untuk lingkungan seperti pengembangan, pengujian, dan produksi. Misalnya, Anda bisa memiliki pengaturan database dan logging yang berbeda untuk lingkungan dev dan prod.
    2. Mengaktifkan Profil: Anda dapat memilih profil yang ingin diaktifkan menggunakan properti `spring.profiles.active` di file konfigurasi atau melalui parameter JVM. Ini akan memuat konfigurasi yang sesuai untuk profil yang dipilih.

    Contoh:
    - `application-dev.yml`: berisi konfigurasi khusus untuk lingkungan pengembangan.
    - `application-prod.yml`: berisi konfigurasi khusus untuk lingkungan produksi.

    Sumber: https://docs.spring.io/spring-boot/reference/features/profiles.html#features.profiles

3. Jelaskan cara kerja “th:include” dan juga “th:replace” dan apa hubungan antar keduanya?
    th:include dan th:replace adalah atribut dalam Thymeleaf yang digunakan untuk menyertakan fragment HTML dari file lain ke dalam template utama.
    
    th:include: Menyisipkan konten dari fragment yang ditentukan tanpa menggantikan elemen induk. Hanya isi dari fragment yang disertakan ke dalam template.

    th:replace: Menyisipkan konten fragment dan menggantikan elemen induk sepenuhnya dengan elemen dari fragment tersebut. 

    Hubungan antara keduanya: Keduanya digunakan untuk memasukkan fragment ke dalam template, namun th:replace menggantikan elemen induk dengan konten fragment, sedangkan th:include hanya menambahkan isi fragment tanpa mengubah elemen induk.

    Sumber: https://stackoverflow.com/questions/37103958/difference-between-thymeleaf-include-and-replace

4. Apakah ada format lain dalam menuliskan konfigurasi pada spring boot selain dalam format yml? Jika ada, sebutkan dan jelaskan perbedaannya!

    Selain menggunakan format YML (YAML), Spring Boot juga mendukung format properties untuk pengaturan konfigurasi.
    Perbedaan antara keduanya:
    - YML (YAML): Menggunakan indentasi untuk menunjukkan hierarki dalam konfigurasi. Lebih mudah dibaca ketika berurusan dengan struktur data yang kompleks.

    - Properties: Setiap konfigurasi ditulis sebagai pasangan key-value, dengan hierarki direpresentasikan menggunakan tanda titik (.). Format ini lebih sederhana, tetapi bisa menjadi sulit diikuti ketika terdapat banyak lapisan hierarki.

    Sumber: https://www.baeldung.com/spring-yaml-vs-properties

5. Mengapa kita memerlukan dua environment yang berbeda (dev & prod), dan apa implikasinya jika tidak dibuat demikian?

    Mengapa kita memerlukan dua lingkungan yang berbeda (dev & prod), dan apa dampaknya jika tidak dipisahkan?

    Alasan Memisahkan Lingkungan:
    - Keamanan: Lingkungan produksi (prod) biasanya menangani data yang bersifat sensitif dan memiliki akses yang lebih terbatas, sehingga lebih aman.
    - Stabilitas: Lingkungan prod diharapkan selalu stabil dan jarang mengalami perubahan, sementara lingkungan pengembangan (dev) dirancang untuk eksperimen, pengujian, dan debugging.
    - Kinerja: Prod memerlukan pengaturan yang mendukung performa optimal, seperti caching dan pengelolaan pool koneksi database, yang tidak terlalu dibutuhkan dalam lingkungan dev.

    Dampak Jika Tidak Dipisahkan:
    - Bug dan Masalah: Melakukan pengembangan dan pengujian langsung di prod dapat menyebabkan bug atau celah keamanan yang langsung mempengaruhi pengguna.
    - Ketidakstabilan: Seringnya perubahan di prod dapat membuatnya menjadi tidak stabil dan tidak dapat diandalkan.
    - Konfigurasi yang Tidak Sesuai: Pengaturan yang berbeda seperti logging, caching, dan koneksi database diperlukan untuk dev dan prod. Menggunakan satu konfigurasi untuk keduanya dapat menurunkan performa atau menimbulkan risiko keamanan.

    Sumber: https://www.synthesized.io/post/separation-of-environments-keeping-production-data-safe-in-development

6. Apa saja error yang mungkin terjadi pada aplikasi yang sudah dibuat? Berikan penjelasan dan sebutkan minimal dua jenis error.
    1. NullPointerException:
    - Penyebab: Terjadi ketika program mencoba mengakses atau memanipulasi properti atau metode dari objek yang memiliki nilai null.
    - Contoh: Menggunakan metode pada objek yang belum diinisialisasi atau tidak ada nilai yang diberikan.
    - Solusi: Pastikan bahwa setiap objek sudah diinisialisasi sebelum digunakan dalam operasi apa pun.

    2. 404 Not Found:
    - Penyebab: Terjadi ketika URL yang diminta tidak ditemukan atau tidak ada endpoint yang sesuai dengan permintaan tersebut.
    - Contoh: Pengguna mencoba mengakses localhost:8080/halaman-tidak-ada, namun tidak ada controller yang menghubungkan URL ini.
    - Solusi: Buat endpoint yang sesuai atau tambahkan halaman error yang disesuaikan untuk menangani URL yang tidak valid.

    3. 500 Internal Server Error:
    - Penyebab: Terjadi ketika ada kesalahan di server yang tidak dapat diatasi oleh aplikasi.
    - Contoh: Kesalahan dalam sintaks SQL, NullPointerException, atau kegagalan dalam logika bisnis.
    - Solusi: Periksa log error di aplikasi untuk menemukan akar permasalahan, kemudian perbaiki sumber kesalahan tersebut.

    Sumber: https://www.geeksforgeeks.org/fix-500-internal-server-error/

### Apa yang belum saya pahami
-[X] kalau delete bulk terus ada pekerja yang terdaftar proyek tapi bisa di select dan keluar error ketika di delete

## Tutorial 5
### Apa yang telah saya pelajari hari ini
Pada hari ini saya mempelajari tentang penggunaan rest API, penggunaan thunder client, ajax

1. Sebelumnya kita sudah mengetahui pada saat mengirimkan sebuah HTTP Response perlu memasukkan kode status yang berperan memberikan informasi dari response yang akan diterima. Untuk kode status sendiri dikelompokkan menjadi 5 jenis yaitu kode status dengan awalan 1xx, 2xx, 3xx, 4xx, dan 5xx. Coba jelaskan arti dari masing-masing kode status (selain 2xx) dan kapan kita harus menggunakan kode status tersebut!.

    1xx: Informational (Informasi)
    Kode status 1xx menunjukkan bahwa permintaan dari client telah diterima dan sedang diproses lebih lanjut. Kelompok ini memberikan informasi sementara, dan biasanya diikuti oleh kode status lain setelah proses selesai.

    2xx: Success (Berhasil)
    Kode status 2xx menunjukkan bahwa permintaan dari client berhasil diproses oleh server. Kelompok ini digunakan ketika permintaan diterima, dipahami, dan berhasil dijalankan.

    3xx: Redirection (Pengalihan)
    Kode status 3xx menunjukkan bahwa client harus melakukan tindakan lebih lanjut (seperti melakukan request ke URL yang berbeda) untuk menyelesaikan permintaan.

    4xx: Client Errors (Kesalahan dari Client)
    Kode status 4xx menandakan bahwa ada kesalahan di sisi client, biasanya karena permintaan tidak valid atau tidak bisa diproses.

    5xx: Server Errors (Kesalahan dari Server)
    Kode status 5xx menandakan bahwa server mengalami kesalahan atau tidak mampu memproses permintaan client karena ada masalah internal.

    Sumber: https://www.sahretech.com/2022/04/jenis-jenis-response-atau-kode-status.html

2. Jelaskan fungsi dari anotasi @JsonInclude, @JsonFormat, dan @JsonIgnore!

    @JsonInclude: Mengontrol apakah properti dengan nilai tertentu (misalnya, null) akan disertakan dalam output JSON.
    @JsonFormat: Mengatur format untuk serialisasi atau deserialisasi data (terutama untuk tanggal, waktu, atau angka).
    @JsonIgnore: Menyembunyikan properti tertentu agar tidak diserialisasi atau deserialisasi dalam JSON.

    Sumber: https://medium.com/@bubu.tripathy/json-serialization-and-deserialization-in-java-2a3f08266b70

3. Berikan dua contoh tipe requestBody dan dua contoh tipe responseBody yang dapat digunakan pada RESTful API selain tipe application/json! Serta jelaskan juga kapan sebaiknya menggunakan tipe tersebut!.

    a. RequestBody:
        - application/x-www-form-urlencoded: Format ini digunakan untuk mengirimkan data dalam bentuk pasangan kunci-nilai (key-value pairs) melalui body dari HTTP request, biasanya untuk data sederhana yang diambil dari form HTML. Format ini sering digunakan untuk pengiriman data sederhana, seperti untuk keperluan autentikasi dan otorisasi.

        - multipart/form-data: Format ini digunakan untuk mengirimkan data yang lebih kompleks, seperti file dan form-data lainnya. Biasanya digunakan ketika Anda perlu mengirimkan file (misalnya gambar) bersama dengan data form. Format ini cocok saat ada data dari form yang terdiri dari banyak input atau yang berisi file.

    b. ResponseBody:

        - text/html: Ini adalah tipe respons yang digunakan untuk mengirimkan file HTML kepada client untuk dirender oleh browser. Biasanya digunakan saat API diharapkan memberikan tampilan halaman HTML sebagai hasil.

        - application/xml: Tipe ini digunakan untuk mengirimkan data dalam format XML. Ini digunakan ketika client lebih diharapkan menerima data dalam format XML dibandingkan dengan JSON.

    Sumber: https://mixedanalytics.com/knowledge-base/request-bodies-explained/, https://docs.informatica.com/data-integration/b2b-data-transformation/10-5/rest-api-guide/rest-api-calls/response-body.html

4. Jelaskan fungsi dari anotasi @ControllerAdvice dan @RestControllerAdvice

    - @ControllerAdvice: Digunakan untuk aplikasi Spring MVC yang menggunakan view resolver (misalnya Thymeleaf, JSP) untuk mengembalikan halaman HTML atau tampilan UI lainnya.
    - @RestControllerAdvice: Digunakan dalam konteks REST API, di mana hasilnya berupa JSON atau XML, dan bukan halaman view.

    Sumber: https://codersee.com/controlleradvice-vs-restcontrolleradvice/

5. Jelaskan fungsi dari object class webClient! Apakah ada alternatif lain yang dapat kita gunakan selain object class webClient?

    - Fungsi: Digunakan untuk membuat permintaan HTTP non-blocking secara reaktif dalam aplikasi Spring WebFlux.
    - Fitur Utama: Non-blocking, mendukung operasi asinkron, berbasis reaktif (Mono dan Flux), fleksibel untuk berbagai metode HTTP.
    - Alternatif: RestTemplate, HttpClient (Apache), OkHttpClient

    Sumber: https://docs.spring.io/spring-framework/reference/web/webflux-webclient.html


### Apa yang belum saya pahami
-[X] untuk membuatnya menjadi clean code 
