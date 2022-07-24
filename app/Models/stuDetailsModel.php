<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\appModel;
use DB;

class stuDetailsModel extends appModel
{
    protected $table      = 'project_lvl_ajaxcrud.student_details';
	protected $primaryKey = 'intId';
}
