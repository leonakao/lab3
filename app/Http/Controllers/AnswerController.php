<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function __construct()
    {
        $this->model = new Answer();
    }

    public function index()
    {
        $answers = $this->model->all();

        return view('answer-index', [
            'answers' => $answers,
        ]);
    }

    public function create()
    {
        return view('answer-create', [
            'questions' => Question::all(),
        ]);
    }

    public function store(Request $request)
    {
        $answer = $this->model->create($request->all());

        return redirect()->route('answers.index');
    }

    public function show($id)
    {
        $answer = $this->model->findOrFail($id);

        return view('answer-show', [
            'answer' => $answer,
        ]);
    }

    public function edit($id)
    {
        $answer = $this->model->findOrFail($id);

        return view('answer-update', [
            'answer' => $answer,
            'questions' => Question::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $answer = $this->model->find($id);

        $answer = $answer->update($request->all());

        return redirect()->route('answers.index');
    }

    public function destroy($id)
    {
        $answer = $this->model->find($id);

        $answer = $answer->delete();

        return redirect()->route('answers.index');
    }
}
