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
        return $this->model->all()->toArray();
    }

    public function store(Request $request)
    {
        $subject = $this->model->create($request->all());

        return $subject->attributesToArray();
    }

    public function show($id)
    {
        $subject = $this->model->find($id);

        return $subject->attributesToArray();
    }

    public function update(Request $request, $id)
    {
        $subject = $this->model->find($id);

        $subject = $subject->update($request->all());

        return 'ok';
    }

    public function destroy($id)
    {
        $subject = $this->model->find($id);

        $subject = $subject->delete();

        return 'ok';
    }
}
