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
