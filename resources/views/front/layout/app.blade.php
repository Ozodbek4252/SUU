<!DOCTYPE html>
<html lang="ru">
<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <title>SUU | О нас</title>
</head>
<body>
    @include('front.component.header')

    @yield('content')

    @include('front.component.footer')
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script>
        function addBasket(id){
            $.ajax({
                type: 'get',
                url:'/add_basket/' + id,
                dataType: 'json',
                success: function () {
                    $('#side-basket__content').load('/cart');
                    $("#price").load('/price');
                    $("#quantity_product").load('/quantity_product_refresh');
                }
            });
        }
        function deleteProduct(id) {
            $.ajax({
                type: 'get',
                url:'/delete_product/'+id,
                dataType: 'json',
                success: function () {
                    $('#side-basket__content').load('/cart');
                    $("#price").load('/price');
                    $("#quantity_product").load('/quantity_product_refresh');
                    $("#basket_refresh").load('/basket_refresh');
                }
            })
        }

        // function deleteProduct(id) {
        // console.log('work');
        // fetch('/delete_product/'+id);
        // $('#side-basket__content').load('/cart');
        // $("#price").load('/price');
        // $("#basket_refresh").load('/basket_refresh');
        // $("#quantity_product").load('/quantity_product_refresh');
        // }

        function quantity(k) {
            q = $("#blok_quantity"+k).val();
            // fetch('/update_quantity/'+k+'/'+q);
            $.ajax({
                type: 'get',
                url:'/update_quantity/'+k+'/'+q,
                dataType: 'json',
                success: function () {
                    $("#basket_refresh").load('/basket_refresh');
                    $("#total_price").load('/total_sum');
                }
            });
            // $("#basket_refresh").load('/basket_refresh');
            // $("#total_price").load('/total_sum');
        }

        function logo(bul, id) {
            $.ajax({
                type: 'get',
                url:'/update_logo/'+bul+'/'+id,
                dataType: 'json',
                success: function () {
                    $("#basket_refresh").load('/basket_refresh');
                }
            });
            // fetch('/update_logo/'+bul+'/'+id);
            // $("#basket_refresh").load('/basket_refresh');
        }

        function refresh(){
            $('#side-basket__content').load('/cart');
        }
    </script>
    {{--<script src="/js/basket.js"></script>--}}
	<script src="/js/jquery.inputmask.min.js"></script>
	<script src="/js/owl.carousel.js"></script>
	<script src="/js/wow.min.js"></script>
	<script src="/js/jquery.ripples-min.js"></script>
	<script src="/js/gsap.min.js"></script>
	<script src="/js/dobpicker.js"></script>
	<script src="/js/main.js"></script>
</body>
</html>
