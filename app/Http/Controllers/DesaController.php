<?php

namespace App\Http\Controllers;

use App\Exports\DesaExport;
use Illuminate\Support\Facades\DB;
use App\Models\Desa;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $var = Desa::paginate(10);

        return view('App.viewdesa',['desa' => $var]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kecamatan = Kecamatan::all();

        return view('App.inputdesa',['kec'=>$kecamatan]);
        // return view('App.inputdesa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'namadesa'=> 'required',
            'kecamatan_id' => 'required'
        ]);

        // Desa::create([
        //     'nama'=> $request->namadesa,
        //     'kecamatan_id'=>$request->kecamatan_id,
        //     'timestamp'=>false
        // ]);

        DB::table('desa')->insert([
            'nama' => $request->namadesa,
            'kecamatan_id' => $request->kecamatan_id
        ]);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kec = Kecamatan::all();
        // $desa = Desa::where('desa_id','=',$id)->first();
        $desa_id = $id;
        $desa = Desa::find($desa_id);

        return view('App.editdesa',compact('kec','desa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $desa = Desa::find($id);
        $desa->nama = $request->namadesa;
        $desa->kecamatan_id = $request->kecamatan_id;
        // $desa->timestamps=false;
        $desa->save();

        return redirect('/');

    }

    public function export_excel(){
        return Excel::download(new DesaExport, 'daftarDesa.xlsx');
    }

    // public function export_pdf(){
    //     $desa = Desa::all();
    //     // $pdf = PDF::loadview
    //     $pdf = PDF::loadview('desa_pdf',['desa'=>$desa]);

    //     return $pdf->download('ListDesa');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('desa')->where('desa_id',$id)->delete();

        return back();
    }
}
