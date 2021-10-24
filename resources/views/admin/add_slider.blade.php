@extends('layouts.admin')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row grid-margin">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Add slider</h4>
                <form class="cmxform" id="commentForm" method="get" action="#">
                    <fieldset>
                    <div class="form-group">
                        <label for="cname">Description One</label>
                        <input id="cname" class="form-control" name="description1" minlength="2" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="cname">Description Two</label>
                        <input id="cname" class="form-control" name="description2" minlength="2" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="cname">Slider image</label>
                        <input id="cname" class="form-control" name="slider_image" type="file" required>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Add slider">
                    </fieldset>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
