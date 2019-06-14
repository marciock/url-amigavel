<?php
   $atual=(isset($_GET['pg'])) ? $_GET['pg'] :'home';
    $permissao=array('home','contatos','produtos','erro');
    $pasta='views';
    if(substr_count($atual,'/')>0){
        $atual=explode('/',$atual);
        $pagina=(file_exists("{$pasta}/".$atual[0].'.php') && in_array($atual[0],$permissao)) ? $atual[0]:'erro';
        $id=intval($atual[1]);

    }else{
        $pagina=(file_exists("{$pasta}/".$atual.'.php') && in_array($atual,$permissao)) ? $atual:'erro';
    }
 

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
       require("{$pasta}/{$pagina}.php");

    
    ?>
    
</body>
</html>