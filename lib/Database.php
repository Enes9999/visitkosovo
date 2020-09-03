<?php

class Database {

    protected $db = null; 

    public function __construct() {
        $this->connect();
    }
    
    protected function db()
    {
        return $this->connect();
    }

    protected function connect()
    {
        if($this->db !== null)  {
            return $this->db;
        }

        $this->db = new mysqli("localhost","root","","visitkosovo");
        if ($this->db->connect_errno) {
          echo "Failed to connect to MySQL: " . $this->db->connect_error;
          exit();
        }
        return $this->db;
    }

    public function query($sql) {
        return $this->db()->query($sql);
    }

    public function find($sql) {
        $res = [];
        $query = $this->query($sql);
        while($row = $query->fetch_assoc()) {
            $res[] = $row;
        }
        $query->free_result();

        return $res;
    }

    public function close() {
        $this->db()->close();
        $this->db = null;
    }

}