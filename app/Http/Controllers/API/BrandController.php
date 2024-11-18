<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Brand;
use Validator;
use App\Http\Resources\BrandResource;
use Illuminate\Http\JsonResponse;

class BrandController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $brands = Brand::all();
        return $this->sendResponse(BrandResource::collection($brands), 'Brands retrieved successfully.');
    }

    public function brandDetails(): JsonResponse
    {
        $brands = Brand::with('CarModels')->get();
        return response()->json($brands, 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'logo' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $brand = Brand::create($input);

        return $this->sendResponse(new BrandResource($brand), 'Brand created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        $brand = Brand::find($id);

        if (is_null($brand)) {
            return $this->sendError('Brand not found.');
        }

        return $this->sendResponse(new BrandResource($brand), 'Brand retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand): JsonResponse
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'logo' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $brand->name = $input['name'];
        $brand->logo = $input['logo'];
        $brand->save();

        return $this->sendResponse(new BrandResource($brand), 'Brand updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand): JsonResponse
    {
        $brand->delete();

        return $this->sendResponse([], 'Brand deleted successfully.');
    }
}
