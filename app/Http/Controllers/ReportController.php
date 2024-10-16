<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reports;

class ReportController extends Controller
{
    public function index(){
        $reports = reports::all();
        return view('report.index', compact('reports'));
    }

    public function destroy(reports $report){
        $report->delete();
        return redirect()->back();
    }

    public function store(Request $request, reports $reports){
        $data=$request->validate(
            [
                'description'=>'text',
            ]
            );
            $data['number']=uniqid();
            $reports->create($data);
            return redirect()->back();
    }
}
