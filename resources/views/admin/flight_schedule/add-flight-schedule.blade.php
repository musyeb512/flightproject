
<div class="modal fade" id="exampleModalCenteraddbus-schedule" tabindex="-1" role="dialog" 
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle" align="center">
            <i class="glyphicon glyphicon-log-in">Genrate New Schedule</i></h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="post" action="{{ route('flight-schedule.store') }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <fieldset>
                      <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                                <!-- <label for="exampleInputPassword1">Seat No</label> -->
                                <select name="operator_id" class="form-control">
                                    <option value="0" selected="true" disabled="true">Select Operator</option>
                                    @foreach ($operators as $data)
                                    <option value="{{$data->operator_id}}">{{$data->operator_name}}</option>
                                    @endforeach
                                </select>
                          </div>
                        </div>
                      <div class="col-md-6">
                          <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Bus Name</label> -->
                                <input name="flight_name"  class="form-control" aria-describedby="emailHelp"
                                 placeholder="Enter Flight Name" type="text">
                          </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Bus Name</label> -->
                                <input name="flight_code"  class="form-control" aria-describedby="emailHelp" 
                                placeholder="Enter Flight Code" type="text">
                          </div>
                          </div>
                          </div>
                          <div class="form-group">
                                <!-- <label for="exampleInputEmail1">Bus Name</label> -->
                                <input name="total_seats"  class="form-control" aria-describedby="emailHelp"
                                 placeholder="Enter Total Seat" type="text">
                          </div>
                          
                          {{-- <div class="form-group">
                                <!-- <label for="exampleInputPassword1">Seat No</label> -->
                                <textarea name="operator_description" rows="2" cols="20" class="form-control" 
                                placeholder="Enter Operator Description" type="text"></textarea>
                          </div> --}}
                          <div class="col-md-3">
                          <div class="form-group">
                                <input name="status"  aria-describedby="emailHelp" type="checkbox">
                                <label for="exampleInputEmail1">Active</label>
                          </div>
              </div>
              {{-- <div class="row">
                <div class="col-md-12">
                        <label class="control-label">Image</label>
                        <input type="file" name="operator_logo">
                </div>
            </div> --}}
                      </fieldset>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Register Flight</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  
  
  