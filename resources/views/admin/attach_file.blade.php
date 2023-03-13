
@extends('layout/master_index')
@section('main-content')
<div class="main-panel">
  <div class="content-wrapper">
<div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add attach file</h4>
            <div class="table-responsive">
            <table>
                <?php 
        //     echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // exit;
        
        ?>
<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('/admin/attach-file-add')}}">
       @csrf
       <div class="col-8 d-flex  ">
            <div class="form-group w-50 px-2">
            <label class="form-label" for="customFile">file input</label>
             <select class="form-select chosen-select" id="pets" name="user[]" size="4" multiple>
                <?php foreach ($data as $datas):?>
                <option value="<?=$datas->id?>"><?=$datas->name?></option>
                <?php endforeach;?>
                </select>
            </div>

            <div class="form-group w-50 px-2">
                <label class="form-label" for="customFile">file input</label>
                <input type="file" class="form-control" name="file" id="customFile" />
            </div>
       </div>
      
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>
  </div>
</form>
</table>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
      <script>
       $(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})
    </script>


  </div>
@endsection
<style>
  .table-responsive {
    overflow-x: unset !important;
  }
</style>