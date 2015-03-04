<?php
class Place
{
    private $location;
    private $duration;
    private $image;

    function __construct($location, $duration, $image)
    {
        $this->location = $location;
        $this->duration = $duration;
        $this->image = $image;
    }

    function setLocation($new_location)
    {
        $this->location = (string) $new_location;
    }

    function setDuration($new_duration)
    {
        $this->duration = (string) $new_duration;
    }

    function setImage($new_image)
    {
        $this->image = (string) $new_image;
    }
    function getLocation()
    {
        return $this->location;
    }

    function getDuration()
    {
        return $this->duration;
    }

    function getImage()
    {
        return $this->image;
    }

    function save()
    {
        array_push($_SESSION['list_of_cities'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_cities'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_cities'] = array();
    }
}

?>
