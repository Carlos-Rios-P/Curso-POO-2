<?php

namespace Carlos\DB;

class ORM
{
    private $db;

    public function setDb(Db $db){
        $this->db = $db;
    }
}