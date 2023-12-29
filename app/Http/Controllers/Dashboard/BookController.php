<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use App\Models\Book;
use App\Models\Category;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:book-list|book-create|book-edit|book-delete', ['only' => ['index','store']]);
        $this->middleware('permission:book-create', ['only' => ['create','store']]);
        $this->middleware('permission:book-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:book-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::with('categories')->get();
        return view('dashboard.books.index',compact('books'))->with('i');
    }

    public function getBooks(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = Book::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Book::select('count(*) as allcount')->where('title', 'like', '%' . $searchValue . '%')->count();


            $records = Book::with('categories','grades')->where('title', 'like', '%' . $searchValue . '%')->orderBy($columnName, $columnSortOrder)
            ->skip($start)
            ->take($rowperpage)->get();



        $data_arr = array();

        foreach ($records as $record) {
            $id = $record->id;
            $title = $record->title;
            $category = $record->categories?->name;
            $grade = $record->grades?->name;
            $isbn = $record->isbn;


            $actions =  '<a href="' . route('books.show', $id) . '"
            class="inline-flex items-center px-3 mx-2 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-blue-500 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >Show</a>';

            $actions = $actions. '<a href="' . route('books.edit', $id) . '"
            class="inline-flex items-center px-3 mx-2 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-green-400 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >Edit</a>';


            // $actions = '<a href="" class="button gray ripple-effect margin-right-5"
            // data-tippy-placement="top" data-tippy="" data-original-title="Edit"><i class="icon-feather-eye"></i></a>';


            //     $actions =  $actions . '<a href=""
            // class="button gray ripple-effect margin-right-5" data-tippy-placement="top"
            // data-tippy="" data-original-title="Edit"><i class="icon-feather-edit"></i></a>';

            if (Auth::user()->hasPermissionTo('book-delete')) {

                $actions = $actions .   '<form method="POST" action="' . route('books.destroy', $id) . '" style="display:inline">
                                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="button" id="aa"
                                        class="inline-flex items-center px-3 mx-2 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Delete
                                    </button>
                                    </form>';

            }

            $data_arr[] = array(
                "id" => $id,
                "title" => $title,
                "category" => $category,
                "grade" => $grade,
                "isbn" => $isbn,
                "actions" => $actions,
            );
        }
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );

        echo json_encode($response);
        exit;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::get();
        $grades = Grade::all();
        $categories = Category::all();

        return view('dashboard.books.create',compact('books','grades','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'grade'=>'required',
            'category'=>'required',
            'image'=>'required',
            'file'=>'required',
        ],
        [
        'title.required' => 'Title is required',
        'description.required' => 'Description is required',
        'grade.required' => 'Grade is required',
        'category.required' => 'Category is required',
        'image.required' => 'Image is required',
        'file.required' => "file is required",


        ]);

        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);

        // $fileName = time().'.'.$request->file->extension();
        // $request->file->move(public_path('books'), $fileName);

        $bookData = new Book();
        $bookData->title = $request->title;
        $bookData->desc = $request->description;
        $bookData->grade = $request->grade;
        $bookData->category_id  = $request->category;
        $bookData->image  = $request->book_main_image_hidden;
        $bookData->pdf  = $request->book_main_file_hidden;
        $bookData->link  = $request->link;
        $bookData->isbn  = $request->isbn;
        $bookData->save();

         return redirect()->route('books.index')->with('success','Book added succesfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::with('categories', 'grades')->find($id);
        return view('dashboard.books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::with('grades','categories')->where('id',$id)->first();
        $grades = Grade::all();
        $categories= Category::all();
        return view('dashboard.books.edit',compact('book','grades','categories'));
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
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'grade'=>'required',
            'category'=>'required',

        ],
        [
        'title.required' => 'Title is required',
        'description.required' => 'Description is required',
        'grade.required' => 'Grade is required',
        'category.required' => 'Category is required',


        ]);

        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);

        // $fileName = time().'.'.$request->file->extension();
        // $request->file->move(public_path('books'), $fileName);



        $bookData = Book::find($id);
        $bookData->title = $request->title;
        $bookData->desc = $request->description;
        $bookData->grade = $request->grade;
        $bookData->category_id  = $request->category;
        $bookData->image  = $request->book_main_image_hidden;
        $bookData->pdf  = $request->book_main_file_hidden;
        $bookData->link  = $request->link;
        $bookData->isbn  = $request->isbn;

        $bookData->update();
        return redirect()->route('books.index')->with('success','Book Updated success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookData = Book::find($id)->delete();
        return redirect()->route('books.index')->with('success', "Book delete success");
    }
}
