<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Keliling dan Luas Bangunan</title>
</head>
<body>
    <h1>Perhitungan Keliling dan Luas Bangunan</h1>
    <form method="post">
        <label for="shape">Pilih Bentuk Bangunan:</label>
        <select name="shape" id="shape">
            <option value="persegi">Persegi</option>
            <option value="persegipanjang">Persegi Panjang</option>
            <option value="segitiga">Segitiga</option>
            <option value="lingkaran">Lingkaran</option>
        </select>
        <br>

        <label for="param1">Parameter 1:</label>
        <input type="number" name="param1" id="param1">
        <br>

        <label for="param2">Parameter 2:</label>
        <input type="number" name="param2" id="param2">
        <br>

        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedShape = $_POST["shape"];
        $param1 = (float)$_POST["param1"];
        $param2 = (float)$_POST["param2"];

        switch ($selectedShape) {
            case "persegi":
                $luas = $param1 * $param1;
                $keliling = 4 * $param1;
                break;

            case "persegipanjang":
                $luas = $param1 * $param2;
                $keliling = 2 * ($param1 + $param2);
                break;

            case "segitiga":
                $luas = 0.5 * $param1 * $param2;
                // Untuk menghitung keliling segitiga, Anda perlu memiliki data tambahan (misalnya panjang ketiga sisi).
                break;

            case "lingkaran":
                $luas = 3.14 * $param1 * $param1;
                $keliling = 2 * 3.14 * $param1;
                break;

            default:
                $luas = $keliling = "Tidak Valid";
                break;
        }

        echo "<h2>Hasil Perhitungan:</h2>";
        echo "Luas: " . $luas . "<br>";
        if (isset($keliling)) {
            echo "Keliling: " . $keliling . "<br>";
        }
    }
    ?>
</body>
</html>
