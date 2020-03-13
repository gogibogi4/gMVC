<?php

class DBHandle {
    protected static $pdoHandle;

    public function getInstance(
        string $host, 
        string $database, 
        string $user, 
        string $password, 
        string $charset = 'utf8mb4', 
        array $options = []
    ) {
        if (isset(DBHandle::$pdoHandle)) {
            return DBHandle::$pdoHandle;
        }

        if (empty($options)) {
            $options = array(
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false
            );
        }

        $dsn = sprintf('mysql:host=%s;dbname=%s;charset=%s', $host, $database, $charset);

        try {
            return new PDO($dsn, $user, $password, $options);
        } catch (\PDOException $e) {
            throw new PDOException($e->getMessage());
        }

        return static::$pdoHandle;
    }
}

?>