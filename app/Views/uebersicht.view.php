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
        <?php
                foreach ($result as $entry){
                    echo("<li>". "Name: " . $entry['name']. ' | '. "Email: " . $entry['email']. ' | '. "Telefon: " .  $entry['telefon']. ' | '. "Risikostufe: " . $entry['risikostufe']. ' | '. "Hypopaket: " . $entry['package'] ."<a href='edit?id=".$entry['id']."'>". " bearbeiten". "</a>". "</li>" ."<br>") ;
                }
        ?>
        

    </ul>

</body>
</html>