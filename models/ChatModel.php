<?php
require_once 'config/database.php';

class ChatModel
{
    private $conn;
    private $table_name = "messages";

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function sendMessage($username, $message)
    {
        $query = "INSERT INTO " . $this->table_name . " SET username=:username, message=:message";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":message", $message);
        return $stmt->execute();
    }

    public function getMessages()
    {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY time ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
