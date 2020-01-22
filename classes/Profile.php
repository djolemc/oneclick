<?php


class Profile
{

    private $image;
    private $price;
    private $description;
    private $database;

    public function __construct($db)
    {
        $this->database = $db;
    }


    //Snima novi profil u bazu
    public function insertProfile()
    {
        $this->price = $_POST['price'];
        $this->name = $_POST['name'];
        $this->description = $_POST['description'];
        $this->image = rand(1, 4) . ".jpg";

        $this->database->query('INSERT INTO profiles (profile_name, profile_price, profile_description, profile_image) VALUES (:name, :price, :description, :image)');
        $this->database->bind(':name', $this->name);
        $this->database->bind(':price', $this->price);
        $this->database->bind(':description', $this->description);
        $this->database->bind(':image', $this->image);
        $this->database->execute();

    }


    // Brise profil iz baze

    public function deleteProfile($id)
    {
        $this->database->query('DELETE FROM profiles WHERE profile_id=:id');
        $this->database->bind(':id', $id);
        $this->database->execute();
    }


    //Snima izmene na profilu

    public function updateProfile($id)
    {
        $this->price = $_POST['price'];
        $this->name = $_POST['name'];
        $this->description = $_POST['description'];

        $this->database->query('UPDATE profiles SET profile_name=:name, profile_price=:price, profile_description=:description where profile_id=:id');
        $this->database->bind(':id', $id);
        $this->database->bind(':name', $this->name);
        $this->database->bind(':price', $this->price);
        $this->database->bind(':description', $this->description);
        $this->database->execute();

    }


    //Cita sve profile iz baze
    public function readAllProfiles()
    {
        $this->database->query("SELECT * FROM `profiles` ");
        return $this->database->resultset();
    }

    //Cita jedan profil iz baze
    public function getSingleProfile($id)
    {
        $this->database->query("SELECT * FROM `profiles` where profile_id=$id");
        return $this->database->single();
    }


}