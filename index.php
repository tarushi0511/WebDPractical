<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGTB: Result Management System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="mobile">
    <?php require "partials/_header.php";  ?>

    <section class="main">
        <h1 class="center" id="headline" style="margin: -4px">
            WELCOME TO STGB KHALSA</h1>
        <div class="img">
            <img id="img" src="result.jpg" alt="no img">
        </div>

        <!--including footer file -->
        <footer>
            <div class="content">
                <div class="box">
                    <div class="upper">
                        <div class="topic">About us</div>
                        <p>
                        Sri Guru Tegh Bahadur Khalsa College, a constituent college of University of Delhi, was established in 1951 and is maintained by Delhi Sikh Gurudwara Management Committee (DSGMC), a statutory body established under an act of the Parliament of India. The focus of the College at the time of inception was to ensure a comprehensive social transformation through access to quality education, in particular to young Punjabi Refugees of Partition in 1947, and to conserve and promote Punjabi language, culture, and heritage.

The College is named after Ninth Guru - Sri Guru Tegh Bahadur, who sacrificed his life to uphold secular value
                        </p>
                    </div>
                    <div class="lower">
                        <div class="topic">Contact us</div>
                        <div class="phone">
                            <a href="#"><i class="fas fa-phone-volume"></i>+999 9089 6767</a>
                        </div>
                        <div class="email">
                            <a href="#"><i class="fas fa-envelope"></i>xyz@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <p>Copyright © 2020 <a href="#">CodingLab</a> All rights reserved</p>
            </div>
        </footer>

        <script src="script.js"></script>

</body>

</html>