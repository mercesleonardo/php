<?php

interface MatematicaBasica {
    public function somar($x, $y);
}

class Basico1 implements MatematicaBasica{
    public function somar($x, $y) {
        return $x + $y;
    }
}

class Basico2 implements MatematicaBasica{
    public function somar($x, $y) {
        $res = $x;
        for($q =0; $q < $y; $q++) {
            $res++;
        }
        return $res;
    }
}

class Matematica {
    private $basico;

    public function __construct(MatematicaBasica $b) {
        $this->basico = $b;
    }

    public function somar($x, $y) {
        return $this->basico->somar($x, $y);
    }
}

$mat = new Matematica(new Basico2());


echo $mat->somar(10, 19)."<br/>";


/*
class Database {
    private $engine;

    public function __construct(DatabaseInterface $eng) {
        $this->engine = $eng;
    }

    public function listarTudos() {
        return $this->engine->listar();
    }
}

class MysqlEngine implements DatabaseInterface {
    public function listar() {
        // ...
    }
}

class OracleEngine implements DatabaseInterface {
    public function listar() {
        // ...
    }
}

class MongoEngine implements DatabaseInterface {
    public function listar() {
        // ...
    }
}

$db = new Database(new MysqlEngine());
$db->listarTudo();
*/


