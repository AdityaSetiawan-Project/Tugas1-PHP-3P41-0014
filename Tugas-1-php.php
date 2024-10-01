<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Total Pembelian</title>
</head>
<body>
    <h1>Hitung Total Pembelian</h1>
    <h3>AdityaSetiawan 3P41 0014</h3>
    <form method="POST" action="calculate.php">
        <label for="member">Apakah Anda Member?</label>
        <select name="member" id="member">
            <option value="yes">Ya</option>
            <option value="no">Tidak</option>
        </select><br><br>

        <label for="total">Total Pembelian:</label>
        <input type="number" id="total" name="total" required><br><br>

        <input type="submit" value="Hitung Diskon">
    </form>
</body>
</html>

