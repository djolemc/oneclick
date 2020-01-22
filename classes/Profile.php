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

    public function insertProfile($name, $price, $description)
    {

        $this->image = rand(1, 3) . ".jpg";

        $this->database->query('INSERT INTO profiles (profile_name, profile_price, profile_description, profile_image) VALUES (:name, :price, :description, :image)');
        $this->database->bind(':name', $name);
        $this->database->bind(':price', $price);
        $this->database->bind(':description', $description);
        $this->database->bind(':image', $this->image);
        $this->database->execute();

    }

    /**
     * @return mixed
     */
    public function deleteProfile($id)
    {
        $this->database->query('DELETE FROM profiles WHERE profile_id=:id');
        $this->database->bind(':id', $id);
        $this->database->execute();
    }



    public function updateProfile($name, $price, $description, $id)
    {
        $this->database->query('UPDATE profiles SET profile_name=:name, profile_price=:price, profile_description=:description where profile_id=:id');
        $this->database->bind(':id', $id);
        $this->database->bind(':name', $name);
        $this->database->bind(':price', $price);
        $this->database->bind(':description', $description);
        $this->database->execute();

    }


    /**
     * @return mixed
     */
    public function readAllProfiles()
    {
        $this->database->query("SELECT * FROM `profiles` ");
        return $this->database->resultset();
    }


    public function getSingleProfile($id)
    {
        $this->database->query("SELECT * FROM `profiles` where profile_id=$id");
        return $this->database->single();
    }


}