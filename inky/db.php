<?php

namespace inky;

use PDO;

class db extends PDO
{


    public function __construct($options = null)
    {
        $db = DB;
        parent::__construct(
            'mysql:host=' . $db['host'] . ';port=' . $db['port'] . ';dbname=' . $db['table'],
            $db['user'],
            $db['pass'],
            $options
        );
    }

    public function query($query)
    {
        //secured query with prepare and execute
        $args = func_get_args();
        array_shift($args); //first element is not an argument but the query itself, should removed

        $reponse = parent::prepare($query);
        $reponse->execute($args);
        return $reponse;
    }

    public function insecureQuery($query)
    {
        //you can use the old query at your risk ;) and should use secure quote() function with it
        return parent::query($query);
    }
}
