$(document).ready(function() {
  var myTable =$('#productsTable').DataTable( {
    responsive: true,
    ajax :{
      url: "../controllers/controller_admin.php",
      dataSrc: function(json){

        return json;
      },
      columns:[
        {data : "idProduits"},
        {data :"nameProduits" },
        {data: "descriptions"},
        {data :"dateProduits" },
        {data: "imageProduits"},
        {data : "price"},
        {data : "update"},
        {data : "delete"}
      ]
    }
  });
  $("#addProduct").on('submit',function(event){
    event.preventDefault();
    // $("#fileForm").submit();
    var formData =$(this ).serialize() ;
    $.ajax({
      url: "../controllers/controller_adminAdd.php",
      type : 'POST',
      data :formData ,
      success: function(result){
        console.log(result);
        myTable.ajax.reload();
      },
      error:function(){
        console.log("une erreur est survenue");
      }
    });
  });

  $('tbody').on('click',".deleteBtn",function(event){
    var idProduct ={"idProduct" : $(this).attr("name")};
    $.ajax({
      url: "../controllers/controller_adminDelete.php",
      type : 'POST',
      data :idProduct ,
      success: function(){
        myTable.ajax.reload();
      },
      error:function(){
        console.log("une erreur est survenue");
      }
    });
  });
  $("#updateProduct").on('submit',function(event){
    event.preventDefault();
    // $("#fileForm").submit();
    var formData =$(this ).serialize() ;
    $.ajax({
      url: "../controllers/controller_adminUpdate.php?function=updateProduct",
      type : 'POST',
      data :formData ,
      success: function(result){
        myTable.ajax.reload();
      },
      error:function(){
        console.log("une erreur est survenue");
      }
    });
  });

 });
 $(document).ready(function(){
   $("tbody").on('click','.updateBtn',function(event){
     // event.preventDefault();
     var idProduct ={"idProduct" : $(this).attr("name")};
     $.ajax({
       url: "../controllers/controller_adminUpdate.php?function=getProduct",
       type : 'POST',
       data : idProduct,
       success: function(product){
         product = JSON.parse(product);
         $("#idProduct").val(product.idProduits);
         $("#nameProductValue").val(product.nameProduits);
         $("#descriptProductValue").val(product.descriptions);
         $("#priceProductValue").val(product.price);
       }
     });
   });
 });
