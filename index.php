<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/toast-alert.css">
    <title>SISTEMA M&M</title>
</head>
<body>
    <div>
    <h1>Iniciar Session</h1>
    <form action="" method="post">
        <label for="log-usu">Usuario<input type="text" name="log_usu" id="log-usu" placeholder="Usuario" required></label>
        <label for="log-cla">Clave<input type="password" name="log_cla" id="log-cla" placeholder="Clave" required></label>
    </form>
    <div><button type="button" class="btn btn-warning btn-lg" id="btn_notificar" role="button">Notificar !</button></div>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="js/notificacion.js"></script>
    <script src="js/push.min.js"></script>
    <!--Toast.alertas-->
    <script  src="js/toast.alert.js"></script>
    <!--PUSH NOTIFICACION
        <div id="wrapper">
      <button id="notify-button">Notify Me!!</button>
      <button id="clear-button">Clear All!</button>
      <button id="check-button">Check Permission</button>
  </div>
  
    

    <script>Push.create("AYA TRANSPORTE",{
        body: "Bienvenido al sistema de transporte, puede desactivar o cambiar el tipo de notificacion en configuraciones",
        icon: "img/delivery-truck.png",
        //timeout: 2000,
        vibrate: [100,100,100],
        onClick: function () {
            window.focus();
            this.close();
        }
    });
    
    $("#clear-button").click(function(){ 
       Push.clear();
    });
    $("#check-button").click(function(){ 
        console.log(Push.Permission.has());
    });</script>';-->
</body>
</html>
