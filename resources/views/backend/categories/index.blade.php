@extends('backend.layout.mainAdminLayout')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Categories</h1>
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#createCategoryModal">Add New Category</button>
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
                        <th>Subcategories</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name_en }}</td>
                            <td>{{ $category->name_ar }}</td>
                            <td>
                                @foreach ($category->subcategories as $subcategory)
                                    <span class="badge badge-primary" style="cursor: pointer;" data-toggle="modal"
                                        data-target="#editSubcategoryModal{{ $subcategory->id }}">
                                        {{ $subcategory->name_en }} | {{ $subcategory->name_ar }}
                                    </span>
                                @endforeach
                            </td>
                            <td class="d-flex align-items-center justify-content-start" style="gap: 5px;">
                                <button class="btn btn-warning btn-sm" data-toggle="modal"
                                    data-target="#editCategoryModal{{ $category->id }}">Edit</button>
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                                <button class="btn btn-success btn-sm" data-toggle="modal"
                                    data-target="#addSubcategoryModal{{ $category->id }}">Subcategory</button>
                            </td>
                        </tr>

                        <!-- Edit Category Modal -->
                        <div class="modal fade" id="editCategoryModal{{ $category->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="editCategoryModalLabel{{ $category->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="name_en">Category Name (EN)</label>
                                                <input type="text" name="name_en" class="form-control"
                                                    value="{{ $category->name_en }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="name_ar">Category Name (AR)</label>
                                                <input type="text" name="name_ar" class="form-control"
                                                    value="{{ $category->name_ar }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="img_path">Category Image</label>
                                                <input type="file" name="img_path" class="form-control">
                                                @if ($category->img_path)
                                                    <small>Current Image: <img
                                                            src="{{ asset('storage/' . $category->img_path) }}"
                                                            alt="Category Image" width="50"></small>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Create Category Modal -->
                        <div class="modal fade" id="createCategoryModal" tabindex="-1" role="dialog"
                            aria-labelledby="createCategoryModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ route('admin.categories.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="createCategoryModalLabel">Add New Category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="name_en">Category Name (EN)</label>
                                                <input type="text" name="name_en" class="form-control"
                                                    placeholder="Enter category name in English" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="name_ar">Category Name (AR)</label>
                                                <input type="text" name="name_ar" class="form-control"
                                                    placeholder="Enter category name in Arabic" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="img_path">Category Image (Optional)</label>
                                                <input type="file" name="img_path" class="form-control">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Add Category</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Add Subcategory Modal -->
                        <div class="modal fade" id="addSubcategoryModal{{ $category->id }}" tabindex="-1"
                            role="dialog" aria-labelledby="addSubcategoryModalLabel{{ $category->id }}"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ route('admin.categories.addSubcategory', $category->id) }}"
                                        method="POST">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add Subcategory</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Subcategory Name (EN)</label>
                                                <input type="text" name="name_en" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Subcategory Name (AR)</label>
                                                <input type="text" name="name_ar" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Add Subcategory</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        @foreach ($category->subcategories as $subcategory)
                        <!-- Edit Subcategory Modal -->
                        <div class="modal fade" id="editSubcategoryModal{{ $subcategory->id }}" tabindex="-1"
                            role="dialog" aria-labelledby="editSubcategoryModalLabel{{ $subcategory->id }}"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ route('admin.categories.updateSubcategory', $subcategory->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Subcategory</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Subcategory Name (EN)</label>
                                                <input type="text" name="name_en" class="form-control"
                                                    value="{{ $subcategory->name_en }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Subcategory Name (AR)</label>
                                                <input type="text" name="name_ar" class="form-control"
                                                    value="{{ $subcategory->name_ar }}" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="d-flex justify-content-between w-100">
                                                <button type="button" class="btn btn-danger" 
                                                    onclick="confirmDelete({{ $subcategory->id }})">
                                                    Delete Subcategory
                                                </button>
                                                <div>
                                                    <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function confirmDelete(subcategoryId) {
            if (confirm('Are you sure you want to delete this subcategory?')) {
                fetch('{{ route('admin.subcategory.destroy', ':id') }}'.replace(':id', subcategoryId), {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        '_method': 'DELETE'
                    })
                }).then(response => {
                    if (response.ok) {
                        window.location.reload();
                    }
                }).catch(error => {
                    console.error('Error:', error);
                    alert('Failed to delete subcategory');
                });
            }
        }
        </script>
@endsection
