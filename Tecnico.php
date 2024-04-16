<?php
class Tecnico extends Aluno
{
  private $registroProfissional;
  function praticar()
  {
    echo "Trabalhando com abstract class";
  }
  function getRegistroProfissional()
  {
    return $this->registroProfissional;
  }
  function setRegistroProfissional($registroProf)
  {
    $this->registroProfissional = $registroProf;
  }
}
