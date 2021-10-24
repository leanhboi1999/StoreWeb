@extends('layouts.admin')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row grid-margin">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Add product</h4>
                <form class="cmxform" id="commentForm" method="get" action="#">
                    <fieldset>
                    <div class="form-group">
                        <label for="cname">Product Name</label>
                        <input id="cname" class="form-control" name="product_name" minlength="2" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="cname">Product price</label>
                        <input id="cname" class="form-control" name="product_price" type="number" required>
                    </div>
                    <div class="form-group">
                        <label for="cname">Category</label>
                        <select id="sortingfield" class="form-control" name="product_category">
                            <option value="">Select category</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cname">Product image</label>
                        <input id="cname" class="form-control" name="product_image" type="file" required>
                    </div>
                    <div class="form-group">
                        <label for="cname">Product status</label>
                        <input id="cname" name="product_status" type="checkbox" required>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Add product">
                    </fieldset>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
