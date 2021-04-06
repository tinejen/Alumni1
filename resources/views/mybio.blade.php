<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight text-gray-800">
            {{ __() }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="container">
    <div class="main-body">
    <!--Modal para sa update ng profile -->
    <div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              
              <form action="{{ route('mybio.update-info') }}" method="POST">
                @csrf
                  <div class="row mx-6">
                  <h3 class="text-gray-400 mt-4">Update Info</h3><br><br>
                   @if($message = Session::get('error'))
                    <div class="alert alert-danger animated fadeInDown">
                        <p>{{$message}}</p>
                    </div>
                    @endif
                  <div class="row">
                    <div class="col-5 justify-center">
                    <div class="form-group p-3">

                        <div class="row"><div class="col-1"></div><div class="col-10">
                          <img class="img-thumbnail user_dp" src="/images/{{Auth::user()->dp == '' ? 'prog.png' : Auth::user()->dp}}" alt=""><br>
                          <label for="dp" class="btn btn-outline-success card-img">Select file</label>
                          <input type="file" name="dp" id="dp" class="hidden">
                        </div><div class="col-1"></div></div>
                        
                      </div>
                    </div>
                    <div class="col-7">
                    <div class="form-group col-md-12">
                      <label class="text-gray-400 small" for="contact">Contact No.</label>
                      <input type="text" class="form-control" name="contact" placeholder="Contact Number">
                    </div>
                    <div class="form-group col-md-12">
                      <label class="text-gray-400 small" for="profession">Profession</label>
                      <input type="text" class="form-control" name="profession" placeholder="Profession">
                    </div>
                    <div class="form-group col-md-12">
                      <label class="text-gray-400 small" for="yeargrad">Year Graduated</label>
                      <input type="text" class="form-control" name="yeargrad" placeholder="Year">
                    </div>
                    <div class="form-group col-md-12">
                      <label class="text-gray-400" for="workingstatus">Working Status</label>
                      <select name="workingstatus" class="form-control">
                        <option value="employed" selected>Employed</option>
                        <option value="unemployed">Unemployed</option>
                      </select>
                    </div>
                    
                    </div>
                  </div>
                  
                  </div>
                  <div class="row mx-6">
                    <div class="form-group col-md-6">
                      <label class="text-gray-400" for="fb">Facebook Account</label>
                      <input type="text" class="form-control" name="fb" placeholder="Facebook">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-gray-400" for="ig">Instagram Account</label>
                      <input type="text" class="form-control" name="ig" placeholder="Instagram">
                    </div>
                  </div>
                  <div class="row mx-6">
                  <div class="form-group">
                    <label class="text-gray-400" for="address">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="House No., Brgy..">
                  </div>
                  </div>
                  <div class="row mx-6">
                    <div class="form-group col-md-6">
                      <label class="text-gray-400" for="city">City</label>
                      <input type="text" class="form-control" name="city">
                    </div>
                    <div class="form-group col-md-4">
                      <label class="text-gray-400" for="province">Province</label>
                      <input type="text" class="form-control" name="province">
                      
                    </div>
                    <div class="form-group col-md-2">
                      <label class="text-gray-400" for="zip">Zip</label>
                      <input type="text" class="form-control" name="zip">
                    </div>
                  </div>

                  <br>
                  <div class="row mx-6">
                  <div class="form-group">
                    <label class="text-gray-400" for="cname">Company Name</label>
                    <input type="text" class="form-control" name="cname" placeholder="Company name">
                  </div>
                  </div>
                                  <div class="row mx-6">
                  <div class="form-group">
                    <label class="text-gray-400" for="caddress">Company Address</label>
                    <input type="text" class="form-control" name="caddress" placeholder="Company address">
                  </div>
                  </div>
                  <div class="row mx-6">
                    <div class="form-group col-md-6">
                      <label class="text-gray-400" for="demployed">Date Employed</label>
                      <input type="text" class="form-control" name="demployed" placeholder="Date Employed">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="text-gray-400" for="ccontact">Company contact #</label>
                      <input type="text" class="form-control" name="ccontact" placeholder="Company contact">
                    </div>
                  </div>

                  <div class="row my-6">
                    <div class="col-7"></div>
                    <div class="col-2"><button type="submit" class="btn btn-secondary card-img" data-dismiss="modal">Close</button></div>
                    <div class="col-2"><button type="submit" class="btn btn-success card-img">Save</button></div>
                    <div class="col-1"></div>
                  </div>
                  <br>
                </form>
            </div>
        </div>  
    </div>
    <!--Dulo ng Modal para sa update ng profile -->
            @if($message = Session::get('success'))
                    <div class="alert alert-success animated fadeInUp">
                        <p>{{$message}}</p>
                    </div>
            @endif
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center mt-6">
                    <img src="/images/{{Auth::user()->dp == '' ? 'prog.png' : Auth::user()->dp}}" alt="" class="rounded-circle user_dp" width="150">
                    <div class="mt-3">
                      <h4>{{Auth::user()->name}}</h4>
                      <p class="text-secondary mb-2">{{Auth::user()->profession}}</p>
                      <!-- <button class="btn btn-success"></button> -->
                      <button class="btn btn-outline-success" data-toggle="modal" data-target=".bd-example-modal-lg">Update Bio</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                <div class="row mt-3">
                    <div class="col-sm-5">
                      <h4 class="m-2">Student No.</h4>
                    </div>
                    <div class="col-sm-7 text-secondary">
                        <h4 class="m-2">{{Auth::user()->stdnum}}</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-5">
                      <h4 class="m-2">Full Name</h4>
                    </div>
                    <div class="col-sm-7 text-secondary">
                        <h4 class="m-2">{{Auth::user()->name}}</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-5">
                      <h4 class="m-2">Email</h4>
                    </div>
                    <div class="col-sm-7 text-secondary">
                      <h4 class="m-2">{{Auth::user()->email}}</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-5">
                      <h4 class="m-2">Address</h4>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <h4 class="m-2">{{Auth::user()->adress}} {{Auth::user()->city}} {{Auth::user()->province}}</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-5">
                      <h4 class="m-2">Mobile No.</h4>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <h4 class="m-2">{{Auth::user()->contact}}</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-5">
                      <h4 class="m-2">Working Status</h4>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <h4 class="m-2">{{ucfirst(Auth::user()->workingstatus)}}</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-5">
                      <h4 class="m-2">Working Status</h4>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <h4 class="m-2">{{ucfirst(Auth::user()->workingstatus)}}</h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-5">
                      <h4 class="m-2">Working Status</h4>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <h4 class="m-2">{{ucfirst(Auth::user()->workingstatus)}}</h4>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

          <div class="row gutters-sm">
            <div class="col-md-12 mb-3">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row mt-3">
                    <div class="col-sm-2">
                      <h4 class="m-2">Student No.</h4>
                    </div>
                    <div class="col-sm-7 text-secondary">
                        <h4 class="m-2">{{Auth::user()->stdnum}}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

    </div>
    </div>
</x-app-layout>
