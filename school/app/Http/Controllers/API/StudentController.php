<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\student;
use Dotenv\Validator;
use Exception;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student(Request $request)
    {
        $student = student::all();

        if ($student) {
            return response()->json($student, 200);
        }
    }

    public function schoolboy(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'class' => 'required'
            ]);

            $student = student::create([
                'name' => $request->name,
                'class' => $request->class,
            ]);

            $data = student::where('id', '=', $student->id)->get();

            if ($student) {
                return response()->json($student, 200);
            }
        } catch (Exception $error) {
        }
    }

    public function update(Request $request, $name)
    {
        $student = student::find($name);

        if ($student) {
            $student->update($student);

            return response()->json([
                'name' => 'Adli',
                'class' => "RPL 2",
            ], 200);
        } else {
            return response()->jspn([
                'name' => 'cant update name',
                'class' => $request->class,
            ], 401);
        }
    }

    public function schoolput(Request $request)
    {
        $student = student::find($request->id);
        $student->name = $request->name;
        $student->class = $request->class;

        $result = $student->save();

        if ($result) {
            return ["result"=>"data has been updated"];
        } else {
            return ["result"=>"update operation has been failed"];
        }
    }

    public function destroy($id)
    {
        //
        return student::destroy($id);
    }
}
