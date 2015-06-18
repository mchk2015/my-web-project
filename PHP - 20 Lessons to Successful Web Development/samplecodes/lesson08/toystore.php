<!DOCTYPE html>
<html>
  <head>
    <title>Online Toy Store Example</title>
  </head>
  <body style='font-family:Courier New'>
<?php
    $Rattle    = array('Price' =>   4.99, 'Stock' => 3 );
    $Bear      = array('Price' =>   6.99, 'Stock' => 2 );
    $Pacifier  = array('Price' =>   1.99, 'Stock' => 9 );
    $Bricks    = array('Price' =>   5.99, 'Stock' => 1 );
    $Xylophone = array('Price' =>  12.99, 'Stock' => 2 );
    $PlayDough = array('Price' =>   8.49, 'Stock' => 7 );
    $Slide     = array('Price' =>  99.99, 'Stock' => 1 );
    $Tricycle  = array('Price' =>  79.99, 'Stock' => 1 );
    $Crayons   = array('Price' =>   3.79, 'Stock' => 5 );
    $Dolly     = array('Price' =>  14.99, 'Stock' => 3 );
    $Bicycle   = array('Price' =>  89.99, 'Stock' => 2 );
    $Guitar    = array('Price' =>  49.00, 'Stock' => 1 );
    $TabletPC  = array('Price' => 149.99, 'Stock' => 1 );
    $RemoteCar = array('Price' =>  39.99, 'Stock' => 2 );
    $Frisbee   = array('Price' =>   7.99, 'Stock' => 6 );
    $MP3Player = array('Price' => 179.99, 'Stock' => 1 );
    $Console   = array('Price' => 199.99, 'Stock' => 2 );
    $TVAndDVD  = array('Price' =>  99.99, 'Stock' => 1 );

    $Babies    = array('Rattle'             => $Rattle,
                       'Bear'               => $Bear,
                       'Pacifier'           => $Pacifier);
    $Toddlers  = array('Wooden Bricks'      => $Bricks,
                       'Xylophone'          => $Xylophone,
                       'Play Dough'         => $PlayDough);
    $Age3_5    = array('Slide'              => $Slide,
                       'Tricycle'           => $Tricycle,
                       'Crayons'            => $Crayons);
    $Age5_8    = array('Dolly'              => $Dolly,
                       'Bicycle'            => $Bicycle,
                       'Guitar'             => $Guitar);
    $Age8_12   = array('Tablet PC'          => $TabletPC,
                       'Remote Control Car' => $RemoteCar,
                       'Frisbee'            => $Frisbee);
    $Teenagers = array('MP3 Player'         => $MP3Player,
                       'Game Console'       => $Console,
                       'TV/DVD Combo'       => $TVAndDVD);
    
    $Categories= array('Babies'             => $Babies,
                       'Toddlers'           => $Toddlers,
                       'Ages 3-5'           => $Age3_5,
                       'Ages 5-8'           => $Age5_8,
                       'Ages 8-12'          => $Age8_12,
                       'Teenagers'          => $Teenagers);

    echo 'The price of the slide is: ' .
    	$Categories['Ages 3-5']['Slide']['Price'] .'<br>';

    $Categories['Ages 3-5']['Crayons']['Price'] = 3.59;

    echo 'The price of the crayons is now: ' .
    	$Categories['Ages 3-5']['Crayons']['Price'] . '<br>';

    echo 'Decrementing the stock level of game consoles.<br>';

    --$Categories['Teenagers']['Game Console']['Stock'];

    echo 'The stock level of game consoles is now: ' .
    	$Categories['Teenagers']['Game Console']['Stock'];
?>
  </body>
</html>
