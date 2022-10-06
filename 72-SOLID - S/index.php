<?php

class Usuario {
    public function setNome() {}
    public function getNome() {}
}
class UsuarioDb {
    public function add(Usuario $u) {}
    public function update(Usuario $u) {}
    public function delete( $id) {}
}