<?php 
require_once("auto.php");

$niz=[
    new Auto("Audi", 2010, "Audi"),
    new Auto("Puto", 2007, "Fiat"),
    new Auto("Xsara", 2000, "Citroen"),
    new Auto("Mini", 2020, "Cooper")
];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOLOKVIJUM</title>
</head>
<body>
    <table border="3" width="400px">
        <tr width="300px">
            <td align="center" colspan="2" width="300px">
                <h1>I KOLOKVIJUM</h1>
            </td>
        </tr>
        <!--drugi red----->
        <tr align="center">
            <td><a href="prikaz.php">PRIKAZ</a></td>
            <td><a href="tabela.php">TABELA</a></td>
        </tr>
        <!---treci red-->
        <tr>
            <td colspan="2" align="center">
                <ol>
                    <?php
                        foreach($niz as $i){
                            ?>
                            <li>
                                <?php
                                    echo $i->getMarka()." ";
                                    echo $i->getGodiste()." ";
                                    echo $i->getProizvodjac();
                                ?>
                            </li>
                        <?php }?>
                </ol>
            </td>
        </tr>

        <tr>
            <td colspan="4" align="center"> Milica Sebic <br> 211/2019</td>
        </tr>

    </table>
</body>
</html>