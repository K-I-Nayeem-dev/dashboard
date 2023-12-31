@extends('layouts.dashboard.dashboard')

@section('content')
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-lg-8">
            <div>
                <h2 class="mb-2">Add Category</h2>
            </div>
            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                    @error('category_name')
                        <div class="text-danger fw-bold my-3">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="category_name" placeholder="Name" value="{{ old('category_name') }}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Category Slug</label>
                    <input type="text" class="form-control" name="category_slug" placeholder="Slug" value="{{ old('category_slug') }}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Category Description</label>
                    <textarea class="form-label rounded p-3"name="category_description" placeholder="Write A Description (Optional)" cols="80" rows="10" >{{ old('category_description') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Category Image</label>
                    <input type="file" class="form-control" name="category_image" placeholder="Image" onchange="document.getElementById('web').src = window.URL.createObjectURL(this.files[0])">
                    @error('category_image')
                        <div class="text-danger fw-bold my-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="my-3">
                    <img width="500" height="300" src="" alt="Category_photo" id="web">
                </div>

                <button type="submit" class="btn btn-primary">Add Category</button>
            </form>
        </div>
    </div>
@endsection

