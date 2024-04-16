<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa
{
  private $matricula;
  private $curso;
  public function pagarMensalidade()
  {
    echo "<p>Pagando mensalidade do aluno $this->nome</p>";
  }

  public function getMatricula()
  {
    return $this->matricula;
  }

  public function setMatricula($matri)
  {
    $this->matricula = $matri;
  }

  public function getCurso()
  {
    return $this->curso;
  }

  public function setCurso($curso)
  {
    $this->curso = $curso;
  }
}
