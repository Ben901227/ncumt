<?php

namespace App\Http\Livewire;

use App\Models\Judgement;
use Illuminate\Support\Facades\Schema;
use Livewire\Component;
use Livewire\WithPagination;

class BeforeJudgement extends Component {
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['delete'];
    public function render()
    {
        $amountOfPage = 10;
        $levelArray = ["一", "二", "三a", "三b", "四a", "四b"];
        $judgementData = Judgement::orderBy('id', 'desc')->paginate($amountOfPage);
        $judgementsColumnName = Schema::getColumnListing('judgements');
        $amountOfJudgementColumns = count($judgementsColumnName);
        return view('judgement.beforeJudgement', [
            'judgements' => $judgementData,
            'levelArray' => $levelArray,
            'amountOfPage' => $amountOfPage,
            'amountOfJudgementColumns' => $amountOfJudgementColumns,
        ]);
    }
    public function edit($id)
    {
        $judgement = Judgement::findOrFail($id);
    }

    public function update()
    {
        $judgement = Judgement::findOrFail($this->judgementId);
        $judgement->update([
            'name' => $this->name,
        ]);
    }

    public function delete($id)
    {
        $judgement = Judgement::findOrFail($id);
        $judgement->delete();
    }
}
