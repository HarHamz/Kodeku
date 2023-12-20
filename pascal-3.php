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
                    <h1>Bab 3: Kondisi</h1>
                </div>
            </div>
        </article>

        <!-- Teori -->
        <section class="container-fluid bab" id="P-3-1">
            <h1>Teori</h1>
            <p>
                Operasi kondisi adalah proses menjalankan suatu perintah pada program dengan output yang berbeda sesuai
                dengan hasil dari kondisi-kondisi. Output akan ditampilkan apabila kondisi yang ditetapkan terpenuhi (true),
                atau akan menghasilkan output yang berbeda saat kondisi tidak terpenuhi (false) atau langsung keluar dari
                blok operasi.
            </p>
            <p>
                Operasi kondisi dalam Pascal umumnya melibatkan penggunaan struktur pengkondisian, seperti if, else, dan then.
                Berikut adalah penjelasan operasi kondisi dalam Pascal:
            </p>

            <h3>1. Statement If</h3>
            <p>
                Struktur dasar dari kondisional dalam Pascal adalah pernyataan if.
                Ini memungkinkan kita mengevaluasi suatu kondisi dan menjalankan satu set pernyataan jika kondisi tersebut benar.
            </p>
            <p>Contoh: </p>
            <pre><code>
                if x > 0 then
                    writeln('Nilai x positif');
            </code></pre>

            <h3>2. Statement If-Else</h3>
            <p>
                Dengan menggunakan pernyataan else, kita dapat menentukan blok pernyataan yang akan dieksekusi ketika kondisi dalam pernyataan if tidak benar.
            </p>
            <p>Contoh: </p>
            <pre><code>
                if x > 0 then
                    writeln('Nilai x positif')

                else
                    writeln('Nilai x tidak positif');
            </code></pre>

            <h3>3. Statement If-Else Bersarang</h3>
            <p>
                Kita dapat menggunakan pernyataan kondisional dalam pernyataan kondisional lainnya untuk membuat struktur pengkondisian bersarang.
            </p>
            <p>Contoh: </p>
            <pre><code>
                if x > 0 then
                begin
                    if x mod 2 = 0 then
                        writeln('Nilai x positif dan genap')
                    else
                        writeln('Nilai x positif dan ganjil');
                end
                else
                    writeln('Nilai x tidak positif');
            </code></pre>

            <h3>4. Statement Case</h3>
            <p>
                Case statement digunakan untuk mengevaluasi ekspresi dan memilih satu dari beberapa blok pernyataan untuk dieksekusi berdasarkan nilai ekspresi.
            </p>
            <p>Contoh: </p>
            <pre><code>
                case nilai of
                    1: writeln('Nilai adalah 1');
                    2: writeln('Nilai adalah 2');
                    3: writeln('Nilai adalah 3');
                else
                    writeln('Nilai tidak sesuai dengan kasus yang didefinisikan');
                end;
            </code></pre>
            <p>
                Operasi kondisi ini memungkinkan pengembang Pascal untuk membuat alur kontrol yang dinamis dalam program mereka,
                di mana jalur eksekusi program dapat bervariasi tergantung pada nilai atau kondisi tertentu. Dengan menggunakan operasi kondisi,
                kita dapat membuat program yang lebih fleksibel dan responsif terhadap perubahan dalam input atau keadaan program.
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
    <footer>
    <?php
        include "footer.php";
    ?>

    <script src="script.js"></script>
</body>
</html>