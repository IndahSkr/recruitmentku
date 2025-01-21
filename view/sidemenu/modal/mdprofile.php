<div class="modal fade" id="modalEditIntro" tabindex="-1" aria-labelledby="modalEditIntro" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header d-flex align-items-center">
        <h4 class="modal-title">Edit Introduction</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../../../model/bridge/profile/addprofile.php?word=updIntro" method="POST">
        <div class="modal-body">

          <div class="mb-3">
            <label>Introduction</label>
            <input type="text" name="idIntro" id="idIntro" hidden>
            <textarea name="edIntro" id="edIntro" class="form-control" rows="5" cols="30"></textarea>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-outline-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modalEditDetail" tabindex="-1" aria-labelledby="modalEditDetail" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header d-flex align-items-center">
        <h4 class="modal-title">Edit User Details</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>