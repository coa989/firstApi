<?php
require_once 'Database.php';

class Employee
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $this->db->query("SELECT * FROM employee");
        $this->db->execute();
        $result = $this->db->resultSet(PDO::FETCH_OBJ);
        return json_encode($result);
    }

    public function getSingle($id)
    {
        $this->db->query("SELECT * FROM employee WHERE id=:id");
        $this->db->bind(':id', $id);
        $this->db->execute();
        $result = $this->db->single(PDO::FETCH_OBJ);
        return json_encode($result);
    }

    public function create($data)
    {
        $this->db->query("INSERT INTO employee(name, email, age, designation) VALUES(:name, :email, :age, :designation)");
        $this->db->bind(':name', $data->name);
        $this->db->bind(':email', $data->email);
        $this->db->bind(':age', $data->age);
        $this->db->bind(':designation', $data->designation);
        $this->db->execute();
    }

    public function update($data)
    {
        $this->db->query("UPDATE employee SET name=:name, email=:email, age=:age, designation=:designation WHERE id=:id");
        $this->db->bind(':id', $data->id);
        $this->db->bind(':name', $data->name);
        $this->db->bind(':email', $data->email);
        $this->db->bind(':age', $data->age);
        $this->db->bind(':designation', $data->designation);
        $this->db->execute();
    }

    public function delete($data)
    {
        $this->db->query("DELETE FROM employee WHERE id=:id");
        $this->db->bind(':id', $data->id);
        $this->db->execute();
    }
}