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


    public function getWhere($conditions)
    {
        // TODO: Implement getWhere() method.
    }

    public function deleteWhere($conditions)
    {
        // TODO: Implement deleteWhere() method.
    }

    public function updateWhere($conditions)
    {
        // TODO: Implement updateWhere() method.
    }

    public function create($fields)
    {
        $keys_array = array_keys($fields);
        $keys = implode(", ", $keys_array);
        $placeholders = implode(", ", array_map(function($el){return ":$el";}, $keys_array));

        $query = $this->connection->prepare("INSERT INTO {$this->table} ({$keys}) VALUES ($placeholders)");
        foreach ($fields as $key => $field){
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