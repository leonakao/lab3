<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Http\Response;
use Exception;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->model = new Subject;
    }

    public function index()
    {
        $subjects = $this->model->all();

        return view('subject-index', [
            'subjects' => $subjects,
        ]);
    }

    public function create()
    {
        return view('subject-create');
    }

    public function store(Request $request)
    {
        $this->model->create($request->all());

        return redirect()->route('subjects.index');
    }

    public function show($id)
    {
        $subject = $this->model->find($id);

        return $subject->attributesToArray();
    }

    public function edit($id)
    {
        $subject = $this->model->find($id);

        return view('subject-update', [
            'subject' => $subject,
        ]);
    }

    public function update(Request $request, $id)
    {
        $subject = $this->model->find($id);

        $subject->update($request->all());

        return redirect()->route('subjects.index');
    }

    public function destroy($id)
    {
        $subject = $this->model->find($id);

        $subject->delete();

        return redirect()->route('subjects.index');
    }
}
