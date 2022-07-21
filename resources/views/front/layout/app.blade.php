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

        function quantity(k) {
            q = $("#blok_quantity"+k).val();
            $.ajax({
                type: 'get',
                url:'/update_quantity/'+k+'/'+q,
                dataType: 'json',
                success: function () {
                    $("#basket_refresh").load('/basket_refresh');
                    $("#total_price").load('/total_sum');
                }
            });
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
        }

        function refresh(){
            $('#side-basket__content').load('/cart');
        }
    </script>

        <script>
            function changestatus(status){
                $('#delivery').val(status);
            }
            function changewallet(type){
                $('#wallet').val(type);
            }
        </script>

    <script type="text/javascript">
        
        function sendMessage() {
            var token = $("input#token").val();
            var status = $("input#status").val();
            var name = $("input#name").val();
            var phone = $("input#phone").val();
            var delivery = $("input#delivery").val();
            var cash = $("textarea#cash").val();
            var card = $("input#card").val();
            var wallet = $("input#wallet").val();

            console.log(status, name, phone, delivery, cash, card, wallet);
            if (name != '') {
                if (phone != '') {
                    $('.feedback-done').show();
                    $.ajax({
                        type: "get",
                        url: "/order/make",
                        data: {
                            '_token': token,
                            status: status,
                            name: name,
                            phone: phone,
                            delivery: delivery,
                            cash: cash,
                            card: card,
                            wallet: wallet
                        },
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        failure: function (errMsg) {
                        }
                    });
                
                }
                else {
                    document.getElementById("phone").placeholder = "Введите номер телефона";
                }
            }else {
                document.getElementById("name").placeholder = "Введите ваше имя";
            }
        }
    </script>

	<script src="/js/jquery.inputmask.min.js"></script>
	<script src="/js/owl.carousel.js"></script>
	<script src="/js/wow.min.js"></script>
	<script src="/js/jquery.ripples-min.js"></script>
	<script src="/js/gsap.min.js"></script>
	<script src="/js/dobpicker.js"></script>
	<script src="/js/main.js"></script>
</body>
</html>
