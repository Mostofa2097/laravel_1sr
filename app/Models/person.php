<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class person 
{
    public $name;
    public $age;

    public function display()
    {
        echo "name " . $this->name . "<br>";
        echo "age " . $this->age. "<br>";
    }

}
