<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->has('search'))
        {
            $data = karyawan::where('namadepan','LIKE', '%' .$request->search. '%')->paginate(10);
        }
        else
        {
            $data = karyawan::paginate(10);
        }
        
        return view ('karyawan', compact('data'));
    }

    public function insert()
    {
        return view ('insert');
    }

    public function insertpost (Request $request)
    {
        $this->validate($request,[
            'namadepan' => 'required|min:5|max:20',
            'namabelakang' => 'required|min:5|max:15',
            'perusahaan' => 'required|min:5|max:20',
            'tlp' => 'required|min:10|max:12',
        ]);
    
        //dd($request->all());
        karyawan::create($request->all());
        return redirect()->route('karyawan')->with('success', 'The Data Has Been Successfully Changed Boss..')  ;
    }

    public function show($id)
    {
        $data = Karyawan::find($id);
        //dd($data);
        return view ('show', compact('data'));
    }

    public function changeupdate($id)
    {
        $data = Karyawan::find($id);
        //dd($data);
        return view ('changeupdate', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Karyawan::find($id);
        //dd($data);
        $data->update($request->all());
        return redirect()->route('karyawan')->with('success', 'The Data Has Been Successfully Update Boss..')  ;

    }

    public function delete($id)
    {
        $data = Karyawan::find($id);
        //dd($data);
        $data->delete();
        return redirect()->route('karyawan')->with('success', 'The Data Has Been Successfully Delete Boss..')  ;

    }
}
