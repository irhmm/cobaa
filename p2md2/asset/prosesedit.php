<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form fields are set
    if (
        isset($_POST['kategori']) &&
        isset($_FILES['pict']) &&
        isset($_FILES['pict2']) &&
        isset($_FILES['pict3']) &&
        isset($_POST['nama']) &&
        isset($_POST['desk']) &&
        isset($_POST['spec']) &&
        isset($_POST['harga'])
    ) {
        $kategory = $_POST['kategori'];
        $nama = $_POST['nama'];
        $desk = $_POST['desk'];
        $spec = $_POST['spec'];
        $harga = $_POST['harga'];

        // Validasi data kosong
        if (empty($kategori) || empty($nama) || empty($desk) || empty($spec) || empty($harga)) {
            echo "Data harus dilengkapi!";
            // You might want to redirect back to the form or handle the error accordingly.
        } else {
            // Process the uploaded files (pict, pict2, pict3) here

            // For example, move_uploaded_file for each file
            $uploadDir = '../gambar/';
            $pictFileName = $uploadDir . basename($_FILES['pict']['name']);
            $pict2FileName = $uploadDir . basename($_FILES['pict2']['name']);
            $pict3FileName = $uploadDir . basename($_FILES['pict3']['name']);

            if (
                move_uploaded_file($_FILES['pict']['tmp_name'], $pictFileName) &&
                move_uploaded_file($_FILES['pict2']['tmp_name'], $pict2FileName) &&
                move_uploaded_file($_FILES['pict3']['tmp_name'], $pict3FileName)
            ) {
                // Insert data into the database
                include "koneksi.php";

                // You may want to use prepared statements to prevent SQL injection
                $input = "INSERT INTO databarang (nama, desk, spec, pict, pict2, pict3, harga, kategori) 
                          VALUES ('$nama', '$desk', '$spec', '$pictFileName', '$pict2FileName', '$pict3FileName', '$harga', '$kategory')";
                $query_input = mysqli_query($Open, $input);

                if ($query_input) {
                    // Output success message
                    ?>
                    <script>
                        alert('Input Data Berhasil');
                        window.location.replace('dash.php');
                    </script>
                    <?php
                } else {
                    // Output error message
                    echo "Input Data Gagal!, Silakan diulangi!";
                }

                // Close the database connection
                mysqli_close($Open);
            } else {
                // Output error message for file upload failure
                echo "Gagal mengunggah gambar, Silakan cek file gambar dan folder tujuan.";
            }
        }
    } else {
        echo "Invalid form submission. Some fields are missing.";
    }
} else {
    echo "Invalid request method";
}
?>
