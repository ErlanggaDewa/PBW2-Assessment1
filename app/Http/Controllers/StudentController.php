<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StudentController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('student-index', ['students' => Student::latest()->get()]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('student-create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    $student = $request->validate([
      'nim' => ['required', 'string', 'unique:students,nim'],
      'name' => ['required', 'string'],
      'gender' => ['required', 'string'],
      'class' => ['required', 'string'],
      'address' => ['required', 'string'],
      'status' => ['required', 'string'],
    ]);
    if ($request->hasFile('img')) {
      if ($request->file('img')->isValid()) {
        $student['img'] = $request->file('img')->store('public/img');
        $student['img'] = Str::afterLast($student['img'], '/');
      } else {
        dd($request->file());
      }
    } else {
      $student['img'] = 'default.png';
    }
    Student::create($student);
    return redirect()->route('student.index')->withToastSuccess('Data Berhasil Ditambahkan');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Student  $student
   * @return \Illuminate\Http\Response
   */
  public function show(Student $student)
  {
    return view('student-show', ['student' => $student]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Student  $student
   * @return \Illuminate\Http\Response
   */
  public function edit(Student $student)
  {
    return view('student-edit', ['student' => $student]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Student  $student
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Student $student)
  {
    $studentData = $request->validate([
      'nim' => ['required', 'string', 'unique:students,nim'],
      'name' => ['required', 'string'],
      'gender' => ['required', 'string'],
      'class' => ['required', 'string'],
      'address' => ['required', 'string'],
      'status' => ['required', 'string'],
    ]);
    if ($request->hasFile('img')) {
      if ($request->file('img')->isValid()) {
        $studentData['img'] = $request->file('img')->store('public/img');
        $studentData['img'] = Str::afterLast($studentData['img'], '/');
      }
    } else {
      $studentData['img'] = 'default.png';
    }
    $student->update($studentData);
    return redirect()->route('student.index')->withToastSuccess('Data Berhasil Diubah');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Student  $student
   * @return \Illuminate\Http\Response
   */
  public function destroy(Student $student)
  {
    $student->delete();
    return redirect()->route('student.index')->withToastSuccess('Data Berhasil Dihapus');
  }
}
