<?php
class Registration
{
    private $conn;

    public $name, $email, $address, $category, $ticket_total, $price_total;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function register()
    {
        $query = "INSERT INTO ticket_registrations (name, email, address, category, ticket_total, price_total) VALUES ('$this->name', '$this->email', '$this->address', '$this->category', $this->ticket_total, $this->price_total)";

        if ($this->conn->query($query)) {
            return true;
        }

        return false;
    }
}
