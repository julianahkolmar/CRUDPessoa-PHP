<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Usuario
 *
 * @author 182100530
 */
class Usuario {
    //put your code here
    private $idUsuario;
    private $nomeUsuario;
    private $usuario;
    private $senha;
    private $idPerfil;
    private $perfilAcesso;
    
 public function usuario() {
     
 }
 public function getIdUsuario() {
     return $this->idUsuario;
 }

 public function getNomeUsuario() {
     return $this->nomeUsuario;
 }

 public function getUsuario() {
     return $this->usuario;
 }

 public function getSenha() {
     return $this->senha;
 }

 public function getIdPerfil() {
     return $this->idPerfil;
 }

 public function setIdUsuario($idUsuario): void {
     $this->idUsuario = $idUsuario;
 }

 public function setNomeUsuario($nomeUsuario): void {
     $this->nomeUsuario = $nomeUsuario;
 }

 public function setUsuario($usuario): void {
     $this->usuario = $usuario;
 }

 public function setSenha($senha): void {
     $this->senha = $senha;
 }

 public function setIdPerfil($idPerfil): void {
     $this->idPerfil = $idPerfil;
 }

    public function __toString() {
        $user = "Usuário: <br/>"
               . " - Nome Usuário: ". $this->getNomeUsuario(). "<br/>"
                . " - Usuário: " . $this->getUsuario(). "<br/>"
                
                ;
            
        return $user;
    }
}

     
