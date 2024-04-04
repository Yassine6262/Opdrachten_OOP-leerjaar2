<?php
session_start();

require_once 'Game.php';

$Game = isset($_SESSION['Game']) ? unserialize($_SESSION['Game']) : null;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['diceCount'])) {
    $diceCount = $_POST['diceCount'];
    $Game = new Game($diceCount);
    $_SESSION['Game'] = serialize($Game);
}

if ($Game !== null && $_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['reset'])) {
    $Game->play();
    $_SESSION['Game'] = serialize($Game);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dobbelspel</title>
    <style>
        .dice-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }
        .dice-svg {
            margin: 0 10px;
        }
        .winner {
            font-size: 24px;
            font-weight: bold;
            color: green;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Dobbelspel</h1>
    <form method="post">
        Aantal dobbelstenen: <input type="number" name="diceCount" min="1" max="6" value="<?php echo isset($Game) ? $Game->getDiceCount() : 1; ?>" required><br>
        <input type="submit" value="Gooi!">
    </form>

</body>
</html>
