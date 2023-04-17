<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategory::all();
        $categories = Category::all();

        return view('dashboard.category-subcategory', compact('subcategories' ,'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories|max:50|regex:/^[^0-9]*$/',
        ],[
            'name.regex' => 'The :attribute field must not contain any numeric characters.',
            'name.unique' => 'This category already exists.'
        ]);

        if($validator->fails()){
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $validator->validate();
        Category::create($data + ['slug' => Str::slug($data['name'])]);

        return redirect()->route('create.category')->with('added', 'Category "' . $data['name']. '" added successfully!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard.edit-category', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Category $category)
    {
        $validator = Validator::make($request->all(),[
            'name' => [
                'required',
                'max:50',
                Rule::unique('categories')->ignore($category->id)],
        ],
        [
            'name.unique' => 'This category already exists.'
        ]);

        if($validator->fails()){
            return Redirect::back()
            ->withErrors($validator)
            ->withInput();
        }

        $data = $validator->validated();
        $category->update($data + ['slug' => Str::slug($data['name'])]);

        return Redirect::route('create.category')->with('updated', 'Category "' . $category->name. '" updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('create.category')->with('deleted', 'Category "' . $category->name. '" deleted successfully!');
    }
}
