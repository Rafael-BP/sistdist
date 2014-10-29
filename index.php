<!DOCTYPE html>
<html>
    <?php
        require 'sistema.php';
    ?>
    <head>
        <title>Mate o monstro com seu grupo de amigos!</title>
        <meta http-equiv="content-type" content="text/html" charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>        
        <a href="criar.php"><button> Criar novo monstro </button></a><br/><br/>
        <?php $listagem = listar(); ?>
        <div>
            <?php foreach($listagem as $item) { ?>
                <?php if ($item['vida'] > 0) { ?>
                    <?php echo $item['nome']; ?>
                    <?php echo $item['vida']; ?>
                    <a href="batalhar.php?monstro=<?php echo $item['id']; ?>"><button> Ajudar na batalha! </button></a>
                <?php } ?>
                <br/>
            <?php } ?>
        </div>
    </body>
</html>
