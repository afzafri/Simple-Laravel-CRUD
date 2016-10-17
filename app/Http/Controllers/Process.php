<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

use App\Http\Requests;

class Process extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //list all, select *
        $liststock = Stock::all();
        return view('pages.view',array('liststock'=>$liststock));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert data
        $stype = $request->input('stype');
        $sname = $request->input('sname');
        $ssize = $request->input('ssize');
        $squantity = $request->input('squantity');

        $instock = new Stock;

        $instock->STK_TYPE = $stype;
        $instock->STK_NAME = $sname;
        $instock->STK_SIZE = $ssize;
        $instock->STK_QTY = $squantity;

        $instock->save();

        echo "<script>alert('Data inserted!')</script>";
        return view('pages.home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //search data
        $STK_NAME = $request->input('sname');
        $search = Stock::where('STK_NAME','LIKE',"%$STK_NAME%")->get();

        return view('pages.res',array('search'=>$search));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //show update form
        $editstock = Stock::find($id);
        return view('pages.edit',array('editstock'=>$editstock));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //update data in db
        $sid = $request->input('sid');
        $stype = $request->input('stype');
        $sname = $request->input('sname');
        $ssize = $request->input('ssize');
        $squantity = $request->input('squantity');

        $upstock = Stock::find($sid);
        $upstock->STK_TYPE = $stype;
        $upstock->STK_NAME = $sname;
        $upstock->STK_SIZE = $ssize;
        $upstock->STK_QTY = $squantity;

        $upstock->save();
        echo "<script>alert('Data updated!')</script>";
        return $this->index();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //delete data
        $STK_ID = $request->input('delstock');

        $delstock = Stock::find($STK_ID);
        $delstock->delete();

        return $this->index();
    }
}
