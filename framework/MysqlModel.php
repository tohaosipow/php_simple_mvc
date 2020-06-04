<?php


namespace Framework;


use App\MysqlConnection;

class MysqlModel extends Model
{

    protected $table;
    protected $connection;
    public function __construct()
    {
        $this->connection = MysqlConnection::getConnection();
    }

    public function getById($id)
    {
        $query = $this->connection->prepare("SELECT * FROM `{$this->table}` WHERE {$this->getIdField()} = $id");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_CLASS)[0];
    }

    public function getWhere($conditions)
    {
        // TODO: Implement getWhere() method.
    }

    public function deleteWhere($conditions)
    {
        // TODO: Implement deleteWhere() method.
    }

    public function updateWhere($conditions, $data)
    {
        // TODO: Implement updateWhere() method.
    }


    public function updateById($id, $data)
    {
        $data_str = implode(", ", array_map(function ($k) use ($data){return "`$k` = :$k";}, array_keys($data)));
        $query = $this->connection->prepare("UPDATE `{$this->table}` SET {$data_str} WHERE {$this->getIdField()} = $id");
        foreach ($data as $key => $field) {
            $query->bindValue(":".$key, $field);
        }
        $query->execute();
    }

    public function create($fields)
    {
        $keys_array = array_keys($fields);
        $keys = implode(", ", $keys_array);
        $placeholders = implode(", ", array_map(function($el){return ":$el";}, $keys_array));

        $query = $this->connection->prepare("INSERT INTO {$this->table} ({$keys}) VALUES ($placeholders)");
        foreach ($fields as $key => $field){
            var_dump($key, $field);
            $query->bindParam(":$key", $field);
        }
        $query->execute();
       // $this->connection->prepare();

    }

    public function all()
    {
        $query = $this->connection->query("SELECT * FROM `{$this->table}`");
        return $query->fetchAll(\PDO::FETCH_CLASS);

    }
}
