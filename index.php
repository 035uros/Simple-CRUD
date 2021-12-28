<?php 

session_start();

require_once 'predmet.php';

$predmet = new Predmet_db();

if (isset($_POST['brisi'])) {
    $predmet->brisanje($_POST['brisi']);
  }

if (isset($_POST['izmeni'])) {
    $_SESSION["sifra_Predmeta_za_Izmenu"]=$_POST['izmeni'];
    header("Refresh:0; url=izmeni.php");
  }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Predmeti</title>
    <link rel="stylesheet" type="text/css" href="css.css">
    
</head>
<body>
    <h1>Spisak predmeta</h1>

    <form action="index.php" method="post">
        <label for="pretraga">Pretraga: </label>
        <input type="text" name="pretraga" id="pretraga1" placeholder="Unesi naziv ili smer...">
        <input type="submit" value="Trazi">

    </form>

    <br>
    <table>
        <tr>
        <th>Sifra predmeta</th>
        <th>Naziv predmeta</th>
        <th>Semestar</th>
        <th>Godina studija</th>
        <th>Smer</th>
        <th>Predavac</th>
        <?php 
         $predmet->ispis("");
    ?>
    </tr>
    </table>
    <br>

    <form action="dodaj.php" method="post">
        <input type="submit" value="Dodaj">

    </form>

    <br>
    <table id="tabela" style="visibility:hidden;">
        <tr>
        <th>Šifra predmeta</th>
        <th>Naziv predmeta</th>
        <th>Semestar</th>
        <th>Godina studija</th>
        <th>Smer</th>
        <th>Predavač</th>
        <?php 
      if(isset($_POST['pretraga']))
      if($_POST['pretraga'] != NULL){
          $predmet->ispis($_POST['pretraga']);
          echo '<script>document.getElementById("tabela").style.visibility = "visible";</script>';
      }
      
    ?>
    </tr>
    </table>
    <br>


</body>
</html> 



