<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\bookdetails;

class bookcontroller extends Controller
{
    public function bookedit()
    {
        if(Auth::check())
        {
            $booktbdata = bookdetails::all();//Get all deta from table
            return view('editbookdetails')->with('bookdetabledata', $booktbdata);
        }

        return redirect("accesspage")->with('message', 'You are not allowed to access');
    }

    public function addbook(Request $request)
    {
        $bookdetails = new bookdetails;

        $bookdetails->bookname=$request->bookname;
        $bookdetails->authorname=$request->authorname;
        $bookdetails->details=$request->details;

        $fileName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $fileName);

        $bookdetails->filename = $fileName;

        $bookdetails->save();

        return redirect()->back()->with('message', "Book Details Added Sucessfully");
    }

    public function bookdelete($id)
    {
        $bookdetails = bookdetails::find($id);
        $bookdetails->delete();
        return redirect()->back()->with('message', "Book Details Delete Sucessfully");
    }

    public function bookupdate(bookdetails $bookdetails)
    {
        if(Auth::check())
        {
            $booktbdata = bookdetails::find($id);

            return view('updatebookdetails')->with('bookdetabledata', $booktbdata);
        }

    }
}
