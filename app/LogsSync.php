<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogsSync extends Model
{
    protected $table = "logs_sync";

    protected $fillable = [
        'startDate',
        'endDate',
        'mails',
        'cant'
    ];

    public $timestamps = false;
}
