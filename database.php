<?php
class Database {
protected $host;
protected $user;
protected $password;
protected $db_name;
protected $conn;
public function __construct() {
$this->getConfig();
$this->conn = new mysqli($this->host, $this->user, $this->password,
$this->db_name);
if ($this->conn->connect_error) {
die("Connection failed: " . $this->conn->connect_error);
}
}