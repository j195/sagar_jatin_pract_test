<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\CarModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\ModelStoreRequest;
use App\Http\Requests\ModelUpdateRequest;
use Carbon\Carbon;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $models = CarModel::select(

            "models.id",

            "models.name",

            "models.image",

            "models.created_at as created",

            "brands.name as brand_name",

        )

        ->join("brands", "brands.id", "=", "models.brand_id")
        ->latest('models.created_at')->paginate(5);
        //print_r($models);die;

        return view('model.index', compact('models'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $brands = Brand::where('deleted_at',NULL)->get();
        return view('model.create',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModelStoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        // If a file is uploaded, store it in the public storage
        if ($request->hasFile('image')) {
            $filePath = \Storage::disk('public')->put('files/models/info-files', request()->file('image'));
            $validated['image'] = $filePath;
        }
        CarModel::create($validated);

        return redirect()->route('models.index')
                         ->with('success', 'Model created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Model $model): View
    {
        return view('model.show',compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarModel $model): View
    {   $brands = Brand::where('deleted_at',NULL)->get();
        return view('model.edit',compact('model', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModelUpdateRequest $request, Model $model): RedirectResponse
    {
        $model->update($request->validated());

        return redirect()->route('models.index')
                        ->with('success','Model updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarModel $model): RedirectResponse
    {
        $model->delete();

        return redirect()->route('models.index')
                        ->with('success','Model deleted successfully');
    }
}
