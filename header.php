<header>
        <nav class="navbar navbar-expand-md">
            <div class="container">
              <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">                  
                  <li class="nav-item">
                    <a class="nav-link me-5 <?php echo ($pg == "inicio") ? "active" : "" ?>" href="Index.php">Inicio</a>
                  </li>                  
                  <li class="nav-item">
                    <a class="nav-link me-5 <?php echo ($pg == "sobre-mi") ? "active" : "" ?>" href="sobre-mi.php">Sobre mi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-5 <?php echo ($pg == "proyectos") ? "active" : "" ?>" href="proyectos.php">Proyectos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php echo ($pg == "contactos") ? "active" : "" ?>" href="contacto.php">Contacto</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <ul class="navbar-nav me-auto mb-2 mb-md-0">                  
                    <li class="nav-item">
                      <a class="nav-link" href="contacto.php">ES</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="en/contact.html">EN</a>
                    </li>                    
                  </ul>
                </form>
              </div>
            </div>
          </nav>
    </header>