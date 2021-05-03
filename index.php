<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>PHP - badwords</title>
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">-->
    <!-- bootstrap v4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- vue -->
    <!--<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>-->
    <!-- axios-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>-->
    <!-- jquery -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                <?php

                $sentence = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                 Error, eveniet veritatis. Ab architecto asperiores consequatur
                                 cupiditate doloribus ea enim harum impedit laborum maiore
                                 nemo nesciunt nihil, obcaecati praesentium ullam voluptatum.';

                $badword = $_GET['badword'];

                $newSentence = str_replace($badword, "***", $sentence);
                echo $newSentence;

                ?>
                <!-- http://localhost:8888/?badword=amet

                    digitando la "badword"(necessariamente presente in "sentence")
                    direttamente nell'url (dopo l'uguale), verrà sostituita con: ***  -->
            </h1>
        </div>
    </div>
</div>

</body>
</html>