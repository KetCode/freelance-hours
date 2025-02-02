<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Create extends Component
{
    public Project $project;

    public string $title = '';
    public string $date = '';
    public string $description = '';
    public string $tech = '';

    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'required|string',
            'tech' => 'required|string',
        ];
    }

    public function create()
    {
        $this->validate();

        DB::transaction(function () {
            $createdBy = DB::table('users')->where('id', 1)->value('id'); // remover quando criar cadastro e autenticação
            // dd($createdBy = Auth::id());

            $project = new Project([
                'title' => $this->title,
                'ends_at' => $this->date,
                'description' => $this->description,
                'tech_stack' => explode(', ', $this->tech),
                'created_by' => $createdBy,
            ]);

            $project->save();

            return redirect()->route('projects.show', $project->id);
        });

    }

    public function render()
    {
        return view('livewire.projects.create');
    }
}
