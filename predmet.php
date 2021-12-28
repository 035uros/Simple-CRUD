<?php 
class Predmet_db{


    public function brisanje($id){
        
        $conn= mysqli_connect("localhost", "root", "","fakultet") or die("Greska". $conn->error);
    
        $sql="DELETE FROM predmet WHERE predmet.sifra_Predmeta='$id'";
    
        $conn->query($sql);

        $conn->close();
    }

    function ispis($naziv){
       
        $conn= mysqli_connect("localhost", "root", "","fakultet") or die("Greska". $conn->error);
    
        if($naziv == ""){
        $sql="SELECT * FROM predmet";
        }
        else
        $sql="SELECT * FROM predmet WHERE predmet.naziv_Predmeta = '$naziv' OR predmet.smer = '$naziv'";
    
        $rezultat=$conn->query($sql);
    
        if($rezultat->num_rows > 0){
        while($red = $rezultat->fetch_assoc()){
            echo "<tr>";
            echo '<td><b>'. $red["sifra_Predmeta"]. '</b></td>';
            echo '<td>'. $red["naziv_Predmeta"]. '</td>';
            echo '<td>'. $red["semestar"]. '</td>';
            echo '<td>'. $red["godina_Studija"]. '</td>';
            echo '<td>'. $red["smer"]. '</td>';
            echo '<td>'. $red["predavac"]. '</td>';
            echo '<form method="post"><td><button name="brisi" onclick="return confirm(\'Da li ste sigurni da želite da obrišete ovaj predmet?\')" value="'. $red["sifra_Predmeta"]. '">Obrisi</button></td>';
            echo '<td><button name="izmeni" value="'. $red["sifra_Predmeta"]. '">Izmeni</button></td></form>';
        }
        }
        $conn->close();
    }

    public function dodaj($sifra, $naziv, $semestar, $godina, $smer, $predavac){

        $conn= mysqli_connect("localhost", "root", "","fakultet") or die("Greska". $conn->error);

        $query="INSERT INTO predmet (sifra_Predmeta, naziv_Predmeta, semestar, godina_Studija, smer, predavac) VALUES ('$sifra', '$naziv', '$semestar', '$godina', '$smer', '$predavac')";

      
        $conn->query($query);

        header("Refresh:0; url=index.php");

        $conn->close();

    }

    public function izmeni($sifra, $naziv, $semestar, $godina, $smer, $predavac, $menjaj){

        $conn= mysqli_connect("localhost", "root", "","fakultet") or die("Greska". $conn->error);
        echo 'boane';
        $query="UPDATE predmet SET sifra_Predmeta = '$sifra', naziv_Predmeta = '$naziv', semestar = '$semestar', godina_Studija = '$godina', smer = '$smer', predavac = '$predavac' WHERE predmet.sifra_Predmeta = '$menjaj'";
        $conn->query($query);
        $conn->close();
    }



}

?>