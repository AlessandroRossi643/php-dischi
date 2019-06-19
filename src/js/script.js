var $=require("jquery");
var source=$('#template-dischi').html();
var template_function = Handlebars.compile(source);

// FUNCTION STAMPA CARD
function stampaCard(elencoDischi){
  for (var i = 0; i < elencoDischi.length; i++) {

    var compile = {
      'immagine': elencoDischi[i].immagine,
      'titolo': elencoDischi[i].titolo,
      'artista': elencoDischi[i].artista,
      'anno': elencoDischi[i].anno
    }

    var html = template_function(compile);
    $('.container').append(html);
  }
};

// FUNCTION - CERCA TUTTE LE CARD DEL DB
$.ajax({
  'url': 'http://localhost:8888/booleanProjects/php-dischi/datab.php',
  'method': "GET",
  'success': function(data){
    var dischi=JSON.parse(data);
    stampaCard(dischi);
  },
  'error': function(){
    alert("Ops, qualcosa è andato storto");
  }
});


// FUNCTION - CERCA CARD DI UN RELATIVO ARTISTA
function cercaArtista(artista) {
    $.ajax({
        'url': 'http://localhost:8888/booleanProjects/php-dischi/cercaartista.php',
        'method': 'POST',
        'data': {
          'artista': artista
        },
        'success': function(data) {
          var arrayArtisti = JSON.parse(data);
          console.log(arrayArtisti);
        }
    });
}

$('#searchArtist').keydown(function(event){
  if (event.which==13) {
    var artistaCercato=$('#searchArtist').val();
    console.log(artistaCercato);

    cercaArtista(artistaCercato);
    $('#searchArtist').val("");

    $('#searchArtist').keydown(function(){
      $('.container').children().remove();
    });
  }
});
