<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História da Programação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h4>História da programação</h4>
    <h1>Mulheres que fizeram a diferença</h1>
    <hr>
    <?php
    $arrayMulheres = [
    ['Ada Lovelace','ada-lovelace.webp','ada','A primeira programadora da história, conhecida por seu trabalho com a máquina analítica de Charles Babbage.', ],
    ['Dorothy Vaughan', 'dorothy-vaughan.png', 'dorothy', 'Matemática e programadora que trabalhou na NASA, contribuindo para o sucesso das missões espaciais.'],
    ['Grace Hopper', 'grace-hopper.webp', 'grace', 'Pioneira na programação de computadores e desenvolvedora do primeiro compilador.'],
    ['Margaret Hamilton', 'margaret-hamilton.webp', 'margaret', 'Engenheira de software que liderou a equipe responsável pelo desenvolvimento do software de voo para as missões Apollo.'],
    ['Marissa Mayer', 'marissa-mayer.png', 'marissa', 'Engenheira de software e executiva de tecnologia, conhecida por seu trabalho no Google. ']   
    ];
    
    ?>

    <div class="galeria">
        
        
        <div class="item">
          <img src="<?php echo $arrayMulheres[0][1]; ?>">
          <h3><?php echo $arrayMulheres[0][0]; ?></h3>
          <p><?php echo $arrayMulheres[0][2]; ?></p>
        </div>
        <div class="item">
          <img src="<?php echo $arrayMulheres[1][1]; ?>">
          <h3><?php echo $arrayMulheres[1][0]; ?></h3>
          <p><?php echo $arrayMulheres[1][2]; ?></p>
        </div>
        <div class="item">
          <img src="<?php echo $arrayMulheres[2][1]; ?>">   
          <h3><?php echo $arrayMulheres[2][0]; ?></h3>
          <p><?php echo $arrayMulheres[2][2]; ?></p>
        </div>
        <div class="item">
          <img src="<?php echo $arrayMulheres[3][1]; x?>">
          <h3><?php echo $arrayMulheres[3][0]; ?></h3>
          <p><?php echo $arrayMulheres[3][2]; ?></p>
        </div>
        <div class="item">
          <img src="<?php echo $arrayMulheres[4][1]; ?>">
          <h3><?php echo $arrayMulheres[4][0]; ?></h3>
          <p><?php echo $arrayMulheres[4][2]; ?></p>
        </div>


        
    </div>

    
</body>
</html> 










































?>