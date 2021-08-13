<?php

namespace App\Models;

use CodeIgniter\Model;

class CarsModel extends Model
{
    protected $table = 'cars';
    protected $useTimestamps = true;
    protected $allowedFields = ['name_car', 'type_car', 'description_car', 'price_car', 'img_car'];
}