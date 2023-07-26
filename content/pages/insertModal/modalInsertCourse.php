<!-- Modal -->
<div class="modal fade" id="modalInsertCourse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="db/course/insert.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">New Course</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <label class="form-label" for="new_course_name">Name:</label>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col">
              <input class="form-control" type="text" name="new_course_name" id="new_course_name">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label class="form-label" for="new_course_description">Description:</label>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col">
              <input class="form-control" type="text" name="new_course_description" id="new_course_description">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label class="form-label" for="new_course_length">Length:</label>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col">
              <input class="form-control" type="number" name="new_course_length" id="new_course_length">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label class="form-label" for="new_course_image">Image:</label>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col">
              <input class="form-control" type="file" name="new_course_image" id="new_course_image">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label class="form-label" for="new_course_keywords">Keywords:</label>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col">
              <input class="form-control" type="text" name="new_course_keywords" id="new_course_keywords">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label class="form-label" for="new_course_cathegory">Cathegory:</label>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col">
              <input class="form-control" type="text" name="new_course_cathegory" id="new_course_cathegory">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label class="form-label" for="new_course_price">Price:</label>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col">
              <input class="form-control" type="number" name="new_course_price" id="new_course_price">
            </div>
          </div>

          <div class="row">
            <div class="col">
              <label class="form-label" for="new_course_visibility">Visibility:</label>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col">
              <select class="form-select" name="new_course_visibility" id="new_course_visibility">
                <option value="1">Visible</option>
                <option value="0">Not Visible</option>
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