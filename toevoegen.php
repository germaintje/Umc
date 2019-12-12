<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMC</title>
  <link rel="stylesheet" href="css/includes.scss" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
</head>
  <body>
  <?php include 'header.php'; ?>
<div class="row">
    <form method="post" id="msform" enctype="multipart/form-data">

  <div class="col-12 col-s-12">
  <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">Gegevens klant</li>
        <li>Gegevens weegschaal</li>
        <li>Checklist</li>
        <li>Opweeg Resultaat</li>
        <li>Afweeg Resultaat</li>
        <li>Overige informatie</li>
        <li>Alle informatie</li>
    </ul>
</div>

    <!-- fieldsets -->
    <fieldset>
        <h2 class="fs-title">Gegevens van de klant</h2>
        <h3 class="fs-subtitle">Vul alles in</h3>
          <label for="klant_naam">Naam:</label>
        <input type="text" id="klant_naam" name="naam" placeholder="Naam" />
          <label for="klant_dres">Adres:</label>
        <input type="text" id="klant_adres" name="adres" placeholder="Adres" />
          <label for="klant_plaats">Plaats:</label>
        <input type="text" id="klant_plaats" name="plaats" placeholder="Plaats" />
          <label for="klant_datum_onderhoud">Datum onderhoud:</label>
        <input type="date" id="klant_datum_onderhoud" name="datum_onderhoud" placeholder="Datum onderhoud" />
          <label for="klant_contactpersoon">Contactpersoon:</label>
        <input type="text" id="klant_contactpersoon" name="contactpersoon" placeholder="Contactpersoon" />

        <input type="submit" id="submit"  name="next" class="next action-button" value="Next" />
    </fieldset>

    <fieldset>
    <h2 class="fs-title">Gegevens weegschaal</h2>
        <h3 class="fs-subtitle">Vul hier de weegschaal gegevens in</h3>
          <label for="weegschaal_locatie">Locatie:</label>
        <input type="text" id="weegschaal_locatie" name="locatie" placeholder="Locatie" />
          <label for="weegschaal_inventarisnummer">Inventarisnummer</label>
        <input type="text" id="weegschaal_inventarisnummer" name="inventarisnummer" placeholder="Inventarisnummer" />
          <label for="weegschaal_merk">Merk</label>
        <input type="text" id="weegschaal_merk" name="merk" placeholder="Merk" />
          <label for="weegschaal_type">Type</label>
        <input type="text" id="weegschaal_type" name="type" placeholder="Type" />
          <label for="weegschaal_serienummer">Serienummer</label>
        <input type="text" id="weegschaal_serienummer" name="serienummer" placeholder="Serienummer" />
          <label for="weegschaal_ijkklasse">Ijkklasse</label>
        <input type="text" id="weegschaal_ijkklasse" name="ijkklasse" placeholder="Ijkklasse" />
          <label for="weegschaal_bouwjaar">Bouwjaar</label>
        <input type="date" id="weegschaal_bouwjaar" name="bouwjaar" placeholder="Bouwjaar" />
          <label for="weegschaal_bereik_max">Max. bereik</label>
        <input type="text" id="weegschaal_bereik_max" name="bereik_max" placeholder="..kg" />
          <label for="weegschaal_bereik_min">Min. bereik</label>
        <input type="text" id="weegschaal_bereik_min" name="bereik_min" placeholder="..kg" />
          <label for="weegschaal_schaalverdeling_e">Schaalverdeling e</label>
        <input type="text" id="weegschaal_schaalverdeling_e" name="schaalverdeling_e" placeholder="..g" />

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" id="submit"  name="next" class="next action-button" value="Next" />
    </fieldset>

    <fieldset>
        <h2 class="fs-title">Checklist</h2>
        <h3 class="fs-subtitle">Vul deze chelist in</h3>
      <div class="col-12 col-s-12" style="padding: 0;">
          <div class="col-6 col-s-4">
            <b class="ckecklist">Verzegeling intact:</b>
          </div>
          <div class="col-6 col-s-12 check">
            <input class="check" type="radio" name="verzegeling_intact" value="akkoord">akkoord
          </div>
          <div class="col-6 col-s-12 check">
            <input class="check" type="radio" name="verzegeling_intact" value="niet akkoord" />niet akkoord
          </div>
      </div>

      <div class="col-12 col-s-12" style="padding: 0;">
          <div class="col-6 col-s-4">
          <b class="ckecklist">Merktekens aanwezig:</b>
          </div>
          <div class="col-6 col-s-12 check">
            <input class="check" type="radio" name="merktekens" value="akkoord">akkoord
          </div>
          <div class="col-6 col-s-12 check">
            <input class="check" type="radio" name="merktekens" value="niet akkoord" />niet akkoord
          </div>
      </div>

      <div class="col-12 col-s-12" style="padding: 0;">
          <div class="col-6 col-s-4">
          <b class="ckecklist">Gewichtsafwijking, bruto en netto:</b>
          </div>
          <div class="col-6 col-s-12 check">
            <input class="check" type="radio" name="gewichtsafwijking" value="akkoord">akkoord
          </div>
          <div class="col-6 col-s-12 check">
            <input class="check" type="radio" name="gewichtsafwijking" value="niet akkoord" />niet akkoord
          </div>
      </div>

      <div class="col-12 col-s-12" style="padding: 0;">
          <div class="col-6 col-s-4">
          <b class="ckecklist">Fout bij excentrische belasting:</b>
          </div>
          <div class="col-6 col-s-12 check">
            <input class="check" type="radio" name="excentrische_belasting" value="akkoord">akkoord
          </div>
          <div class="col-6 col-s-12 check">
            <input class="check" type="radio" name="excentrische_belasting" value="niet akkoord" />niet akkoord
          </div>
      </div>

      <div class="col-12 col-s-12" style="padding: 0;">
          <div class="col-6 col-s-4">
          <b class="ckecklist">Herhaalbaarheidsfout:</b>
          </div>
          <div class="col-6 col-s-12 check">
            <input class="check" type="radio" name="herhaalbaarheidsfout" value="akkoord">akkoord
          </div>
          <div class="col-6 col-s-12 check">
            <input class="check" type="radio" name="herhaalbaarheidsfout" value="niet akkoord" />niet akkoord
          </div>
      </div>

      <div class="col-12 col-s-12" style="padding: 0;">
          <div class="col-6 col-s-4">
          <b class="ckecklist">Beweeglijkheidsfout:</b>
          </div>
          <div class="col-6 col-s-12 check">
            <input class="check" type="radio" name="beweeglijkheidsfout" value="akkoord">akkoord
          </div>
          <div class="col-6 col-s-12 check">
            <input class="check" type="radio" name="beweeglijkheidsfout" value="niet akkoord" />niet akkoord
          </div>
      </div>

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" id="submit" name="next" class="next action-button" value="Next" />
    </fieldset>

    <fieldset>
    <h2 class="fs-title">Resultaat Opwegend</h2>
        <h3 class="fs-subtitle">Vul hier de gemeten gegevens in</h3>
          <label for="opweeg_0">0kg</label>
        <input type="number" step="0.001" id="opweeg_0" name="opweeg_0" placeholder="0" />
          <label for="opweeg_2">2kg</label>
        <input type="number" step="0.001" id="opweeg_2" name="opweeg_2" placeholder="0" />
          <label for="opweeg_5">5kg</label>
        <input type="number" step="0.001" id="opweeg_5" name="opweeg_5" placeholder="0" />
          <label for="opweeg_10">10kg</label>
        <input type="number" step="0.001" id="opweeg_10" name="opweeg_10" placeholder="0" />
          <label for="opweeg_15">15kg</label>
        <input type="number" step="0.001" id="opweeg_15" name="opweeg_15" placeholder="0" />
          <label for="opweeg_20">20kg</label>
        <input type="number" step="0.001" id="opweeg_20" name="opweeg_20" placeholder="0" />
          <label for="opweeg_50">50kg</label>
        <input type="number" step="0.001" id="opweeg_50" name="opweeg_50" placeholder="0" />
          <label for="opweeg_100">100kg</label>
        <input type="number" step="0.001" id="opweeg_100" name="opweeg_100" placeholder="0" />
          <label for="opweeg_150">150kg</label>
        <input type="number" step="0.001" id="opweeg_150" name="opweeg_150" placeholder="0" />
          <label for="opweeg_200">200kg</label>
        <input type="number" step="0.001" id="opweeg_200" name="opweeg_200" placeholder="0" />
          <label for="opweeg_250">250kg</label>
        <input type="number" step="0.001" id="opweeg_250" name="opweeg_250" placeholder="0" />
          <label for="opweeg_300">300kg</label>
        <input type="number" step="0.001" id="opweeg_300" name="opweeg_300" placeholder="0" />

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" id="submit"  name="next" class="next action-button" value="Next" />
    </fieldset>

    <fieldset>
    <h2 class="fs-title">Resultaat Afwegend</h2>
        <h3 class="fs-subtitle">Vul hier de gemeten gegevens in</h3>
          <label for="afweeg_300">300kg</label>
        <input type="number" step="0.001" id="afweeg_300" name="afweeg_300" placeholder="0" />
          <label for="afweeg_250">250kg</label>
        <input type="number" step="0.001" id="afweeg_250" name="afweeg_250" placeholder="0" />
          <label for="afweeg_200">200kg</label>
        <input type="number" step="0.001" id="afweeg_200" name="afweeg_200" placeholder="0" />
          <label for="afweeg_150">150kg</label>
        <input type="number" step="0.001" id="afweeg_200" name="afweeg_150" placeholder="0" />
          <label for="afweeg_100">100kg</label>
        <input type="number" step="0.001" id="afweeg_100" name="afweeg_100" placeholder="0" />
          <label for="afweeg_50">50kg</label>
        <input type="number" step="0.001" id="afweeg_50" name="afweeg_50" placeholder="0" />
          <label for="afweeg_20">20kg</label>
        <input type="number" step="0.001" id="afweeg_20" name="afweeg_20" placeholder="0" />
          <label for="afweeg_15">15kg</label>
        <input type="number" step="0.001" id="afweeg_15" name="afweeg_15" placeholder="0" />
          <label for="afweeg_10">10kg</label>
        <input type="number" step="0.001" id="afweeg_10" name="afweeg_10" placeholder="0" />
          <label for="afweeg_5">5kg</label>
        <input type="number" step="0.001" id="afweeg_5" name="afweeg_5" placeholder="0" />
          <label for="afweeg_2">2kg</label>
        <input type="number" step="0.001" id="afweeg_2" name="afweeg_2" placeholder="0" />
          <label for="afweeg_0">0kg</label>
        <input type="number" step="0.001" id="afweeg_0" name="afweeg_0" placeholder="0" />

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" id="submit"  name="name" class="next action-button" value="Next" />
    </fieldset>

    <fieldset>
        <h2 class="fs-title">Overige informatie</h2>
        <h3 class="fs-subtitle">Vul hier de overige gegevens in</h3>
        <input type="text" name="uitvoerder" placeholder="Uitvoerder" />

        <b class="ckecklist">Batterij vervangen?</b>
        <input class="check" type="checkbox" name="batterij" value="Batterij vervangen"><br>

        <b class="ckecklist">Onderhoudssticker geplakt?</b>
        <input class="check" type="checkbox" name="onderhoudssticker" value="Onderhoudssticker geplakt"><br>

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="next" class="next action-button" value="Next" />
    </fieldset>

    <fieldset>
        <h2 class="fs-title">Alle info</h2>
        <h3 class="fs-subtitle">Is alles goed ingevuld?</h3>

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" id="submit" name="submit" class="action-button" value="Submit" />
    </fieldset>
</form>

</div>

<script type="text/javascript" src="js/jquery.js"></script>

</body>
</html>
<?php
include 'config.php'; 

if(isset($_POST["submit"]))  
 {  

      //insert klant gegevens
      $naam = $_POST['naam'];
      $plaats = $_POST['plaats'];
      $adres = $_POST['adres'];
      $datum_onderhoud = $_POST['datum_onderhoud'];
      $contactpersoon = $_POST['contactpersoon'];
      $klant_gegevens_query = "INSERT INTO gegevens_klant(naam, adres, plaats, datum_onderhoud, contactpersoon) VALUES ('$naam', '$adres', '$plaats', '$datum_onderhoud','$contactpersoon');";  

      //insert weegschaal gegevens
      $locatie = $_POST['locatie'];
      $inventarisnummer = $_POST['inventarisnummer'];
      $merk = $_POST['merk'];
      $type = $_POST['type'];
      $serienummer = $_POST['serienummer'];
      $ijkklasse = $_POST['ijkklasse'];
      $bouwjaar = $_POST['bouwjaar'];
      $bereik_max = $_POST['bereik_max'];
      $bereik_min = $_POST['bereik_min'];
      $schaalverdeling_e = $_POST['schaalverdeling_e'];
      $weegschaal_gegevens_query = "INSERT INTO gegevens_weegschaal(locatie, inventarisnummer, merk, type, serienummer, ijkklasse, bouwjaar, bereik_max, bereik_min, schaalverdeling_e) VALUES ('$locatie', '$inventarisnummer', '$merk','$type', '$serienummer', '$ijkklasse', '$bouwjaar', $bereik_max, $bereik_min, $schaalverdeling_e);";  
      
      //insert checklist gegevens
      $verzegeling_intact = $_POST['verzegeling_intact'];
      $merktekens = $_POST['merktekens'];
      $gewichtsafwijking = $_POST['gewichtsafwijking'];
      $excentrische_belasting = $_POST['excentrische_belasting'];
      $herhaalbaarheidsfout = $_POST['herhaalbaarheidsfout'];
      $beweeglijkheidsfout = $_POST['beweeglijkheidsfout'];
      $checklist_query = "INSERT INTO checklist(verzegeling_intact, merktekens, gewichtsafwijking, excentrische_belasting, herhaalbaarheidsfout, beweeglijkheidsfout) VALUES ('$verzegeling_intact', '$merktekens', '$gewichtsafwijking','$excentrische_belasting', '$herhaalbaarheidsfout', '$beweeglijkheidsfout');";  
 
      //insert opweeg gegevens
      $opweeg_0 = $_POST['opweeg_0'];
      $opweeg_2 = $_POST['opweeg_2'];
      $opweeg_5 = $_POST['opweeg_5'];
      $opweeg_10 = $_POST['opweeg_10'];
      $opweeg_15 = $_POST['opweeg_15'];
      $opweeg_20 = $_POST['opweeg_20'];
      $opweeg_50 = $_POST['opweeg_50'];
      $opweeg_100 = $_POST['opweeg_100'];
      $opweeg_150 = $_POST['opweeg_150'];
      $opweeg_200 = $_POST['opweeg_200'];
      $opweeg_250 = $_POST['opweeg_250'];
      $opweeg_300 = $_POST['opweeg_300'];
      $opweeg_query = "INSERT INTO meet_result_opwegend(0_kg, 2_kg, 5_kg, 10_kg, 15_kg, 20_kg, 50_kg, 100_kg, 150_kg, 200_kg, 250_kg, 300_kg) VALUES ('$opweeg_0', '$opweeg_2', '$opweeg_5','$opweeg_10', '$opweeg_15', '$opweeg_20', $opweeg_50, $opweeg_100, $opweeg_150, $opweeg_200, $opweeg_250, $opweeg_300);";  
  
      //insert afweeg gegevens
      $afweeg_300 = $_POST['afweeg_300'];
      $afweeg_250 = $_POST['afweeg_250'];
      $afweeg_200 = $_POST['afweeg_200'];
      $afweeg_150 = $_POST['afweeg_150'];
      $afweeg_100 = $_POST['afweeg_100'];
      $afweeg_50 = $_POST['afweeg_50'];
      $afweeg_20 = $_POST['afweeg_20'];
      $afweeg_15 = $_POST['afweeg_15'];
      $afweeg_10 = $_POST['afweeg_10'];
      $afweeg_5 = $_POST['afweeg_5'];
      $afweeg_2 = $_POST['afweeg_2'];
      $afweeg_0 = $_POST['afweeg_0'];
      $afweeg_query = "INSERT INTO meet_result_afwegend(300_kg, 250_kg, 200_kg, 150_kg, 100_kg, 50_kg, 20_kg, 15_kg, 10_kg, 5_kg, 2_kg, 0_kg) VALUES ('$afweeg_300', '$afweeg_250', '$afweeg_200','$afweeg_150', '$afweeg_100', '$afweeg_50', $afweeg_20, $afweeg_15, $afweeg_10, $afweeg_5, $afweeg_2, $afweeg_0);";  

      //overige gegevens
      $uitvoerder = $_POST['uitvoerder'];
      $datum = $_POST['datum_onderhoud'];
      $batterij = $_POST['batterij'];
      $onderhoudssticker = $_POST['onderhoudssticker'];
      $overig_query = "INSERT INTO overig(uitvoerder, datum, batterij, onderhoudssticker) VALUES ('$uitvoerder', '$datum', '$batterij','$onderhoudssticker');";  
      if(mysqli_query($link, $klant_gegevens_query) && mysqli_query($link, $weegschaal_gegevens_query) && mysqli_query($link, $checklist_query) && mysqli_query($link, $opweeg_query) && mysqli_query($link, $afweeg_query) && mysqli_query($link, $overig_query))
      {  
           echo 'Data is in de database gezet<br>';  
      }  else{
        echo 'er is iets fout gegaan met de overige informatie<br>';
      }
 }  

?>