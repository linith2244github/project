<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width: 35%">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Student List</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="formCreate" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Student Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Please enter your name">
            </div>
            <div class="mb-3">
                <label class="form-label" for="gender">Student Gender</label>
                <select class="form-select" id="gender" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="course" class="form-label">Course</label>
                <input type="text" class="form-control" id="course" name="course" placeholder="Please enter your course">
            </div>
            <div class="mb-3">
                <label for="profile" class="form-label">Profile</label>
                <input type="file" class="form-control" id="profile" name="profile">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button onclick="saveStudent();" type="button" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</div>