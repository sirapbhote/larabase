<?php

namespace App\Http\Controllers\Inventory;

use App\Helpers\Alert;
use App\Http\Controllers\Controller;
use App\Modules\Invenstory\Entity\Category;
use Illuminate\Contracts\View\View;

use function PHPUnit\Framework\returnCallback;

class CategoryController extends Controller
{
  public function Add()
  {
    return view("inventory.category.add");
  }

  public function AddPost()
  {
    $name = request("name");
    $code = request("code");

    $category = new Category();
    $category->name = $name;
    $category->code = $code;
    $category->save();
    return redirect("/inventory/Category");
  }
  public function Index()
  {

    $data = Category::all();
    return view("inventory.Category.index", [
      'CategoeyList' => $data

    ]);
  }
  public function Edit()
  {
    $id = request("categoryId");
    $data = Category::find($id);
    return view("inventory.Category.edit", [
      'category' => $data
    ]);
  }
  public function Editpost()
  {
    $id = request('id');
    $name = request("name");
    $code = request("code");

    $category = Category::find($id);
    $category->name = $name;
    $category->code = $code;
    $category->save();
    return redirect('/inventory/Category');
  }
  public function Delete()
    {
      $id = request('categoryId');
      $category=Category::find($id);
      $category->delete();
      Alert::SetSuccessMessage("category deleteed");
      return redirect('/inventory/Category');

    }
  
}
