<?php
class Registration
{
    private $conn;

    public $name, $email, $address, $category, $ticket_total, $total_price;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function register()
    {
        $query = "INSERT INTO ticket_registrations (name, email, address, category, ticket_total, total_price) VALUES ('$this->name', '$this->email', '$this->address', '$this->category', $this->ticket_total, $this->total_price)";

        if ($this->conn->query($query)) {
            return true;
        }

        return false;
    }
}
