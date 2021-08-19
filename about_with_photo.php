<?php

$devs=[
    [

    'name'=>'AB de Villiers',
    'skill'=>'cricketer',
    'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, ad.',
    'image'=>'ab.jpg',
    'gender'=>'male'
    ],

    [

        'name'=>'Shakib al Hasan',
        'skill'=>'cricketer',
        'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, ad.',
        'image'=>'shakib.jpg',
        'gender'=>'male'
        ],
        [

            'name'=>'Kane williamsaon',
            'skill'=>'cricketer',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, ad.',
            'image'=>'kane.jpg',
            'gender'=>'male'
        ],
        [

            'name'=>'Ben Stroke',
            'skill'=>'cricketer',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, ad.',
            'image'=>'ben.jpg',
            'gender'=>'male'
        ]
        
        
    
];







?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

   
    <title>Document</title>
</head>
<body>
    <?php
    foreach($devs as $val):
     
?>
   <div class='box1'>
    <div><img src="photo/<?php echo $val['image']?>" alt=""></div>
    <div>
        <h3><?php echo $val['name']?></h3>
        <h5>Cricketer</h5>
        <h5><?php echo $val['gender']?></h5> 
        <p><?php echo $val['desc']?></p>
    


    </div>
</div>

<?php endforeach; ?>

    
</body>
</html>