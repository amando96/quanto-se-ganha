$(document).ready(function(e){
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
    var districts = [
        "Aveiro",
        "Faro",
        "Beja"
    ];
  
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
        switch(param){
            case 'position':
                $( "#search" ).autocomplete({
                    source: positions
                });
                break;
            case 'company':
                $( "#search" ).autocomplete({
                    source: companies
                });
                break;
            case 'district':
                $( "#search" ).autocomplete({
                    source: districts
                });
                break;
        }
    });
    
    $( "#company" ).autocomplete({
        source: companies
    });
  
    $( "#position" ).autocomplete({
        source: positions
    });
    
    $("#search").on('keyup', function(){
        $(".spinner").show();
        $("#ajax-results").hide();
        if($("#search_param").val() != ''){
            by = $("#search_param").val();
        } else {
            by = 'all';
        }
        $("#ajax-results").load('s/'+by+'/'+$(this).val(),
        function(){
            $("#ajax-results").show();
            $(".spinner").hide();
        });
    });
    $("#ajax-results").load('s/recent/all',
    function(){
        $("#ajax-results").show();
        $(".spinner").hide();
    });
});