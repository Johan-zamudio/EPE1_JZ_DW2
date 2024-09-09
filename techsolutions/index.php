<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSolutions - Página de Inicio</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <?php include 'navbar.php'; ?>


</head>
<body>
    
    <main class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Bienvenidos a TechSolutions</h2>
                <p>Somos una empresa de asesoría tecnológica especializada en ofrecer soluciones innovadoras para su negocio. Nuestros servicios incluyen consultoría, desarrollo de software y seguridad informática.</p>
            </div>
        </div>
        <section class="mt-5">
            <h2>Testimonios</h2>
            <div id="carouselTestimonials" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p>"TechSolutions ha transformado nuestra forma de trabajar con su asesoría experta. ¡Altamente recomendados!" - Cliente A</p>
                    </div>
                    <div class="carousel-item">
                        <p>"La implementación de soluciones de seguridad informática por parte de TechSolutions ha sido excelente." - Cliente B</p>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselTestimonials" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselTestimonials" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
