<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function index()
    {
        $data['students'] = model(StudentModel::class)->findAll();


        return view('students/index', $data);
    }

    public function create()
    {
        return view('students/create');
    }

    public function store()
    {

        $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'course' => 'required'
        ];

        $data = $this->request->getPost(array_keys($rules));

        if (!$this->validateData($data, $rules)) {
            return view('students/create');
        }

        $validData = $this->validator->getValidated();
        $model = model(StudentModel::class);

        $model->save($validData);
        return redirect('students')->with('status', 'Student added successfully');
    }

    public function edit($id)
    {
        $data['student'] = model(StudentModel::class)->find($id);

        return view('students/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'course' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $validData = $this->validator->getValidated();

        $model = model(StudentModel::class);

        if (!$model->find($id)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Student with ID $id not found.");
        }

        $model->update($id, $validData);

        return redirect()->to('students')->with('status', 'Student Updated Successfully');
    }
}
