<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagnoses;
use App\Categories;

class DiagnosesController extends Controller
{
    public function search(Request $request)
    {
    	$diagnoses = Diagnoses::where('title', 'like', '%' . $request->input('srch-term') . '%')
    	->orWhere('code', 'like', '%' . $request->input('srch-term') . '%')->paginate(10);
    	$diagnoses->withPath('?srch-term='.$request->input('srch-term'));

    	return view('diagnoses.index', [
	        'diagnoses' => $diagnoses
	    ]);
    }

    public function showDiagnosesGroup($id, $subId, $diagnosesCat)
    {
    	$diagnoses = Diagnoses::where('category_id', $diagnosesCat)->paginate(10);
        return view('diagnoses.index', [
	        'diagnoses' => $diagnoses,
	        'breadcrumbs'=> Categories::getBreadcrumbData([$id, $subId, $diagnosesCat]),
	    ]);
    }
}
