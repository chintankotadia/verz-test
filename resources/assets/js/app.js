(function($) {
    var App = {
        deleteCandidate:function(){
            $('.delete-candidate').on('click',function(e){
                var id = $(this).attr('rel');
                e.preventDefault();
                if(confirm("Are you sure you want to delete this candidate?")){
                    $('.delete-candidate-form-'+id).submit();
                }
            });
        },
        deleteInterview:function(){
            $('.delete-interview').on('click',function(e){
                var id = $(this).attr('rel');
                e.preventDefault();
                if(confirm("Are you sure you want to delete this interview schedule?")){
                    $('.delete-interview-form-'+id).submit();
                }
            }); 
        },
        initilizeDatepicker:function(){
            $('#datetimepicker').datetimepicker({
                format: 'yyyy-mm-dd hh:ii::ss'
            });
        }
    };

    jQuery(document).ready(function($){
        App.deleteCandidate();
        App.deleteInterview();
        App.initilizeDatepicker();
    });
})(jQuery);
