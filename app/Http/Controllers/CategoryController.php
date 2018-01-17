<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoryController extends Controller
{
    public function showCategories()
    {
    	$categories = Categories::where('level', 0)->get();
        return view('categories.index', [
        	'linkParam' => 'category',
	        'categories' => $categories
	    ]);
    }

    public function showSubcategoriesGroup($id)
    {
    	$categories = Categories::where(['parent_id'=> $id, 'level'=> 1])->get();
        return view('categories.index', [
        	'linkParam' => 'sub-category',
        	'preLink' => '/category/'.$id,
        	'breadcrumbs'=> Categories::getBreadcrumbData([$id]),
	        'categories' => $categories
	    ]);
    }

    public function showSubcategories($id, $subId)
    {
    	$categories = Categories::where(['parent_id'=> $subId, 'level'=> 2])->get();
        return view('categories.index', [
        	'linkParam' => 'diagnoses-category',
        	'preLink' => '/category/'.$id.'/sub-category/'.$subId,
        	'breadcrumbs'=> Categories::getBreadcrumbData([$id, $subId]),
	        'categories' => $categories
	    ]);
    }
}
