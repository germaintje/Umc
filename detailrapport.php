<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail pagina</title>
  <link rel="stylesheet" href="css/includes.scss" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
  <?php include 'header.php'; ?>
  
<div class="row">
<?php include 'config.php'; ?>
    
    <?php
    $id = $_GET['klant_id'];
    
    $sql = "SELECT * FROM gegevens_klant, gegevens_weegschaal, checklist, meet_result_opwegend where klant_id = " . $id;
    $result = $link->query($sql);
    while ($row = $result->fetch_assoc()) {
        //gegevens_klant
        $id = $row['klant_id'];
        $naam =  $row['naam'];
        $adres =  $row['adres'];
        $plaats = $row['plaats'];
        $datum = $row['datum_onderhoud'];
        $contactpersoon = $row['contactpersoon'];

        //gegevens_weegschaal
        $locatie = $row['locatie'];
        $inventarisnummer = $row['inventarisnummer'];
        $merk = $row['merk'];
        $type = $row['type'];
        $serienummer = $row['serienummer'];
        $ijkklasse = $row['ijkklasse'];
        $bouwjaar = $row['bouwjaar'];
        $bereik_max = $row['bereik_max'];
        $bereik_min = $row['bereik_min'];
        $schaalverdeling_e = $row['schaalverdeling_e'];

        //checklist
        $verzegeling_intact = $row['verzegeling_intact'];
        $merktekens =  $row['merktekens'];
        $gewichtsafwijking =  $row['gewichtsafwijking'];
        $excentrische_belasting = $row['excentrische_belasting'];
        $herhaalbaarheidsfout = $row['herhaalbaarheidsfout'];
        $beweeglijkheidsfout = $row['beweeglijkheidsfout'];

        //meet result opwegend
        $nul_kg_op = $row['0_kg'];
    }
    
    ?>    
    <div class="rapport">
        <div class="col-4 col-s-12">
                <div class="specs">
                    <div class="specs-01">
                        <h3><b>Gegevens klant:</b></h3><br>

                            <p><b>Naam:</b>  <?php echo $naam?></p>
                            <p><b>Adres:</b>  <?php echo $adres?></p>
                            <p><b>Plaats:</b>  <?php echo $plaats?></p>
                            <p><b>Datum:</b>  <?php echo $datum?></p>
                            <p><b>contactpersoon:</b>  <?php echo $contactpersoon?></p>
                    </div>
                </div>
        </div>

        <div class="col-4 col-s-12">
                <div class="specs">
                    <div class="specs-01">
                        <h3><b>Gegevens weegschaal:</b></h3><br>

                            <p><b>Locatie:</b>  <?php echo $locatie?></p>
                            <p><b>Inventarisnummer:</b>  <?php echo $inventarisnummer?></p>
                            <p><b>Merk:</b>  <?php echo $merk?></p>
                            <p><b>Type:</b>  <?php echo $type?></p>
                            <p><b>Serienummer:</b>  <?php echo $serienummer?></p>
                            <p><b>Ijkklasse:</b>  <?php echo $ijkklasse?></p>
                            <p><b>Bouwjaar:</b>  <?php echo $bouwjaar?></p>
                            <p><b>Bereik_max:</b>  <?php echo $bereik_max?></p>
                            <p><b>Bereik_min:</b>  <?php echo $bereik_min?></p>
                            <p><b>Schaalverdeling_e:</b>  <?php echo $schaalverdeling_e?></p>
                    </div>
                </div>
        </div>

        <div class="col-4 col-s-12">
                <div class="specs">
                    <div class="specs-01">
                        <h3><b>Checklist:</b></h3><br>

                            <p><b>Verzegeling_intact:</b>  <?php echo $verzegeling_intact?></p>
                            <p><b>Merktekens:</b>  <?php echo $merktekens?></p>
                            <p><b>Gewichtsafwijking:</b>  <?php echo $gewichtsafwijking?></p>
                            <p><b>Excentrische_belasting:</b>  <?php echo $excentrische_belasting?></p>
                            <p><b>Herhaalbaarheidsfout:</b>  <?php echo $herhaalbaarheidsfout?></p>
                            <p><b>Beweeglijkheidsfout:</b>  <?php echo $beweeglijkheidsfout?></p>
                    </div>
                </div>
        </div>

        <div class="col-12 col-s-12">
                <div class="specs">
                    <div class="specs-01">
                        <table style="width:100%">
                        <tr class="kop">
                            <th colspan="4">Opwegend</th>
                            <th colspan="4">Terugwegend</th>
                        </tr>
                        <tr class="kopjes">
                            <!-- Opwegend -->
                            <td>Belasting</td>
                            <td>Aflezing</td>
                            <td>Afwijking</td>
                            <td>Tolerantie</td>

                            <!-- Terugwegend -->
                            <td>Belasting</td>
                            <td>Aflezing</td>
                            <td>Afwijking</td>
                            <td>Tolerantie</td>
                        </tr>
                        <tr class="kopjes">
                            <td>Kg**</td>
                            <td>Kg</td>
                            <td>g**</td>
                            <td>g**</td>

                            <!-- Terugwegend -->
                            <td>Kg**</td>
                            <td>Kg</td>
                            <td>g**</td>
                            <td>g**</td>
                        </tr>
                        <tr>
                            <!-- Opwegend -->
                            <td>0</td>
                            <td><?php echo $nul_kg_op?></td>
                            <td></td>
                            <td>2</td>

                            <!-- Terugwegend -->
                            <td>20</td>
                            <td></td>
                            <td></td>
                            <td>15</td>
                        </tr>

                        </table>
                    </div>
                </div>
        </div>

    </div>




</div>

  </body>
</html>