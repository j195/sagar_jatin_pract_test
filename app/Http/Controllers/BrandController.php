<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\BrandStoreRequest;
use App\Http\Requests\BrandUpdateRequest;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $brands = Brand::latest()->paginate(5);

        return view('brand.index', compact('brands'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandStoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        // If a file is uploaded, store it in the public storage
        if ($request->hasFile('logo')) {
            $filePath = \Storage::disk('public')->put('files/brands/info-files', request()->file('logo'));
            $validated['logo'] = $filePath;
        }
        Brand::create($validated);
        //$imageName = time().'.'.$request->logo->extension();
        //$request->logo->move(public_path('logo'), $imageName);
        return redirect()->route('brands.index')
                         ->with('success', 'Brand created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand): View
    {
        return view('brand.show',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand): View
    {
        return view('brand.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandUpdateRequest $request, Brand $brand): RedirectResponse
    {
        $validated = $request->validated();
        // If a file is uploaded, store it in the public storage
        if ($request->hasFile('logo')) {
            $filePath = \Storage::disk('public')->put('files/brands/info-files', request()->file('logo'));
            $validated['logo'] = $filePath;
        }
        $brand->update($validated);

        return redirect()->route('brands.index')
                        ->with('success','Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand): RedirectResponse
    {
        $brand->delete();

        return redirect()->route('brands.index')
                        ->with('success','Brand deleted successfully');
    }
}
