<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\ImageSubcategory;

class CategoryController extends Controller
{
    
    public function categoryShow($Id)
    {
        $category = Category::find($Id);
        $subCategories = SubCategory::with('imageSubcategories')->where('category_id', $Id)->get();
        $categories = Category::all();
    
        // Array associativo per mappare nomi delle sottocategorie alle rotte
        $subCategoryRoutes = [
        'Cheese Tasting' => 'gastronomieexperience.cheesetasting',
        'Wine Tasting' => 'gastronomieexperience.winetasting',
        'Cocktail Masterclass' => 'gastronomieexperience.cocktailmasterclass',
        'Cooking class' => 'gastronomieexperience.cookingclass',
    ];
    
    if ($category->name === 'Transfer/Car Renting') {
        // carica l'immagine
        $category->load('image');
        
        // Reindirizza alla vista transfer_car_renting
        return view('transfer_car_renting', compact('category'));
    }

    if ($category->name === 'Tours') {
        // Carica l'immagine
        $category->load('image');
        
        // Reindirizza alla vista tours
        return view('tours', compact('category'));
    }

       return view('categoryshow', compact('category', 'subCategories', 'categories', 'subCategoryRoutes'));

    }
    

// funzioni subcategories relative alla categoria 'Gastronomie Experience'
//subcategory Cheese Tasting
    public function cheeseTasting(){
        $image = ImageSubCategory::find(1); //trova immagine collegata a sub cat 

        if ($image) {
            $categoryName = $image->subcategory->name;
        } else {
            $categoryName = null;
        }

        return view('gastronomieexperience.cheesetasting', compact('image', 'categoryName'));
    }

    public function wineTasting(){
        $image = ImageSubCategory::find(2);

        if ($image) {
            $categoryName = $image->subcategory->name;
        } else {
            $categoryName = null;
        }

        return view('gastronomieexperience.winetasting', compact('image', 'categoryName'));
    }

    public function cocktailMasterclass(){
        $image = ImageSubCategory::find(3);

        if ($image) {
            $categoryName = $image->subcategory->name;
        } else {
            $categoryName = null;
        }

        return view('gastronomieexperience.cocktailmasterclass', compact('image', 'categoryName'));
    }

    public function coockingClass(){
        $image = ImageSubCategory::find(4);

        if ($image) {
            $categoryName = $image->subcategory->name;
        } else {
            $categoryName = null;
        }

        return view('gastronomieexperience.cookingclass', compact('image', 'categoryName'));
    }
      
}
