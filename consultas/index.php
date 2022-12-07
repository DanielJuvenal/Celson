
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    
    

    
    ?>
    <link rel="stylesheet" href="Consultas.css">
</head>

<body>
<div id="formulario">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<input type="text" name="Nome" lenght="10" >
<input type="submit" value="Enviar">
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $nome = htmlspecialchars($_REQUEST['Nome']);
      }
    if(isset($nome)){echo "<p>$nome</p>";}?>
</form>
</div>
    
</body>
</html>




