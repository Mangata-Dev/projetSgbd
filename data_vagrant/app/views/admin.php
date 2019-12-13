<? session_start( );
  if(!isset($_SESSION['roleUser']) || $_SESSION['roleUser']!=='1'){header('Location:../index.php') ; }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administration</title>
    <link href="../assets/css/reset.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/admin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../vendor/DataTables/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="../vendor/Bootstrap/bootstrap.min.css"/>
  </head>
  <?php include 'navUser.php' ?>
  <body>

    <h1> bienvenue sur la page d'admin</h1>
    <p></p>
    <p>Voici les produits actuelements en stocks</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      add Product
    </button>

    <!-- Modal ADD product-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add New Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="addProduct" method="POST">
              <div class="form-group">
                <input type="text"  class="form-control" name="nameProduct" value="" placeholder="Nom du produit">
              </div>
              <div class="form-group">
                <input type="textarea" class="form-control" name="descriptionProduct" value="" placeholder="Descriptions">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="price" value="" placeholder="prix du produits">
              </div>
              <div class="form-group">
                <input class="form-control" id="file" type="file" name="imgProduct" value="" placeholder="Image">
              </div>
              <button id="btnSubmit" type="submit" class="btn btn-primary">Add</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalUpdateProduct" tabindex="-1" role="dialog" aria-labelledby="Title" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="Title" >Update Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="updateProduct" method="POST">
                <input style="display:none" class="form-control" id="idProduct" type="number" name="idProduct" value="">
              <div class="form-group">
                <input type="text"  id="nameProductValue" class="form-control" name="nameProduct" value="" placeholder="Nom du produit">
              </div>
              <div class="form-group">
                <input type="textarea" id="descriptProductValue" class="form-control" name="descriptionProduct" value="" placeholder="Descriptions">
              </div>
              <div class="form-group">
                <input type="number" id="priceProductValue" class="form-control" name="price" value="" placeholder="prix du produits">
              </div>
              <div class="form-group">
                <input class="form-control" id="fileUpdate" type="file" name="imgProduct" value="" placeholder="Image">
              </div>
              <button  type="submit" class="btn btn-primary">Save</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="table-container" >
      <table id="productsTable" class="display" style="width:100%">
        <thead>
               <tr>
                  <th>idProduits</th>
                  <th>nameProduits</th>
                  <th>descriptions</th>
                  <th>dateProduits</th>
                  <th>imageProduits</th>
                  <th>price</th>
                  <th>update</th>
                  <th>delete</th>
               </tr>
           </thead>
      </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script type="text/javascript" src="../vendor/Bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="../vendor/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="../vendor/DataTables/dataTables.editor.min.js"></script>
    <script src="../assets/js/admin.js" type="text/javascript"></script>
  </body>
</html>
