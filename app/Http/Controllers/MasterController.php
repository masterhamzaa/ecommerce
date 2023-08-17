<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Produit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
use App\Imports\ProductsImport;
use App\Models\Chariot;
use App\Models\Facture;

class MasterController extends Controller
{

    public function slash()
    {
        $cats = DB::table('categories')->get();
        $products=DB::table('produits')->get();
        return view('welcome', compact(['cats','products']));
    }


    public function template()
    {
        return view("admin.layouts");
    }

    public function adminview()
    {
        if (Auth::id() == 1) {
            return view('admin.layouts')->with('admin', 'welcome back Hamza');
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }


    public function Prod($id)
    {
        $cat_name =  DB::table('categories')->where('id', $id)->pluck('name')[0];
        $cats = DB::table('categories')->get();
        $products = DB::table('produits')->where('categorie_id', $id)->get();
        return view('products.product', compact(['products', 'cats', 'cat_name']));
    }



    public function Gestion($gestion)
    {
        request()->session()->put('gestion', $gestion);
        return redirect('Admin');
    }



    // PDF FACTURES

    public function generate()
    {

        $factures = Facture::get();
        /* Injection de filtre :  Seule les facture qui une etat de livraison sure!!
        $facts=[];
        foreach ($factures as $facture) {
            if(DB::table('commandes')->where('idcommande', $facture->commanderef)->get()[0]->etatdecommande =="done") {
                array_push($facts,$facture);
            }
        } */
        $data = [
            'title' => 'LES FACTURES',

            'date' => 'Date d\'impression :'.date('m/d/Y'),

            'factures' => $factures

        ];

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('admin.export', $data);



        return $pdf->download('master|factures|'.date('m/d/Y').'.pdf');
    }



    // EXPORT DATA
    public function exportproduit()
    {
        return Excel::download(new ProductsExport, 'produits.xlsx');
    }


    // IMPORT DATA

    public function importproduits()
    {

        request()->validate([
            'data' => 'required|file',
        ]);

        try {
            Excel::import(new ProductsImport, request()->file('data'));
            return back()->with('successImport', 'You have successfully import Data.');
        } catch (\Exception $e) {
            return back()->with('errorImport', $e);
        }

        /* Excel::import(new ProductsImport,request()->file('data'));

        return back(); */
    }


    // CART
    public function addtocartguest()
    {
        return redirect('login')->with('info','You have login first');
    }

    public function addtocart()
    {
        $p = Chariot::where('pid', '=', request()->get('pid'))->where('uid',Auth::user()->id)->first();
        if ($p === null) {
            DB::table('chariots')->insert(
                [
                    'pid' => request()->get('pid'),
                    'name' => request()->get('name'),
                    'desc'=>request()->get('desc'),
                    'price'=>request()->get('price'),
                    'image'=>request()->get('image'),
                    'uid'=>request()->get('uid')
                ]
                );

                return back()->with('ss','successful add!!');


        }
        if ($p !== null) {
            return back()->with('err','exist deja!!');
        }

    }


    public function cltproducts()
    {
        $chariots=DB::table('chariots')->get();
        $products=DB::table('produits')->get();
        return view('products.products', compact(['products','chariots']));
    }

    public function cltcart()
    {
        $chariots=DB::table('chariots')->where('uid',Auth::user()->id)->get();
        $products=DB::table('produits');
        return view('products.cart', compact(['products','chariots']));
    }

    public function cltcommande()
    {

        $chariots=DB::table('chariots')->where('uid',Auth::user()->id)->get();
        $products=DB::table('produits');
        $factures=DB::table('factures')->where('user_id',Auth::user()->id)->get();
        return view('products.commandes', compact(['products','chariots','factures']));
    }

    public function annulercmd($commande)
    {
        DB::table('commandes')->where('idcommande', '=', $commande)->delete();
        DB::table('factures')->where('commanderef', '=', $commande)->delete();
        return back()->with('success','commande annule avec success!!');
    }

    public function commande()
    {
        //request()->session()->put('pass', $pass);

       $chariots=DB::table('chariots')->where('uid',Auth::user()->id)->get();
       $refcommande=Str::random(6);
       $ttc=0;
       $prod=" ";
       foreach ($chariots as $item) {
        DB::table('commandes')->insert([
            'idcommande'=>$refcommande,
            'uid'=>$item->uid,
            'pid' => $item->pid,
            'name' =>$item->name,
            'desc'=>$item->desc,
            'price'=>$item->price,
            'image'=>$item->image,
            'etatdecommande'=>'inprogress'

        ]);
        $ttc+=$item->price;
       $prod.=$item->name.' || ';
        DB::table('chariots')->delete($item->id);
       }
       DB::table('factures')->insert([
        'user_id'=>Auth::user()->id,
        'commanderef'=>$refcommande,
        'client_id'=>$item->uid,
        'client_name' => Auth::user()->name,
        'produits'=>$prod,
        'ttc' =>$ttc,
        'datedefacture'=>Carbon::now(),
    ]);
      /*    */
        return redirect('client/carts')->with('progress','votre commende est encour de traitement..');
    }
}
