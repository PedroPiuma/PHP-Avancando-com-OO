<?php

namespace PedroPiuma\Db;

class MySql implements Db
{
    public function connect(): string
    {
        return 'connect to MySql';
    }
}
