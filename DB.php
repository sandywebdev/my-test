<?php
class DB
{
    const HOST_NAME = "localhost";
    const HOST_USERNAME = "root";
    const HOST_PASSWORD = "";
    const DB_NAME = "php-test";
    protected ?PDO $conn;
    protected ?string $sql;
    protected ?array $condition;
    /**
     * @throws Exception
     */
    public function __construct()
    {
        $hostname = self::HOST_NAME;
        $username = self::HOST_USERNAME;
        $password = self::HOST_PASSWORD;
        $db = self::DB_NAME;
        try {
            $this->conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);

        } catch (Exception $e) {
            throw new Exception("Unable to connect Database");
        }
    }
}
$db = new DB;
