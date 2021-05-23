@extends('base')

@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-4 fw-bold">Projects</h2>
                {{-- <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5> --}}
            </div>

        </div>
    </div>
</div>
<div class="container">
    <a href="#" class="btn btn-success mt-3" id="new-p">Add New Project</a><hr>

    <div class="card mt-4">
        <table class="table mt-5" id="project-table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Project Name</th>
                <th scope="col">Project Status</th>
                <th scope="col">Project Image</th>
                <th scope="col">
                    Action
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach($project as $proj)
              <tr>
                <th scope="row">{{ $proj->id }}</th>
                <td>{{ $proj->name }}</td>
                <td>{{ ($proj->status >=100) ? 'Completed' : $proj->status.'%'}}</td>
                <td><img src="/storage/images/{{ $proj->image }}" width="100" alt=""></td>
                <td>
                    <a href="#" class="btn btn-info btn-sm edit" data-id="{{ $proj->id }}"> <i class="fa fa-pencil"> Edit</i> </a>
                    <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $proj->id }}" data-token="{{ csrf_token() }}"> <i class="fa fa-trash-o"> Delete</i> </a>
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
          <h5 class="modal-title" id="exampleModalLabel">New Project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('new_proj') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="row">
                  <div class="col-md-6">
                      <label for="name">Project Name</label>
                      <input type="text" name="name" id="name" class="form-control" required>
                  </div>

                  <div class="col-md-6">
                    <label for="status">Project status</label>
                    <input type="number" step="0.01" min="0" name="status" id="status" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="name">Project Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-12">
                    {{-- <label for="desc">Project Description</label> --}}
                    <textarea name="desc" id="desc" cols="30" rows="10" hidden class="form-control">test</textarea>
                  </div>

              </div>
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
          <h5 class="modal-title" id="exampleModalLabel">Edit Project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="id">
              <div class="row">
                  <div class="col-md-6">
                      <label for="name">Project Name</label>
                      <input type="text" name="editname" id="editname" class="form-control" required>
                  </div>

                  <div class="col-md-6">
                    <label for="status">Project status</label>
                    <input type="number" step="0.01" min="0" name="editstatus" id="editstatus" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="name">Project Image</label>
                    <input type="file" name="image" id="editimage" class="form-control">
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-12">
                    {{-- <label for="desc">Project Description</label> --}}
                    <textarea name="editdesc" id="editdesc" cols="30" rows="10" hidden class="form-control">test</textarea>
                  </div>

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

        $('#project-table').DataTable();

        $("#new-p").click(function(){
            $("#projectModal").modal("show");
        })

        $(".edit").click(function(){
            var id = $(this).data("id");
            $("#editModal").modal("show")

            $.ajax({
                url:"{{ route('edit') }}",
                data:{'id': id},
                type:"get",
                success:function(res){
                    var data = res.edit;

                    $("#editname").val(data.name)
                    $("#editstatus").val(data.status)
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
                    url:"/acrm/delete/"+id,
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
