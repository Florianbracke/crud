<?php

// This class will manage the connection to the database
// It will be passed on the other classes who need it
class DatabaseManager
{
    // These are private: only this class needs them
    private $host;
    private $user;
    private $password;
    private $port;

    // This one is public, so we can use it outside of this class
    // We could also use a private variable and a getter (but let's not make things too complicated at this point)

    public $database = 'goodplant';

    public function __construct(string $host, string $user, string $password)
    {
        // TODO: Set any user and password information
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect()
    {
        try {
            $this->database =  new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
            // set the PDO error mode to exception
            $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
