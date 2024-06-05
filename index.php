<!DOCTYPE html>
<html>

    <body>

  <?php
  // Array com chave => valor
  $listaAlunoIdade - array(
    "Leonardo"  => 31,
    "Gabriela"  => 27,
    "Bianca"    => 07,
  );
  // Array apenas com valor
  $lisaCores - array(
    "vermelho",
    "Amarelo",
    "Verde",
    "Laranjo",
  );
  
  // Acesso ao iten do array $listaAlunoIdade(chave)

  echo $listaAlunoIdade["Leonardo"];
  echo "-<br />";
  echo $listaCores[2];
  echo "<br  />";

  // Exibir em tela todo o conteudo (chave e valor) de um array var_dump (array);
  var_dump($listaAlunoIdade);

  echo "<br   />";

  var_dump($listaCores);

?>
  </body>


  </html>