<section class="container-fluid bab" id="komentar">
    <div class="section-column">
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
            <label for="input_email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="input_email"
                    value = "<?php
                            $link = str_replace("/", "", $_SERVER['PHP_SELF']);
                            echo $link;
                            ?>"
                    placeholder="contoh@gmail.com" name="chapter" readonly required>
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