<?php
$text = "Widows and orphans are terrible fucking tragedies, both in real life and definitely in typography. Remember it’s called the creative process, it’s not the creative fucking moment. To go partway is easy, but mastering anything requires hard fucking work. There is no right fucking answer. The splendor of the mystery is that you don’t understand. Your rapidograph pens are fucking dried up, the x-acto blades in your bag are rusty, and your mind is dull. Stop clicking your mouse, get messy, go back to the basics and make something fucking original. You’ve been placed in the crucial moment. Abandon the shelter of insecurity. Saul Bass on failure: Failure is built into creativity… the creative act involves this element of ‘newness’ and ‘experimentalism,’ then one must expect and accept the fucking possibility of failure. A good fucking composition is the result of a hierarchy consisting of clearly contrasting elements set with distinct alignments containing irregular intervals of negative space. Paul Rand once said, “The public is more familiar with bad fucking design than good design. It is, in effect, conditioned to prefer bad design, because that is what it lives with. The new becomes threatening, the old reassuring.” When you sit";

// var_dump($text);
// var_dump(strlen($text));

$change = $_GET["fucking"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- testo senza censura  -->
    <h2>Testo: </h2>
    <p> <?= $text ?></p>

    <h2>Lunghezza testo: </h2>
    <p><?= strlen($text) ?></p>
    <!-- /testo senza censura  -->

    <!-- testo con censura  -->
    <h2>Testo censurato: </h2>
    <p>
        <?= str_replace("fucking", "***", $text) ?>
    </p>

    <h2>Lunghezza testo censurato: </h2>
    <p>
        <?= strlen(str_replace("fucking", "***", $text)) ?>
    </p>
    <!-- /testo con censura  -->
</body>
</html>