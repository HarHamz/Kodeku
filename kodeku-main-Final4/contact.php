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
                    <h1>Kontak Kami</h1>
                </div>
            </div>
        </article>

        <!-- Section Bab -->
        <section class="container-fluid" id="contact">
            <div class="section-row">
                <form action="message.php" method="post">
                    <div class="mb-3">
                        <label for="input_nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="input_nama" 
                        value = "<?php echo $username; ?>"
                        placeholder="Nama" name="name" readonly required>
                    </div>
                    <div class="mb-3">
                        <label for="input_email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="input_email" 
                        value = "<?php echo $email; ?>"
                        placeholder="contoh@gmail.com" name="email" readonly required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="input_message" 
                        placeholder="Pesan" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="message_send">Submit</button>
                </form>
            </div>
        </section>
    </main>


    <!-- Footer -->
    <?php
        include "footer.php";
    ?>

    <script src="script.js"></script>
</body>
</html>