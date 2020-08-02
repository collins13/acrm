@extends('base')

@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-4 fw-bold">Slider Images</h2>
                {{-- <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5> --}}
            </div>
        
        </div>
    </div>
</div>
<div class="container">
    <nav class="mt-4">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Slider One</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Slider two</a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Slider Three</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <a href="#" class="btn btn-success mt-3" id="new-slider">Update Images</a><hr>
            <div class="card mt-4">
               
                <table class="table mt-5" id="plan-table" style="width: 100%">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image1</th>
                        <th scope="col">Image2</th>
                        <th scope="col">Image3</th>
                        {{-- <th scope="col">Plan Amount</th> --}}
                        <td>Created at</td>
                        {{-- <th scope="col">Project Image</th> --}}
                        {{-- <th scope="col">
                            Action
                        </th> --}}
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders1 as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td> <img src="/storage/slider/{{ $item->image1 }}" width="100" alt="image1"> </td>
                            <td> <img src="/storage/slider/{{ $item->image2 }}" width="100" alt="image1"> </td>
                            <td> <img src="/storage/slider/{{ $item->image3 }}" width="100" alt="image1"> </td>
                            <td>{{ $item->created_at }}</td>
                            {{-- <td>
                                <a href="#" id="slider1-edit" class="btn btn-sm btn-warning"><i class="fa fa-pencil"> Edit</i></a>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
              </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <a href="#" class="btn btn-success mt-3" id="new-slider1">Add New images</a><hr>
            <div class="card mt-4">
               
                <table class="table mt-5" id="plan-table1" style="width: 100%">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Image2</th>
                        <th scope="col">Image3</th>
                        {{-- <th scope="col">Plan Amount</th> --}}
                        <td>Created at</td>
                        {{-- <th scope="col">Project Image</th> --}}
                        {{-- <th scope="col">
                            Action
                        </th> --}}
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($sliders2 as $item2)
                      <tr>
                          <td>{{ $item2->id }}</td>
                          <td> <img src="/storage/slider/{{ $item2->image1 }}" width="100" alt="image1"> </td>
                          <td> <img src="/storage/slider/{{ $item2->image2 }}" width="100" alt="image1"> </td>
                          <td> <img src="/storage/slider/{{ $item2->image3 }}" width="100" alt="image1"> </td>
                          <td>{{ $item2->created_at }}</td>
                          {{-- <td>
                              <a href="#" id="slider1-edit" class="btn btn-sm btn-warning"><i class="fa fa-pencil"> Edit</i></a>
                          </td> --}}
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <a href="#" class="btn btn-success mt-3" id="new-slider2">Add New images</a><hr>
            <div class="card mt-4">
               
                <table class="table mt-5" id="plan-table2" style="width: 100%">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Image2</th>
                        <th scope="col">Image3</th>
                        {{-- <th scope="col">Plan Amount</th> --}}
                        <td>Created at</td>
                        {{-- <th scope="col">Project Image</th> --}}
                        {{-- <th scope="col">
                            Action
                        </th> --}}
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($sliders3 as $item3)
                      <tr>
                          <td>{{ $item3->id }}</td>
                          <td> <img src="/storage/slider/{{ $item3->image1 }}" width="100" alt="image1"> </td>
                          <td> <img src="/storage/slider/{{ $item3->image2 }}" width="100" alt="image1"> </td>
                          <td> <img src="/storage/slider/{{ $item3->image3 }}" width="100" alt="image1"> </td>
                          <td>{{ $item2->created_at }}</td>
                          {{-- <td>
                              <a href="#" id="slider1-edit" class="btn btn-sm btn-warning"><i class="fa fa-pencil"> Edit</i></a>
                          </td> --}}
                      </tr>
                      @endforeach
                       
                    
                    </tbody>
                  </table>
              </div>
        </div>
      </div>
</div>

  
  <!-- Modal -->
  <div class="modal fade" id="sliderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Images</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('add_slider') }}" method="POST" enctype="multipart/form-data">
                @csrf
          <div class="row">
              <div class="col-md-6 form-group">
                  <label for="image1">image 1</label>
                  <input type="file" name="image1" class="form-control">
              </div>
              <div class="col-md-6 form-group">
                <label for="image2">image 2</label>
                <input type="file" name="image2" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label for="image3">image 3</label>
                <input type="file" name="image3" class="form-control">
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

    
  <!-- Modal -->
  <div class="modal fade" id="sliderModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Images</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('add_slider2') }}" method="POST" enctype="multipart/form-data">
                @csrf
          <div class="row">
              <div class="col-md-6 form-group">
                  <label for="image1">image 1</label>
                  <input type="file" name="image1" class="form-control">
              </div>
              <div class="col-md-6 form-group">
                <label for="image2">image 2</label>
                <input type="file" name="image2" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label for="image3">image 3</label>
                <input type="file" name="image3" class="form-control">
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

   <!-- Modal -->
   <div class="modal fade" id="sliderModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Images</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('add_slider3') }}" method="POST" enctype="multipart/form-data">
                @csrf
          <div class="row">
              <div class="col-md-6 form-group">
                  <label for="image1">image 1</label>
                  <input type="file" name="image1" class="form-control">
              </div>
              <div class="col-md-6 form-group">
                <label for="image2">image 2</label>
                <input type="file" name="image2" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label for="image3">image 3</label>
                <input type="file" name="image3" class="form-control">
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
@endsection

@push('scripts')

<script>
    $(document).ready(function(){
       
        $('#plan-table').DataTable({
            responsive: true
        });
        $('#plan-table1').DataTable({
            responsive: true
        });

        $('#plan-table2').DataTable({
            responsive: true
        });

        $("#new-slider").click(function(){
            $("#sliderModal").modal("show");
        })

        $("#new-slider1").click(function(){
            $("#sliderModal1").modal("show");
        })

        $("#new-slider2").click(function(){
            $("#sliderModal2").modal("show");
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