<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PessoaF
 *
 * @author 182100530
 */

require_once 'Pessoa.php';
class PessoaF extends Pessoa{
    //put your code here
    
    private $cpf;
    private $rg;
    private $genero;
    
    public function PessoaF() {
        
    }
    public function getCpf() {
        return $this->cpf;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    public function setRg($rg): void {
        $this->rg = $rg;
    }

    public function setGenero($genero): void {
        $this->genero = $genero;
    }
    
        public function __toString() {
           $pes = "Pessoa Física:<br/>"
                    
           . "- Nome:" . $this->getNome() . "<br/>"         
           . "- Telefone:" . $this->getTelefone() . "<br/>"
           . "- E-mail:" . $this->getEmail() . "<br/>"    
           . "- Endereço:" . $this->getEndereco() . "<br/>" 
           . "- CPF:" . $this->getCpf() . "<br/>"  
           . "- RG:" . $this->getRG() . "<br/>"  
           . "- Gênero:" . $this->getGenero() . "<br/>"  
            ;
            
           return $pes;
        }

}
