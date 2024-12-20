<?php
namespace App\Http\Controllers;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a list of all categories.
     */
    public function index()
    {
        // Fetch all categories
        $categories = Category::all();

        // Pass categories to the view
        return view('categories.index', compact('categories'));
    }

    /**
     * Display a specific category and its meditations.
     *
     * @param Category $category
     */
    public function show(Category $category)
    {
        // Eager load meditations for the category
        $meditations = $category->meditations;

        // Pass the category and its meditations to the view
        return view('categories.show', compact('category', 'meditations'));
    }
}
