<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "report_inf";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['nume'];
$skey = $_POST['skey'];
$id_denuntator = $conn->query("select locatie.nume_localitate, denuntator.nume,statut.nume_statut,data,descriere from infractiune join locatie on locatie.id_locatie = infractiune.id_locatie join denuntator on denuntator.id_denuntator = infractiune.id_denuntator join statut on statut.id_statut = infractiune.id_statut where
 denuntator.nume = '$name' AND skey = '$skey'");
$result = mysqli_fetch_array($id_denuntator);

?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="top_menu">
    <a href="/">Home</a>
    <a href="/check.php">Verificare</a>
    <a href="/admin.php">Operator</a>
</div>
<div class="window">
    <table>
        <tr>
            <th>Localitate</th>
            <th>Nume</th>
            <th>Statut</th>
            <th>Data</th>
            <th>Descriere</th>
        </tr>
        <tr>
            <td><?php echo $result["nume_localitate"]?></td>
            <td><?php echo $result["nume"]?></td>
            <td><?php echo $result["nume_statut"]?></td>
            <td><?php echo $result["data"]?></td>
            <td><?php echo $result["descriere"]?></td>
        </tr>
    </table>
</div>
</body>
</html>
