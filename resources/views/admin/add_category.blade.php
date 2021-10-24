@extends('layouts.admin')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row grid-margin">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Add category</h4>
                <form class="cmxform" id="commentForm" method="get" action="#">
                    <fieldset>
                    <div class="form-group">
                        <label for="cname">Category Name</label>
                        <input id="cname" class="form-control" name="category_name" minlength="2" type="text" required>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Add category">
                    </fieldset>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
