function addBasket(id){
    fetch('/add_basket/' + id);
    $('#side-basket__content').load('/cart');
    $("#price").load('/price');
    $("#quantity_product").load('/quantity_product_refresh');
}

function deleteProduct(id) {
    fetch('/delete_product/'+id);
    $('#side-basket__content').load('/cart');
    $("#price").load('/price');
    $("#basket_refresh").load('/basket_refresh');
    $("#quantity_product").load('/quantity_product_refresh');
}

function quantity(k) {
    q = $("#blok_quantity"+k).val();
    fetch('/update_quantity/'+k+'/'+q);
    $("#basket_refresh").load('/basket_refresh');
    
    $("#total_price").load('/total_sum');
}

function logo(bul, id) {
    fetch('/update_logo/'+bul+'/'+id);
    $("#basket_refresh").load('/basket_refresh');
}

function refresh(){
    $('#side-basket__content').load('/cart');
}



