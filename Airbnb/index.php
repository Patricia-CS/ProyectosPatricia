<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airbnb</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c87afa1665.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="cabecera">
        <?php require'menu.html'?>
        <div class="wrapper nomargin">
            <h1>Traslada tu día a día a un nuevo alojamiento</h1>
            <p>Cambia de escenario. Alojamientos a un paso de ti para pasar unos días, trabajar o relajarte.</p>
        </div> 
    </div>
    <div class="wrapper">
        <h2>Lugares ideales para cambiar de aires</h2>
        <div class="flex ideales">
            <div class="ideal flex">
                <img src="img/granada.jpg" alt="">
                <div>
                <h4>Granada</h4>
                <p><strong>67€</strong> por noche de media</p>
                </div>
            </div>
            <div class="ideal flex">
                <img src="img/alicante.jpg" alt="">
                <div>
                <h4>Alicante</h4>
                <p><strong>80€</strong> por noche de media</p>
                </div>
            </div>
            <div class="ideal flex">
                <img src="img/santander.jpg" alt="">
                <div>
                <h4>Santander</h4>
                <p><strong>100€</strong> por noche de media</p>
                </div>
            </div>
            <div class="ideal flex">
                <img src="img/gijon.jpg" alt="">
                <div>
                <h4>Gijón</h4>
                <p><strong>60€</strong> por noche de media</p>
                </div>
            </div>
            <div class="ideal flex">
                <img src="img/uceda.jpg" alt="">
                <div>
                <h4>Uceda</h4>
                <p><strong>79€</strong> por noche de media</p>
                </div>
            </div>
            <div class="ideal flex">
                <img src="img/valencia.jpg" alt="">
                <div>
                <h4>Valencia</h4>
                <p><strong>56€</strong> por noche de media</p>
                </div>
            </div>
            <div class="ideal flex">
                <img src="img/donostia.jpg" alt="">
                <div>
                <h4>Donostia</h4>
                <p><strong>111€</strong> por noche de media</p>
                </div>
            </div>
            <div class="ideal flex">
                <img src="img/sevilla.jpg" alt="">
                <div>
                <h4>Sevilla</h4>
                <p><strong>65€</strong> por noche de media</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper tarjetas flex">
        <div class="tarjeta">
            <div class="thumbnail"></div>
            <div>
            <h3>Estancias largas</h3>
            <p>Pasa al menos un mes en un sutio nuevo sin echar de menos tu casa.</p>
            </div>   
        </div>
        <div class="tarjeta">
            <div class="thumbnail u"></div>
            <div>
            <h3>Trabaja o estudia desde cualquier lugar</h3>
            <p>Traslada tu oficina o tu mesa de estudio a un espacio cómodo con wifi.</p>
            </div>   
        </div>
        <div class="tarjeta">
            <div class="thumbnail d"></div>
            <div>
            <h3>Alojamientos aptos para familias</h3>
            <p>Disfruta del tiempo en familia en un contexto distinto. Elige uno estos alojamientos solo...</p>
            </div>   
        </div>
        <div class="tarjeta">
            <div class="thumbnail t"></div>
            <div>
            <h3>Escapadas de ciudad</h3>
            <p>La tranquilidad reina hasta en las calles de las ciudades más grandes. Haz una escapada a...</p>
            </div>   
        </div>
    </div>
    <div class="wrapper">
        <h2>Experiencias cercanas</h2>
        <p>No hace falta irse muy lejos para probar algo nuevo.</p>
    </div>   
    <div class="experiencias flex wrapper">
        <div class="actividades">
            <div class="imgbox"></div>
            <div class="textobox">
                <p><span class="star"><svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 12px; width: 12px; fill: rgb(206, 12, 12);"><path d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"></path></svg></span> 4,98 <span class="thin">(122)· Madrid</span></p>
                <p>⭐Recorrido privado por Madrid con sesión de fotos <br>
                Recorrido fotográfico · 3 horas <br>
                <strong>Desde 39€</strong> por persona</p>
            </div>
        </div>
        <div class="actividades">
            <div class="imgbox u"></div>
            <div class="textobox">
                <p><span class="star"><svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 12px; width: 12px; fill: rgb(206, 12, 12);"><path d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"></path></svg></span> 4,99 <span class="thin">(152)· Madrid</span></p>
                <p>Recuerdos de Madrid en Fotografías <br>
                Recorrido fotográfico · 1 hora <br>
                <strong>Desde 20€</strong> por persona</p>
            </div>
        </div>
        <div class="actividades">
            <div class="imgbox d"></div>
            <div class="textobox">
                <p><span class="star"><svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 12px; width: 12px; fill: rgb(206, 12, 12);"><path d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"></path></svg></span> 4,98 <span class="thin">(45)· Madrid</span></p>
                <p>⭐Sesion de fotos en Madrid con una profesional <br>
                Sesión de fotos · 1.5 horas <br>
                <strong>Desde 23€</strong> por persona</p>
            </div>
        </div>
        <div class="actividades">
            <div class="imgbox t"></div>
            <div class="textobox">
                <p><span class="star"><svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 12px; width: 12px; fill: rgb(206, 12, 12);"><path d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"></path></svg></span> 4,98 <span class="thin">(116)· Madrid</span></p>
                <p>Galerías de arte ocultas y estudio de artista <br>
                Ruta artística · 2.5 horas <br>
                <strong>Desde 35€</strong> por persona</p>
            </div>
        </div>
        <div class="actividades">
            <div class="imgbox c"></div>
            <div class="textobox">
                <p><span class="star"><svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 12px; width: 12px; fill: rgb(206, 12, 12);"><path d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"></path></svg></span> 4,80 <span class="thin">(225)· Madrid</span></p>
                <p>Madrid EBIKE alternative experience <br>
                Paseo en bici · 3 horas <br>
                <strong>Desde 28€</strong> por persona</p>
            </div>
        </div>
        <div class="actividades">
            <div class="imgbox ci"></div>
            <div class="textobox">
                <p><span class="star"><svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="height: 12px; width: 12px; fill: rgb(206, 12, 12);"><path d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"></path></svg></span> 4,80 <span class="thin">(1382)· Sevilla</span></p>
                <p>Paseos urbanos en bicicleta <br>
                Recorrido fotográfico · 3 horas <br>
                <strong>Desde 3€</strong> por persona</p>
            </div>
        </div>  
    </div>
    <div class="wrapper">
        <a class="btnestilos" href="#">Ver todas las experiencias <i class="fas fa-chevron-right"></i></a>
    </div>
    <div class="seguridad">
        <div class="wrapper cuidados flex">
            <div class="viajemos">
                <h2>Viajemos juntos con seguridad</h2>
            </div>
            <div class="apartados">
                <i class="fas fa-hospital-symbol"></i>
                <h4>Cuídate</h4>
                <p>Hemos establecido protocolos de limpieza avanzada, desarrollados por expertos, tanto para alojamientos como para experiencias, con el fin de garantizar la seguridad en todos los viajes.</p>
            </div>
            <div class="apartados">
                <i class="fas fa-hospital-symbol"></i>
                <h4>Cuídate</h4>
                <p>Hemos establecido protocolos de limpieza avanzada, desarrollados por expertos, tanto para alojamientos como para experiencias, con el fin de garantizar la seguridad en todos los viajes.</p>
            </div>
            <div class="apartados">
                <i class="fas fa-hospital-symbol"></i>
                <h4>Cuídate</h4>
                <p>Hemos establecido protocolos de limpieza avanzada, desarrollados por expertos, tanto para alojamientos como para experiencias, con el fin de garantizar la seguridad en todos los viajes.</p>
            </div>
        </div>
    </div>
    <div class="referencias">
        <div class="wrapper flex listas">
            <div class="lista">
                <h4>ACERCA DE</h4>
                <ul>
                    <li><a href="#">¿Cómo funciona Airbnb?</a></li>
                    <li><a href="#">Newsroom</a></li>
                    <li><a href="#">Airbnb Plus</a></li>
                    <li><a href="#">Airbnb Luxe</a></li>
                    <li><a href="#">HotelTonight</a></li>
                    <li><a href="#">Airbnb for Work</a></li>
                    <li><a href="#">Juegos Olímpicos</a></li>
                    <li><a href="#">Empleo</a></li>
                </ul> 
            </div>
            <div class="lista">
                <h4>ACERCA DE</h4>
                <ul>
                    <li><a href="#">¿Cómo funciona Airbnb?</a></li>
                    <li><a href="#">Newsroom</a></li>
                    <li><a href="#">Airbnb Plus</a></li>
                    <li><a href="#">Airbnb Luxe</a></li>
                    <li><a href="#">HotelTonight</a></li>
                    <li><a href="#">Airbnb for Work</a></li>
                    <li><a href="#">Juegos Olímpicos</a></li>
                    <li><a href="#">Empleo</a></li>
                </ul> 
            </div>
            <div class="lista">
                <h4>ACERCA DE</h4>
                <ul>
                    <li><a href="#">¿Cómo funciona Airbnb?</a></li>
                    <li><a href="#">Newsroom</a></li>
                    <li><a href="#">Airbnb Plus</a></li>
                    <li><a href="#">Airbnb Luxe</a></li>
                    <li><a href="#">HotelTonight</a></li>
                    <li><a href="#">Airbnb for Work</a></li>
                    <li><a href="#">Juegos Olímpicos</a></li>
                    <li><a href="#">Empleo</a></li>
                </ul> 
            </div>
            <div class="lista">
                <h4>ACERCA DE</h4>
                <ul>
                    <li><a href="#">¿Cómo funciona Airbnb?</a></li>
                    <li><a href="#">Newsroom</a></li>
                    <li><a href="#">Airbnb Plus</a></li>
                    <li><a href="#">Airbnb Luxe</a></li>
                    <li><a href="#">HotelTonight</a></li>
                    <li><a href="#">Airbnb for Work</a></li>
                    <li><a href="#">Juegos Olímpicos</a></li>
                    <li><a href="#">Empleo</a></li>
                </ul> 
            </div>
        </div>
    </div>
</body>
</html>