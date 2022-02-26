<?php
    $pessoa=['nome'=>'Celso','idade'=>50,'altura'=>'1.88','peso'=>'76kg'];
    echo '<br>';
    echo  "Meu nome é: ".$pessoa['nome']."Tenho: ".$pessoa['idade'];
    if($pessoa['idade'] >=18){
        echo 'Maior de Idade';
    };

    ?>