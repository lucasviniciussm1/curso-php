<div class="titulo">Sorteio</div>

<?php
    $nome = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];
    $sorteado = array_rand($nome);

    echo"<div center><h1>$nome[$sorteado]</h1></div>";
    echo 'Atualize a página para sortear!';
    ?>

    <style>
        [center]{
            display: flex;
            justify-content: center;
        }
    </style>
