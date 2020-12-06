$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#name').change(function() {
        $.post('/product/find', { "name": $(this).val() }, 
             function(returnedData){
                let products = JSON.parse(returnedData);
                $('#products').html(''); //это правильно
                let html = '';
                products.forEach(product => { 
                    html += `<tr>`;
                    html += `<td>${product['id']}`;
                    html += `<td>${product['name']}`;
                    html += `<td>${product['weight']}`;
                    html += `<td>${product['price']}`;
                    html += `<td><a class="waves-effect waves-light btn red" href="/product/delete/${product['id']}">Это ьблять Удаление</a></td>`;
                    html += `</tr>`;
                });
                $('#products').html(html);

        });
    });
  });


