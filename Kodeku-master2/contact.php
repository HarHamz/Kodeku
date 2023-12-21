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
        <?php
            include "comment.php";
        ?>
    </main>


    <!-- Footer -->
    <?php
        include "footer.php";
    ?>

    <script src="script.js"></script>
</body>
</html>