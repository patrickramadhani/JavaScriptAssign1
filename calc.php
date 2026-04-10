<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator JavaScript</title>
    <script>
        function hitung() {
            // input
            let a = document.getElementById("inputBil1").value;
            let b = document.getElementById("inputBil2").value;

            // proses
            let total = a + b;

            // output
            document.getElementById("hasilHitung").innerText = total;
        }
    </script>
</head>
<body>
    <h1>Kalkulator bro</h1>
    Bil 1 <input type="number" name="bil1" id="inputBil1">
    <select>
        <option>(+)</option>
        <option>(-)</option>
        <option>(:)</option>
        <option>(x)</option>
    </select>
    Bil 2 <input type="number" name="bil2" id="inputBil2">
    = ...
    <br>
    <button onclick="hitung()"></button>

    <p id="hasilHitung">0</p>
</body>
</html>