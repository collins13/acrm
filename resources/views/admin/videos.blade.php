@extends('base')

@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-4 fw-bold">Plans</h2>
                {{-- <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5> --}}
            </div>

        </div>
    </div>
</div>
<div class="container">
    <a href="#" class="btn btn-success mt-3" id="new-p">Update video</a><hr>
    <div class="col-md-6">
        <div class="post-media wow fadeIn">
            <video width="800" height="500" controls autoplay>
                <source src="/Video Sample.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
              </video>
        </div><!-- end media -->
    </div>
      </div>
</div>
<!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Plan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('new_video') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="row">
                  <div class="col-md-6">
                      <label for="name">Plan Name</label>
                      <input type="file" name="file" id="file" class="form-control" required>
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

        $('#plan-table').DataTable();

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
                    url:"/delete_plan/"+id,
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
