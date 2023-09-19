<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\Categorie;

use Illuminate\Support\Str;
use Illuminate\Http\Request;



class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }
    

    public function test()
    {
        return ('reservation');
    }


     /**
      * Summary of index2
      * @return string
      */
     public function index2()
    {
        return view ('frontend/contact');
    }
    public function ajoutSite()
    {
        $categories = categorie::all();
        return view('ajoutSite',compact('categories'));

    }
    public function ajout(Request $request){
        $site=new Site();
        $site->nom=$request->input('nom');
        $site->photo=$request->input('photo');
        $site->description=$request->input('description');
        $site->localisation=$request->input('localisation');
        $site->category_id = $request->input('category_id');

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName); // Déplacez l'image dans le dossier public/images
            $site->photo = $imageName; // Sauvegardez le nom du fichier dans la base de données
        }
           $site->save();
          if ($site) {
            //   return redirect()->route('produitliste');
              //return back()->with('ok', 'enregistré avec succes.');
          } else {
              return back()->with('non_ok', "Une erreur s'est produite et l'enregistrement à échoué.");
          }
        }

            
            
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        //
    }
}
