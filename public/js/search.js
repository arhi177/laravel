$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#name').change(function() {
        $.post('/product/find', { "name": $(this).val() }, 
             function(returnedData){
                let arr = JSON.parse(returnedData);
                console.log(arr[0]);
        });
    });
  });


