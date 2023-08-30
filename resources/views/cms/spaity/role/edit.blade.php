@extends('cms.parent')

@section('title' , 'Edit Role')

@section('main_title' , 'Edit Role')

@section('sub_title' , 'Edit Role')


@section('styles')

@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Data of Role</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Name of Role</label>
                  <input type="text" class="form-control" name="name" id="name"
                  value="{{ $roles->name }}" placeholder="Enter Name of Role">
                </div>


              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick=" performUpdate({{ $roles->id }}) " class="btn btn-primary">Store</button>

                <a href="{{route('roles.index')}}" type="submit" class="btn btn-info">Cancel</a>

              </div>
            </form>
          </div>
          <!-- /.card -->


        </div>

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>


@endsection


@section('scripts')

<script>
     function performUpdate(id){
        let formData = new FormData();

        formData.append('name',document.getElementById('name').value);

        storeRoute('/cms/roles-update/' +id , formData);
    }
</script>

@endsection
