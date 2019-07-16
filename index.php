<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Evolution Of Computers">
    <meta name="author" content="Aryan Tyagi">
    <meta name="theme-color" content="#FC427B">
    <meta name="msapplication-navbutton-color" content="#FC427B">
    <meta name="apple-mobile-web-app-status-bar-style" content="#FC427B">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <link rel="icon" sizes="192x192" href="resources/icon.png">
    <link rel="stylesheet" href="style_new.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.9.0/css/pro.min.css">
    <link href="https://fonts.googleapis.com/css?family=Exo:600&display=swap" rel="stylesheet">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" media="screen and (min-width: 768px)"> -->

    <!-- <base href="/TheEvolutionOfComputers/"> -->

    <title>Computers, EVOLVE !!</title>

  </head>
  <body onload="AOS.init();">

    <header><h1>The Evolution of Computers</h1></header>

    <section class="timeline">
      <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "csv_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM tbl_name";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
          echo '<div class="container" data-aos="flip-up">
                  <div class="year">'.$row["year"].'</div>
                  <div class="content">
                    <img src="'.$row["src"].'" alt="'.$row["title"].'" class="image">
                    <div class="text">
                      <h2 class="title">'.$row["title"].'<a href="https://en.wikipedia.org/wiki/'.$row["title"].'"><i class="far fa-external-link"></i></a></h2>
                      <p class="info">'.$row["info"].'</p>
                    </div>
                  </div>
                </div>';
        }


        $conn->close();

        // for ($i=0; $i < 10; $i++) {
        //   echo '<div class="container" data-aos="flip-up">
        //           <div class="year">'.$i.'</div>
        //           <div class="content">
        //             <img src="'.$i.'" alt="'.$i.'" class="image">
        //             <div class="text">
        //               <h2 class="title">'.$i.'<a href="https://en.wikipedia.org/wiki/'.$i.'"><i class="far fa-external-link"></i></a></h2>
        //               <p class="info">'.$i.'</p>
        //             </div>
        //           </div>
        //         </div>';
        // }
      ?>
    </section>

    <footer>
      <a href="https://shantanuaryan67.github.io"><i class="fas fa-address-card"></i></a>
      <a href="mailto:aryantyagi007@yahoo.in"><i class="fas fa-at"></i></a>
      <a href="https://github.com/shantanuaryan67"><i class="fab fa-github"></i></a>
      <hr>
      <p>The Evolution Of Computers</p>
      <p>Website made by Aryan</p>
      <p>&copy; 2019</p>
    </footer>

    <script src="script_new.js"></script>
    <script>
       // && (window.innerWidth >= 600)
      if(!( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )) {
        var head = document.getElementsByTagName('head')[0];

        var s1 = document.createElement("script");
        s1.type = "text/javascript";
        s1.src = "https://unpkg.com/aos@2.3.1/dist/aos.js";
        head.appendChild(s1);

        var s2 = document.createElement("link");
        s2.rel = "stylesheet";
        s2.href = "https://unpkg.com/aos@2.3.1/dist/aos.css";
        head.appendChild(s2);

        AOS.init();
      }
    </script>

  </body>
</html>
