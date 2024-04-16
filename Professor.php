<?php
require_once 'Pessoa.php';
class Professor extends Pessoa
{
  private $especialidade;
  private $salario;

  function receberAumento($aumento)
  {
    $this->salario += $aumento;
    echo "<p>$this->nome Recebeu um grande aumento de {$this->getSalario()}</p>";
  }

  function getEspecialidade()
  {
    return $this->especialidade;
  }

  function setEspecialidade($especialidade)
  {
    $this->especialidade = $especialidade;
  }

  function getSalario()
  {
    return $this->salario;
  }

  function setSalario($salario)
  {
    $this->salario = $salario;
  }
}
