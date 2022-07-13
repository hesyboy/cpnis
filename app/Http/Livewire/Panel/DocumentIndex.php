<?php

namespace App\Http\Livewire\Panel;

use App\Models\Document;
use Livewire\Component;

use Illuminate\Pagination\LengthAwarePaginator;

use Illuminate\Pagination\Paginator;

use Livewire\WithPagination;






class DocumentIndex extends Component
{


    use WithPagination;

    public $documents;

    public $totalDcuments;

    public $documentsCount;

    public $openDocuments;

    public $sortOrder;

    public $search_text;


    public $perPage;



    public function mount(){
        $this->documents=Document::all();
        $this->totalDcuments=$this->documents;
        $this->documentsCount=$this->totalDcuments->count();
        $this->sortOrder='desc';

        $this->perPage=2;
    }


    public function sortByFeields($field){
        if($this->sortOrder=='desc'){
            $this->documents=$this->documents->sortBy([
                [$field,'desc'],
            ]);
            $this->sortOrder='asc';
            return $this->documents;
        }
        else{
            $this->documents=$this->documents->sortBy([
                [$field,'asc'],
            ]);
            $this->sortOrder='desc';
            return $this->documents;
        }
        $this->perPage=2;

    }


    public function filterDocuments($column="",$value=""){
        if($column=="" && $value==""){
            return $this->documents=$this->totalDcuments;
        }
        return $this->documents=$this->totalDcuments->where($column , $value);
    }


    public function updatedSearchText(){
        if($this->search_text!=""){
            $this->documents=Document::where('id',$this->search_text)
            ->orWhere('first_name','like','%'.$this->search_text.'%')
            ->orWhere('last_name','like','%'.$this->search_text.'%')
            ->orWhere('document_number','like','%'.$this->search_text.'%')
            ->orWhere('title','like','%'.$this->search_text.'%')->get();
    }
        else{
            $this->documents=$this->totalDcuments;
        }


            $this->perPage=2;
    }




    public function showMore($item){
        $this->perPage+=$item;
    }




    public function render()
    {
        // $perPage = 4;

        $collection = $this->documents;

        $items = $collection->forPage($this->page, $this->perPage);

        $paginator = new LengthAwarePaginator($items, $collection->count(), $this->perPage, $this->page);

        return view('livewire.panel.document-index', ['documentlist' => $paginator]);
    }
}
