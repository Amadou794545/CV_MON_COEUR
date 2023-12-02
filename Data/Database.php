<?php

class Database
{
    private SQLite3 $db;

    public function __construct(string $filename)
    {
        $this->db = new SQLite3($filename);
    }

}