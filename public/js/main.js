$(document).ready(function(e){  
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
        switch(param){
            case 'position':
                $( "#search" ).autocomplete({
                    serviceUrl: 'autocomplete/positions'
                });
                break;
            case 'company':
                $( "#search" ).autocomplete({
                    serviceUrl: 'autocomplete/companies'
                });
                break;
            case 'district':
                $( "#search" ).autocomplete({
                    serviceUrl: 'autocomplete/districts'
                });
                break;
        }
    });
    
   /* $( "#company" ).autocomplete({
        serviceUrl: 'autocomplete/companies'
    });
  
    $( "#position" ).autocomplete({
        serviceUrl: 'autocomplete/positions'
    });*/
    
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
    
    $("form").submit(function(e){
        err = false;
        $(".required").each(function(){
            if($(this).val() == ''){
                err = true;
            }
        });
        if(err === true){
            $(".validate-response").html(' <div id="submit-error" class="alert alert-danger" role="alert"><strong>Erro!</strong> Há campos obrigatórios não preenchidos, por favor preencha e volte a submeter.</div>');
            e.preventDefault();
        }
    });
});