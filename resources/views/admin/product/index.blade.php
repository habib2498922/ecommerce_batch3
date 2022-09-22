@extends('admin.master')

@section('title')
    Add Product Page
@endsection

@section('body')
    <div class="'row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Product Form</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <form action="{{route('product.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3 col-form-label">Category name</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id" required onchange="getSubCategory(this.value)">
                                    <option value="" disabled selected>-- Select Category Name --</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->has('category_id') ? $errors->first('category_id'): ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3 col-form-label">Sub Category name</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="sub_category_id" required id="SubCategoryId">
                                    <option value="" disabled selected>-- Select Sub Category Name --</option>
                                    @foreach($subcategories as $subcategory)
                                        <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->has('sub_category_id') ? $errors->first('sub_category_id'): ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3 col-form-label">Brand name</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="brand_id" required>
                                    <option value="" disabled selected>-- Select Brand Name --</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->has('brand_id') ? $errors->first('brand_id'): ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3 col-form-label">Unit name</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="unit_id" required>
                                    <option value="" disabled selected>-- Select Unit Name --</option>
                                    @foreach($units as $unit)
                                        <option value="{{$unit->id}}">{{$unit->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->has('unit_id') ? $errors->first('unit_id'): ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="horizontal-firstname-input">
                                <span class="text-danger">{{$errors->has('name') ? $errors->first('name'): ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product code</label>
                            <div class="col-sm-9">
                                <input type="text" name="code" class="form-control" id="horizontal-firstname-input">
                                <span class="text-danger">{{$errors->has('code') ? $errors->first('name'): ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product regular price</label>
                            <div class="col-sm-9">
                                <input type="number" name="regular_price" class="form-control" id="horizontal-firstname-input">
                                <span class="text-danger">{{$errors->has('regular_price') ? $errors->first('name'): ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product selling price</label>
                            <div class="col-sm-9">
                                <input type="number" name="selling_price" class="form-control" id="horizontal-firstname-input">
                                <span class="text-danger">{{$errors->has('selling_price') ? $errors->first('name'): ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Stock Amount</label>
                            <div class="col-sm-9">
                                <input type="number" name="stock_amount" class="form-control" id="horizontal-firstname-input">
                                <span class="text-danger">{{$errors->has('stock_amount') ? $errors->first('name'): ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Short Description</label>
                            <div class="col-sm-9">
                                <textarea name="short_description" class="form-control" id="horizontal-email-input"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea name="long_description" class="form-control summernote" id="horizontal-email-input"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3">Product image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file" id="horizontal-password-input" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3">Product sub image</label>
                            <div class="col-sm-9">
                                <input type="file" name="sub_image[]" class="form-control-file" id="horizontal-password-input" accept="image/*" multiple>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3">Publication Status</label>
                            <div class="col-sm-9">
                                <label class="mr-2"><input type="radio" name="status"  value="1" checked/>Published</label>
                                <label><input type="radio" name="status"  value="0"/>UnPublished</label>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create new Product</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

