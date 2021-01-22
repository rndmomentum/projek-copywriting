@extends('admin.layouts.app')

@section('title')
    Create Headline
@endsection

@section('css')
<style>
.ui-autocomplete {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 14px;
  text-align: left;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
}

.ui-autocomplete > li > div {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333333;
  white-space: nowrap;
}

.ui-state-hover,
.ui-state-active,
.ui-state-focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
  cursor: pointer;
}

.ui-helper-hidden-accessible {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}
</style>
@endsection

@section('content')
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">Create New Headline</h3>
        <p class="panel-subtitle">Headline will be processing for checking</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="form-control" name="headline" rows="3" placeholder="Your headline here"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="keyword" id="tags" placeholder="Keyword Here" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <select class="form-control" name="emotion" required>
                        <option value="">-- Choose Emotion --</option>
                        <option value="e0">Need of Guarantee</option>
                        <option value="e1">Need of Variety</option>
                        <option value="e2">Need of Excellent</option>
                        <option value="e3">Need of Recognition</option>
                        <option value="e4">Need of Achievement</option>
                        <option value="e5">Need of Love</option>
                        <option value="e6">Need of Growth</option>
                        <option value="e7">Need of Contribution</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <select class="form-control" name="business" required>
                        <option value="">-- Type of Business --</option>
                        <option value="beauty">Beauty</option>
                        <option value="fashion">Fashion</option>
                        <option value="healthy">Healthy</option>
                        <option value="foodnbeverages">Food & Beverages</option>
                        <option value="service">Service</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
        </div>
    </div>
</div>

<p class="demo"></p>
@endsection

@section('js')
<script>
$(function() {

    var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
    ];

    document.getElementById("demo").innerHTML = availableTags;
    
    // $("#tags").autocomplete({
    //     source: availableTags
    // });
    
});


</script>
@endsection