<html>
    <head>
<style>
        body {
            background-color: rgb(21, 21, 21); 
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 85vh;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            font-family: Arial, sans-serif;
            color: white;
            font-size: 24px; 
            text-align: center;
        }
       
           

    </style>
    </head>
    <body>
<div>

<?php 
$multiplicador = $_POST['multiplicar'];
$x;
$resultado;

for($x=0;$x<=10;$x++){
    $resultado = $multiplicador * $x;
 "<center>";
"<br>";
echo  " <p> $multiplicador x $x = $resultado </p>";
"<br>"

;


}
?>

</div>
</body>
</html>


