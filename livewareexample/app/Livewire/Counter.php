<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;

class Counter extends Component
{
    public $note="";
    public $feedback="";
    public function store(){
        Note::create([
            "content"=>$this->note
        ]);
        $this->feedback="Note added successfully";
    }
    public function destroy($id){
        Note::destroy($id);
        $this->feedback="Note deleted successfully";
    }
    public function update($id){
        $noteToUpdate=Note::find($id);
        $noteToUpdate->content=$this->note;
        $noteToUpdate->save();
        $this->feedback="Note updated successfully";
    }
    public function render()
    {
        $notes=Note::all();
        return view('livewire.counter',compact('notes'));
    }
}
