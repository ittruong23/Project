<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caterogy;
use Cyvelnet\Laravel5Fractal\Facades\Fractal;
use App\Transformers\CatetogyTransformer;
use App\Http\Requests\Caterogy\StoreCategoryRequest;

class CategoryController extends Controller
{

    public function index() {
        $caterogy = Caterogy::all();
        
        return Fractal::collection($caterogy, new CatetogyTransformer());
    }

    public function store(StoreCategoryRequest $request) {
        $caterogy = new Caterogy();
        $caterogy->auth_id = $request->user()->id;
        $caterogy->title = $request->title;
        $caterogy->save();
        
        return Fractal::item($caterogy, new CatetogyTransformer());
    }

    public function show() {
        
    }

    public function update() {
        
    }

    public function destroy() {
        
    }
}
