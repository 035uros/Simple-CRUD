<?php

require_once 'predmet.php';

$predmet = new Predmet_db();

if(isset($_POST["sifra_Predmeta"]) && isset($_POST["naziv_Predmeta"]) && isset($_POST["semestar"]) && isset($_POST["godina"]) && isset($_POST["smer"]) && isset($_POST["predavac"])){
    if($_POST["sifra_Predmeta"] != NULL && $_POST["naziv_Predmeta"] != NULL && $_POST["semestar"] != NULL && $_POST["godina"] != NULL && $_POST["smer"] != NULL && $_POST["predavac"] != NULL ){


        $sifra=$_POST["sifra_Predmeta"];
        $naziv=$_POST["naziv_Predmeta"];
        $semestar=$_POST["semestar"];
        $godina=$_POST["godina"];
        $smer=$_POST["smer"];
        $predavac=$_POST["predavac"];

        $predmet->dodaj($sifra, $naziv, $semestar, $godina, $smer, $predavac);

    }
    else
        echo '<script>alert("Niste adekvatno popunili sva polja. Sva polja su obavezna.");</script>';
}


?>
<!DOCTYPE html>
<html>
    <title>Dodaj</title>
    <head>
</head>

<body>
    <h1>Dodavanje predmeta</h1>
    <form action="dodaj.php" method="post" >
        <label for="sifra_Predmeta">Sifra predmeta</label>
        <input name="sifra_Predmeta" type="text"><br><br>
        <label for="naziv_Predmeta">Naziv predmeta</label>
        <input type="text" name="naziv_Predmeta"><br><br>
        <label for="semestar">Semestar</label>
        <input type="text" name="semestar"><br><br>
        <label for="godina">Godina studija</label>
        <input type="text" name="godina"><br><br>
        <label for="smer">Smer</label>
        <input type="text" name="smer"><br><br>
        <label for="predavac">Predavac</label>
        <input type="text" name="predavac"><br><br>
        <input type="submit" value="Dodaj">
    </form>
</body>
</html>