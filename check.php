<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="top_menu">
    <a href="/">Home</a>
    <a href="/check.php">Verificare</a>
    <a href="/admin.php">Admin</a>
</div>
<div class="info-div window">
    <h1 style="font-size: 20px">Inrodu mai jos datele pentru a verifica statul</h1>
</div>
<form action="submit_check.php" method="post">
    <div class="window" style="width: 500px">
        <label for="Nume">Nume:</label>
        <input type="text" id="nume" name="nume">
        <label for="skey">Cuvantul cheie:</label>
        <input type="text" id="skey" name="skey">
        <h2 style="color: red; margin-top: 20px">*Recuperarea datelor este imposibila</h2>
        <h2 style="color: red">*Daca vom avea ajutorul dumneavoastra va vom contacta</h2>
        <div class="button">
            <input type="submit" value="Trimite" class="btn">
        </div>
    </div>
</form>

</body>
</html>