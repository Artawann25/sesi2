<?php
//area script php
$pg = 1;
if(isset($_GET["pg"])){
    $pg = $_GET["pg"];
}

    switch($pg){
        case 1:
            $konten="<h3>Page 1</h3>";
            $judulpage = "page 1";
            break;
        case 2:
            $konten="<h3>Page 2</h3>";
            $judulpage = "page 3";
            break;
        case 3:
            $konten="<h3>Page 3</h3>";
            $judulpage = "page 3";
            break;
        default:
            $konten="<h3>Page 1</h3>";
            $judulpage = "page 1";
        break;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<ul class="nav">
    <li class="nav-item"><a class="nav-link" href="?pg=1">page 1</a></li>
    <li class="nav-item"><a class="nav-link" href="?pg=2">page 2</a></li>
    <li class="nav-item"><a class="nav-link" href="?pg=3">page 3</a></li>
</ul>

    <?=$konten;?>

</body>
</html>