<html>
    <head>
        <meta charset = "UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>DWES: Tarea 9</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>        
        <script>
            $(document).ready(function(){
                //Cada 5 segundos (5000 milisegundos) se ejecutará la función refrescar
                setTimeout(refrescar, 5000);                
            });            
            function refrescar(){
                //Actualiza la página
                location.reload();
            }
        </script>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                text-align: center;
                margin: 20px;
                background-color: #E2F3FF;
                align-items: center;
            }

            h1 {
                color: #333;
            }

            p {
                font-style: italic;
                color: #666;
            }
            #titular {
                margin: auto;
                background-color: #FFFFFF;
                border-radius: 10px;
                width: 300px;
                
            }
        </style>
    </head>
    <body>
        <div id = "titular"><h1> Different Articles </h1></div>
        <?php 
            $i = rand(1,30);
             //Se realiza la peticion a la api que nos devuelve el JSON con la información de los posts
            $datos_json = file_get_contents('https://dummyjson.com/products/'.$i);
             // Se decodifica el fichero JSON y se convierte a objeto
            $datos = json_decode($datos_json);
        ?>
        <p><h3><?php echo $datos -> title ?></h3></p>
        <p><?php echo $datos -> description ?></p>       
    </body>
</html>