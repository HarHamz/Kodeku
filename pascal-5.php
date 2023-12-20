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
                    <h1>Bab 5: Array</h1>
                </div>
            </div>
        </article>

        <!-- Teori -->
        <section class="container-fluid bab" id="P-5-1">
            <h1>Teori</h1>
            <p>
                Dalam bahasa pemrograman Pascal, sebuah array adalah kumpulan elemen-elemen data yang memiliki tipe data yang sama.
                Setiap elemen dalam array dapat diakses melalui indeksnya. Indeks array dimulai dari 1
                (bukan dari 0 seperti beberapa bahasa pemrograman lainnya).
                Array digunakan untuk menyimpan dan mengelola sejumlah besar data dengan cara yang terstruktur.
            </p>
            <p>Contoh penggunaan array dalam Pascal:</p>
            <pre><code>
                program ContohArray;
                uses crt;

                var
                    // Mendeklarasikan array dengan nama 'angka' yang berisi 5 elemen bertipe integer
                    angka: array[1..5] of integer;

                    // Mendeklarasikan array dengan nama 'nama' yang berisi 3 elemen bertipe string
                    nama: array[1..3] of string;

                    // Variabel indeks untuk iterasi
                    i: integer;

                begin
                    // Mengisi array 'angka' dengan nilai
                    angka[1] := 10;
                    angka[2] := 20;
                    angka[3] := 30;
                    angka[4] := 40;
                    angka[5] := 50;

                    // Mengisi array 'nama' dengan nilai
                    nama[1] := 'John';
                    nama[2] := 'Doe';
                    nama[3] := 'Alice';

                    // Menampilkan nilai array 'angka'
                    writeln('Isi array angka:');
                    for i := 1 to 5 do
                        writeln(angka[i]);

                    // Menampilkan nilai array 'nama'
                    writeln('Isi array nama:');
                    for i := 1 to 3 do
                        writeln(nama[i]);
                end.
            </code></pre>
            <p>
                Dalam contoh di atas, angka adalah array bertipe integer dengan 5 elemen, dan nama adalah array bertipe string dengan 3 elemen.
                Elemen-elemen array diakses menggunakan indeks, dan pengulangan for digunakan untuk mengakses dan menampilkan nilai array.
            </p>
        </section>

        <!-- Mengakses isi array -->
        <section class="container-fluid bab" id="P-5-2">
            <h1>Mengakses Isi Array</h1>
            <p>
                Berikut adalah beberapa contoh cara mengakses isi array:
            </p>

            <h3>1. Mengakses Elemen Tertentu</h3>
            <p>
                Untuk mengakses nilai dari elemen tertentu dalam array, kita cukup menggunakan nama array diikuti oleh indeks yang ingin diakses. Contoh:
            </p>
            <pre><code>
                writeln(angka[3]); // Menampilkan nilai elemen ke-3 dari array 'angka'
                writeln(nama[2]);  // Menampilkan nilai elemen ke-2 dari array 'nama'
            </code></pre>

            <h3>2. Iterasi Melalui Array</h3>
            <p>
                Untuk mengakses semua elemen dalam array, kita dapat menggunakan perulangan for atau while. Contoh:
            </p>
            <pre><code>
                for i := 1 to 5 do
                    writeln(angka[i]); // Menampilkan semua elemen dalam array 'angka'

                for i := 1 to 3 do
                    writeln(nama[i]);  // Menampilkan semua elemen dalam array 'nama'
            </code></pre>
            
            <h3>3. Mengubah Nilai Elemen</h3>
            <p>
                Kita juga dapat mengubah nilai elemen dalam array dengan memberikan nilai baru menggunakan indeks yang sesuai. Contoh:
            </p>
            <pre><code>
                angka[4] := 45;  // Mengubah nilai elemen ke-4 dari array 'angka' menjadi 45

                nama[1] := 'Bob';  // Mengubah nilai elemen ke-1 dari array 'nama' menjadi 'Bob'
            </code></pre>
            <p>
                Dengan menggunakan indeks array, kita dapat membaca, menulis, dan mengubah nilai elemen-elemen array sesuai kebutuhan program.
                Pastikan untuk memperhatikan batas indeks array dan menghindari mengakses elemen di luar batas array yang telah ditentukan,
                karena hal ini dapat menyebabkan kesalahan (error) dalam program.
            </p>

        </section>
        
        <!-- Array multidimensi -->
        <section class="container-fluid bab" id="P-5-3">
            <h1>Array Multi Dimensi</h1>
            <p>
                Array multidimensi adalah struktur data yang memungkinkan kita menyimpan elemen-elemen dalam bentuk matriks atau tabel dengan dua atau lebih dimensi.
                Ini berarti kita memiliki array yang memiliki lebih dari satu indeks atau lebih dari satu tingkat kedalaman.
                Dalam konteks Pascal atau banyak bahasa pemrograman lainnya, kita dapat membuat array dua dimensi atau lebih dengan cara berikut:
            </p>
            <pre><code>
                program ContohArrayMultidimensi;
                uses crt;

                var
                    // Mendeklarasikan array dua dimensi dengan nama 'matriks'
                    matriks: array[1..3, 1..4] of integer;

                    // Variabel indeks untuk iterasi
                    i, j: integer;

                begin
                    // Mengisi matriks dengan nilai
                    for i := 1 to 3 do
                        for j := 1 to 4 do
                            matriks[i, j] := i * j;

                    // Menampilkan nilai matriks
                    writeln('Isi matriks:');
                    for i := 1 to 3 do
                    begin
                        for j := 1 to 4 do
                            write(matriks[i, j], ' ');
                    writeln;
                    end;
                end.
            </code></pre>
            <p>
                Dalam contoh di atas, matriks adalah array dua dimensi dengan ukuran 3x4. Kita menggunakan dua variabel indeks (i dan j) untuk mengakses elemen-elemen matriks. 
                Dalam contoh ini, matriks diisi dengan nilai hasil perkalian dari indeks baris dan kolom, dan nilai matriks ditampilkan.
            </p>
            <p>
                Dengan array multidimensi, kita dapat memodelkan struktur data yang lebih kompleks seperti tabel, matriks, atau kumpulan data dalam beberapa dimensi.
                Pengaksesan elemen-elemen array multidimensi juga melibatkan lebih dari satu indeks, seperti matriks[i, j], di mana i adalah indeks baris dan j adalah indeks kolom.
            </p>
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