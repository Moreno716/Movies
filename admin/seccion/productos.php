<?php include("../template/cabecera.php"); ?>
<?php
$txtID=(isset($_POST['txtId']))?$_POST['txtId']:"";
$txtName=(isset($_POST['txtName']))?$_POST['txtName']:"";
$txtImage=(isset($_FILES['txtImage']['name']))?$_FILES['txtImage']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";


?>

<div class="col-md-5">

    <div class="card">
        <div class="card-header">
            Movies Data
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">

                <div class = "form-group">
                <label for="txtId">ID:</label>
                <input type="text" class="form-control" name="txtId" id="txtId" placeholder="Enter ID">
                </div>

                <div class = "form-group">
                <label for="txtName">Name:</label>
                <input type="text" class="form-control" name="txtName" id="txtName" placeholder="Enter name">
                </div>

                <div class = "form-group">
                <label for="txtImage">Image:</label>
                <input type="file" class="form-control" name="txtImage" id="txtImage" placeholder="Enter image">
                </div>

                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" value="Add" class="btn btn-success">Add</button>
                    <button type="submit" name="accion" value="Edit" class="btn btn-warning">Edit</button>
                    <button type="submit" name="accion" value="Cancel" class="btn btn-info">Cancel</button>
                </div>

            </form>
        </div>
    </div>
</div>
<div class="col-md-7">
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>Narnia</td>
                <td>imagen.png</td>
                <td>Select | Delete</td>
            </tr>
        </tbody>
    </table>

</div>

<?php include("../template/pie.php") ?>