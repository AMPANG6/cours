<!-- Bordered table start -->
<div class="row" id="table-bordered">
    <div class="col-11 mx-auto">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">{{$title}}</h4>
        </div>
        <div class="card-content">
          <!-- table bordered -->
          <div class="table-responsive text-center">
            <table class="table table-bordered mb-0">
             
             {{$slot }}
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>