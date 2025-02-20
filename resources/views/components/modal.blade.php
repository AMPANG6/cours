<div class="modal fade text-left modal-borderless" id="border-less" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel1" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Detail User</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
        <i data-feather="x"></i>
        </button>
    </div>
    <div class="modal-body">
       {{$slot}}
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
        <i class="bx bx-x d-block d-sm-none"></i>
        <span class="d-none d-sm-block">Close</span>
        </button>
        <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
        <i class="bx bx-check d-block d-sm-none"></i>
        <span class="d-none d-sm-block">Accept</span>
        </button>
    </div>
    </div>
</div>
</div>