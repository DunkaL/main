<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>concept - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/icomoon/style.css" rel="stylesheet')}}">
    <link href="{{ asset('plugins/switchery/switchery.min.css')}}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ asset('css/concept.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/custom.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Page Container -->
<div class="page-container">
    <div class="register">
        <div class="login-bg"></div>
        <div class="login-content">
            <div class="login-box">
                <div class="login-header">
                    <h3>Создать новую учетную запись</h3>
                    <p>Заполните эту простую форму для регистрации.</p>
                </div>
                <div class="login-body">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Повторите пароль">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleFirstName" placeholder="Имя ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleLastName" placeholder="Фамилия">
                        </div>
                        <div class="custom-control custom-checkbox form-group">
                            <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                            <label class="custom-control-label" for="exampleCheck1">
                                Я согласен с <a href="#"  data-toggle="modal" data-target="#exampleModalCenter">Условиями &amp; Положениями</a>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                    </form>
                    <p class="m-t-sm">У Вас уже есть учетная запись? <a href="{{ route('login') }}">Авторизуйтесь</a></p>
                </div>
                <div class="login-footer">
                    <p>Copyright @Stacks</p>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Terms &amp; Conditions</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Praesent cursus pretium urna, sit amet condimentum dui dignissim non. Pellentesque laoreet velit sollicitudin enim dignissim, vitae imperdiet mauris facilisis. Integer eget diam pellentesque, placerat metus at, placerat tellus. Morbi a lacus arcu. Ut urna orci, varius ac sem in, eleifend vehicula purus. Aenean egestas nibh non porttitor vestibulum. Donec imperdiet, risus at vestibulum interdum, erat sem commodo mauris, et dignissim quam libero in ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam porta consequat lorem, et fermentum justo ullamcorper non. In quis rutrum ante, quis mattis erat. Maecenas in odio tortor. Sed ut viverra sem.
                        <br><br>
                        Pellentesque purus ipsum, aliquet bibendum risus vitae, elementum vestibulum nunc. Cras porttitor, quam ut sodales consequat, neque nibh aliquam tellus, a venenatis enim urna vel dolor. Suspendisse tincidunt, justo et finibus eleifend, nunc libero fringilla turpis, eu egestas neque dui quis nulla. Proin eu efficitur elit. Curabitur nulla nulla, scelerisque nec molestie ac, consectetur rhoncus lectus. Integer pulvinar nisl purus, auctor placerat leo euismod ut. In tempor ante a varius ultrices. Fusce pretium tortor in mauris mollis faucibus.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /Page Container -->


<!-- Javascripts -->
<script src="{{ asset('plugins/jquery/jquery-3.1.0.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/popper.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{ asset('plugins/switchery/switchery.min.js')}}"></script>
<script src="{{ asset('js/concept.min.js')}}"></script>
</body>
</html>