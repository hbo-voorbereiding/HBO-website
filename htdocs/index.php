<!DOCTYPE html>
<html lang="en">
<?php
include_once('defaults/head.php');
?>
<body>
<main>
    <?php include_once('defaults/navbar.php'); ?>


    <div class="mt-4 p-5 bg-info text-white">
        <h1>Welcome</h1>
        <p>Leer hier meer informatie over het HBO.</p>
    </div>

    <br>
    <br>
    <br>


                                        <!--Website links to schools-->
        <div class="row">
            <div class="col-lg-4">
                <img src="public/img/denhaag.jpg">
                <h2>Haagste</h2>
                <p>Locatie Den Haag</p>
                <p><a class="btn" target="_blank" href="https://www.thehagueuniversity.com/"><button class="btn btn-info text-white">Lees meer.</button></a></p>
            </div>

            <div class="col-lg-4">
                <img src="public/img/zoetermeer.jpg">
                <h2>Zoetermeer</h2>
                <p>Locatie Zoetermeer</p>
                <p><a class="btn" target="_blank" href="https://www.thehagueuniversity.com/about-thuas/our-campuses/zoetermeer-campus "><button class="btn btn-info text-white">Lees meer.</button></a></p>
            </div>
            <div class="col-lg-4">
                <img src="public/img/delft.jpg">
                <h2>Delft</h2>
                <p>Locatie Delft</p>
                <p><a class="btn" target="_blank" href="https://www.thehagueuniversity.com/about-thuas/our-campuses/delft-campus"><button class="btn btn-info text-white">Lees meer.</button></a></p>
            </div>
        </div>


</main>

<?php
include_once ('defaults/footer.php');
?>
</body>
</html>