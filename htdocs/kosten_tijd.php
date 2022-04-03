<!DOCTYPE html>
<html lang="en">
<?php
include_once('defaults/head.php');
?>
<body>
<main>
    <?php include_once('defaults/navbar.php'); ?>

    <div class="mt-4 p-5 bg-info text-white">
        <h1>Kosten & Tijds Duur</h1>
    </div>
    <br>
    <div class="container">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Tijds duur</h2>
                <p class="lead">Voor een publieke hbo opleiding dien jij je uiterlijk op 1 mei aan te melden bij <a  target="_blank" class="link white" href="https://www.studielink.nl/"><b>Studielink</b></a>,
                    hier kan jij de opleiding van je keuze doorgeven. Je verkrijgt hiermee 'toelatingsrecht',
                    ook voor andere hbo opleidingen, want je kunt na 1 mei nog switchen. Het is vooral belangrijk dat je 'een'
                    aanmelding doet. Door de mogelijkheid van het switchen is het niet nodig om je voor meerdere hbo opleidingen
                    aan te melden. Voor de aanmelding heb je een DigiD nodig. Heb je die niet, dan is het advies om spoedig een
                    DigiD aan te vragen. Voor het aanvragen staan namelijk 5 werkdagen.
                </p>
            </div>

            <div class="col-md-5">
                <img src="public/img/time.jpg">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <img src="public/img/kosten.jpg">
            </div>
            <div class="col-md-5">
                <h2 class="featurette-heading">Kosten</h2>
                <p class="lead">De meeste studenten betalen wettelijk collegegeld. Voor het studiejaar 2021-2022 is het wettelijke collegegeld € 1.084,-.
                </p>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Studiejaar</th>
                        <th>Voltijd</th>
                        <th>Deel tijd of Duaal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2020-2021</td>
                        <td>€ 1.084</td>
                        <td>€ 645 en € 1.084</td>
                    </tr>
                    <tr>
                        <td>2022-2023</td>
                        <td>€ 2.209</td>
                        <td>Tussen € 1.315 en € 2.209</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>






</main>

<?php
include_once ('defaults/footer.php');
?>
</body>
</html>