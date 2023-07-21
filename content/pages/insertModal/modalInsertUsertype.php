<!-- Modal -->
<div class="modal fade" id="modalInsertUsertype" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="db/usertype/insert.php" method="post">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New Usertype</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <label class="form-label" for="new_usertype_name">Name:</label>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <input class="form-control" type="text" name="new_usertype_name" id="new_usertype_name">
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