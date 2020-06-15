@extends('base')

@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-4 fw-bold">Contact details</h2>
                {{-- <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5> --}}
            </div>
        
        </div>
    </div>
</div>
<div class="container">
    <a href="#" class="btn btn-success mt-3" id="new-p">Update Contact Details</a><hr>

    <div class="card mt-4">
        <table class="table mt-5" id="plan-table" style="width: 100%">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Name 2 </th>
                <th scope="col">Name 3 </th>
                <th scope="col">Email</th>
                <th scope="col">Email 2</th>
                <th scope="col">Email 3</th>
                <th scope="col">mobile </th>
                <th scope="col">mobile 2</th>
                <th scope="col">mobile 3</th>
                {{-- <th scope="col">Project Image</th> --}}
                <th scope="col">
                    Action
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach($contacts as $cont)
                    <tr>
                        <td>{{ $cont->id }}</td>
                        <td>{{ $cont->name1 }}</td>
                        <td>{{ $cont->name2 }}</td>
                        <td>{{ $cont->name3 }}</td>
                        <td>{{ $cont->email1 }}</td>
                        <td>{{ $cont->email2 }}</td>
                        <td>{{ $cont->email3 }}</td>
                        <td>{{ $cont->phone1 }}</td>
                        <td>{{ $cont->phone2 }}</td>
                        <td>{{ $cont->phone3 }}</td>
                        <td>
                            {{-- <a href="#" class="btn btn-sm btn-danger delete" data-id="{{ $cont->id }}" data-token="{{ csrf_token()}}">Delete</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
      </div>
</div>
<!-- Button trigger modal -->  
  <!-- Modal -->
  <div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('update_contact') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="row">
                  <div class="col-md-6">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" class="form-control"><br><br>
                  </div><br><br>
                  <div class="col-md-6">
                    <label for="name">Name 2 (optional)</label>
                    <input type="text" name="name2" id="name2" class="form-control">
                </div><br><br>
                <div class="col-md-6">
                  <label for="name">Name 3 (optional)</label>
                  <input type="text" name="name3" id="name3" class="form-control" ><br><br>
              </div><br><br>

                  <div class="col-md-6">
                    <label for="status">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div><br><br>
                <div class="col-md-6">
                  <label for="status">Email 2 (optional)</label>
                  <input type="email" name="email2" id="email2" class="form-control" ><br><br>
              </div><br><br>
              <div class="col-md-6">
                <label for="status">Email 3 (optional)</label>
                <input type="email" name="email3" id="email3" class="form-control" >
            </div>
            <br><br>
            <div class="col-md-6">
              <label for="phone">Mobile No</label>
              <input type="number" name="mobile" id="mobile" class="form-control"><br><br>
            </div>
            <br><br>
            <div class="col-md-6">
              <label for="phone">Mobile No.2 (optional)</label>
              <input type="number" name="mobile2" id="mobile2" class="form-control">
            </div>
            <div class="col-md-6">
              <label for="phone">Mobile No.3(optional)</label>
              <input type="number" name="mobile3" id="mobile3" class="form-control">
            </div>
            <br><br>
              
              </div><br>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
        </div>
       
      </div>
    </div>
  </div>


  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Plan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('update_plan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="id">
              <div class="row">
                  <div class="col-md-6">
                      <label for="name">Plan Name</label>
                      <input type="text" name="editname" id="editname" class="form-control" required>
                  </div>

                  <div class="col-md-6">
                    <label for="status">Plan amount</label>
                    <input type="number" name="editamount" min="0" step="0.01" id="editamount" class="form-control" required>
                </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </div>
          </form>
        </div>
       
      </div>
    </div>
  </div>
@endsection

@push('scripts')

<script>
    $(document).ready(function(){
       
        $('#plan-table').DataTable({
            responsive: true
        });

        $("#new-p").click(function(){
            $("#projectModal").modal("show");
        })

        $("#new-p").click(function(){
            // var id = $(this).data("id");
            // $("#editModal").modal("show")
            $("#projectModal").modal("show");
            $.ajax({
                url:"{{ route('edit_contact') }}",
                data:"",
                type:"get",
                success:function(res){
                    var data = res.edit;

                    $("#name").val(data.name1)
                    $("#name2").val(data.name2)
                    $("#name3").val(data.name3)
                    $("#email").val(data.email1)
                    $("#email2").val(data.email2)
                    $("#email3").val(data.email3)
                    $("#mobile").val(data.phone1)
                    $("#mobile2").val(data.phone2)
                    $("#mobile3").val(data.phone3)
                    // $("#id").val(data.id)
                },
                error:function(err){
                    toastr.error("an error ocuured", "error");
                }
            })
        })

        $(".delete").click(function(){
            var id = $(this).data("id");
            var token = $(this).data("token");
            if(confirm("Are you sure you want to delete?!")){
                toastr.warning('deleting...',"warning")
                $.ajax({
                    url:"/delete_user/"+id,
                    data:{'id':id, "_token":token},
                    type:"post",
                    success:function(res){
                        console.log(res.status);
                        
                        if(res.status == 1){
                            toastr.success("Project deleted successful", "success");
                        }
                        setTimeout(() => {
                            location.reload();
                        }, 500);
                    },
                    error:function(err){
                        toastr.error("an error ocuured", "error");
                    }
                })
            }else{
                toastr.success("cancelled", "success");
            }
        })
    })
</script>
@endpush