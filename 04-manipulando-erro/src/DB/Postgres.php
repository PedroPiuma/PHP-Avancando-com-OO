<?php

namespace PedroPiuma\Db;

class Postgres implements Db
{
    public function connect(): string
    {
        return 'connect to Postgres';
    }
}
