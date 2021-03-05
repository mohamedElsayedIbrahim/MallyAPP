@extends('inc/layout')


@section('MoreLinks')
<li class="nav-item">
  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Log out</a>
</li>
@endsection


@section('content')

<div class="pageinfo">
      <div class="row">

        <div class="col-sm-6">
            <div class="text-center">
              <img src="{{ asset('images/logo.png') }}" class="img-fluid logo" alt="logo">
            </div>
        </div>

        <div class="col-sm-6">
          <div class="text-center">
            <h2 class="user-title">Users Full Name</h2>
          </div>
        </div>

      </div>
</div>

 
  <div class="pageProcess my-5">

      <div class="row">
        <div class="col-sm-4">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="initialize-system-list" data-bs-toggle="list" href="#initialize-system" role="tab" aria-controls="initialize">Initialize System</a>
            <a class="list-group-item list-group-item-action" id="educational-process-list" data-bs-toggle="list" href="#educational-process" role="tab" aria-controls="educational">Educational Process</a>
            <a class="list-group-item list-group-item-action" id="Payment-Process-list" data-bs-toggle="list" href="#Payment-Process" role="tab" aria-controls="Payment">Payment Process</a>
            <a class="list-group-item list-group-item-action" id="system-settings-list" data-bs-toggle="list" href="#system-settings" role="tab" aria-controls="system">system Settings</a>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="initialize-system" role="tabpanel" aria-labelledby="initialize-system-list">
              <div class="row">
              <div class="col-sm-12">
                  <h2 class="process-title">Settings</h2>
              </div>
                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="" class="process-link"> <i class="fas fa-desktop"></i><br>organization settings</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="{{ route('course.index') }}" class="process-link"> <i class="fas fa-desktop"></i><br>Courses settings</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="" class="process-link"> <i class="fas fa-desktop"></i><br>education stages settings</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="" class="process-link"> <i class="fas fa-desktop"></i><br>education classes settings</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="" class="process-link"> <i class="fas fa-desktop"></i><br>department settings</a>
                  </div>
                </div>
                
                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="" class="process-link"> <i class="fas fa-desktop"></i><br>Study subject settings</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="" class="process-link"> <i class="fas fa-desktop"></i><br>jobs settings</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>Payment settings</a>
                  </div>
                </div>

              </div>

              <div class="row">
              <div class="col-sm-12">
                  <h2 class="process-title">Reports</h2>
              </div>
                
                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>Branches Report</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>education stages Report</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>education classes Report</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>department Report</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>Study subject Report</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>jobs Report</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>Payment Report</a>
                  </div>
                </div>

              </div>

            </div>
            <div class="tab-pane fade" id="educational-process" role="tabpanel" aria-labelledby="educational-process-list">
            <div class="row">
              <div class="col-sm-12">
                  <h2 class="process-title">Settings</h2>
              </div>
                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>Student registration</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>Check out a student file</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>Transfer student from outside</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>Student registration for classes</a>
                  </div>
                </div>
                 
                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>Call guardian</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>Student dismissal</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>school schedule</a>
                  </div>
                </div>

              </div>

              <div class="row">
              <div class="col-sm-12">
                  <h2 class="process-title">Reports</h2>
              </div>
                
                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>Student Report</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>dismissed students Report</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>transferred students Report</a>
                  </div>
                </div>

                
              </div>

              
            </div>
            <div class="tab-pane fade" id="Payment-Process" role="tabpanel" aria-labelledby="Payment-Process-list">
            
            <div class="row">
              <div class="col-sm-12">
                  <h2 class="process-title">Settings</h2>
              </div>
                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>Recording student expenses</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>Notice of non-payment of expenses</a>
                  </div>
                </div>


              </div>

              <div class="row">
              <div class="col-sm-12">
                  <h2 class="process-title">Reports</h2>
              </div>
                
                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>Study expenses Report</a>
                  </div>
                </div>
                
              </div>

            </div>
            <div class="tab-pane fade" id="system-settings" role="tabpanel" aria-labelledby="system-settings-list">

            <div class="row">
              <div class="col-sm-12">
                  <h2 class="process-title">Settings</h2>
              </div>
                
              <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>users</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>users permissions</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>system log</a>
                  </div>
                </div>


              </div>

              <div class="row">
              <div class="col-sm-12">
                  <h2 class="process-title">Reports</h2>
              </div>
                
              <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>Users Report</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>Permission Report</a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="tile text-center">
                    <a href="#" class="process-link"> <i class="fas fa-desktop"></i><br>system log Report</a>
                  </div>
                </div>
                
              </div>
            
            </div>
          </div>
        </div>
      </div>
@endsection
