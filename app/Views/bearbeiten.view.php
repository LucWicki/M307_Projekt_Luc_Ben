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


    <ul>

        <form action="update?id=<?= $edit['id'] ?>" method="post">

       <fieldset>
        <legend>Bearbeiten</legend>

        <label for="name">Name:</label>
        <input type="name" name="name" value="<?= $edit["name"] ?>"> <br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= $edit["email"] ?>"> <br> 

        <label for="telefon">Telefon:</label>
        <input type="telfon" name="telefon" value="<?= $edit["telefon"] ?>"> <br>

        <label for="risikostufe">Risikostufe:</label>
       <select name="risikostufe" id="risikostufe" onchange="Zusatztage()">
            <option value="wählen">Wählen</option>
            <option value="sehr tief">sehr tief</option> <!-- -> value soll id sein, Wert soll package -->
            <option value="tief">tief</option>
            <option value="normal">normal</option>
            <option value="hoch">hoch</option>
            <option value="sehr hoch">sehr hoch</option>
       </select> <br> 

       <label for="rückzahlungsstatus">Rückzahlungsstatus</label>
       <input type="text" name="rückzahlungsstatus" value="<?= $edit["rückzahlungsstatus"] ?>"> <br>
       <label id="frist">Zurückzahlungsdatum: </label> <br>

       <label for="hypopaket">Hypopaket:</label>
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


        <button type="submit">Speichern</button>


        </form>
        
    </ul>

</body>
</html>