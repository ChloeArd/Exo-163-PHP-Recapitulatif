<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des élèves qui sont présents dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php
          // TODO Display the students here, each student inside a new <li> element
       $count = count($students);
       for ($i = 0; $i < $count; $i++){
           echo "<li> $students[$i] </li>";
       }
       ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day" id="day"><?php
           $day = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "25", "26", "27", "28", "29", "30", "31"];
           $count = count($day);
           for ($i = 0; $i < $count; $i++){
               echo "<option> $day[$i] </option>";
           } ?>

       </select>
       <label for="month">Month</label>
       <select  name="month" id="month"><?php
           // TODO list of month
           $month = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
           $count = count($month);
           for ($i = 0; $i < $count; $i++){
           echo "<option> $month[$i] </option>";
           }?>
       </select>
       <label for="year">Year</label>
       <select  name="year" id="year"><?php
           // TODO list of year
           $year = [2016, 2017, 2018, 2019, 2020, 2021];
           $count = count($year);
           for ($i = 0; $i < $count; $i++){
               echo "<option> $year[$i] </option>";
           }?>
       </select>
     </form>
     <hr>
     <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
    <?php
    if (isset($_GET["sexe"]) && $_GET["sexe"] === "fille"){
        echo "<p> Je suis une fille </p>";
    }
    // TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon"
    elseif(isset($_GET["sexe"]) && $_GET["sexe"] === "garçon"){
        echo "<p> Je suis un garçon </p>";
    }
    // TODO Instruction : Afficher ce bloc dans les autres cas
    else{
        echo "<p> Je suis indéfini </p>";
    }
    ?>

  </body>
</html>
