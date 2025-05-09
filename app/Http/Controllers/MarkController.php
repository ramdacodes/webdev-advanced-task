<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Mark;
use App\Models\Student;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marks = Mark::with(['student', 'course'])->get();

        return view('mark.index', compact('marks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::get();
        $courses = Course::get();

        return view('mark.create', compact('students', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'course_id' => 'required',
            'number' => 'required',
            'mark' => 'required',
        ]);

        Mark::create($request->all());

        return redirect()->route('mark.index')->with('success', 'Data nilai berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mark $mark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mark $mark)
    {
        $student = Student::find($mark->student_id);
        $course = Course::find($mark->course_id);

        return view('mark.edit', compact('student', 'course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mark $mark)
    {
        $request->validate([
            'student_id' => 'required',
            'course_id' => 'required',
            'number' => 'required',
            'mark' => 'required',
        ]);

        $mark->update($request->all());

        return redirect()->route('mark.index')->with('success', 'Data nilai berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mark $mark)
    {
        $mark->delete();

        return redirect()->route('mark.index')->with('success', 'Data nilai berhasil dihapus');
    }
}
