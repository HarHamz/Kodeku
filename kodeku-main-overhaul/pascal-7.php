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
                    <h1>Bab 7: Record</h1>
                </div>
            </div>
        </article>

        <!-- Teori -->
        <section class="container-fluid bab" id="P-7-1">
            <h1>Teori</h1>
            <p>
                Dalam bahasa pemrograman Pascal, sebuah record adalah struktur data yang memungkinkan kita menggabungkan beberapa tipe data yang berbeda ke dalam satu unit yang disebut record.
                Record memungkinkan kita untuk membuat struktur data yang lebih kompleks dan merepresentasikan entitas yang lebih kompleks dalam program.
            </p>
            <p>Berikut adalah contoh deklarasi dan penggunaan record dalam Pascal:</p>
            <pre><code>
                program ContohRecord;

                // Deklarasi record
                type
                    Mahasiswa = record
                        Nama: string;
                        NIM: string;
                        Nilai: integer;
                    end;

                var
                    // Mendeklarasikan variabel bertipe record Mahasiswa
                    mhs1: Mahasiswa;

                begin
                    // Mengisi data ke dalam record
                    mhs1.Nama := 'John Doe';
                    mhs1.NIM := '12345';
                    mhs1.Nilai := 85;

                    // Menampilkan data dari record
                    writeln('Nama: ', mhs1.Nama);
                    writeln('NIM: ', mhs1.NIM);
                    writeln('Nilai: ', mhs1.Nilai);
                end.
            </code></pre>
            <p>
                Dalam contoh di atas, Mahasiswa adalah record yang memiliki tiga fields atau fields yaitu Nama, NIM, dan Nilai. Setelah mendeklarasikan record,
                kita membuat variabel mhs1 bertipe Mahasiswa dan mengisi data ke dalamnya.
                Kemudian, kita menampilkan informasi dari record tersebut menggunakan pernyataan writeln.
            </p>
            <p>Beberapa poin penting:</p>
            <ul>
                <li>Fields: Fields dalam record adalah elemen-elemen individu yang membentuk record. Setiap field memiliki tipe data tertentu.</li>
                <li>Deklarasi: Record dideklarasikan dengan menggunakan kata kunci record diikuti oleh daftar fields yang terdiri dari nama field dan tipe datanya.</li>
                <li>Penggunaan Record: Variabel bertipe record dapat digunakan untuk menyimpan dan mengakses data yang terkait dalam satu entitas. Ini memungkinkan pengorganisasian data yang lebih baik dalam program.</li>
                <li>Manipulasi Record: Kita dapat mengakses dan memanipulasi fields dalam record dengan menggunakan sintaksis record_name.field_name.</li>
                <li>Pembanding Record: Kita dapat membandingkan dua record untuk kesamaan atau perbedaan.</li>
            </ul>
            <p>Record berguna ketika kita ingin mengelompokkan informasi terkait menjadi satu entitas yang terstruktur dalam program. Ini memberikan kemudahan dalam membaca, memahami, dan memanipulasi data terkait secara bersamaan.</p>
        
        <h3>Pernyataan 'With' dalam Record</h3>
        <p>
            Pada bahasa pemrograman Pascal, kata kunci with digunakan untuk menyederhanakan akses ke fields atau properties dari suatu record atau objek tertentu.
            Dengan kata lain, with memungkinkan kita menghilangkan pengulangan nama record atau objek saat mengakses fields atau properties dalam blok tertentu.
        </p>
        <p>Berikut adalah contoh penggunaan with pada record:</p>
        <pre><code>
            program ContohWithRecord;

            type
                Mahasiswa = record
                    Nama: string;
                    NIM: string;
                    Nilai: integer;
                end;

            var
                 mhs: Mahasiswa;

            begin
                // Menggunakan with untuk mengakses fields record
                with mhs do
                begin
                    Nama := 'John Doe';
                    NIM := '12345';
                    Nilai := 85;
                end;

                // Menampilkan data dari record
                writeln('Nama: ', mhs.Nama);
                writeln('NIM: ', mhs.NIM);
                writeln('Nilai: ', mhs.Nilai);
            end.
        </code></pre>
        <p>
            Dalam contoh di atas, kita menggunakan with mhs do untuk membuka blok yang memungkinkan kita mengakses langsung fields Nama, NIM, dan Nilai tanpa harus menyertakan mhs. setiap kali.
            Namun, penggunaan with harus dilakukan dengan hati-hati, karena dapat memperkenalkan beberapa masalah, seperti ambiguitas dan pengurangan kejelasan kode.
        </p>
        </section>
        
        <!-- Array of Records -->
        <section class="container-fluid bab" id="P-7-2">
            <h3>Array of Records</h3>
        <p>Array of record dalam bahasa pemrograman Pascal adalah struktur data yang memungkinkan kita membuat array yang berisi elemen-elemen bertipe record.
            Ini berarti kita dapat menyimpan sejumlah besar data yang terkait dan memiliki struktur yang seragam dalam satu entitas.</p>
        <p>Berikut adalah contoh deklarasi dan penggunaan array of record dalam Pascal:</p>
        <pre><code>
            program ArrayOfRecord;

            type
                Mahasiswa = record
                    Nama: string;
                    NIM: string;
                    Nilai: integer;
                end;
                    
            var
                // Mendeklarasikan array of record Mahasiswa
                daftarMahasiswa: array of Mahasiswa;
                i: integer;
                    
            begin
                // Menentukan panjang array
                SetLength(daftarMahasiswa, 3);
                    
                // Mengisi data ke dalam array of record
                daftarMahasiswa[0].Nama := 'John Doe';
                daftarMahasiswa[0].NIM := '12345';
                daftarMahasiswa[0].Nilai := 85;
                    
                daftarMahasiswa[1].Nama := 'Alice Smith';
                daftarMahasiswa[1].NIM := '67890';
                daftarMahasiswa[1].Nilai := 92;
                    
                daftarMahasiswa[2].Nama := 'Bob Johnson';
                daftarMahasiswa[2].NIM := '54321';
                daftarMahasiswa[2].Nilai := 78;
                    
                // Menampilkan data dari array of record
                for i := 0 to High(daftarMahasiswa) do
                begin
                    writeln('Nama: ', daftarMahasiswa[i].Nama);
                    writeln('NIM: ', daftarMahasiswa[i].NIM);
                    writeln('Nilai: ', daftarMahasiswa[i].Nilai);
                    writeln;
                end;
            end.  
        </code></pre>
        <p>Dalam contoh di atas, kita mendeklarasikan tipe record Mahasiswa dan kemudian membuat array of record daftarMahasiswa.
            Setiap elemen array menyimpan satu record Mahasiswa. Kemudian, kita mengisi dan menampilkan data dari array of record tersebut.</p>
        </section>
        
        <!-- Nested Record -->
        <section class="container-fluid bab" id="P-7-3">
            <h3>Nested Record</h3>
            <p>
                Nested record atau record bersarang (nested record) dalam bahasa pemrograman Pascal merujuk pada situasi di mana satu atau lebih record ditempatkan sebagaifield (atau fields) dalam record lainnya.
                Dengan kata lain, kita bisa memiliki record di dalam record. Ini memungkinkan untuk membuat struktur data yang lebih kompleks dan terorganisir.
            </p>
            <p>
                Berikut adalah contoh sederhana dari nested record:
            </p>
            <pre><code>
                program NestedRecord;

                type
                    Alamat = record
                        Jalan: string;
                        Kota: string;
                        KodePos: string;
                    end;

                    Mahasiswa = record
                        Nama: string;
                        NIM: string;
                        Lokasi: Alamat; // nested record Alamat
                    end;

                var
                    mhs: Mahasiswa;

                begin
                    // Mengisi data ke dalam nested record
                    mhs.Nama := 'John Doe';
                    mhs.NIM := '12345';
                    mhs.Lokasi.Jalan := 'Jl. Merdeka No. 10';
                    mhs.Lokasi.Kota := 'Bandung';
                    mhs.Lokasi.KodePos := '40123';

                    // Menampilkan data dari nested record
                    writeln('Nama: ', mhs.Nama);
                    writeln('NIM: ', mhs.NIM);
                    writeln('Alamat: ', mhs.Lokasi.Jalan, ', ', mhs.Lokasi.Kota, ' ', mhs.Lokasi.KodePos);
                end.
            </code></pre>
            <p>Dalam contoh di atas, kita mendefinisikan dua record, yaitu Alamat dan Mahasiswa. Record Mahasiswa memiliki sebuah field yang merupakan nested record Alamat.
                Kemudian, kita membuat variabel mhs bertipe Mahasiswa dan mengisi data ke dalamnya.</p>
        </section>
    <!-- Footer -->
    <?php
        include "footer.php";
    ?>

    <script src="script.js"></script>
</body>
</html>