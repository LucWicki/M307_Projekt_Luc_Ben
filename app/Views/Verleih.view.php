<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ok</title>
</head>
<body>


    <form action="erfassen" method="post">

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
        <input type="risikostufe" name="risikostufe"> <br>
        </fieldset>

        <label for="hypopaket">Hypopaket:</label> <br>

        <?php foreach($hypopaket as $hp_entry) 
             echo $hp_entry;
        ?>
        
      <!--  /* <select name="hypopaket"><option value="$hp_entry">$hp_entry</option></select> */ -->



      <!--   <label for="name">Email:</label>
        <input type="email" name="Email"> <br>
        <label for="name">Email:</label>
        <input type="email" name="Email"> <br>
 -->
        <input type="submit">

        
        
    </form>

</body>
</html>