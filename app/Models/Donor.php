<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;
    protected $primaryKey = 'Donor_ID';
    protected $fillable = ['Donor_ID', 'First_Name', 'Last_Name', 'Blood_Type', 'DOB', 'Gender', 'Address', 'Contact_Number'];
}
