<?php
/*
1. Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php

2. Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
*/
var_dump($_GET);

$lunghezza_pass = $_GET['long-pass'];
?>

<!doctype html>
<html lang="en">
    <head>
        <title>php strong password generator es less51</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container">
                <form action="" method="GET">
                    <label for="long-pass" class="form-label">Lunghezza de la tua password?</label>
                    <input type="number" class="form-control" name="long-pass" id="long-pass" aria-describedby="helpId"
                        placeholder="Inserisci un numero"/>
                    <button type="submit" class="btn btn-primary">
                        Generare Password
                    </button>                      

                    <div>
                        <?= $lunghezza_pass ?>
                    </div>
                </form>
            </div>
            
                
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
    </body>
</html>
