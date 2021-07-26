<?php 
  // Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
  // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
  // Stampiamo a schermo tutte le partite con questo schema.
  // Olimpia Milano - Cantù | 55-60


  $matches = [
    [
      'TH' => 'Lakers',
      'TG' => 'Chacago Bulls',
      'THP' => 120,
      'TGP' => 150
    ],
    [
      'TH' => 'Suns',
      'TG' => 'Bucks',
      'THP' => 118,
      'TGP' => 108
    ],
    [
      'TH' => 'Clipper',
      'TG' => 'Hawks',
      'THP' => 102,
      'TGP' => 80
    ],

  ]


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

    <ul>
      <?php for($i = 0; $i < count($matches); $i++) { ?>
        <li>
          <?php echo $matches[$i]['TH']?> - <?php echo $matches[$i]['TG']?> | <?php echo $matches[$i]['THP']?>-<?php echo $matches[$i]['TGP']?>
        </li>
      <?php } ?>
    </ul>
  
</body>
</html>