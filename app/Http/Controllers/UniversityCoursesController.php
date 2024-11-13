<?php

namespace App\Http\Controllers;

use App\Models\university_courses;
use Illuminate\Http\Request;
use DataTables;

class UniversityCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // $data = university_courses::with('universities')->with('courses')->get();

        // dd($data['universities']['name']);
        if ($request->ajax()) {

            $data = university_courses::with('universities')->with('courses')->get();

            return DataTables::of($data)
                    ->addIndexColumn()
                    // ->addColumn('university', function($row){
                    //     return $row;
                    // })
                    // ->addColumn('course', function($row){
                    //     return $row;
                    // })
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }    
        
        return view('university_courser');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(university_courses $university_courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(university_courses $university_courses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, university_courses $university_courses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(university_courses $university_courses)
    {
        //
    }
}
