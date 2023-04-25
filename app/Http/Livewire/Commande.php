<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Facture as Commandes;

use App\Models\Commande as C;
class Commande extends Component
{

    public $commandes,$cref,$etatdecommande,$datedecommande;
    public $updateCommande = false;
    protected $listeners = [
        'deleteCommande'=>'destroy'
    ];
    // Validation Rules
    protected $rules = [
        'cref'=>'required',
        'etatdecommande'=>'required',

    ];
    public function render()
    {
        $this->commandes = Commandes::select('id','commanderef','client_name','produits','ttc','datedefacture')->get();
        return view('livewire.commande');
    }


    public function edit($id){
        $commandes = Commandes::findOrFail($id);
        $this->etatdecommande = (DB::table('commandes')->where('idcommande',$commandes->commanderef)->get())[0]->etatdecommande;
        $this->cref=$commandes->commanderef;
        $this->updateCommande = true;
    }
    public function update(){
        // Validate request
        $this->validate();
        try{

            // Update the state of "Livraison"

              DB::table('commandes')
              ->where('idcommande', $this->cref)
              ->update(['etatdecommande' => $this->etatdecommande]);

            session()->flash('success','Etat de livraison Updated Successfully!!');

            $this->cancel();
        }catch(\Exception $e){
            session()->flash('error','Something goes wrong while updating Etat de livraison!!');
            $this->cancel();
        }
    }

    public function resetFields(){
        $this->cref = '';
        $this->etatdecommande = '';

    }
    public function cancel()
    {
        $this->updateCommande = false;
        $this->resetFields();
    }

    public function destroy($id){

        try{
            $query = Commandes::where('id',$id)->get();
            Commandes::find($id)->delete();
            DB::table('commandes')->where('idcommande', '=', $query[0]->commanderef)->delete();
            session()->flash('success',"Commande Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',$e);
        }
    }
}
