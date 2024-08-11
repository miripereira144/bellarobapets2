<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra Historia - Petshop</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@700&family=Grey+Qo&family=Montserrat:wght@500;700&family=WindSong:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .header {
            background-color: #d4a373; /* Ocre */
            color: white;
            text-align: center;
            padding: 20px 0;
            width: 100%;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }
        .title {
            font-size: 2em;
            margin-bottom: 10px;
            color: #d4a373; /* Ocre */
            font-family: 'Fraunces', serif;
        }
        .content {
            font-size: 1.2em;
            line-height: 1.6;
        }
        .content p {
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
            padding: 20px 0;
            background-color: #d4a373; /* Ocre */
            color: white;
            margin-top: 20px;
            width: 100%;
        }
        .btn-home, .btn-folleto {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #d4a373; /* Ocre */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-home:hover, .btn-folleto:hover {
            background-color: #b08b51; /* Dorado */
        }
        aside {
            background-color: #fff3e0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            text-align: center;
        }
        .aside-title {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #d4a373; /* Ocre */
        }
        .folletos {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .folletos a {
            margin: 10px;
            font-size: 1.1em;
            color: #d4a373;
            text-decoration: none;
            transition: color 0.3s;
        }
        .folletos a:hover {
            color: #b08b51; /* Dorado */
        }
        .brand-name {
            font-family: 'WindSong', cursive;
            font-size: 2em;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Nuestra Historia</h1>
    </div>
    <div class="container">
        <h2 class="title"><span class="brand-name">Bellarobba</span> - Comodidad de Mascotas, Felicidad en el Hogar!</h2>
        <div class="content">
            <p>En <strong><span class="brand-name">Bellarobba.pets</span></strong>, entendemos que nuestras mascotas no son solo animales, son miembros de nuestra familia. Nos inspira el amor y la alegría que traen a nuestras vidas, y es por eso que nos dedicamos a crear productos que les brinden el mismo confort y felicidad que nosotros disfrutamos en nuestros sillones.</p>
            <p>Nuestro viaje comenzó con un sueño: un mundo donde cada mascota pudiera disfrutar de una vida plena y cómoda. Desde camas mullidas y acogedoras hasta juguetes que despiertan su curiosidad y vitalidad, cada uno de nuestros productos está diseñado pensando en el bienestar y la alegría de tus compañeros peludos.</p>
            <p>Nos enorgullece ofrecerte productos de la más alta calidad, elaborados con materiales seguros y duraderos, para que puedas estar tranquilo sabiendo que le das lo mejor a tu mascota. Creemos que cuando nuestras mascotas están felices y cómodas, nuestros hogares se llenan de una armonía especial.</p>
            <p>Únete a nuestra familia petshop y descubre cómo mejorar la vida de tu mascota con soluciones pensadas para su máxima comodidad y felicidad. Porque en <strong><span class="brand-name">Bellarobba.pets</span></strong>, nuestro compromiso es hacer que cada rincón de tu hogar sea un lugar donde tu mascota se sienta tan cómoda como tú en tu sillón favorito.</p>
            <p><span class="brand-name">Bellarobba</span> 
            <span>In Tua Vita</p>
             </span> 
            <a class="btn-home" href="index.php">Volver</a>
        </div>
        <aside>
            <h3 class="aside-title">Folletos Informativos</h3>
            <p>Descarga nuestros folletos para más información sobre nuestros productos y servicios.</p>
            <div class="folletos">
                <a class="btn-folleto" href="assets/bella2024.jpg" target="_blank">Folleto 1</a>
                <a class="btn-folleto" href="assets/catalogo2.pdf" target="_blank">Folleto 2</a>
                <a class="btn-folleto" href="assets/catalogobella.pdf" target="_blank">Folleto 3</a>
            </div>
        </aside>
    </div>
    <div class="footer">
        <p>&copy; <span class="brand-name">Bellarobba</span> 2024</p>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
