<div class="titulo">Mapa</div>

<?php

    $dados = array(
        "idade" => 25,
        "cor" => "verde",
        "peso" => 49.8
    );

    print_r($dados);

    //var_dump($dados[0]); / inválido
    echo '<br>' , $dados["idade"];
    echo '<br>' , $dados["cor"];
    echo '<br>' , $dados["peso"];
    echo '<br>';

    // adicionando no array
    // $dados[]="ano";
    $dados['ano']=2021;
    
    print_r($dados);

