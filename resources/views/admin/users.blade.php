@extends('base')

@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-4 fw-bold">Users</h2>
                {{-- <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5> --}}
            </div>
        
        </div>
    </div>
</div>
<div class="container">
    <a href="#" class="btn btn-success mt-3" id="new-p">Add New User</a><hr>

    <div class="card mt-4">
        <table class="table mt-5" id="plan-table" style="width: 100%">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Plan Name</th>
                <th scope="col">Plan Amount</th>
                <td>Created at</td>
                {{-- <th scope="col">Project Image</th> --}}
                <th scope="col">
                    Action
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-danger delete" data-id="{{ $user->id }}" data-token="{{ csrf_token()}}">Delete</a>
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
          <form action="{{ route('new_user') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="row">
                  <div class="col-md-6">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" class="form-control" required>
                  </div>

                  <div class="col-md-6">
                    <label for="status">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
              
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

        $(".edit").click(function(){
            var id = $(this).data("id");
            $("#editModal").modal("show")

            $.ajax({
                url:"{{ route('edit_plan') }}",
                data:{'id': id},
                type:"get",
                success:function(res){
                    var data = res.edit;

                    $("#editname").val(data.title)
                    $("#editamount").val(data.amount)
                    $("#id").val(data.id)
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