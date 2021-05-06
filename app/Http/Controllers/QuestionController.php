<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->model = new Question();
    }

    public function index()
    {
        return view('question-index', [
            'questions' => $this->model->with('subject')->get(),
        ]);
    }

    public function create()
    {
        return view('question-create', [
            'subjects' => Subject::all(),
        ]);
    }

    public function store(Request $request)
    {
        $this->model->create($request->all());

        return redirect()->route('questions.index');
    }

    public function show($id)
    {
        $question = $this->model->find($id);

        return view('question-show', [
            'question' => $question,
        ]);
    }

    public function edit(Request $request, $id)
    {
        $question = $this->model->find($id);

        return view('question-update', [
            'question' => $question,
            'subjects' => Subject::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $question = $this->model->find($id);

        $question->update($request->all());

        return redirect()->route('questions.index');
    }

    public function destroy($id)
    {
        $question = $this->model->find($id);

        $question->delete();

        return redirect()->route('questions.index');
    }
}
