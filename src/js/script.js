var $=require("jquery");

$.ajax({
  'url': 'http://localhost:8888/booleanProjects/php-dischi/datab.php',
  'method': "GET",
  'success': function(data){
    console.log(JSON.parse(data))
  },
  'error': function(){
    alert("Ops, qualcosa è andato storto");
  }
});
