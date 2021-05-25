@extends('layouts.admin')

@section('module')
    Product Settings
@endsection

@section('before-path')
    Dashboard
@endsection

@section('title')
    Product Settings
@endsection

@section('breadcumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-capitalize"><a href="{{route('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item active text-capitalize" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
@endsection

@section('style')
    <style>

    </style>
@endsection

@section('content')
<div class="row">

    {{--    products list card start--}}
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header border-bottom-0 py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Products List</h6>

                <div class="d-flex justify-content-between">
                    <!-- Trigger Button Create Category modal -->
                    <button type="button" class="btn btn-sm btn-outline-primary text-capitalize mr-3" data-toggle="modal" data-target="#CreateProductModal">
                        <i class="fa fa-plus-circle"></i> Add Product
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="CreateProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form">
                                        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="product" class="text-capitalize">Name</label>
                                                        <input type="text" name="product" class="form-control @error('product') is-invalid @enderror"
                                                               id="product"
                                                               placeholder="Enter product name" value="{{ old('product') }}">
                                                        @error('product')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong> <span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="category_id" class="text-capitalize">Category</label>
                                                        <select class="custom-select mr-sm-2 @error('category_id') is-invalid @enderror" id="category_id"
                                                                name="category_id">
                                                            <option selected disabled>--Select Category--</option>
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('doctor')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong> <span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="sub_category_id" class="text-capitalize">Sub-Category</label>
                                                        <select class="custom-select mr-sm-2 @error('sub_category_id') is-invalid @enderror" id="sub_category_id"
                                                                name="sub_category_id">
                                                            <option selected disabled>--Select Sub-Category--</option>
                                                            @foreach($subCategories as $subCategory)
                                                                <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('sub_category_id')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong> <span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="unit_id" class="text-capitalize">Unit</label>
                                                        <select class="custom-select mr-sm-2 @error('unit_id') is-invalid @enderror" id="unit_id"
                                                                name="unit_id">
                                                            <option selected disabled>--Select Unit--</option>
                                                            @foreach($units as $unit)
                                                                <option value="{{$unit->id}}">{{$unit->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('unit_id')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong> <span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="summary" class="text-capitalize">Summary</label>
                                                        <textarea type="text" name="summary" class="form-control @error('summary') is-invalid @enderror"
                                                               id="summary"
                                                                  placeholder="Enter product summary" value="{{ old('summary') }}"></textarea>
                                                        @error('summary')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong> <span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="description" class="text-capitalize">Description</label>
                                                        <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                                                                  id="description"
                                                                  placeholder="Enter product description" value="{{ old('description') }}"></textarea>
                                                        @error('description')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong> <span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="logo" class="text-capitalize">Preview</label>
                                                        <div class="img-thumbnail">
                                                            <img src="image" alt="logo" class="img-fluid" id="subCategoryPreview" style="min-width: 100%;max-width: 100%;
        max-height: 179px; min-height: 179px;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="photo"
                                                                       class="form-control @error('photo') is-invalid @enderror"
                                                                       id="subCategoryPhoto"
                                                                       placeholder="Enter Patient photo" @change="fileChange">
                                                                @error('photo')
                                                                <div class="invalid-feedback">
                                                                    <strong>Warning! </strong>{{$message}}
                                                                </div>
                                                                @enderror

                                                            </div>
                                                            <div class="input-group-append">
                                                    <span class="input-group-text bg-gradient-primary text-light"
                                                          id="">Upload Logo</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Product</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable table-striped table-hover" id="dataTable" width="100%" cellspacing="0"
                                       role="grid" aria-describedby="dataTable_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">Sl
                                        </th>
                                        <th class="sorting text-center text-capitalize" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Position: activate to sort column ascending">
                                            thumbnail
                                        </th>
                                        <th class="sorting text-center text-capitalize" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending">
                                            name
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Age: activate to sort column ascending">P. Count
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Age: activate to sort column ascending">Category Name
                                        </th>
                                        <th rowspan="1" colspan="1" class="text-center">Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($subCategories as $subCategory)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1 text-center">{{$loop->iteration}}</td>
                                            <td class="sorting_1 text-center">
                                                <div class="img-thumbnail" style="width: 110px;">
                                                    <img src="{{$subCategory->thumbnail}}" alt="thumbnail" class="img-fluid" id="preview">
                                                </div>
                                            </td>
                                            <td class="sorting_1 text-center">{{$subCategory->name}}</td>
                                            <td class="sorting_1 text-center">
                                                20
                                            </td>
                                            <td class="sorting_1 text-center">
                                                {{$subCategory->category->name}}
                                            </td>
                                            <td>
                                                <div class="btn-group d-flex justify-content-center">
                                                    <a href="#" class="btn btn-sm btn-outline-warning mr-3"><i class="fa fa-edit"></i></a>
                                                    <form action="{{route('subCategory.destroy',[$subCategory->id])}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-7">
                                {{$subCategories->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    products list card end--}}

    {{--    categories list card start--}}
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header border-bottom-0 py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Category List</h6>

                <div class="d-flex justify-content-between">
                    <!-- Trigger Button Create Category modal -->
                    <button type="button" class="btn btn-sm btn-outline-primary text-capitalize mr-3" data-toggle="modal" data-target="#CreateCategoryModal">
                        <i class="fa fa-plus-circle"></i> Add Category
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="CreateCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form">
                                        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name" class="text-capitalize">Name</label>
                                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                                               id="name"
                                                               placeholder="Enter Category name" value="{{ old('name') }}">
                                                        @error('name')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong> <span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="logo" class="text-capitalize">Preview</label>
                                                        <div class="img-thumbnail">
                                                            <img src="image" alt="logo" class="img-fluid" id="preview" style="min-width: 100%;max-width: 100%;
        max-height: 179px; min-height: 179px;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="photo"
                                                                       class="form-control @error('photo') is-invalid @enderror"
                                                                       id="photo"
                                                                       placeholder="Enter Patient photo" @change="fileChange">
                                                                @error('photo')
                                                                <div class="invalid-feedback">
                                                                    <strong>Warning! </strong>{{$message}}
                                                                </div>
                                                                @enderror

                                                            </div>
                                                            <div class="input-group-append">
                                                    <span class="input-group-text bg-gradient-primary text-light"
                                                          id="">Upload Logo</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Category</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable table-striped table-hover" id="dataTable" width="100%" cellspacing="0"
                                       role="grid" aria-describedby="dataTable_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">Sl
                                        </th>
                                        <th class="sorting text-center text-capitalize" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Position: activate to sort column ascending">
                                            thumbnail
                                        </th>
                                        <th class="sorting text-center text-capitalize" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending">
                                            name
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Age: activate to sort column ascending">SC. Count
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Age: activate to sort column ascending">P. Count
                                        </th>
                                        <th rowspan="1" colspan="1" class="text-center">Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1 text-center">{{$loop->iteration}}</td>
                                            <td class="sorting_1 text-center">
                                                <div class="img-thumbnail" style="width: 110px;">
                                                    <img src="{{$category->thumbnail}}" alt="thumbnail" class="img-fluid" id="preview">
                                                </div>
                                            </td>
                                            <td class="sorting_1 text-center">{{$category->name}}</td>
                                            <td class="sorting_1 text-center">
                                               {{$category->subcategories->count()}}
                                            </td>
                                            <td class="sorting_1 text-center">
                                               3
                                            </td>
                                            <td>
                                                <div class="btn-group d-flex justify-content-center">
                                                    <a href="#" class="btn btn-sm btn-outline-warning mr-3"><i class="fa fa-edit"></i></a>
                                                    <form action="{{route('category.destroy',[$category->id])}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-7">
                                {{$categories->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    categories list card end--}}

    {{--    Sub-categories list card start--}}
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header border-bottom-0 py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Sub-Category List</h6>

                <div class="d-flex justify-content-between">
                    <!-- Trigger Button Create Category modal -->
                    <button type="button" class="btn btn-sm btn-outline-primary text-capitalize mr-3" data-toggle="modal" data-target="#CreateSubCategoryModal">
                        <i class="fa fa-plus-circle"></i> Add Sub-Category
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="CreateSubCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Sub-Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form">
                                        <form action="{{ route('subCategory.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name" class="text-capitalize">Name</label>
                                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                                               id="name"
                                                               placeholder="Enter Sub-Category name" value="{{ old('name') }}">
                                                        @error('name')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong> <span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="category_id" class="text-capitalize">Category</label>
                                                        <select class="custom-select mr-sm-2 @error('category_id') is-invalid @enderror" id="category_id"
                                                                name="category_id">
                                                            <option selected disabled>--Select Category--</option>
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('doctor')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong> <span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="logo" class="text-capitalize">Preview</label>
                                                        <div class="img-thumbnail">
                                                            <img src="image" alt="logo" class="img-fluid" id="subCategoryPreview" style="min-width: 100%;max-width: 100%;
        max-height: 179px; min-height: 179px;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="photo"
                                                                       class="form-control @error('photo') is-invalid @enderror"
                                                                       id="subCategoryPhoto"
                                                                       placeholder="Enter Patient photo" @change="fileChange">
                                                                @error('photo')
                                                                <div class="invalid-feedback">
                                                                    <strong>Warning! </strong>{{$message}}
                                                                </div>
                                                                @enderror

                                                            </div>
                                                            <div class="input-group-append">
                                                    <span class="input-group-text bg-gradient-primary text-light"
                                                          id="">Upload Logo</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Category</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable table-striped table-hover" id="dataTable" width="100%" cellspacing="0"
                                       role="grid" aria-describedby="dataTable_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">Sl
                                        </th>
                                        <th class="sorting text-center text-capitalize" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Position: activate to sort column ascending">
                                            thumbnail
                                        </th>
                                        <th class="sorting text-center text-capitalize" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending">
                                            name
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Age: activate to sort column ascending">P. Count
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Age: activate to sort column ascending">Category Name
                                        </th>
                                        <th rowspan="1" colspan="1" class="text-center">Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($subCategories as $subCategory)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1 text-center">{{$loop->iteration}}</td>
                                            <td class="sorting_1 text-center">
                                                <div class="img-thumbnail" style="width: 110px;">
                                                    <img src="{{$subCategory->thumbnail}}" alt="thumbnail" class="img-fluid" id="preview">
                                                </div>
                                            </td>
                                            <td class="sorting_1 text-center">{{$subCategory->name}}</td>
                                            <td class="sorting_1 text-center">
                                                20
                                            </td>
                                            <td class="sorting_1 text-center">
                                                {{$subCategory->category->name}}
                                            </td>
                                            <td>
                                                <div class="btn-group d-flex justify-content-center">
                                                    <a href="#" class="btn btn-sm btn-outline-warning mr-3"><i class="fa fa-edit"></i></a>
                                                    <form action="{{route('subCategory.destroy',[$subCategory->id])}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-7">
                                {{$subCategories->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    Sub-categories list card end--}}

    {{--    colors list card start--}}
    <div class="col-md-3">
        <div class="card shadow mb-4">
            <div class="card-header border-bottom-0 py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary text-capitalize">colors List</h6>

                <div class="d-flex justify-content-between">
                    <!-- Trigger Button Create Category modal -->
                    <button type="button" class="btn btn-sm btn-outline-primary text-capitalize mr-3" data-toggle="modal" data-target="#CreateColorModal">
                        <i class="fa fa-plus-circle"></i> Add color
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="CreateColorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Color</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form">
                                        <form action="{{ route('color.store') }}" method="post">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="color" class="text-capitalize">Name</label>
                                                        <input type="text" name="color" class="form-control @error('color') is-invalid @enderror"
                                                               id="color"
                                                               placeholder="Enter color name" value="{{ old('color') }}">
                                                        @error('color')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong> <span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="color_code" class="text-capitalize">Color Code</label>
                                                        <input type="text" name="color_code" class="form-control @error('color_code') is-invalid @enderror"
                                                               id="color_code"
                                                               placeholder="Enter Color Code without #" value="{{ old('color_code') }}">
                                                        @error('color_code')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong> <span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary text-capitalize">Save color</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable table-striped table-hover" id="dataTable" width="100%" cellspacing="0"
                                       role="grid" aria-describedby="dataTable_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">Sl
                                        </th>
                                        <th class="sorting text-center text-capitalize" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending">
                                            name
                                        </th>
                                        <th class="sorting text-center text-capitalize" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending">
                                            color
                                        </th>
                                        <th rowspan="1" colspan="1" class="text-center">Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($colors as $color)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1 text-center">{{$loop->iteration}}</td>
                                            <td class="sorting_1 text-center text-capitalize">{{$color->name}}</td>
                                            <td class="sorting_1 text-center">
                                                <div style="background: {{$color->color_code}};height: 30px;width: 30px;border: 1px solid #999999;"></div>
                                            </td>
                                            <td>
                                                <div class="btn-group d-flex justify-content-center">
                                                    <a href="#" class="btn btn-sm btn-outline-warning mr-3"><i class="fa fa-edit"></i></a>
                                                    <form action="{{route('color.destroy',[$color->id])}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-7">
                                {{$colors->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    colors list card end--}}

    {{--    sizes list card start--}}
    <div class="col-md-3">
        <div class="card shadow mb-4">
            <div class="card-header border-bottom-0 py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary text-capitalize">Sizes List</h6>

                <div class="d-flex justify-content-between">
                    <!-- Trigger Button Create Category modal -->
                    <button type="button" class="btn btn-sm btn-outline-primary text-capitalize mr-3" data-toggle="modal" data-target="#CreateSizeModal">
                        <i class="fa fa-plus-circle"></i> Add Size
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="CreateSizeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Size</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form">
                                        <form action="{{ route('size.store') }}" method="post">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="size" class="text-capitalize">Name</label>
                                                        <input type="text" name="size" class="form-control @error('size') is-invalid @enderror"
                                                               id="size"
                                                               placeholder="Enter size name" value="{{ old('size') }}">
                                                        @error('size')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong> <span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="short_name" class="text-capitalize">Short name</label>
                                                        <input type="text" name="short_name" class="form-control @error('short_name') is-invalid @enderror"
                                                               id="short_name"
                                                               placeholder="Enter Color short name" value="{{ old('short_name') }}">
                                                        @error('short_name')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong> <span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary text-capitalize">Save Size</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable table-striped table-hover" id="dataTable" width="100%" cellspacing="0"
                                       role="grid" aria-describedby="dataTable_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">Sl
                                        </th>
                                        <th class="sorting text-center text-capitalize" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending">
                                            name
                                        </th>
                                        <th class="sorting text-center text-capitalize" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending">
                                            short name
                                        </th>
                                        <th rowspan="1" colspan="1" class="text-center">Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sizes as $size)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1 text-center">{{$loop->iteration}}</td>
                                            <td class="sorting_1 text-center text-capitalize">{{$size->name}}</td>
                                            <td class="sorting_1 text-center">
                                                {{$size->short_name}}
                                            </td>
                                            <td>
                                                <div class="btn-group d-flex justify-content-center">
                                                    <a href="#" class="btn btn-sm btn-outline-warning mr-3"><i class="fa fa-edit"></i></a>
                                                    <form action="{{route('size.destroy',[$size->id])}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-7">
                                {{$sizes->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    sizes list card end--}}

    {{--    units list card start--}}
    <div class="col-md-3">
        <div class="card shadow mb-4">
            <div class="card-header border-bottom-0 py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary text-capitalize">Units List</h6>

                <div class="d-flex justify-content-between">
                    <!-- Trigger Button Create Category modal -->
                    <button type="button" class="btn btn-sm btn-outline-primary text-capitalize mr-3" data-toggle="modal" data-target="#CreateUnitModal">
                        <i class="fa fa-plus-circle"></i> Add Unit
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="CreateUnitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Unit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form">
                                        <form action="{{ route('unit.store') }}" method="post">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="unit" class="text-capitalize">Name</label>
                                                        <input type="text" name="unit" class="form-control @error('unit') is-invalid @enderror"
                                                               id="unit"
                                                               placeholder="Enter unit name" value="{{ old('unit') }}">
                                                        @error('unit')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong> <span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="short_form" class="text-capitalize">Short Form</label>
                                                        <input type="text" name="short_form" class="form-control @error('short_form') is-invalid @enderror"
                                                               id="short_form"
                                                               placeholder="Enter Unit short form" value="{{ old('short_form') }}">
                                                        @error('short_form')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong> <span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary text-capitalize">Save Unit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable table-striped table-hover" id="dataTable" width="100%" cellspacing="0"
                                       role="grid" aria-describedby="dataTable_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">Sl
                                        </th>
                                        <th class="sorting text-center text-capitalize" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending">
                                            name
                                        </th>
                                        <th class="sorting text-center text-capitalize" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending">
                                            short Form
                                        </th>
                                        <th rowspan="1" colspan="1" class="text-center">Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($units as $unit)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1 text-center">{{$loop->iteration}}</td>
                                            <td class="sorting_1 text-center text-capitalize">{{$unit->name}}</td>
                                            <td class="sorting_1 text-center">
                                                {{$unit->short_form}}
                                            </td>
                                            <td>
                                                <div class="btn-group d-flex justify-content-center">
                                                    <a href="#" class="btn btn-sm btn-outline-warning mr-3"><i class="fa fa-edit"></i></a>
                                                    <form action="{{route('unit.destroy',[$unit->id])}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-7">
                                {{$units->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    units list card end--}}

    {{--    statuses list card start--}}
    <div class="col-md-3">
        <div class="card shadow mb-4">
            <div class="card-header border-bottom-0 py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary text-capitalize">Status List</h6>

                <div class="d-flex justify-content-between">
                    <!-- Trigger Button Create Category modal -->
                    <button type="button" class="btn btn-sm btn-outline-primary text-capitalize mr-3" data-toggle="modal" data-target="#CreateStatusModal">
                        <i class="fa fa-plus-circle"></i> Add Status
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="CreateStatusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Status</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form">
                                        <form action="{{ route('status.store') }}" method="post">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="status" class="text-capitalize">Name</label>
                                                        <input type="text" name="status" class="form-control @error('status') is-invalid @enderror"
                                                               id="status"
                                                               placeholder="Enter status name" value="{{ old('status') }}">
                                                        @error('status')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong> <span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary text-capitalize">Save Status</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable table-striped table-hover" id="dataTable" width="100%" cellspacing="0"
                                       role="grid" aria-describedby="dataTable_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">Sl
                                        </th>
                                        <th class="sorting text-center text-capitalize" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending">
                                            name
                                        </th>
                                        <th rowspan="1" colspan="1" class="text-center">Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($statuses as $status)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1 text-center">{{$loop->iteration}}</td>
                                            <td class="sorting_1 text-center text-capitalize">{{$status->name}}</td>
                                            <td>
                                                <div class="btn-group d-flex justify-content-center">
                                                    <a href="#" class="btn btn-sm btn-outline-warning mr-3"><i class="fa fa-edit"></i></a>
                                                    <form action="{{route('unit.destroy',[$status->id])}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-7">
                                {{$statuses->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    statuses list card end--}}
</div>
@endsection

@section('script')
    <script>
// uploaded Image Script for category
$('#preview').attr('src', 'http://127.0.0.1:8000/admin/img/upload-image.png');

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

$("#photo").change(function () {
    readURL(this);
});

// uploaded Image Script for category
$('#subCategoryPreview').attr('src', 'http://127.0.0.1:8000/admin/img/upload-image.png');

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#subCategoryPreview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

$("#subCategoryPhoto").change(function () {
    readURL(this);
});
{{--$(document).ready()--}}
{{--{--}}
{{--    @if(count($errors)>0)--}}
{{--    $('#exampleModal').modal('show');--}}
{{--    @endif--}}
{{--}--}}
    </script>
@endsection
