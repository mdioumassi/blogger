<?php

namespace User\Model\Db\Mysql;

use Aston\Db\Connection;
use User\Model\User as userModel;
use User\Model\UserHandler;

class User implements UserHandler
{

    private $db;

    public function __construct(Connection $db)
    {
        $this->db = $db;
    }
    /**
     * @return \PDO
     */
    public function getDb()
    {
        return $this->db;
    }

    public function delete(userModel $user)
    {
        
    }

    public function find($criteria)
    {
        
    }

    public function findAll($criteria)
    {
        
    }

    public function findByEmail($email)
    {
        
    }

    public function insert(userModel $user)
    {
         $sql  = 'INSERT INTO user VALUES (' . 
                'NULL, ' .
                "'" . $user->getEmail()     . "'," .
                "'" . $user->getUsername()  . "'," .
                "'" . $user->getPassword()  . "'," .
                "'" . $user->getFirsname() . "'," .
                "'" . $user->getLastname()  . "'," .
                "'" . $user->getBirthdate()->format('d-m-Y') . "'," .
                "'" . (int) $user->getIsActive() . "'".
                ")";
        echo $sql;
        $this->getDb()->exec($sql);
    }

    public function update(userModel $user)
    {
        
    }

//put your code here
}
