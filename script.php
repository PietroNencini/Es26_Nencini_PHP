<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 26</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php
        $name = $_GET["name"];
        $surname = $_GET["surname"];
        $birthdate = $_GET["birthdate"];
        $home_time = $_GET["home_time"];
        if(!isset($how_transport)) {
            echo "<p class='text-danger'>Devi selezionare almeno un modo di trasporto</p>";
            exit();
        } else
            $how_transport = $_GET["transport"];
        if(!isset($_GET["english"]) && !isset($_GET["teathre"]) && !isset($_GET["sport"])) {
            $extra_school = "Nessuna attività extrascolastica";
        } else {
            $extra_school = "";
            if(isset($_GET["english"])) {
                $extra_school.= "Inglese, ";
            }
            if(isset($_GET["teathre"])) {
                $extra_school.= "Teatro, ";
            }
            if(isset($_GET["sport"])) {
                $extra_school.= "Sport";
            }
            $extra_school = rtrim($extra_school, ", ");
        }
    ?>
    <div class="w-100">
        <table class="d-block mx-auto p-4" id="data_table">
            <tr>
                <th> Nome </th>
                <th> Cognome </th>
                <th> Data di Nascita </th>
                <th> Ora di arrivo a casa* </th>
                <th> Come viene a scuola </th>
                <th> Attività extrascolastiche frequentate </th>
            </tr>
            <tr>
                <td> <?php echo $name ?></td>
                <td> <?php echo $surname ?></td>
                <td> <?php echo $birthdate ?></td>
                <td> <?php echo $home_time ?></td>
                <td> <?php echo $how_transport ?></td>
                <td> <?php echo $extra_school ?></td>
            </tr>
        </table>
        <p class="my-4">*si intende nei giorni di maggiore durata scolastica (ora di uscita: 14:40)</p>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>