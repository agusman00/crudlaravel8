<?php

namespace App\Http\Controllers;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->has('search'))
        {
            $data = Perusahaan::where('nama','LIKE', '%' .$request->search. '%')->paginate(10);
        }
        else
        $data = Perusahaan::paginate(10);
        //dd($foto);
        return view ('perusahaan/perusahaan', compact('data'));
    }
    public function insertp()
    {
        return view ('perusahaan/insertp');
    }
    public function insertppost (Request $request)
    {

        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'email' => 'required|min:5|max:15',
            'foto' => 'required|mimes:jpg,bmp,png',
        ]);
        //dd('berhasil');

        //dd($request->all());
        $data= Perusahaan::create($request->all());
        if($request->hasFile('foto'))
        {
            //$file = $request->foto->getClientOriginalName();
            //$request->foto->storeAs('thumbnail',$file);
            $request->file('foto')->move('logo/', $request->file('foto')->getClientOriginalName());
            $data -> foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        };
        return redirect()->route('perusahaan')->with('success', 'The Data Has Been Successfully Changed Boss..')  ;
    }
    public function showp($id)
    {
        $data = Perusahaan::find($id);
        //dd($data);
        return view ('perusahaan/showp', compact('data'));
    }
    public function changeupdatep($id)
    {
        $data = Perusahaan::find($id);
        //dd($data);
        return view ('perusahaan/changeupdatep', compact('data'));
    }
    public function updatep(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'foto' => 'mimes:jpg,jpeg,bmp,png,svg',
        ]);
        $data = Perusahaan::find($id);
        //dd($data);
        $data->update($request->all());
        if($request->hasFile('foto'))
        {
            $request->file('foto')->move('logo/', $request->file('foto')->getClientOriginalName());
            $data -> foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        };
        return redirect()->route('perusahaan')->with('success', 'The Data Has Been Successfully Update Boss..')  ;

    }

    public function deletes($id)
    {
        $data = Perusahaan::find($id);
        //dd($data);
        $data->delete();
        return redirect()->route('perusahaan')->with('success', 'The Data Has Been Successfully Delete Boss..')  ;

    }
}
