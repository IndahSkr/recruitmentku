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
      <form action="">
        <div class="modal-body">
          <div class="mb-3">
            <label>SSN</label>
            <input type="text" id="detId" name="detId">
            <input type="text" id="detssn" name="detssn" class="form-control">
          </div>

          <div class="mb-3">
            <label>Birth Place</label>
            <input type="text" id="detplc" name="detplc" class="form-control">
          </div>

          <div class="mb-3">
            <label> Date of Birth</label>
            <input type="date" id="detdat" name="detdat" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Formation</label>
            <select name="detform" id="detform" class="form-select m-1">
              <option value="0">-- Select Formation Option --</option>
              <?php
              foreach ($pesanjnsform as $dtform) {
              ?>
                <option value="<?php echo $dtform['id'] ?>"><?php echo $dtform['name'] ?></option>
              <?php
              }
              ?>
            </select>
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