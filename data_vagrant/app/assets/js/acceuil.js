

$(document).ready(function(){
  $.ajax({
    url: "../controllers/controller_acceuil.php",
    type : 'POST',
    success: function(products){
      products = JSON.parse(products);
      for (let [key, value] of Object.entries(products)) {
        $('.container-articles').append('<div class="card" style="width:400px"><img class="card-img-top" src="" alt="Card image" style="width:100%"><div class="card-body"><h4 class="card-title">'+value.nameProduits+'</h4><p class="card-text">'+value.descriptions+'</p><a href="#" class="btn btn-primary stretched-link">Acheter</a></div></div>');
        $('.container-articles').append('');
        $('.container-articles').append('');
        $('.container-articles').append('');
        $('.container-articles').append('');
        $('.container-articles').append('');
        $('.container-articles').append('');
      }
    }
  });
});
