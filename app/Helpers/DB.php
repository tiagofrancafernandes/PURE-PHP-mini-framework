<?php

namespace App\Helpers;

class DB
{
    /**
     * pdo function
     * DB class
     *
    */
    public static function pdo(array $options = [])
    {
        $config = (object) [
            'driver'    => env('DB_DRIVER', 'mysql'),
            'host'      => env('DB_HOST', 'localhost'),
            'database'  => env('DB_NAME', 'my_db'),
            'username'  => env('DB_USER', 'root'),
            'password'  => env('DB_PASS', 'pass123'),
            'port'      => env('DB_PORT', 3306),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
            'engine'    => null,
            'options'    => $options ?? [],
        ];

        try
        {
            $dsn = "{$config->driver}:host={$config->host};dbname={$config->database};port={$config->port}";

            return new \PDO($dsn, $config->username, $config->password, $config->options);
        }
        catch ( \PDOException $e )
        {
            throw new \Exception('Erro ao conectar com o MySQL: ' . $e->getMessage(), 1);
        }
    }

    /**
     * select function
     * DB class
     *
    */
    public static function select(string $table, array $columns = ['*'], array $where = [], array $order = [], int $limit = 0, int $offset = 0)
    {
        $columns = $columns ?: ['*'];

        if (!static::tableExists($table))
        {
            return [];
        }

        $pdo = static::pdo();

        $sql = "SELECT " . implode(', ', $columns) . " FROM {$table}";

        if(!empty($where))
        {
            $sql .= " WHERE ";

            foreach ($where as $key => $value)
            {
                $sql .= "{$key} = :{$key} AND ";
            }

            $sql = substr($sql, 0, -5);
        }

        if(!empty($order))
        {
            $sql .= " ORDER BY ";

            foreach ($order as $key => $value)
            {
                $sql .= "{$key} {$value}, ";
            }

            $sql = substr($sql, 0, -2);
        }

        if($limit > 0)
        {
            $sql .= " LIMIT {$limit}";
        }

        if($offset > 0)
        {
            $sql .= " OFFSET {$offset}";
        }

        $stmt = $pdo->prepare($sql);

        if(!empty($where))
        {
            foreach ($where as $key => $value)
            {
                $stmt->bindValue(":{$key}", $value);
            }
        }

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * count function
     *
     * DB class
     *
    */
    public static function count(string $table, array $where = [])
    {
        if (!static::tableExists($table))
        {
            return null;
        }

        $pdo = static::pdo();

        $sql = "SELECT COUNT(*) FROM {$table}";

        if(!empty($where))
        {
            $sql .= " WHERE ";

            foreach ($where as $key => $value)
            {
                $sql .= "{$key} = :{$key} AND ";
            }

            $sql = substr($sql, 0, -5);
        }

        $stmt = $pdo->prepare($sql);

        if(!empty($where))
        {
            foreach ($where as $key => $value)
            {
                $stmt->bindValue(":{$key}", $value);
            }
        }

        $stmt->execute();

        return $stmt->fetchColumn();
    }

    /**
     * tableExists function
     *
     * DB class
     *
    */
    public static function tableExists(string $table)
    {
        try {
            $result = static::pdo()->query("SELECT 1 FROM {$table} LIMIT 1");
        } catch (Exception $e)
        {
            return FALSE;
        }
        return $result !== FALSE;
    }

    /**
     * first function
     *
     * DB class
     *
    */
    public static function first(string $table, array $columns = ['*'], array $where = [], array $order = [])
    {
        if (!static::tableExists($table))
        {
            return null;
        }

        $columns = $columns ?: ['*'];

        if (!static::tableExists($table))
        {
            return [];
        }

        $pdo = static::pdo();

        $sql = "SELECT " . implode(', ', $columns) . " FROM {$table}";

        if(!empty($where))
        {
            $sql .= " WHERE ";

            foreach ($where as $key => $value)
            {
                $sql .= "{$key} = :{$key} AND ";
            }

            $sql = substr($sql, 0, -5);
        }

        if(!empty($order))
        {
            $sql .= " ORDER BY ";

            foreach ($order as $key => $value)
            {
                $_orderBy = is_numeric($key) ? $value : "{$key} {$value}";
                $sql .= "$_orderBy, ";
            }

            $sql = substr($sql, 0, -2);
        }

        $sql .= " LIMIT 1 OFFSET 0";

        $stmt = $pdo->prepare($sql);

        if(!empty($where))
        {
            foreach ($where as $key => $value)
            {
                $stmt->bindValue(":{$key}", $value);
            }
        }

        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC) ?? null;
    }

    /**
     * last function
     *
     * DB class
     *
    */
    public static function last(string $table, array $columns = ['*'], array $where = [])
    {
        if (!static::tableExists($table))
        {
            return null;
        }

        $where_keys = array_keys($where);
        $first_key  = $where_keys && ($where_keys[0] ?? []) && is_string($where_keys[0]) ? $where_keys[0] : null;
        $order      =  $first_key ? [$first_key => 'DESC'] : [];

        $count = static::count($table, $where);
        $offset = $count - 1;

        $result = static::select($table, $columns, $where, $order, 1, $offset);

        return $result[0] ?? null;
    }

    /**
     * insert function
     *
     * DB class
     *
    */
    public static function insert(string $table, array $data)
    {
        if (!static::tableExists($table))
        {
            return null;
        }

        $pdo = static::pdo();

        $sql = "INSERT INTO {$table} (";

        foreach ($data as $key => $value)
        {
            $sql .= "{$key}, ";
        }

        $sql = substr($sql, 0, -2);

        $sql .= ") VALUES (";

        foreach ($data as $key => $value)
        {
            $sql .= ":{$key}, ";
        }

        $sql = substr($sql, 0, -2);

        $sql .= ")";

        $stmt = $pdo->prepare($sql);

        foreach ($data as $key => $value)
        {
            $stmt->bindValue(":{$key}", $value);
        }

        $stmt->execute();

        $last_id = $pdo->lastInsertId();

        //tenta retornar o registro inserido (primeiro pelo ID, se houver)
        if($last_id)
        {
            return static::last($table, ['*'], ['id' => $pdo->lastInsertId()]);
        }else{
            $first_input = $data[array_key_first($data)] ?? null;
            if($first_input && is_string($first_input))
            {
                return static::first($table, ['*'], ['name' => $first_input]);
            }

            return [];
        }
    }

    /**
     * update function
     *
     * DB class
     *
    */
    public static function update(string $table, array $data, array $where)
    {
        if (!static::tableExists($table))
        {
            return null;
        }

        $pdo = static::pdo();

        $sql = "UPDATE {$table} SET ";

        foreach ($data as $key => $value)
        {
            $sql .= "{$key} = :{$key}, ";
        }

        $sql = substr($sql, 0, -2);

        $sql .= " WHERE ";

        foreach ($where as $key => $value)
        {
            $sql .= "{$key} = :{$key} AND ";
        }

        $sql = substr($sql, 0, -5);

        $stmt = $pdo->prepare($sql);

        foreach ($data as $key => $value)
        {
            $stmt->bindValue(":{$key}", $value);
        }

        foreach ($where as $key => $value)
        {
            $stmt->bindValue(":{$key}", $value);
        }

        $stmt->execute();

        return $stmt->rowCount();
    }

    /**
     * delete function
     *
     * DB class
     *
    */
    public static function delete(string $table, array $where)
    {
        if (!static::tableExists($table))
        {
            return null;
        }

        $pdo = static::pdo();

        $sql = "DELETE FROM {$table} WHERE ";

        foreach ($where as $key => $value)
        {
            $sql .= "{$key} = :{$key} AND ";
        }

        $sql = substr($sql, 0, -5);

        $stmt = $pdo->prepare($sql);

        foreach ($where as $key => $value)
        {
            $stmt->bindValue(":{$key}", $value);
        }

        $stmt->execute();

        return $stmt->rowCount();
    }
}
