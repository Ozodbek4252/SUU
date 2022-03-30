var arr = [];
var archive = [];

function addBasket(id){
    if(!arr.includes(id) || arr.length == 0){
            archive.push(id);        
            localStorage.setItem("arr", JSON.stringify(archive));
            arr = JSON.parse(localStorage.getItem("arr"));
            console.log(arr);
        }
    fetchposts();
}
basket();


function fetchposts() {
    $.ajax({
        type: 'get',
        url:'fetch',
        data: {"arr":arr},
        success: function (data) {
            console.log(data);
            $('#side-basket__content').html('');
            if(data.data.length != 0){
                var total_price = 0;
                for(var i=0; i<=data.data.length; i++){
                    var type = '';
                    total_price += parseInt(data.data[i].price);
                            $('#side-basket__content').append(
                                '<div class="side-basket__item">'+
                                    '<div class="cabinet-order__img">'+
                                        '<img src="'+data.data[i].image_path+'/'+data.data[i].image+'" alt="img">'+
                                    '</div>'+
                                    '<div class="cabinet-order__name">'+data.data[i].cat_name_ru+
                                        '<span>('+data.data[i].size+'L)</span>'+
                                        '</div>'+
                                    '<div class="basket-item__delete" onclick="deleteProduct('+i+')">'+
                                        '<img src="img/del.svg" alt="ico">'+
                                    '</div>'+
                                '</div>');
                            $("#price").html(total_price+' UZS');
                            }
            }else{
                $("#price").html("0 UZS");
                $('#side-basket__content').html("");
            }
        }
    });
}

function deleteProduct(index){
        arr.splice(index, 1);
        localStorage.setItem("arr", JSON.stringify(arr));
        fetchposts();
        basket();
}

function basket() {
    arr = JSON.parse(localStorage.getItem("arr"));
    // console.log(arr);
    var quantity = 1;
    $.ajax({
        type: 'get',
        url:'/basket',
        data: {"arr":arr},
        success: function (data) {
            $('#basket-list').html('');
            if(data.data.length != 0){
                var total_price = 0;

                for(var i=0; i<=data.data.length; i++){
                total_price += parseInt(data.data[i].price);

                $('#basket-list').append(
                    '<div class="basket-item">'+
                        '<div class="basket-item__delete" onclick="deleteProduct('+i+')">'+
                            '<img src="img/del.svg" alt="ico">'+
                        '</div>'+
                        '<div class="basket-item__img">'+
                            '<img src="'+data.data[i].image_path+'/'+data.data[i].image+'" alt="img">'+
                        '</div>'+
                        '<div class="basket-item__wrap">'+
                            '<div class="basket-item__size" id="basket-item__size'+i+'">'
                            +parseInt(data.data[i].price)/6+    
                            '</div>'+
                            '<div class="basket-item__info">'+
                                '<div class="basket-item__head">'+
                                    '<h2 class="basket-item__name">'
                                    +data.data[i].cat_name_ru+'  ('+data.data[i].size+'L)'+
                                    '</h2>'+
                                    '<div class="basket-item__price">'
                                        +'итог<span><strong id="price_product'+i+'">'+data.data[i].price +'</strong> UZS </span>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="basket-item__text">'
                                    +data.data[i].description_ru+
                                '</div>'+
                                '<div class="basket-item__logo btn">'+
                                    '<span id="logo'+i+'">'+'С вашим логотипом'+'</span>'+
                                    // '<svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">'+
                                    //     '<path d="M9.41619 1.17401L5.29546 5.29474M1.17473 9.41547L5.29546 5.29474M5.29546 5.29474L9.26077 9.26005L1.12145 1.12073" stroke="#217BBE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>'+
                                    // '</svg>'+
                                '</div>'+
                                '<div class="basket-item__total">'+
                                    '<div id="capsula'+i+'">6 x '+parseInt(data.data[i].price)/6+' =</div>'+
                                    '<div><strong id="price'+i+'">'+data.data[i].price+'</strong> UZS * <span id="capsula_name'+i+'"></span></div>'+
                                '</div>'+
                                '<div class="basket-item__open">'+
                                    'количество'+
                                    '<svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">'+
                                        '<path d="M14 1L7.5 7L1 1" stroke="#217BBE" stroke-width="1.5" stroke-linecap="round"/>'+
                                    '</svg>'+
                                '</div>'+
                                '<div class="basket-item__dropdown">'+
                                    '<div class="order-thin">'+
                                        '<div class="order-item order-count">'+
                                            '<div class="order-item__title">'+
                                                'Выберите количество блоков'+
                                            '</div>'+
                                            '<select id="blok_quantity'+i+'" onchange="quantity('+i+')">'+
                                                '<option value="1" selected>1</option>'+
                                                '<option value="2">2</option>'+
                                                '<option value="3">3</option>'+
                                                '<option value="4">4</option>'+
                                            '</select>'+
                                        '</div>'+
                                        '<div class="order-item order-print">'+
                                            '<div class="order-item__title">'+
                                                'Печать логотипа'+
                                            '</div>'+
                                            '<div class="order-print__btns">'+
                                                '<button class="btn active" onclick="logo(1,'+i+')">С вашим логотипом</button>'+
                                                '<button class="btn" onclick="logo(0,'+i+')">Без логотипа</button>'+
                                            '</div>'+
                                            '<div class="order-print__images">'+
                                                '<div>'+
                                                    '<img src="img/print1.png" alt="img">'+
                                                '</div>'+
                                                '<div>'+
                                                    '<img src="img/print2.png" alt="img">'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="order-price">'+
                                            '<div class="order-price__item">'+
                                                '<span class="order-price__name">Промежуточный итог</span>'+
                                                '<span class="order-price__value" id="order-price__name'+i+'">'+data.data[i].price +'<span>UZS</span></span>'+
                                            '</div>'+
                                        '</div>'+
                                        '<button class="order-add btn">'+
                                            'Далее'+
                                        '</button>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>');
                    $("#total_price").html(total_price);
                    if(data.data[i].cat_id == 3){
                        $("div#capsula"+i).html("");
                        $("#basket-item__size"+i).html("");
                        $("#basket-item__size"+i).append(data.data[i].price);
                        $("#capsula_name"+i).html("");
                        $("#capsula_name"+i).append($("#blok_quantity"+i).val()+' капсула');
                    }else{
                        $("#capsula_name"+i).append($("#blok_quantity"+i).val()+' блок');
                    }
                }
        }
        else{
            $('#basket-empty').html('ВАША КОРЗИНА ПУСТА');
            $('#basket-content').html('');
            }
        }
    });
}

function quantity(q) {
    price = 0;
    price = parseInt($("#total_price").text()) - parseInt($("#price_product"+q).text());

    $("#total_price").html(price);
    console.log(parseInt($("#price_product"+q).text()));
    $("#capsula_name"+q).html("");
    $("#capsula_name"+q).append($("#blok_quantity"+q).val()+' блок');

    $("#price_product"+q).html("");
    $("#price_product"+q).html(parseInt($("#price"+q).text())*$("#blok_quantity"+q).val());

    $("#order-price__name"+q).html("");
    $("#order-price__name"+q).html(parseInt($("#price"+q).text())*$("#blok_quantity"+q).val()+' UZS');

    console.log(parseInt($("#price_product"+q).text()));
    $("#total_price").html("");
    $("#total_price").html((price + parseInt($("#price_product"+q).text())));
    console.log()

}
function logo(l,id) {
    if(l == 1){
        $("#logo"+id).html('С вашим логотипом');
    }else{
        $("#logo"+id).html('Без логотипа');
    }
    console.log(id);
}



