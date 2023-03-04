<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>test</title>
    <link href="test.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="main-cat">
      <div class="container class-head">
        <div class="row-heading"><h1>Add categories</h1></div>
        <div class="row-button">
          <button
            type="button"
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#myModal"
          >
            Add categories
          </button>
        </div>
        <div class="modal" id="myModal">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add categories</h4>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                ></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <label>Category Name:</label>
                <input type="text" name="category" size="30" />
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-success"
                  data-bs-dismiss="modal"
                >
                  Add
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- showlist -->
      <div class="container showlist">
        <div class="container-fluid list-data">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Id</th>
                <th>categories</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>John</td>
                <td>
                  <button type="button" class="btn btn-info">Edit</button>
                </td>
                <td>
                  <button type="button" class="btn btn-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Debasis</td>
                <td>
                  <button type="button" class="btn btn-info">Edit</button>
                </td>
                <td>
                  <button type="button" class="btn btn-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>John</td>
                <td>
                  <button type="button" class="btn btn-info">Edit</button>
                </td>
                <td>
                  <button type="button" class="btn btn-danger">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
