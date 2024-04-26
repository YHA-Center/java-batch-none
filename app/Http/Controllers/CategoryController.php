<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    //
    // compact - carry obj from database (variable name === compact(variable name) not $)
    // Category::all() = SELECT * FROM categories // obj
    // Category::get() = SELECT * FROM categories

    // factory and seeder

    // home page category
    public function index(){
        $categories = Category::all(); // get data from database
        // dd($categories);
        return view('backend.category.index', compact('categories')); // return to view
    }

    // create page
    public function create(){
        return view('backend.category.create');
    }

    // store data
    // Procedure
        /**
         * 1. validation
         * 2. form data -> array format
         * 3. store to database
         * 4. return view
         */
    public function store(Request $request){
        // dd($request->all());
        // 1. make validation
        Validator::make($request->all(), [
            'category_name' => 'required|min:2',
        ])->validate();

        // 2. form data -> array format
        $data = [
            'name' => $request->category_name,
        ];

        Category::create($data); // 3. store to database
        // return to view
        return redirect()->route("category.home")
        ->with('success', 'Created new category');
    }

    // protected function makeValidation(Request $request){
    //     // Validator::make($request->all(), rule, message)->validate(); // syntax
    //     // rule -> array format
    //     // message -> array format
    //     Validator::make($request->all(), [
    //         'category_name' => 'required',
    //     ])->validate();
    // }


    // delete category
    /*
        1. search/ find
        2. delete
        3. return
    */
    public function destory($id){
        // dd($id);
        $category = Category::find($id); // 1. search / find
        // dd($category->toArray());
        if(isset($category)){
            $category->delete(); // 2. delete
            return redirect()->route('category.home') // 3. return
            ->with('success', 'Delete success'); // session
        }else{
            return view('errors.500Page');
        }
    }

    // 1. show specific
    public function edit($id){
        // 1 .find
        // 2. show (with return view)
        $category = Category::where('id', $id)->first();
        // dd($category->toArray());
        return view('backend.category.edit', compact('category'));
    }

    // 2. update
    public function update(Request $request, $id){
        // 1. validation
        Validator::make($request->all(), [
            'category_name' => 'required|min:2|unique:categories,name,'.$id,
        ])->validate();
        // dd($request->toArray(), $id);
        // 2. find
        $category = Category::where('id', $id)->first();
        // 3. check
        if(isset($category)){
            $data = ['name' => $request->category_name]; // change array format
            $category->update($data); // update database
            return redirect()->route('category.home')
            ->with('success', 'Updated successfully');
        }else{
            return view('errors.500Page');
        }
    }


}
