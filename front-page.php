<?php get_header(); ?>

<div class="container text-center py-5">
  <h1 class="fw-bold display-5">Transforma tu vida<br>con Velovita</h1>
  <p class="text-muted mt-3">Impulsamos tu bienestar físico y mental con productos innovadores y una comunidad global.</p>
  <a href="#" class="btn btn-primary mt-3" style="background-color: #DF703D; border-color: #DF703D; color: white;">Únete ahora</a>
</div>

<div class="container py-5">
  <div class="bg-light text-center py-5 rounded">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/foto.png" class="img-fluid" alt="Velovita" width="1500">
  </div>
</div>

<div class="container py-5">
  <div class="row align-items-center">
    <div class="col-md-6 mb-4 mb-md-0">
      <div class="bg-light text-center p-5 rounded">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/ours.png" alt="Filosofía Velovita" class="img-fluid rounded">
      </div>
    </div>
    <div class="col-md-6">
      <h2 class="fw-bold">Nuestra Filosofía</h2>
      <ul class="list-unstyled mt-4">
        <li class="d-flex align-items-start mb-3">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icon.png" class="me-5" alt="icono" width="20" style="margin-right: 10px;" >
          <div>
            <h6 class="mb-1">Cuerpo en equilibrio</h6>
            <p class="text-muted small mb-0">Apoyamos un bienestar físico óptimo con soluciones naturales y científicamente respaldadas.</p>
          </div>
        </li>
        <li class="d-flex align-items-start mb-3">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icon.png" class="me-5" alt="icono" width="20" style="margin-right: 10px;" >
          <div>
            <h6 class="mb-1">Mente clara</h6>
            <p class="text-muted small mb-0">Productos diseñados para mejorar tu enfoque, energía y rendimiento mental.</p>
          </div>
        </li>
        <li class="d-flex align-items-start mb-3">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icon.png" class="me-5" alt="icono" width="20" style="margin-right: 10px;" >
          <div>
            <h6 class="mb-1">Comunidad fuerte</h6>
            <p class="text-muted small mb-0">Creemos en el poder del apoyo mutuo y el crecimiento compartido.</p>
          </div>
        </li>
      </ul>
    </div>


  </div>
</div>


<div class="container py-5">
  <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-12 mb-4">
          <div class="bg-light text-center p-5 rounded">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/foto.png" alt="Filosofía Velovita" class="img-fluid rounded-3" style="height: 50%; object-fit: cover;">
          </div>
        </div>
        <div class="col-6 mb-4">
          <div class="bg-light text-center p-5 rounded">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/producto2.png" alt="Filosofía Velovita" class="img-fluid rounded-3" style="height: 100%; object-fit: cover;">
          </div>
        </div>
        <div class="col-6 mb-4">
          <div class="bg-light text-center p-5 rounded">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/producto3.png" alt="Filosofía Velovita" class="img-fluid rounded-3" style="height: 100%; object-fit: cover;">
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <h1 class="fw-bold">Beneficios de nuestros productos</h1>
</br>
      <h4 class="fw-bold">Nuestras soluciones de biohacking innovadoras y patentadas se dirigen a sus necesidades de salud y objetivos de bienestar específicos. ¡Prueba nuestras convenientes porciones Snap para amplificar tu vida! </h4>
      </br>
        <li class="d-flex align-items-start mb-3">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icon.png" class="me-5" alt="icono" width="20" style="margin-right: 10px;" >
          <div>
            <h6 class="mb-1">Zlem</h6>
            <p class="text-muted small mb-0">Duerme mejor, despierta fresco</p>
          </div>
        </li>
        <li class="d-flex align-items-start mb-3">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icon.png" class="me-5" alt="icono" width="20" style="margin-right: 10px;" >
          <div>
            <h6 class="mb-1">Uuth</h6>
            <p class="text-muted small mb-0">Mejora tu piel y deja tucabello radiante con nuestra formula</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Conoce al equipo - Carrusel automático con flechas naranjas -->
<div class="container py-5">
  <h2 class="fw-bold text-center">Conoce al equipo</h2>
  <p class="text-center text-muted mb-4">Personas reales con una visión clara: mejorar vidas.</p>

  <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="bg-light p-4 rounded text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/team.png" class="mb-3 rounded-circle" width="80" alt="CEO">
              <h6 class="fw-bold mb-0">Kosta Gara</h6>
              <p class="small text-muted mb-0">Fundador & CEO</p>
            </div>
          </div>
          <div class="col-md-4 d-none d-md-block">
            <div class="bg-light p-4 rounded text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/team4.png" class="mb-3 rounded-circle" width="80" alt="COO">
              <h6 class="fw-bold mb-0">Joe Barsa</h6>
              <p class="small text-muted mb-0">Directora Financiera</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="bg-light p-4 rounded text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/team3.png" class="mb-3 rounded-circle" width="80" alt="Marketing">
              <h6 class="fw-bold mb-0">Fernando Morales</h6>
              <p class="small text-muted mb-0">Director Financiero</p>
            </div>
          </div>
          <div class="col-md-4 d-none d-md-block">
            <div class="bg-light p-4 rounded text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/team2.png" class="mb-3 rounded-circle" width="80" alt="Comunidad">
              <h6 class="fw-bold mb-0">Jennifer Luce</h6>
              <p class="small text-muted mb-0">Directora de Operaciones</p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Controles con color naranja -->
    <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"
        style="filter: invert(55%) sepia(90%) saturate(500%) hue-rotate(-10deg);"></span>
      <span class="visually-hidden"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"
        style="filter: invert(55%) sepia(90%) saturate(500%) hue-rotate(-10deg);"></span>
      <span class="visually-hidden"></span>
    </button>
  </div>
</div>



<div class="container text-center py-5">
  <h3 class="fw-bold">¿Listo para unirte al movimiento Velovita?</h3>
  <p class="text-muted">Da el primer paso hacia una vida más saludable y conectada.</p>
  <a href="#" class="btn btn-outline-primary mt-3" data-bs-toggle="modal" data-bs-target="#affiliadoModal" style="background-color: #DF703D; border-color: #DF703D; color: white;">Conviértete en afiliado</a>
</div>

<!-- Modal -->
<div class="modal fade" id="affiliadoModal" tabindex="-1" aria-labelledby="affiliadoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="affiliadoModalLabel">Formulario de Afiliado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     

         <div class="modal-body">
  <?php echo do_shortcode('[contact-form-7 id="52203f7" title="Afiliado"]'); ?>
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
