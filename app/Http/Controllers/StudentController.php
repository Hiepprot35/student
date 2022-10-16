<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    //
    public function get_all_student()
    {
        $students=Student::all();
        return view('Student.student_manage',['students'=>$students]);
    }
    public function getID(Student $id)
    {
        return view('Student.student_edit', [
            'student' => $id,
        ]);
    }

    public function get_student_by_id(Student $id)
    {
        return view('Student.student_edit', [
            'student' => $id,
        ]);
    }
    public function edit(Request $request)
    {
        //
        $request->validate([
            'fullname'=>'required|regex:/^[a-zA-ZàáãạảăắằẳẵặâấầẩẫậèéẹẻẽêềếểễệđìíĩỉịòóõọỏôốồổỗộơớờởỡợùúũụủưứừửữựỳỵỷỹýÀÁÃẠẢĂẮẰẲẴẶÂẤẦẨẪẬÈÉẸẺẼÊỀẾỂỄỆĐÌÍĨỈỊÒÓÕỌỎÔỐỒỔỖỘƠỚỜỞỠỢÙÚŨỤỦƯỨỪỬỮỰỲỴỶỸÝ ]+$/',
            'address'=>'required||regex:/^[a-zA-ZàáãạảăắằẳẵặâấầẩẫậèéẹẻẽêềếểễệđìíĩỉịòóõọỏôốồổỗộơớờởỡợùúũụủưứừửữựỳỵỷỹýÀÁÃẠẢĂẮẰẲẴẶÂẤẦẨẪẬÈÉẸẺẼÊỀẾỂỄỆĐÌÍĨỈỊÒÓÕỌỎÔỐỒỔỖỘƠỚỜỞỠỢÙÚŨỤỦƯỨỪỬỮỰỲỴỶỸÝ0123456789, ]+$/',
            'birthday'=>'required|before:2004/1/1'
        ]);
        $name=$request->input('fullname');
        $id=$request->input('id');
        $address=$request->input('address');
        $birthday=$request->input('birthday');



            DB::table('_student')->where('id',$id)->update(['fullname'=>$name,'birthday'=>$birthday,'address'=>$address]);
            return redirect('/');
    }
}
