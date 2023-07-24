<!-- Modal -->
<div class="modal fade" id="modalInsertUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="db/user/insertNewUserPasswordEmail.php" method="post">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">New Usertype</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <label class="form-label" for="new_user_email">Email:</label>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col">
              <input class="form-control" type="email" name="new_user_email" id="new_user_email">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label class="form-label" for="new_user_username">Username:</label>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col">
              <input class="form-control" type="text" name="new_user_username" id="new_user_username">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label class="form-label" for="new_user_usertype">Usertype:</label>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col">
              <select class="form-select" name="new_user_usertype" id="new_user_usertype">
                <?php include('db/usertype/selectAllDropdown_new.php') ?>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>