<!-- Bordered table start -->
<div class="row" id="table-bordered">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Table User</h4>
        </div>
        <div class="card-content">
          <!-- table bordered -->
          <div class="table-responsive">
            <table class="table table-bordered mb-0">
              <thead>
                <tr>
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>LEVEL</th>
                  <th>PHONE</th>
                  <th>ACTIONS</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $users as $user)
                  <tr>
                    <td class="text-bold-500"> {{$user->name}} </td>
                    <td>a</td>
                    <td class="text-bold-500">a</td>
                    <td>a</td>
                    <td><a href="#">
                      <i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a>
                    </td>
                  </tr>   
                @endforeach
                
                
              </tbody>
             
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>