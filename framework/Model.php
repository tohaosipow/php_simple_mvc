<?php


namespace Framework;


abstract class Model
{
    public function getById($id)
    {
        return $this->getWhere([$this->getIdField() => $id]);
    }

    public abstract function getWhere($conditions);

    protected function getIdField()
    {
        return "id";
    }

    public function all()
    {
        return $this->getWhere([]);
    }

    public function deleteById($id)
    {
        return $this->getWhere([$this->getIdField() => $id]);
    }

    public abstract function deleteWhere($conditions);

    public function updateById($id, $data)
    {
        return $this->updateWhere([$this->getIdField() => $id], $data);
    }

    public abstract function updateWhere($conditions, $data);

    public abstract function create($fields);
}
