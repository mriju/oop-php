<?php
class Person //class name
{
    var $name; //properties

    // method for set name
    function set_name($new_name)
    {
        $this->name = $new_name;
    }

    // method for get name
    function get_name()
    {
        return $this->name;
    }
}

$myname = new Person;
$myname->set_name('Riju');
$result = $myname->get_name();
echo 'My Name is ' . $result;
