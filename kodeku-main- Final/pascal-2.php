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
                    <h1>Bab 2: Operator</h1>
                </div>
            </div>
        </article>
    
        <!-- Jenis Operator -->
        <section class="container-fluid bab" id="P-2-1">
            <h1>Jenis Operator</h1>
            <p>
                Dalam bahasa Pascal, operator adalah simbol atau karakter yang digunakan untuk melakukan operasi tertentu pada operand-operand.
                Operand adalah nilai atau variabel yang dioperasikan oleh operator.
                Ada berbagai jenis operator dalam Pascal, termasuk operator aritmatika, operator perbandingan, operator logika, dan lain-lain.
            </p>
            <h3>1. Operator Aritmatika</h3>
            <table class="table table-striped">
                <tr>
                    <th>Operator</th>
                    <th>Penjelasan</th>
                </tr>
                <tr>
                    <td>' + '</td>
                    <td>(Tambah): Menambahkan dua nilai.</td>
                </tr>
                <tr>
                    <td>' - '</td>
                    <td>(Kurang): Mengurangkan nilai kedua dari nilai pertama.</td>
                </tr>
                <tr>
                    <td>' * '</td>
                    <td>(Kali): Mengalikan dua nilai.</td>
                </tr>
                <tr>
                    <td>' / '</td>
                    <td>(Bagi): Membagi nilai pertama dengan nilai kedua.</td>
                </tr>
                <tr>
                    <td>' div '</td>
                    <td>(Pembagian bulat): Mengembalikan hasil pembagian bulat dari dua nilai.</td>
                </tr>
                <tr>
                    <td>' mod '</td>
                    <td>(Modulus): Mengembalikan sisa hasil bagi dari dua nilai.</td>
                </tr>
            </table>
            <p>Contoh:</p>
            <pre><code>
                a := 5 + 3;   // a menjadi 8
                b := 10 - 4;  // b menjadi 6
                c := 2 * 6;   // c menjadi 12
                d := 15 / 3;  // d menjadi 5
            </code></pre>

            <h3>2. Operator Perbandingan</h3>
            <table class="table table-striped">
                <tr>
                    <th>Operator</th>
                    <th>Penjelasan</th>
                </tr>
                <tr>
                    <td>' = '</td>
                    <td>Sama dengan</td>
                </tr>
                <tr>
                    <td>' <> '</td>
                    <td>Tidak sama dengan</td>
                </tr>
                <tr>
                    <td>' < '</td>
                    <td>Kurang dari</td>
                </tr>
                <tr>
                    <td>' <= '</td>
                    <td>Kurang dari atau sama dengan</td>
                </tr>
                <tr>
                    <td>' > '</td>
                    <td>Lebih dari</td>
                </tr>
                <tr>
                    <td>' >= '</td>
                    <td>Lebih dari atau sama dengan</td>
                </tr>
            </table>
            <p>Contoh: </p>
            <pre><code>
                if (x > y) then
                    writeln('Nilai x lebih besar dari y')
                else
                    writeln('Nilai x tidak lebih besar dari y');
            </code></pre>

            <h3>3. Operator Logika</h3>
            <table class="table table-striped">
                <tr>
                    <th>Operator</th>
                    <th>Penjelasan</th>
                </tr>
                <tr>
                    <td>' and '</td>
                    <td>Logika AND</td>
                </tr>
                <tr>
                    <td>' or '</td>
                    <td>Logika OR</td>
                </tr>
                <tr>
                    <td>' not '</td>
                    <td>Logika NOT</td>
                </tr>
            </table>
            <p>Contoh: </p>
            <pre><code>
                if (a > 0) and (b < 10) then
                    writeln('a positif dan b kurang dari 10');
            </code></pre>

            <h3>4. Operator Penugasan</h3>
            <table class="table table-striped">
                <tr>
                    <th>Operator</th>
                    <th>Penjelasan</th>
                </tr>
                <tr>
                    <td>' := '</td>
                    <td>Menugaskan nilai ke variabel.</td>
                </tr>
            </table>
            <p>Contoh: </p>
            <pre><code>
                x := 10;   // Menugaskan nilai 10 ke variabel x
            </code></pre>
        </section>
    </main>

        
    <!-- Footer -->
    <?php
        include "footer.php";
    ?>

    <script src="script.js"></script>
</body>
</html>