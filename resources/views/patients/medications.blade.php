@extends('layouts.page')

@section('content')


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
          <div class="card-header">{{ __('Medications') }}</div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">

          <!-- /.card-header -->
          <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">
              
              <a class="btn btn-info" href="javascript:void(0)" id="createNewPost"> Add New Patient</a>
              <table class="table hover patients-table">
                
                  <thead>
                      <tr>
                          <th>Last Name</th>
                          <th>First Name</th>
                          <th>Age</th>
                          <th>Gender</th>
                          <th>Address</th>
                          <th width="280px">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
              </table>


              <div class="modal fade" id="ajaxModelexa" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modelHeading"></h4>
                        </div>
                        <div class="modal-body">
                            <form id="patientForm" name="patientForm" class="form-horizontal">
                               <input type="hidden" name="id" id="id">

                               <div class="form-group">
                                <div class="form-row">
                                  <div class="col">
                                    <div class="radio">
                                      <label><input type="radio" name="physician_id"  value="1"> Doc Sienna</label>
                                    </div>

                                 </div>
                                  <div class="col">
                                    <div class="radio">
                                      <label><input type="radio" name="physician_id"  value="2"> Doc Jaypee</label>
                                    </div>            
                                  </div>
                                </div>
                              </div>

                               <div class="form-group">
                                  <div class="form-row">
                                    <div class="col">
                                      <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" required>
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" required>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="form-row">
                                    <div class="col">
                                      <input type="text" class="form-control" id="middlename" placeholder="Middle Name" name="middlename">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" id="namext" placeholder="Name Ext" name="namext">
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="form-row">
                                    <div class="col">
                                      <input type="text" class="form-control" id="age" placeholder="Age" name="age">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" id="birthdate" placeholder="Birthdate (mm/dd/yyyy)" name="birthdate">
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="form-row">
                                    <div class="col">
                                      <input type="text" class="form-control" id="philhealth" placeholder="Philhealth" name="philhealth">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" id="contactno" placeholder="Contact No" name="contactno">
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="form-row">
                                    <div class="col">
                                      <select class="form-control" id="Gender" name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                      </select>
                                   </div>
                                    <div class="col">
                                      <select class="form-control" id="civilstatus" name="civilstatus">
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widowed">Widowed</option>
                                      </select>                                   
                                    </div>
                                  </div>
                                </div>
                              
                                <div class="form-group">
                                  <div class="form-row">
                                  
                                    <div class="col-sm-12">
                                        <textarea id="address" name="address" required placeholder="Address" class="form-control"></textarea>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-sm-offset-2 col-sm-12"><center>
                                 <button type="submit" class="btn btn-primary" id="savedata" value="create">Add New Patient
                                 </button></center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            </div></div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        
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
