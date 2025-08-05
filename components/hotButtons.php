<div class="w-50 mx-auto mt-5">
    <div class="w-100 d-flex flex-row">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createNewModal" >
            <i class="fa fa-plus" aria-hidden="true"></i> <span>Create New</span>
        </button>
    </div>
</div>



<!-- Modal -->

<div class="modal fade" id="createNewModal" tabindex="-1" aria-labelledby="createNewModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
        <form action="" class="row g3 needs-validation" novalidate>
            <div class="col-md-6">
                <label for="validationTextarea" class="form-label">Job Number</label>
                <input type="number" class="form-control" id="railHeight validationTextarea" placeholder="Enter Job Number" required>
                <div class="invalid-feedback">
                    Please enter a message in the textarea.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationTextarea" class="form-label">Rail Height</label>
                <input type="number" class="form-control" id="railHeight validationTextarea" placeholder="Enter Rail Height" required>
                <div class="invalid-feedback">
                    Please enter a message in the textarea.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationTextarea" class="form-label">Ejector Plate Thickness</label>
                <input type="number" class="form-control" id="railHeight validationTextarea" placeholder="Enter Rail Height" required>
                <div class="invalid-feedback">
                    Please enter a message in the textarea.
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center pt-5 pb-2">
                <button type="submit" class="btn btn-primary w-100 ">Create New Calculations Sheet</button>
            </div>


        </form>

      </div>
    </div>
  </div>
</div>