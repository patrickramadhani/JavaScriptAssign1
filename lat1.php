<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 JavaScript</title>
    <script>
        function sapaUser() {
            let nama = document
            .getElementById('InputNama').value;
            if (nama === "") {
                alert("Nama Kaga Boleh Kosong Bro!");
            } else {
                document.getElementById('hasilSapa')
                .innerText = "Woi, " + nama + "! Selamat Nganggur!"
            }
        }
    </script>
</head>
<body>
    <h1>Latihan Form Input</h1>
    Masukan Nama Lengkap: <input type="text" name="nama" id="InputNama"> <br>
    <button onclick="sapaUser">Klik Saya</button>

    <p id="hasilSapa"></p>
</body>
</html>6
