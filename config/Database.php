<?php
class Database
{
    private $connection;

    public function __construct()
    {
        if ($this->isConnected()) throw "Failed to connect to MySQL: $this->connection";
    }

    public function getConnection()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        try {
            $this->connection = new mysqli('localhost', 'root', '', 'ticket_web');
        } catch (Exception $e) {
            throw $e;
        }

        return $this->connection;
    }

    public function isConnected(): bool
    {
        if (isset($this->conn)) return true;

        return false;
    }
}
