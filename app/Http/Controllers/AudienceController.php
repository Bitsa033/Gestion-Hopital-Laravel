<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use App\Http\Requests\StoreAudienceRequest;
use App\Http\Requests\UpdateAudienceRequest;
use App\Http\Resources\Audience as ResourcesAudience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AudienceController extends Controller
{
    /**
     * Display all data audiences.
     */
    public function index()
    {
        if (!Auth::user()) {
            return redirect('/');
        }

        $audiences= Audience::all();
        
        return view('audiences.show',[
            'audiences'=>$audiences,
        ]);
    }

    /**
     * Show one data audience.
     */
    public function showAudience($id) {
        if (!Auth::user()) {
            return redirect('/');
        }

        $audience= Audience::findOrfail($id);
        
        return view('audiences.edit',['audience'=>$audience]);
    }

    /**
     * Display the specified data audience by name.
     */
    public function showByName($name)
    {
        if (!is_string($name)) {
            return "La recherche doit se faire à partir du nom !";
        } else {
            $audience= DB::table('audiences')->where('nom_patient', $name)->get();
            return new ResourcesAudience($audience);
        }
        
    }

    /**
     * Print all data audiences.
     */
    public function printAudiences()
    {
        $audiences= Audience::all();
        if (!Auth::user()) {
            return redirect('/');
        }
        
        return view('printer.audiences',[
            'audiences'=>$audiences,
        ]);
    }
    
    /**
     * Create a newly audience.
     */
    public function createAudience() {

        if (!Auth::user()) {
            return redirect('/');
        }
        return view('audiences.new',['erreur'=>'']);
    }

    /**
     * Store a newly created audience in storage.
     */
    public function storeAudience(StoreAudienceRequest $request)
    {
        try {
            
            $request->validated($request->all());
            $message='';
            if ($request->message == null) {
                $message='Rien à signaler !';
            }
            else {
               $message=$request->message;
            }
            Audience::create([
                'nom_patient'=>$request->nom_patient,
                'qualite'=>$request->qualite,
                'audience_type'=>$request->audience_type,
                'objet'=>$request->objet,
                'message'=>$message,
                'nom_personnel'=>$request->nom_personnel
            ]);
    
            return redirect('audiences')->with('success','Donnée modifiée avec sucès!');;

        } catch (\Throwable $th) {
            // throw $th;
            $erreur=$th->getMessage();
           
            return view('audiences.new',['erreur'=>$erreur]);
            
        }

    }

    /**
     * Update the specified data audience in storage.
     */
    public function updateAudience(UpdateAudienceRequest $request, $id)
    {
        $request->validated($request->all());
        $audience= Audience::find($id);
        $message='';
        if ($request->message == null) {
            $message='Rien à signaler !';
        }
        else {
            $message=$request->message;
        }
        
        $audience->update([
            'nom_patient'=>$request->nom_patient,
                'qualite'=>$request->qualite,
                'audience_type'=>$request->audience_type,
                'objet'=>$request->objet,
                'message'=>$message,
                'nom_personnel'=>$request->nom_personnel
        ]);

        return redirect('audiences')->with('success','Donnée modifiée avec sucès!');
    }

    /**
     * Remove the specified audience from storage.
     */
    public function deleteAudience($id)
    {
        Audience::destroy($id);
        return redirect('audiences')->with('success','Donnée supprimée avec sucès!');
    }
}
