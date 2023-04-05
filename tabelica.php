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
            <td align="center" colspan="3" width="300px">
                <h1>I KOLOKVIJUM</h1>
            </td>
        </tr>

        <!--drugi red----->
        <tr align="center" colspan="3">
            <td width="150px"><a href="prikaz.php">PRIKAZ</a></td>
            <td width="150px"><a href="tabela.php">TABELA</a></td>
        </tr>

        <tr>
                <th>Marka</th>
                <th>Godiste</th>
                <th>Proizvodjac</th>
        </tr>
        
            <tr>
                    <?php 
                        foreach($niz as $i){
                            ?>
                            <tr>
                                                        <td>
                                <?php 
                                    echo $i->getMarka();
                                ?>
                            </td>

                            <td>
                                <?php 
                                    echo $i->getGodiste();
                                ?>
                            </td>

                            <td>
                                <?php 
                                    echo $i->getProizvodjac();
                                ?>
                            </td>
                            </tr>
                    <?php } ?>
            </tr>

        <tr>
            <td colspan="4" align="center"> Milica Sebic <br> 211/2019</td>
        </tr>

    </table>
</body>
</html>