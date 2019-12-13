
$("#loginForm").on('submit',function(event){
  event.preventDefault();
  dataSerialized = $(this).serialize() ;
  $.ajax({
    url: "../controllers/controller_login.php",
    type : 'POST',
    data :dataSerialized ,
    dataType : 'json' ,
    success: function(result){
      result.response ? document.location.href="/data_vagrant/app/index.php" : alert(result.message);
    }
  });

});
