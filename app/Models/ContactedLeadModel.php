<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactedLeadModel extends Model
{

    use HasFactory;
    protected $table = "contacted_lead";
    public $timestamps = false;
    protected $fillable = [
'user_id', 
'lead_id', 
'entered_by'
    ];
}
