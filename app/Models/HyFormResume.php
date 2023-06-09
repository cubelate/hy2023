<?php

namespace App\Models;

use Encore\Admin\Traits\DefaultDatetimeFormat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HyFormResume extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;
    protected $table = 'hy_form_resume';
}
