<h1 class="header-1">Basics</h1>

<h3>Enter your age</h3>
<form method="get">
    <input type="number" name="age">
    <input type="submit" value="Kiek metukų?">
</form>



<?php
        echo "<pre>";
        if(isset($_GET['age']) && !empty($_GET['age'])){
            
            echo "</pre>";      
                print_r($_GET);  
        }
?>




<h1 class="header-1"> kita forma</h1>
<?php
    // If pavyzdys
    if(isset($_GET['pildymas'])){
        if(isset($_GET['vardas'],
         $_GET['pavarde'],
         $_GET['dienynoNr'],
         $_GET['klase']) 
            && !empty($_GET['vardas'])    && !empty($_GET['pavarde'])
            && !empty($_GET['dienynoNr']) && !empty($_GET['klase'])
        ){
            // jei salyga yra TRUE
            print_r($_GET);
        } else {
            // jei dalyga yra FALSE
            echo '<h2 style="color: red">Neįvedėte duomenų!!!</h2>';
        }
    }
?>

<form method="get">
    <label for="vardas">Vardas</label>
    <input type="text"   name="vardas"><br>

    <label for="pavarde">Pavardė</label>
    <input type="text"   name="pavarde"><br>

    <label for="dienynoNr">Dienyno numeris</label>
    <input type="number" name="dienynoNr"><br>

    <label for="klase">Klasė</label>
    <input type="number" name="klase"><br>

    <input type="submit" value="Išsaugoti">
    <input type="hidden" name="pildymas" value="1">
</form>
<hr> 

   
