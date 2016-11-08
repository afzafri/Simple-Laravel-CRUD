<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;
use Validator, Input, Redirect; 

use App\Http\Requests;

class Process extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //show login form
    public function indexlogin()
    {
        return redirect('login');
    }

    //show homepage
    public function homepage()
    {
        return view('pages.home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //list all, select *
        $liststock = Stock::paginate(2); //change 2 to number of data you want to display in 1 page
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

        //get input and store into variables
        $stype = $request->input('stype');
        $sname = $request->input('sname');
        $ssize = $request->input('ssize');
        $squantity = $request->input('squantity');
        $file = $request->file('fileUpload');

        //rules for validate
        $rules = array(
          'image' => 'mimes:jpeg,jpg|required|max:3000' // jpg only,max 3000kb
        );

        $fileArray = array('image' => $file);

        //sent input and rules to validator
        $validator = Validator::make($fileArray, $rules);

        //create new object
        $instock = new Stock;

        //set all input to insert to db
        $instock->STK_TYPE = $stype;
        $instock->STK_NAME = $sname;
        $instock->STK_SIZE = $ssize;
        $instock->STK_QTY = $squantity;

        //if validate failed, show error and return back form, else, insert data and upload file.
        if($validator->fails())
        {
            echo "<script>alert('Data not inserted! Please choose correct image format.')</script>";
            return view('pages.home');
        }
        else
        {
             //save to db
            $instock->save();
            //upload photo
            $path = $file->move(public_path('/images'), $instock->STK_ID.'.jpg');

            echo "<script>alert('Data inserted!')</script>";
            return view('pages.home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $STK_NAME =  $request->input('sname');
        if($STK_NAME)
        {
            $search = Stock::where('STK_NAME','LIKE',"%$STK_NAME%")->paginate(2); //change 2 to number of data you want to display in 1 page

        return view('pages.search',array('search'=>$search));
        }
        else
        {
            return view('pages.search');
        }
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

        //delete image
        unlink(public_path("images/".$STK_ID.".jpg"));

        return $this->index();
    }
}
