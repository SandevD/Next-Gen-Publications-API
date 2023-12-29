<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return Book::with('categories', 'grades')->orderBy('title','ASC')->paginate(12);
    }

    public function findbooks($id){
        $data = Book::where('category_id', $id)->get();
        return response()->json($data);
    }

    public function singleBook($id){
        $data = Book::where('id', $id)->get();
        return response()->json($data);
    }
    public function searchBooks(Request $request){

        if(isset($request->title)){
            $searchtitle = $request->title;
        }else{
            $searchtitle = '%';
        }

        if(isset($request->category)){
            $searchCategory = $request->category;
        }else{
            $searchCategory = '%';
        }

        if(isset($request->grade)){
            $searchGrade = $request->grade;
        }else{
            $searchGrade = '%';
        }

        $searchBookdata = Book::with('categories', 'grades')->where('title', 'like', '%' . $searchtitle . '%')->
                                where('category_id', 'LIKE', $searchCategory)->
                                where('grade', 'LIKE', $searchGrade)->
                                orderBy('title', 'ASC')->
                                paginate(12);
        return response()->json($searchBookdata);

    }
    
    public function singleBookFile($id){

        //return response()->json('pdf');
        $a = $id;

        // $headers = [
        //     'Content-Type' => 'application/pdf',
        // ];

        $getFile = Book::where('id', $id)->first()?->pdf;
        return response()->json($getFile);
    }
}
