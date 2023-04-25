<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as Users;
class User extends Component
{
    public $users, $name, $email, $password, $user_id;
    protected $listeners = [
        'deleteUser'=>'destroy'
    ];
    // Validation Rules
    protected $rules = [
        'name'=>'required',
        'email'=>'required',
        'password'=>'required',
    ];
    public function render()
    {
        $this->users = Users::select('id','name','email','password')->get();
        return view('livewire.user');
    }

    public function resetFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }
    public function store(){
        // Validate Form Request
        $this->validate();
        try{
            // Create user
            Users::create([
                'name'=>$this->name,
                'email'=>$this->email,
                'password'=>bcrypt($this->password),
                'role'=>'client',
            ]);

            // Set Flash Message
            session()->flash('success','User Created Successfully!!');
            // Reset Form Fields After Creating user
            $this->resetFields();
        }catch(\Exception $e){
            // Set Flash Message
            session()->flash('error','Something goes wrong while creating user!!');
            // Reset Form Fields After Creating user
            $this->resetFields();
        }
    }


    public function destroy($id){
        try{
            Users::find($id)->delete();
            session()->flash('success',"User Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting user!!");
        }
    }
}
