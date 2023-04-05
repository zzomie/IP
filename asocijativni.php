<?php
   $a = -10;
   $n = 2;
   $br = 10;
   // indeksni
   $niz = ['Jabuka','Kruska','Sljiva', 'Kajsija'];
   $niz[10] = "Breskva";

   // asocijativni
   $osoba = ['ime'=>'Marko', 'prezime'=>'markovic', 'godiste'=>'2000', 'ocene'=>array(6,7,6,9)];
   var_dump($osoba);

   $osobe = [
       ['ime'=>'Marko', 'prezime'=>'markovic', 'godiste'=>'2000', 'ocene'=>array(6,7,6,9)],
       ['ime'=>'Petar', 'prezime'=>'markovic', 'godiste'=>'2000', 'ocene'=>array(6,7,6,9)],
       ['ime'=>'Jovan', 'prezime'=>'markovic', 'godiste'=>'2000', 'ocene'=>array(6,7,6,9)],
       ['ime'=>'Darko', 'prezime'=>'markovic', 'godiste'=>'2000', 'ocene'=>array(6,7,6,9)]
   ];
   var_dump($osobe[0]['ime']);
  
   function stampaj($naslov){
       return "<h2>$naslov</h2>";
   }
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
   <h1>Grananja</h1>
   <?php if($a > 0){?>
   <div>VECI</div>
   <?php } else {?>
   <div>MANJI</div>
   <?php }?>

   <h<?=$n ?>>NASLOV</h<?=$n ?>>

   <h1>CIKLUSI</h1>
   <ol>
       <?php for($i=0;$i<$br;$i++){ ?>
       <li>element</li>
       <?php }?>
   </ol>

   <h2>Dinamicka lista voca iz niza</h2>

   <ul>
       <?php for($i=0;$i<count($niz);$i++){ ?>
       <li><?=$niz[$i] ?> </li>
       <?php }?>
   </ul>
   <ul>
       <?php foreach($niz as $pom){ ?>
       <li><?=$pom ?> </li>
       <?php }?>
   </ul>
   <?= stampaj("funkcije"); ?>

   <table style="border: 1px solid black;">
       <tr>
           <th>IME</th>
           <th>PREZIME</th>
           <th>GODISTE</th>
           <th>OCENE</th>
       </tr>
       <?php foreach($osobe as $o){?>
       <tr>
           <td><?= $o['ime'] ?></td>
           <td><?= $o['prezime'] ?></td>
           <td><?= $o['godiste'] ?></td>
           <td><?= implode (",",$o['ocene']) ?></td>
       </tr>
       <?php } ?>
   </table>
</body>
</html>