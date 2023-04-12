<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
<h1>Pensjonat pod dobrym humorem</h1>
<section>
      <a href="./index.html">GŁÓWNA</a>
      <img src="./1.jpg" alt="pokoje" />
    </section>
    
    <section>
      <a href="./cennik.php">CENNIK</a>
      <table>
        <?php
            $conect = mysqli_connect('localhost','root','','wynajem');
            $zap ="SELECT * FROM pokoje;";
            $zapsql = mysqli_query($conect,$zap);
            while($dane = mysqli_fetch_row($zapsql)){
                echo "<tr><td>".$dane[0]."</td><td>".$dane[1]."</td><td>".$dane[2]."</td></tr>";
            };
            mysqli_close($conect);

        ?>
    </table>
    </section>
    <section>
      <a href="./kalkulator.html">KALULATOR</a>
      <img src="./1.jpg" alt="pokoje" />
    </section>
    <footer>stronę opracował:000000000</footer>
</body>
</html>