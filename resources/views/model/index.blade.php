@extends('layouts.app')

@section('content')

    <div class="card mt-5">
        <h2 class="card-header">Models | List</h2>
        <div class="card-body">

            @session('success')
                <div class="alert alert-success" role="alert"> {{ $value }} </div>
            @endsession

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success btn-sm" href="{{ route('models.create') }}"> <i class="fa fa-plus"></i> Create New
                    Models</a>
            </div>

            <table class="table table-bordered table-striped mt-4">
                <thead>
                    <tr>
                        <th width="80px">No.</th>
                        <th width="80px">Brand</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th width="250px">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($models as $model)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $model->brand_name }}</td>
                            <td>{{ $model->name }}</td>
                            <td><img src="{{ url('storage/' . $model->image) }}" height="50"></td>
                            <td>
                                <form action="{{ route('models.destroy', $model->id) }}" method="POST">

                                    <a class="btn btn-primary btn-sm" href="{{ route('models.edit', $model->id) }}"><i
                                            class="fa-solid fa-pen-to-square"></i> Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i>
                                        Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">There are no data.</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

            {!! $models->links() !!}

        </div>
    </div>
@endsection
