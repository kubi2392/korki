<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <p class="name-nav">Quiz o SQL</p>
        <div class="score">
        <p class="points">0</p>
        <p class="points">&#92;
            <?php
                $login = mysqli_connect("localhost","root","","quiz");
                $query = "SELECT COUNT(*) FROM `questions`;";
                $zapSQL =mysqli_query($login,$query);
                while($number = mysqli_fetch_row($zapSQL)){
                    echo $number[0];
                }
            ?>
        </p>
        </div>
    </nav>
    <?php
    $login = mysqli_connect("localhost","root","","quiz");
    $query = "SELECT * FROM `questions`;";
    $zapSQL =mysqli_query($login,$query);
    while($data = mysqli_fetch_row($zapSQL)){
        echo '<section class="question">'
        .$data[0].'&#41;<br>
        <p class="question-text">'.$data[1].'</p><br>
        <form method="post"><span>
            <label for="'.$data[0].'questionA">'.$data[2].'</label>
            <input type="radio" id="'.$data[0].'questionA" name="question'.$data[0].'" value="a"></span><span>
            <label for="'.$data[0].'questionB">'.$data[3].'</label>
            <input type="radio" id="'.$data[0].'questionB" name="question'.$data[0].'" value="b"></span><span>
            <label for="'.$data[0].'questionC">'.$data[4].'</label>
            <input type="radio" id="'.$data[0].'questionC" name="question'.$data[0].'" value="c"></span><span>
            <label for="'.$data[0].'questionD">'.$data[5].'</label>
            <input type="radio" id="'.$data[0].'questionD" name="question'.$data[0].'" value="d"></span>
            <button type="submit">sprawdź</button>
            </form></section>';
    }
    ?>
    <section class="question">
        <p class="question-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad libero possimus animi nihil? Officiis obcaecati beatae facere! Nesciunt, ex. Laudantium ullam delectus aperiam nostrum quia! Nobis voluptatum labore dolor debitis!</p>
        <form method="post">
            
            <input type="radio" id="1questionA" name="question1" value="a">
            <label for="1questionA"></label>
            <input type="radio" id="1questionB" name="question1" value="b">
            <input type="radio" id="1questionC" name="question1" value="c">
            <input type="radio" id="1questionD" name="question1" value="d">
            <p class="true">poprawne</p>
        </form>
    </section>
</body>
</html>