<?php
class Empregado
{
    private $nome;
    private $sobrenome;
    private $salarioMensal;

    public function __construct($nome, $sobrenome, $salarioMensal, )
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->salarioMensal = $salarioMensal;

    }


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    public function getSalarioMensal()
    {
        return $this->salarioMensal;
    }

    public function setSalarioMensal($salarioMensal)
    {
        $this->salarioMensal = $salarioMensal;
    }

    public function getSalarioAnual()
    {
        return $this->salarioMensal * 12;
    }

    public function aplicarAumento($percentual)
    {
        $aumento = $this->salarioMensal * ($percentual / 100);
        $this->salarioMensal += $aumento;
    }
    public function getSalarioAnual10()
    {
        return $this->salarioMensal * 120;
    }
    public function aplicarAumento2($percentual2)
    {
        $aumento2 = $this->salarioMensal * ($percentual2 / 100);
        $this->salarioMensal += $aumento2;
    }
}
?>