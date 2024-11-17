@extends('layouts.app')

@section('content')
    <div class="card mt-5">
        <h2 class="card-header">Edit Model</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('models.index') }}"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>

            <form action="{{ route('models.update', $model->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Name:</strong></label>
                    <input type="text" name="name" value="{{ $brand->name }}"
                        class="form-control @error('name') is-invalid @enderror" id="inputName" placeholder="Name">
                    @error('name')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Brand:</strong></label>
                    <select name="brand_id" class="form-control @error('brand_id') is-invalid @enderror" id="inputName">
                        <option value="">Select Brand</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                    @error('name')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Logo:</strong></label>
                    <textarea class="form-control @error('logo') is-invalid @enderror" style="height:150px" name="logo" id="inputDetail"
                        placeholder="Detail">{{ $brand->logo }}</textarea>
                    @error('logo')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
            </form>

        </div>
    </div>
@endsection
