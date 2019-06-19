var $=require("jquery");
var source=$('#template-dischi').html();
var template_function = Handlebars.compile(source);

$.ajax({
  'url': 'http://localhost:8888/booleanProjects/php-dischi/datab.php',
  'method': "GET",
  'success': function(data){
    var dischi=JSON.parse(data);

    for (var i = 0; i < dischi.length; i++) {

      var compile = {
        'immagine': dischi[i].immagine,
        'titolo': dischi[i].titolo,
        'artista':dischi[i].artista,
        'anno':dischi[i].anno
      }

      var html = template_function(compile);
      $('.container').append(html);
    }
  },

  'error': function(){
    alert("Ops, qualcosa è andato storto");
  }
});
