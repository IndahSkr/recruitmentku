<div class="modal fade" id="md-tmbUser" tabindex="-1" aria-labelledby="md-tmbUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="md-tmbUserLabel">Tambah User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../../../model/bridge/master/mnguser.php" method="post">
                <div class="modal-body ps-3 pr-3">
                    <div class="mb-3">
                        <label for="iptNmlkp">Full Name</label>
                        <input class="form-control" type="text" name="iptNmlkp" id="iptNmlkp">
                    </div>
                    <div class="mb-3">
                        <label for="iptuname">Username</label>
                        <input type="text" class="form-control" name="iptuname" id="iptuname">
                    </div>
                    <div class="mb-3">
                        <label for="iptpw">Password</label>
                        <input type="password" class="form-control" name="iptpw" id="iptpw">
                    </div>
                    <div class="mb-3">
                        <label for="iptEmail">Email</label>
                        <input type="password" class="form-control" name="iptEmail" id="iptEmail">
                    </div>
                    <div class="mb-3">
                        <label for="iptWa">WA</label>
                        <input type="text" class="form-control" name="iptWa" id="iptWa">
                    </div>
                    <div class="mb-3">
                        <label for="iptLv">Level</label>
                        <select id="iptLv" name="iptLv" class="form-select">
                            <option selected>Choose....</option>
                            <option value="1">Satu</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>