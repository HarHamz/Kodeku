<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodeku</title>
    <link rel="icon" href="img/logo_only.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Header -->
    <?php
        include "header.php";
    ?>

    <!-- Main -->
    <main>
        <!-- Background Article -->
        <article class="container-fluid top">
            <div class="background-gradient section-title">
                <div class="main-text">
                    <h3>Pascal</h3>
                    <h1>Bab 6: Prosedur dan Fungsi</h1>
                </div>
            </div>
        </article>

        <!-- Teori -->
        <section class="container-fluid bab" id="P-6-1">
            <h1>Teori</h1>
            <p>
                Dalam bahasa pemrograman Pascal, subprogram adalah bagian dari program yang memegang tugas tertentu dan dapat dipanggil
                atau dieksekusi dari bagian lain dari program. Subprogram dapat membantu dalam membuat program menjadi lebih terstruktur,
                mudah dibaca, dan mudah dikelola. Ada dua jenis subprogram utama dalam Pascal: procedure (prosedur) dan function (fungsi).
            </p>
            
            <h3>1. Procedure (Prosedur)</h3>
            <p>
                Prosedur adalah subprogram yang tidak mengembalikan nilai. Mereka digunakan untuk mengelompokkan sejumlah pernyataan yang harus dijalankan bersama-sama.
                Berikut adalah contoh deklarasi dan penggunaan prosedur:
            </p>
            <pre><code>
                program ContohProcedure;

                // Deklarasi prosedur tanpa parameter
                procedure Sapa;
                begin
                      writeln('Halo! Selamat datang.');
                end;

                begin
                      // Panggil prosedur
                      Sapa;
                end.
            </code></pre>
            
            <h3>2. Function (Fungsi)</h3>
            <p>
                Fungsi adalah subprogram yang mengembalikan nilai. Mereka dapat digunakan untuk melakukan suatu perhitungan dan mengembalikan hasilnya ke pemanggil.
                Berikut adalah contoh deklarasi dan penggunaan fungsi:
            </p>
            <pre><code>
                program ContohFunction;

                // Deklarasi fungsi dengan parameter
                function Kuadrat(x: integer): integer;
                begin
                      Kuadrat := x * x;
                end;

                var
                      hasil: integer;

                begin
                      // Panggil fungsi dan simpan hasilnya
                      hasil := Kuadrat(5);
                      writeln('Hasil kuadrat: ', hasil);
                end.
            </code></pre>
        </section>
        
        <!-- Parameter -->
        <section class="container-fluid bab" id="P-6-2">
            <h1>Parameter</h1>
            <p>
                Parameter dalam subprogram adalah variabel yang digunakan untuk menerima nilai yang diberikan saat pemanggilan subprogram. Dengan menggunakan parameter,
                kita dapat mentransfer informasi dari pemanggil subprogram ke dalam subprogram itu sendiri.
                Parameter memungkinkan subprogram untuk bekerja dengan data yang berbeda setiap kali dipanggil.
            </p>
            <p>
                Dalam Pascal, parameter dapat ditambahkan pada deklarasi prosedur atau fungsi. Ada dua jenis parameter: parameter formal dan parameter aktual.
            </p>

            <h3>1. Parameter Formal</h3>
            <p>
                Parameter formal adalah variabel yang dideklarasikan di dalam tanda kurung kurawal setelah nama subprogram.
                <br>
                Berperan sebagai "tempat penampungan" untuk nilai yang akan diberikan saat pemanggilan subprogram.
                <br>
                Parameter formal dapat digunakan dalam tubuh subprogram, dan nilai yang diberikan saat pemanggilan akan digunakan oleh parameter formal tersebut.
            </p>
            <p>Contoh: </p>
            <pre><code>
                procedure Sapa(nama: string);
                begin
                    writeln('Halo, ', nama, '! Selamat datang.');
                end;
            </code></pre>
            <p>Di sini, nama adalah parameter formal dari prosedur Sapa.</p>

            <h3>2. Parameter Aktual</h3>
            <p>
                Parameter aktual adalah nilai yang diberikan saat pemanggilan subprogram.
                <br>
                Nilai ini akan diteruskan ke parameter formal yang sesuai dalam tubuh subprogram.
            </p>
            <p>Contoh: </p>
            <pre><code>
                begin
                    // Panggil prosedur dengan memberikan nilai pada parameter
                    Sapa('John');
                end.
            </code></pre>
            <p>Di sini, 'John' adalah parameter aktual yang diteruskan ke parameter formal nama dalam pemanggilan Sapa('John').</p>
        </section>

        <!-- Implementasi Parameter dalam Procedure dan Function -->
        <section class="container-fluid bab" id="P-6-3">
            <h1>Implementasi Parameter dalam Procedure dan Function</h1>
            <h3>1. Prodesur Tanpa Parameter</h3>
            <p>
                Prosedur tanpa parameter adalah subprogram yang tidak memerlukan nilai tambahan untuk dijalankan.
                Mereka hanya mengeksekusi serangkaian pernyataan yang ada di dalam tubuh prosedur. Contoh prosedur tanpa parameter:
            </p>
            <pre><code>
                program ProsedurTanpaParameter;

                // Deklarasi prosedur tanpa parameter
                procedure PesanSambutan;
                begin
                    writeln('Selamat datang di program ini!');
                end;

                begin
                    // Panggil prosedur tanpa parameter
                    PesanSambutan;
                end.
            </code></pre>
            <p>Dalam contoh ini, prosedur PesanSambutan tidak memerlukan argumen apa pun dan hanya menampilkan pesan sambutan.</p>

            <h3>2. Prodesur Dengan Parameter</h3>
            <p>
                Prosedur dengan parameter adalah subprogram yang menerima nilai sebagai argumen atau input. Parameter digunakan
                untuk mentransfer informasi ke dalam prosedur sehingga prosedur dapat bekerja dengan data yang diberikan. Berikut adalah contoh prosedur dengan parameter:
            </p>
            <pre><code>
                program ProsedurDenganParameter;

                // Deklarasi prosedur dengan parameter
                procedure Sapa(nama: string);
                begin
                    writeln('Halo, ', nama, '! Selamat datang.');
                end;

                begin
                    // Panggil prosedur dengan memberikan nilai pada parameter
                    Sapa('John');
                end.
            </code></pre>
            <p>Dalam contoh di atas, prosedur Sapa memiliki parameter nama, yang kemudian digunakan dalam tubuh prosedur untuk memberikan sapaan yang sesuai.</p>
            
        </section>

        <!-- Keuntungan Menggunakan Subprogram -->
        <section class="container-fluid bab" id="P-6-4">
            <h1>Keuntungan Menggunakan Subprogram</h1>
            <ul>
                <li>Modularitas: Subprogram memungkinkan kita untuk memecah program menjadi bagian-bagian yang lebih kecil, yang membuat program lebih mudah dimengerti dan dikelola.</li>
                <li>Reusabilitas: Prosedur dan fungsi dapat dipanggil dari bagian-bagian lain dari program, sehingga kita dapat menggunakan kembali logika tertentu tanpa harus menuliskannya kembali.</li>
                <li>Perbaikan dan Pemeliharaan: Jika ada kesalahan atau perubahan yang diperlukan dalam suatu tugas, kita hanya perlu memodifikasi subprogram terkait tanpa harus memodifikasi seluruh program.</li>
                <li>Penyederhanaan Kode: Subprogram dapat membantu menyederhanakan struktur program dan mengurangi redundansi kode.</li>
            </ul>
            <p>Penggunaan subprogram sangat umum dalam pembuatan program yang efisien dan mudah dipelihara dalam bahasa Pascal dan banyak bahasa pemrograman lainnya.</p>    
        </section>
        
    <!-- Comments -->
    <section class="container-fluid bab komentar" id="komentar">
        <div class="section-column">
            <h1>Komentar</h1>
            <form action="message.php">
                <div class="mb-3">
                  <label for="input_nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="input_nama" placeholder="Nama" name="name" required>
                </div>
                <div class="mb-3">
                  <label for="input_email" class="form-label">Alamat Email</label>
                  <input type="email" class="form-control" id="input_email" placeholder="contoh@gmail.com" name="email" required>
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Komentar</label>
                  <textarea class="form-control" id="input_message" placeholder="Komentar" name="message" required></textarea>
                </div>
                <!-- TODO: submit habistu kemana -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr>

            <!-- TODO: komentar-user adalah komentar tiap user -->
            <div class="komentar-user">
                <h3>John Doe</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor magni veniam officia labore deserunt magnam ipsum accusantium tenetur quod rerum. Molestias, illo perferendis!</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php
        include "footer.php";
    ?>

    <script src="script.js"></script>
</body>
</html>