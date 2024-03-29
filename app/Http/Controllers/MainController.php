<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
        $slides = Slide::all();
        return view("index", compact("slides"));
    }

    function katalog()
    {
        return view("katalog");
    }
    function about()
    {
        return view("about");
    }
    function award()
    {
        return view("award");
    }

    function ceostatement()
    {
        return view("ceo-statement");
    }

    function bankingIndex()
    {
        $category = "Banking Equipment";
        $pdf = "/pdf/banking.pdf";
        $code = "banking";
        $subCategories = Subcategory::where("category_id", 3)->get();
        return view("product", compact("subCategories", "category", "pdf", "code"));
    }

    function itIndex()
    {
        $category = "IT Equipment";
        $pdf = "/pdf/it.pdf";
        $code = "it";
        $subCategories = Subcategory::where("category_id", 1)->get();
        return view("product", compact("subCategories", "category", "pdf", "code"));
    }

    function officeIndex()
    {
        $category = "Office Equipment";
        $pdf = "/pdf/office.pdf";
        $code = "office";
        $subCategories = Subcategory::where("category_id", 2)->get();
        return view("product", compact("subCategories", "category", "pdf", "code"));
    }

    function machineIndex()
    {
        $category = "Machine Tools";
        $pdf = "/pdf/machine.pdf";
        $code = "machine";
        $subCategories = Subcategory::where("category_id", 4)->get();
        return view("product", compact("subCategories", "category", "pdf", "code"));
    }

    function bankingList($id)
    {
        $subCategory = subcategory::where("id", $id)->first();
        $subCategoryName = $subCategory->name;

        $data = Product::where("category_id", 3)
            ->whereJsonContains("subcategory_id", $id)
            ->simplePaginate(8);
        return view("list", compact("data", "subCategoryName"));
    }

    function itList($id)
    {
        $subCategory = subcategory::where("id", $id)->first();
        $subCategoryName = $subCategory->name;

        $data = Product::where("category_id", 1)
            ->whereJsonContains("subcategory_id", $id)
            ->simplePaginate(8);
        return view("list", compact("data",  "subCategoryName"));
    }

    function officeList($id)
    {
        $subCategory = subcategory::where("id", $id)->first();
        $subCategoryName = $subCategory->name;

        $data = Product::where("category_id", 2)
            ->whereJsonContains("subcategory_id", $id)
            ->simplePaginate(8);
        return view("list", compact("data",  "subCategoryName"));
    }

    function machineList($id)
    {
        $subCategory = subcategory::where("id", $id)->first();
        $subCategoryName = $subCategory->name;

        $data = Product::where("category_id", 4)
            ->whereJsonContains("subcategory_id", $id)
            ->simplePaginate(8);
        return view("list", compact("data",  "subCategoryName"));
    }

    function productDetail($id)
    {
        $data = Product::where("id", $id)->first();

        $subCategory = $data->subcategory_id;
        // $subCategory = json_decode($subCategory);

        $similarProduct = Product::where("category_id", $data->category_id)
            ->where("id", "!=", $data->id)
            ->whereJsonContains("subcategory_id", $subCategory)
            ->paginate(5);


        return view("product-detail", compact("data", "similarProduct"));
    }
}
