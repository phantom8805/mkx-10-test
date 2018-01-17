<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'icd_categories';

    public static function getBreadcrumbData($arrIds){
    	return self::select('id','title')->whereIn('id', $arrIds)->get();
    }
}
