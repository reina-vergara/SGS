<!DOCTYPE html>
<html>
<head>
    <title>Iglesia Católica en Bolivia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="main__header normal">
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <h1 class="navbar-brand"><a href="index.html">Iglesia Católica en Bolivia</a></h1>
                <a href="#" class="submenu">Menus</a> </div>
            <div class="menuBar">
                <ul class="menu">
                    <li ><a href="inicio#">Inicio</a></li>
                    <li  ><a href="sacramentos">Sacramentos</a>
                        <ul>
                            <li><a href="sacramentos">Bautizo</a></li>
                            <li><a href="sacramentos">Primera Comunión</a></li>
                            <li><a href="sacramentos">Penitencia</a></li>
                            <li><a href="sacramentos">Eucaristia</a></li>
                            <li><a href="sacramentos">Unción de los Enfermos</a></li>
                            <li><a href="sacramentos">Orden Sacerdotal</a></li>
                            <li><a href="sacramentos">Matrimonio</a></li>
                        </ul>
                    </li>
                    <li><a href="iglesias">Iglesias</a></li>
                    <li ><a href="sacerdotes">Sacerdotes</a></li>
                    <!-- <li><a href="misas">Misas</a></li>-->
                     <li class="active"><a href="contactos">Contactenos</a></li>
                    <li><a href="contactos">Iniciar Sesion</a></li>

                </ul>
             </div>
             <!-- /.navbar-collapse -->
        </nav>
    </div>
</header>
<section class="main__middle__container">
    <div class="row title__block">
        <div class="container text-center">
            <h2 class="page__title">Contactenos!</h2>
            <span class="sep"></span>
            <p class="smaller">
                Recuerde que nuestra  parroquia necesita mantener infomacion
                actualizada sobre sus feligreses.
            </p>
        </div>
    </div>
    <section class="contact-us">
        <div class="container">
            <iframe   width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.4017914305086!2d-68.1366885404839!3d-16.49541733347846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdfa08b62d765a7ee!2sConferencia+Episcopal+Boliviana!5e0!3m2!1ses!2sbo!4v1478621572599" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="row">
                <div class="col-md-8">
                    <h3>Mandenos un mensaje</h3>
                    <hr>
                    <p>Nuestros representantes de servicio al cliente se comprometen a responder a todas sus preguntas y satisfacer cualquier necesidad que pueda tener. Nos encantaría saber de usted! Por favor, rellene el siguiente formulario para que podamos ayudarle.</p>

                    <br />
                    <p id="feedback"></p>
                    <form role="form" id="contact-form" name="contact-form" method="post" action="" class="contact-form">
                        <div class="form-group col-md-6">
                            <label class="sr-only" for="exampleInputEmail1">Nombre: *</label>
                            <input required type="text" class="form-control" id="name" name="name" placeholder="Your Name: *">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="sr-only" for="exampleInputEmail1">Email: *</label>
                            <input required type="email" class="form-control" id="email" name="email" placeholder="Email: *">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail1">Tema:</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject:">
                        </div>
                        <div class="form-group">
                            <textarea required class="form-control" id="message" name="message" rows="5" placeholder="Message: *"></textarea>
                        </div>
                        <input id="submit-button" type="submit" class="btn btn-lg btn-info" value="Submit">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">

            <div class="col-md-3">
                <h3>Social</h3>
                <p>Calle Potosi<br />
                    Murillo, La Paz<br />
                    Bolivia<br />
                    <br />
                    Phone: (222) 222-2222<br />
                    Fax: (591)777-77777<br />
                    <br />
                </p>
                <div class="social__icons"> <a href="#" class="socialicon socialicon-twitter"></a> <a href="#" class="socialicon socialicon-facebook"></a> <a href="#" class="socialicon socialicon-google"></a> <a href="#" class="socialicon socialicon-mail"></a> </div>
            </div>
        </div>
    </div>
</footer>
<p class="text-center copyright">&copy; Universidad Catolica Boliviana "San Pablo"</p>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    function send_special_order() {
        var data1 = $('#name').val();
        var data2 = $('#subject').val();
        var data3 = $('#email').val();
        var data4 = $('#message').val();
        $.ajax({
            type: "POST",
            url: "send.php",
            dataType : "json",
            data: ( {"name" : data1, "subject" : data2, "email" : data3,"message" : data4} ) ,
            success: function() {

            },
            complete: function(){
                $('#feedback').append('<p>Thank you for sending us a message. Our specialists will contact you as soon as possible.</p><p>Your message details are:</p>\n\
                                <ul>\n\
                                    <li>Name: <b>' + data1 + '</b></li>\n\
                                    <li>Email: <b>' + data3 + '</b></li>\n\
                                    <li>Subject: <b>' + data2 + '</b></li>\n\
                                    <li>Message: <b>' + data4 + '</b></li>\n\
                                </ul>\n\
                                <p>If you want to change your information press the button:\n\
                                <p><a href="#" id="send-more" class="btn btn-lg btn-info">edit info</a></p>');
                $('#contact-form').slideUp();
                $('#send-more').click(function(e){
                    e.preventDefault()
                    $('#contact-form').slideDown();
                    $('#feedback').html('');
                });
            }
        });
    }
    $('#contact-form').submit(function() {
        send_special_order();
        return false;
    });
</script>
<script type="text/javascript">
    $( "a.submenu" ).click(function() {
        $( ".menuBar" ).slideToggle( "normal", function() {
// Animation complete.
        });
    });
    $( "ul li.dropdown a" ).click(function() {
        $( "ul li.dropdown ul" ).slideToggle( "normal", function() {
// Animation complete.
        });
        $('ul li.dropdown').toggleClass('current');
    });
</script>
</body>
</html>