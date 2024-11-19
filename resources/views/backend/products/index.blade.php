@extends('backend.layout.mainAdminLayout')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Products</h1>
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#createProductModal">Add New Product</button>
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name (EN)</th>
                    <th>Name (AR)</th>
                    <th>Subcategory</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name_en }}</td>
                        <td>{{ $product->name_ar }}</td>
                        <td>{{ $product->subcategory->name_en }}</td>
                        <td>
                            @if ($product->img_path)
                                <img src="{{ asset('storage/' . $product->img_path) }}" alt="Product Image" width="50">
                            @else
                                No Image
                            @endif
                        </td>
                        <td style="display: flex; gap:5px;">
                            <button class="btn btn-warning btn-sm" data-toggle="modal"
                                data-target="#editProductModal{{ $product->id }}">Edit</button>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Add pagination links -->
    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
    
    </div>

    <!-- Create Product Modal -->
    <div class="modal fade" id="createProductModal" tabindex="-1" role="dialog" aria-labelledby="createProductModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createProductModalLabel">Add New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name_en">Name (EN)</label>
                            <input type="text" name="name_en" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="name_ar">Name (AR)</label>
                            <input type="text" name="name_ar" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description_en">Description (EN)</label>
                            <textarea name="description_en" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description_ar">Description (AR)</label>
                            <textarea name="description_ar" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="subcategory_id">Subcategory</label>
                            <select name="subcategory_id" class="form-control" required>
                                @foreach ($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}">{{ $subcategory->name_en }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="img_path">Image</label>
                            <input type="file" name="img_path" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        {
    border: none;
}
    </style>
@endsection
