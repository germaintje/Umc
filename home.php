<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMC</title>
  <link rel="stylesheet" href="css/includes.scss" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
  <?php include 'header.php';?>
  
<div class="row">

<div class="col-7 col-s-6">
     <div class="werk">
        <h3 class="alt">Recente rapporten</h3></a>

        <?php
        include 'config.php';
            $sql = "SELECT weegschaal_id, locatie, inventarisnummer, merk FROM gegevens_weegschaal";
            $result = $link->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<div class='klant'>" . $row["weegschaal_id"]. "<b> - Locatie: </b>" . $row["locatie"]. "<b> Inventarisnummer: </b>" . $row["inventarisnummer"]. "<b> Merk: </b>" . $row["merk"]. "<a class='meerbutton' href='detailrapport.php?klant_id=1'><span> Meer info </span></a>" . "<br></div>";
                }
            } else {
                echo "0 results";
            }
          ?>

        </div> 
     </div>

     <div class="col-5 col-s-6">
     <div class="werk">
        <h3 class="alt">Gegevens klant</h3></a>

        <?php
            $sql = "SELECT klant_id, naam, plaats FROM gegevens_klant";
            $result = $link->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  $klant = $row['klant_id'];
                    echo "<div class='klant'>" . $row["klant_id"]. "<b> - Naam: </b>" . $row["naam"]. "<b> Plaats: </b>" . $row["plaats"]. "<a class='meerbutton' href='detailrapport.php?klant_id=$klant'><span> Meer info </span></a>" . "<br></div>";
                }
            } else {
                echo "0 results";
            }
          ?>
        </div> 
     </div>

</div>

  </body>
</html>

<?php $link->close();?>

