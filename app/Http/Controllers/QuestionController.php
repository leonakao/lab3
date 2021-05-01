<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->model = new Question();
    }

    public function index()
    {
        return $this->model->with('subject')->get();
    }

    public function store(Request $request)
    {
        $question = $this->model->create($request->all());

        return $question->attributesToArray();
    }

    public function show($id)
    {
        return $this->model->with('subject')->where('id', $id)->get();
    }

    public function update(Request $request, $id)
    {
        $question = $this->model->find($id);

        $question = $question->update($request->all());

        return 'ok';
    }

    public function destroy($id)
    {
        $question = $this->model->find($id);

        $question = $question->delete();

        return 'ok';
    }
}
