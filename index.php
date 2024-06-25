<?php
    // Creare una variabile con un paragrafo di testo a vostra scelta.
    // Dichiaro la variabile con $nome
    $text= "Il viaggio è la gioia di non avere più niente da perdere, ma tutto da scoprire, nessuna catena legata a nessuna abitudine, solo la libertà e la capacità di godere delle proprie trasformazioni, giorno dopo giorno. Quante finestre, quanti occhi, quanta strada, quante vite si scoprono in un viaggio. Il viaggio è una specie di porta attraverso la quale si esce dalla realtà come per penetrare in una realtà inesplorata che sembra un sogno.";
    // dichiaro una nuova variabile che conterrà l'input dell'utente (perché me la stampa a schermo anche senza echo?)
    $badword=$_GET["forbiddenword"];
    // dichiaro una nuova variabile che sostituisca l'input dell'utente con ***
    $censured= str_ireplace("$badword", "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php badwords</title>
</head>
<body>
    <main>
        <h1>
            PHP BADWORDS
        </h1>
        <h2>
            Il testo da stampare è:
            <p>
                <?php
                // echo $nomevariabile per stampare a schermo
                echo $text
                ?>
            </p>
        </h2>
        <h2>
            Il testo ora contiene:
            <p>
            <!-- Stampo a schermo la lunghezza con strlen($nomevariabile) del paragrafo. -->
                <?php
                echo strlen($text)
                ?>
                parole
            </p>
        </h2>
        <p>
        <h2>
            La parola da censurare è
            <p>
                <!-- stampo a schermo la parola da censurare contenuta nella variabile badword che prende il valore dal name del form -->
                <?php
                echo $badword
                ?>
            </p>
        </h2>
        <h2>
            Il testo quindi ora diventa:
            <p>
                <!-- stampo a schermo il nuovo testo con la censura -->
                <?php
                echo $censured
                ?>
            </p>
        </h2>
        <h2>
            Il testo quindi ora contiene:
            <p>
                <?php
                echo strlen($censured)
                ?> parole
            </p>
        </h2>
        <!-- Una parola da censurare viene passata dall'utente tramite parametro GET. 
        il name del form sarà lo stesso di riga 6 nel get-->
        <form action="./index.php" method="get">
            <input type="text" name="forbiddenword" id="forbiddenword">
            <button type="submit">
                Invia risposta
            </button>
        </form>
    </main>
</body>
</html>