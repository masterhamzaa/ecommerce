<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Produit as Produits;
class Product extends Component
{
    public $produits,$categorie_id, $name, $desc,$price,$image,$produit_id;
    public $updateProduct = false;
    protected $listeners = [
        'deleteProduct'=>'destroy'
    ];
    // Validation Rules
    protected $rules = [
        'categorie_id'=>'required',
        'name'=>'required',
        'desc'=>'required',
        'price'=>'required',
        'image'=>'required',
    ];
    public function render()
    {
        $categories=DB::table('categories')->get();
        $this->produits = produits::select('id','categorie_id','name','desc','price','image')->get();
        return view('livewire.product',compact('categories'));
    }
    public function resetFields(){
        $this->categorie_id = '';
        $this->name = '';
        $this->desc = '';
        $this->price = '';
        $this->image = '';
    }
    public function store(){
        // Validate Form Request
        $this->validate();
        try{
            // Create product
            produits::create([
                'categorie_id'=>$this->categorie_id,
                'name'=>$this->name,
                'desc'=>$this->desc,
                'price'=>$this->price,
                'image'=>$this->image,
            ]);

            // Set Flash Message
            session()->flash('success','Product Created Successfully!!');
            // Reset Form Fields After Creating Product
            $this->resetFields();
        }catch(\Exception $e){
            // Set Flash Message
            session()->flash('error','Something goes wrong while creating product!!');
            // Reset Form Fields After Creating product
            $this->resetFields();
        }
    }
    public function edit($id){
        $product = produits::findOrFail($id);
        $this->produit_id = $product->id;
        $this->categorie_id = $product->categorie_id;
        $this->name = $product->name;
        $this->desc = $product->desc;
        $this->price = $product->price;
        $this->image = $product->image;
        $this->updateProduct = true;
    }
    public function cancel()
    {
        $this->updateProduct = false;
        $this->resetFields();
    }
    public function update(){
        // Validate request
        $this->validate();
        try{
            // Update product
            produits::find($this->produit_id)->fill([
                'categorie_id'=>$this->categorie_id,
                'name'=>$this->name,
                'desc'=>$this->desc,
                'price'=>$this->price,
                'image'=>$this->image,
            ])->save();
            session()->flash('success','product Updated Successfully!!');

            $this->cancel();
        }catch(\Exception $e){
            session()->flash('error','Something goes wrong while updating product!!');
            $this->cancel();
        }
    }
    public function destroy($id){
        try{
            produits::find($id)->delete();
            session()->flash('success',"product Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting product!!");
        }
    }
}
