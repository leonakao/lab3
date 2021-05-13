<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function __construct()
    {
        $this->model = new Answer();
    }

    public function index()
    {
        $answers = $this->model->with(['question', 'user'])->get();

        return view('answer-index', [
            'answers' => $answers,
        ]);
    }

    public function create()
    {
        return view('answers-create');
    }

    public function store(Request $request)
    {
        $answer = $this->model->create($request->all());

        return $answer->attributesToArray();
    }

    public function show($id)
    {
        return $this->model->with(['question', 'user'])->where('id', $id)->get();
    }

    public function update(Request $request, $id)
    {
        $answer = $this->model->find($id);

        $answer = $answer->update($request->all());

        return 'ok';
    }

    public function destroy($id)
    {
        $answer = $this->model->find($id);

        $answer = $answer->delete();

        return 'ok';
    }
}
