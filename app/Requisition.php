<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{

    protected $fillable = [
        'entity_name',
        'fund_cluster',
        'program',
        'office_responsibility_center_code',
        'ris_number',
        'requisitions',
        'stock_available',
        'issues',
    ];
}