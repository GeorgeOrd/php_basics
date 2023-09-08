<?php
$hello  = "Hola mama coco";
$nombre = "Edison";
$edad = 21;
$esEstudiante = true;
$notas = [9,10,8,7];
$usuarios = array("user1", "user2");
$estudiantes = array(
    # Key => Value
    "George" => 8,
    "Edison" => 9.6,
    "Alejo" => 6
);

define("CIUDAD", "QUITO");
echo CIUDAD
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $hello .": ".$nombre ?></h1> </body>

    <ol>
        <?php foreach ($estudiantes as $key => $value) :?>
            <li>
                <p style="color:<?php echo($value >= 7 ? "green": "red" )?>;">
                    <?php echo "El estudiante: " . $key . " tiene una nota: " ?>
                    <input type="number" value="<?php echo $estudiantes[$key] ?>">
                </p>
            </li>
        <?php endforeach?>
    </ol>

    <?php include './components/date.php'?>
</html>
