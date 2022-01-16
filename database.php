<?php

class Database
{
    private $link;

    public function __construct()
    {
        $this->connect();
    }

    /**
     * @return $this
     */
    private function connect()
    {
        require_once 'php/config.php';
        $dsn = 'mysql:host='.HOSTNAME.'; dbname='.DBNAME.'; charset = UTF8';
        $this->link = new PDO($dsn, USERNAME, PASSWORD);

        return $this;
    }

    /**
     * @param $sql
     * @return mixed
     */
    public function execute($sql)
    {
        //sth - это наш идентификатор запроса
        $sth = $this->link->prepare($sql);

        return $sth->execute();
    }

    /**
     * @param $sql
     * @return array
     */
    public function  query($sql)
    {
        $sth = $this->link->prepare($sql);

        $sth->execute();

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if($result === false){
            return[];
        }
        return $result;
    }
}



