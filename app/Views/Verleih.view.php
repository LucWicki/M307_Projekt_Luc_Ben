<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypothek-Verleih erfassen</title>
    <script src="../public/js/app.js"></script>
</head>
<body>


    <form action="bearbeiten" method="post">

        <fieldset>

        <legend>Persöhnliche Angaben</legend>

       <!--  <label for="name">Name:</label> 
        <input type="text" name="Name"> <br> -->
        <label for="name">Name:</label>
        <input type="name" name="name"> <br>
        
        <label for="email">Email:</label>
        <input type="email" name="email"> <br> 

        <label for="telefon">Telefon:</label>
        <input type="telfon" name="telefon"> <br>

        <label for="risikostufe">Risikostufe:</label>
       <select name="risikostufe" id="risikostufe" onchange="Zusatztage()">
            <option value="wählen">Wählen</option>
            <option value="sehr tief">sehr tief</option> <!-- -> value soll id sein, Wert soll package -->
            <option value="tief">tief</option>
            <option value="normal">normal</option>
            <option value="hoch">hoch</option>
            <option value="sehr hoch">sehr hoch</option>
       </select> <br> 

       <label id="frist">Zurückzahlungsdatum: </label> <br>

    <select name="hypopaket">
    <?php

        foreach($erfassen as $package){
            echo "<option value='".$package["id"]."'>".$package["package"]."</option>";
        }

        /*foreach($id as $packages){
            echo "option ... id ... value"
        }*/
    ?>
    </select>

        </fieldset>


        
      <!--  /* <select name="hypopaket"><option value="$hp_entry">$hp_entry</option></select> */ -->



      <!--   <label for="name">Email:</label>
        <input type="email" name="Email"> <br>
        <label for="name">Email:</label>
        <input type="email" name="Email"> <br>
 -->    <br>
        <button type="submit">Absenden</button>

        
        
    </form>

</body>
</html>