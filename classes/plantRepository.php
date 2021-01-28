<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern

class plantRepository
{
    private $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {   
        $this->databaseManager = $databaseManager;
    }
    
    public function create()
    { 
        $this->plant_name           = $_POST['plant_name'];
        $this->light                = $_POST['light'];
        $this->water                = $_POST['water'];
        $this->propogation_method   = $_POST['propogation_method'];

        return $this->databaseManager->database->
            query(" INSERT INTO plants (plant_name, light, water, propogation_method)
                VALUES ('$this->plant_name', '$this->light', '$this->water', '$this->propogation_method');"
            );
    }
    
    public function find()
    {

    }

    public function get()
    {
        if (isset($_POST['submit'])) {
                    $this->create();
        }

        return $this->databaseManager->database->query("SELECT * FROM plants;");

    }

    public function update() {
        echo "asdasd";
        $plant_number = $_GET['edit'];
        $new_plant_name = $_POST['edit_name'];
        $new_light = $_POST['edit_light'];
        $new_water = $_POST['edit_water'];
        $new_propogation_method = $_POST['edit_propogation_method'];

        
        //header('location: index.php');
        return $this->databaseManager->database->query("UPDATE plants SET plant_name = '$new_plant_name', light = '$new_light', water = '$new_water', propogation_method = '$new_propogation_method' WHERE plant_number = '$plant_number'");

        
    }

    
    public function delete()
    {

    }

}