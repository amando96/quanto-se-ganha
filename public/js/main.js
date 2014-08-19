$(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
	});
});

$(function() {
  var companies = [
    "Intermache",
    "Lidl",
    "Pingo Doce",
    "Modelo",
    "Outro"
  ];
  
  var positions = [
    "Caixa",
    "Armazém",
    "Contabilidade",
    "Limpeza"
  ];
  
  $( "#company" ).autocomplete({
    source: companies
  });
  
  $( "#position" ).autocomplete({
    source: positions
  });
  
  $("#search_param").change(function(){
    alert($(this).attr('value'));  
  });
  
  $( "#search" ).autocomplete({
    source: positions
  });
});