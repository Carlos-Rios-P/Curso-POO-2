<?php

namespace Carlos\DB;

class MySql implements Db
{
    public function connect() :string
    {
        return 'connected to MySql';
    }
}