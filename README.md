# Herança em Programação Orientada a Objetos (POO)

Neste mini projeto, apliquei o conceito de Herança em PHP criando uma classe abstract de `Pessoa` que demonstra o uso adequado desse princípio de POO.

## Como funciona o Encapsulamento
- Primeiro iniciamos com a explicação de `O que é Herança`: herança são comportamentos(Métodos) e caracteristicas(atributos) passadas de mãe(classe abstract) para filho(classes que dependem da classe mãe)
- 
### Vamos para uma analogia: 
Dado uma mãe e seus filhos -> os filhos herdam algumas caracteristicas da mãe seja olho, boca, cabelo, e consequentemente também herdam alguns comportamentos da mãe por terem sido criados por ela acabam naturalmente herdando alguns comportamentos. 
o mesmo funciona para programação: dado uma classe(progenitora: mãe) ela vai conter seus métodos(comportamentos) e suas caracteristicas(atributos) que seram repassados para suas subclasses(são os filhos) onde eles poderão herdar as caracteristicas da classe mãe e os comportamentos. compartilhando entre sí.

## Estrutura do Projeto

O projeto consiste nos seguintes arquivos apenas para solidificar o conhecimento em Herança:

- `index.php`: Contém o código PHP para demonstrar o funcionamento da classe `Pessoa`.
- `Pessoa.php`: Contém a abstract class `Pessoa`, onde iniciamos a herança com nossos métodos e atributos que seram repassados para os demais.
- `Aluno.php`: extends da abstract class `Pessoa`.
- `Bolsista.php`: extends da class `Aluno` e herdando o metodo de pagarMensalidade.
- `Professor.php`: extends da abstrac class `Pessoa`.
- `Tecnico.php`: extends da class `Aluno`.
- `Visitante.php`: extends da abstract class Pessoa.

## Herança na abstract class Pessoa

Na classe `Pessoa`, aplicamos a herança seguindo estas práticas:

- **abstract class**: Atributos e métodos que serão compartilhados com as demais classes que se extender da classe `Pessoa`.
- **protected**: para acessarmos a classe atual e suas subclasses.

## Lembrando isso são somente alguns conceitos a herança ela contém muito mais conceitos teoricos além da pratica como por exemplo: 
 - Arvore de herança para entender como se relacionam desde a Raiz até o solo.
 - Tipos de herança
 - Abstrato & final
 - classe abstrata ( Não pode gerar objetos por esse motivo abaixo no codigo do index. pois uma clase abstrata ela não pode ser instanciada. Veja que iniciamos `$v1 = new Pessoa()` isso não vai funcionar pois Pessoa é uma abstract e não pode surgir objetos a partir dela. Só podemos ter objetos das classes que se extendem a ela) 
 - metodos abstrato ( Só podem ser inseridos dentro de uma classe abstrata ou em uma interface)
 - Classe final ( Não pode ser herdada por outra classe)
 - metodo final ( Não pode ser herdado pelas suas subclasses)

## Exemplo de Uso

```php
<?php
    //Importando Aluno | Bolsista | Professor onde utilizaremos seus métodos e get & setters para atribuir informações.
    require_once 'Aluno.php';
    require_once 'Bolsista.php';
    require_once 'Professor.php';

    //Demonstrando que não temos como acessar uma classe abstract pois ela não pode ser instanciada em um objeto.
    //$p1 = new Pessoa();
    // $v1 = new Visitante();
    // $v1->setNome("Juvenal");
    // $v1->setIdade(33);
    // $v1->setSexo("MASC");

    //Aluno
    $a1 = new Aluno();
    $a1->setNome("Juca");
    $a1->setMatricula(2222);
    $a1->setIdade(22);
    $a1->setSexo("Masc");
    $a1->setCurso("Analise e desenvolvimento");
    $a1->pagarMensalidade();
    print_r($a1);

    //Bolsista
    $b1 = new Bolsista();
    $b1->setMatricula(4444);
    $b1->setNome("Rafael");
    $b1->setBolsa(12.5);
    $b1->setCurso("Ciencia da computação");
    $b1->setIdade(22);
    $b1->pagarMensalidade();
    $b1->renovarBolsa();
    print_r($b1);

    //Professor
    $b2 = new Professor();
    $b2->setNome("Jubilando da cabeça");
    $b2->setSexo("Masc");
    $b2->setEspecialidade("Linguagem C");
    $b2->receberAumento(5000);

    //Exibir na tela
    print_r($b2);
    ?>
