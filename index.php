<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Herança avançado!</title>
</head>

<body>
  <pre>
    <?php
    require_once 'Aluno.php';
    require_once 'Bolsista.php';
    require_once 'Professor.php';
    //$p1 = new Pessoa();
    // $v1 = new Visitante();
    // $v1->setNome("Juvenal");
    // $v1->setIdade(33);
    // $v1->setSexo("MASC");
    $a1 = new Aluno();
    $a1->setNome("Juca");
    $a1->setMatricula(2222);
    $a1->setIdade(22);
    $a1->setSexo("Masc");
    $a1->setCurso("Analise e desenvolvimento");
    $a1->pagarMensalidade();
    print_r($a1);

    $b1 = new Bolsista();
    $b1->setMatricula(4444);
    $b1->setNome("Rafael");
    $b1->setBolsa(12.5);
    $b1->setCurso("Ciencia da computação");
    $b1->setIdade(22);
    $b1->pagarMensalidade();
    $b1->renovarBolsa();
    print_r($b1);

    $b2 = new Professor();
    $b2->setNome("Jubilando da cabeça");
    $b2->setSexo("Masc");
    $b2->setEspecialidade("Linguagem C");
    $b2->receberAumento(5000);
    print_r($b2);
    ?>

  </pre>
</body>

</html>