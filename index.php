<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>

<body>
    <h2>Kalkulator Sederhana</h2> <form method="POST">
        <label for="angka1">Bilangan Pertama:</label>
        <input type="number" name="angka1" id="angka1" required>
        <br><br>

        <label for="angka2">Bilangan Kedua:</label>
        <input type="number" name="angka2" id="angka2" required>
        <br><br>

        <label for="operator">Pilih Operasi:</label>
        <select name="operator" id="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">×</option>
            <option value="/">÷</option>
        </select>
        <br><br><button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $angka1 = isset($_POST['angka1']) ? (float) $_POST['angka1'] : 0;
        $angka2 = isset($_POST['angka2']) ? (float) $_POST['angka2'] : 0;
        $operator = isset($_POST['operator']) ? $_POST['operator'] : '+';

        $hasil = 0;

        switch ($operator) {
            case '+':
                $hasil = $angka1+ $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':if ($angka2 != 0) {
                $hasil = $angka1 / $angka2;
            } else {
                $hasil = 'Pembagian dengan nol tidak diperbolehkan';
            }
            break;
    }

    echo "<p>Hasil: $hasil</p>";
}
?>
</body>

</html>