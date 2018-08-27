<?php
    include 'Apple.php';
    include 'Banana.php';

    echo '<h1>Antroji uzduotis classes</h1>';
    echo '<hr>';
    // data for apple
    $apple4Data = [
        'color'              => 'red',
        'cultivar'          => 'Empire',
        'origin'    => 'Lithuania',
        'mass'          => '10g.',
      
    ];
    // creating Apple objects
    $apple1 = new Apple('red');
    $apple2 = new Apple('red', 'Empire');
    $apple3 = new Apple('red', 'Empire', '2.5');
    $apple4 = new Apple($apple4Data);
    $apple5 = new Apple([
        'color'      => 'red',
        'cultivar'    => 'empire',
        'origin'   => 'Lithiania',
        'mass'   => '10g.'
    ]);

    // set color property
    echo '<h3>Set color property</h3>';
    echo 'Before:<br>';
    echo $apple2->toString();
    echo 'After:<br>';
    $apple2->setColor('red');
    echo $apple2->toString().'<br>';
    echo '<hr>';

    // get color property
    echo '<h3>Get color property</h3>';
    echo 'Apple:<br>';
    echo $apple2->toString(); 
    echo 'color property:<br>';
    echo $apple2->getColor();
    echo '<hr>';

    // set cultivar property
    echo '<h3>Set Cultivar property</h3>';
    echo 'Before:<br>';
    echo $apple2->toString();
    echo 'After:<br>';
    $apple2->setCultivar('Empire');
    echo $apple2->toString().'<br>';
    echo '<hr>';

    // get cultivar property
    echo '<h3>Get cultivar property</h3>';
    echo 'Vehicle:<br>';
    echo $apple2->toString(); 
    echo 'Cultivar property:<br>';
    echo $apple2->getCultivar();
    echo '<hr>';
    

    // adding/changing and getting apple Props
    echo '<h3>Set single prop example</h3>';
    echo 'Before:<br>';
    echo $apple2->toString().'<br>';
    echo 'After:<br>';
    $apple2->setProp('color', 'red');
    echo $apple2->toString().'<br>';
    echo '<hr>';
    
    echo '<h3>Get single prop example</h3>';
    echo 'Vehicle:<br>';
    echo $apple1->toString().'<br>'; 
    echo 'get price:<br>';
    echo $apple1->getProp('color').'<br>';
    echo '<hr>';

    // Set/change MULTIPLE apple Props
    $insertPropArray =  [
        'color'              => 'yellow',
        'cultivar'          => 'valgomas',
        'origin'    => 'Poland',
        'mass'          => '10g.',
    ];
    echo '<h3>Set/change MULTIPLE Apple Props</h3>';
    echo 'Before:<br>';
    echo $apple2->toString().'<br>';
    echo 'After:<br>';
    $apple2->setProps($insertPropArray);
    echo $apple2->toString().'<br>';
    echo '<hr>';
    
    // Get MULTIPLE Vehicle Props
    $requestPropArray = ['color', 'cultivar', 'mass'];
    echo '<h3>Get MULTIPLE Vehicle Props</h3>';
    echo 'Vehicle:<br>';
    echo $apple5->toString().'<br>'; 
    echo 'Props:<br>';
    $retrievedData = $apple5->getProps($requestPropArray);
    print_r($retrievedData);
    echo '<hr>';

    // get main Info
    echo '<h3>Get main Info</h3>';
    echo 'Vehicle:<br>';
    echo $apple1->toString(); 
    echo 'Main info:<br>';
    print_r($apple1->getMainInfo()); 
    echo '<hr>';

    // displaying Vehicle object
    echo '<h3>All Vehicles</h3>';
    echo $apple1->toString().'<br>';
    echo $apple2->toString().'<br>';
    echo $apple3->toString().'<br>';
    echo $apple4->toString().'<br>';
    echo $apple5->toString().'<br>';
    echo '<hr>';

    
