<!DOCTYPE html>
<html lang="en">
<?php
include_once('defaults/head.php');
?>
<body>
<main>
    <?php include_once('defaults/navbar.php'); ?>
    <div class="mt-4 p-5 bg-info text-white">
        <h1>HBO Vaardigheden</h1>
    </div>
    <br>
    <div class="container">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Goede Vaardigheden</h2>
                <p class="lead">
                    <ul>
                    <li>Hoger tempo</li>
                    <li>Zelfstandigheid</li>
                    <li>Verantwoordelijkheid</li>
                    <li>Pro-actief werken</li>
                    <li>Plannen</li>
                    <li>Presenteren</li>
                    <li>Verslagen maken</li>
                    <li>Onderzoeken</li>
                    <li>Reflecteren</li>
                    <li>Analyseren</li>
                </ul>
                </p>
            </div>
            <div class="col-md-5">
                <img src="public/img/skills.jpg">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Zelfstandigheid</h2>
                <p class="lead">Mbo-studenten die naar het hbo gaan, krijgen ook te maken met een andere manier van studeren.
                    Ze moeten nog meer zelfstandig werken en plannen, digitaal geletterd zijn,
                    informatie opzoeken en kritisch kunnen beoordelen, veel verslagen schrijven en projecten kunnen presenteren.
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="public/img/werken.jpg">
            </div>
        </div>
    </div>


</main>

<?php
include_once ('defaults/footer.php');
?>
</body>
</html>