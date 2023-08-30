@extends('cms.parent')

@section('title' , 'Create Role')

@section('main_title' , 'Create Role')

@section('sub_title' , 'Create Role')


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
              <h3 class="card-title">Add Data of Role</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="row">

                <div class="form-group col-md-6">
                  <label for="name">Name of Role</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name of Role">
                </div>

                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick=" performStore() " class="btn btn-primary">Store</button>

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
     function performStore(){
        let formData = new FormData();

        formData.append('name',document.getElementById('name').value);

        store('/cms/roles' , formData);
    }
</script>

@endsection
