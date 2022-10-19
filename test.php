<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        body {
            background: #fff;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 10%;
        }

        div {
            justify-content: center;
            color: #fff;
            font-size: 16px;

        }

        div img {}



        /* ----ccc---- */
        #ccc {
            padding: 80px 0;
            color: #ababab;
        }

        .row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .ccc-col-1 {
            flex-basis: 55%;
        }

        .ccc-col-1 img {
            width: 100%;
            border-radius: 15px;
        }

        .ccc-col-2 {
            flex-basis: 40%;
            align-self: center;
        }

        .sub-title {
            font-size: 60px;
            font-weight: 600;
            color: #fff;
        }

        a {
            text-decoration: none;
            color: #ff0051;
            font-size: ;
        }
    </style>
    <?php
        $texto_aleatorio = array(
            "Hola1",
            "hola2",
            "hola3"
        );

        $numero_aleatorio = rand(0,2);
        echo $texto_aleatorio[$numero_aleatorio];
    ?>
</head>

<body>
    <h1><?php echo "This message is from server side." ?></h1>
    <!-- -----ccc----- -->
    <div id="ccc">
        <div class="container">
            <div class="row">
                <div class="ccc-col-1">
                    <img src="./images/canvas/404.png" alt="">
                </div>
                <div class="ccc-col-2">
                    <h1 class="sub-title">¡UPS!</h1>
                    
                    <br>
                    <p> 
                        Acabas de romper el tejido del espacio tiempo, pero no te preocupes, puedes volver al <a
                            href="https://www.maucastillo.com/">inicio</a> :)
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>

</body>

</html>