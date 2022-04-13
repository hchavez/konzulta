@extends('layouts.page')

@section('content')


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
          <div class="card-header">{{ __('Consulations') }}</div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <!-- <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
            </div> -->

            <h3 class="profile-username text-center">{{ $patient->firstname }} {{ $patient->lastname }}</h3>

            <p class="text-muted text-center">Age: {{ $patient->age }} {{ $patient->gender }}</p>
           
            @foreach ($consultationslatest as $key => $value) 
            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Temperature</b> <a class="float-right">{{ $value->temp }}</a>
              </li>
              <li class="list-group-item">
                <b>Heart Rate</b> <a class="float-right">{{ $value->hr }}</a>
              </li>
              <li class="list-group-item">
                <b>Respiratory Rate</b> <a class="float-right">{{ $value->rr }}</a>
              </li>
              <li class="list-group-item">
                <b>Blood pressure</b> <a class="float-right">{{ $value->bp }}</a>
              </li>
              <li class="list-group-item">
                <b>Sats</b> <a class="float-right">{{ $value->sats }}</a>
              </li>
              <li class="list-group-item">
                <b>Weight</b> <a class="float-right">{{ $value->wt }}</a>
              </li>
              <li class="list-group-item">
                <b>Height</b> <a class="float-right">{{ $value->ht }}</a>
              </li>
              @endforeach 
            </ul>

            <a href="#" class="btn btn-primary btn-block"><b>Update</b></a>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Current Medications</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i> Education</strong>

            <p class="text-muted">
              B.S. in Computer Science from the University of Tennessee at Knoxville
            </p>

            <hr>

            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

            <p class="text-muted">Malibu, California</p>

            <hr>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

            <p class="text-muted">
              <span class="tag tag-danger">UI Design</span>
              <span class="tag tag-success">Coding</span>
              <span class="tag tag-info">Javascript</span>
              <span class="tag tag-warning">PHP</span>
              <span class="tag tag-primary">Node.js</span>
            </p>

            <hr>

            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Consulations</a></li>
              <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Medications</a></li>
              <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Billing</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                @foreach ($patient->consultations as $value) 
                   
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                    <span class="username">
                    {{ date('M d, Y', strtotime($value->created_at)); }}
                    </span>
                    <span class="description">  {{ date('D', strtotime($value->created_at)); }} - {{ \Carbon\Carbon::parse($value->created_at)->format('h:i A')}} </span>
                  </div>
                  <!-- /.user-block -->
                  @if($value->progressnotes1)
                  <p>
                    {{$value->progressnotes1}}
                  </p>
                  @endif

                  @if($value->progressnotes2)
                  <p>
                    {{$value->progressnotes2}}
                  </p>
                  @endif

                  @if($value->progressnotes3)
                  <p>
                    {{$value->progressnotes3}}
                  </p>
                  @endif

                  @if($value->progressnotes4)
                  <p>
                    {{$value->progressnotes4}}
                  </p>
                  @endif

                  @if($value->progressnotes5)
                  <p>
                    {{$value->progressnotes5}}
                  </p>
                  @endif
                </div>
                @endforeach
               
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <div class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <div class="time-label">
                    <span class="bg-success">
                      10 Feb. 2014
                    </span>
                  </div>
         
                  <div>
                    <i class="fas fa-comments bg-warning"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <div class="time-label">
                    <span class="bg-success">
                      3 Jan. 2014
                    </span>
                  </div>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <div>
                    <i class="fas fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="https://placehold.it/150x100" alt="...">
                        <img src="https://placehold.it/150x100" alt="...">
                        <img src="https://placehold.it/150x100" alt="...">
                        <img src="https://placehold.it/150x100" alt="...">
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item -->
                  <div>
                    <i class="far fa-clock bg-gray"></i>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName2" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>


    
<script type="text/javascript">
  $.noConflict();
  jQuery( document ).ready(function( $ ) {

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    
    var table = $('.patients-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('patients.index') }}",
        columns: [
           // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'lastname', name: 'lastname'},
            {data: 'firstname', name: 'firstname'},
            {data: 'age', name: 'age'},
            {data: 'gender', name: 'gender'},
            {data: 'address', name: 'address'},
            {data: 'action', name: 'action', orderable: false, searchable: false},

            
        ]
    });
     
    $('#createNewPost').click(function () {
        $('#savedata').val("create-post");
        $('#id').val('');
        $('#patientForm').trigger("reset");
        $('#modelHeading').html("Register New Patient");
        $('#ajaxModelexa').modal('show');
    });
    
    $('body').on('click', '.editPost', function () {
      var id = $(this).data('id');
      $.get("{{ route('patients.index') }}" +'/' + id +'/edit', function (data) {
          $('#modelHeading').html("Update Patient");
          $('#savedata').val("edit-user");
          $('#ajaxModelexa').modal('show');
          $('#id').val(data.id);
          $('#title').val(data.title);
          $('#description').val(data.description);
      })
   });
    
    $('#savedata').click(function (e) {
        e.preventDefault();
        $(this).html('Saving Patient Record..');
    
        $.ajax({
          data: $('#patientForm').serialize(),
          url: "{{ route('patients.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#patientForm').trigger("reset");
              $('#ajaxModelexa').modal('hide');
              table.draw();
         
          },
          error: function (data) {
              console.log('Error:', data);
              $('#savedata').html('Save Changes');
          }
      });
    });
    
    $('body').on('click', '.deletePost', function () {
     
        var id = $(this).data("id");
        confirm("Are You sure want to delete this Patient?");
      
        $.ajax({
            type: "DELETE",
            url: "{{ route('patients.store') }}"+'/'+id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
     
  });
</script>


@endsection
