<div class="modal-backdrop" id="modalBackdrop" onclick="closeModal()"></div>

<div class="modal" id="modal" role="dialog" aria-modal="true" aria-label="Iniciar sesion">
  
  <button class="modal-close" onclick="closeModal()" aria-label="Cerrar">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
      <line x1="18" y1="6" x2="6" y2="18" />
      <line x1="6" y1="6" x2="18" y2="18" />
    </svg>
  </button>
  
  <div class="modal-header modal-header-center">
    <a class="nav-logo nav-logo-center">
      <span class="logo-mark" style="width:36px;height:36px;font-size:1rem">E</span>
    </a>
    <h2>Bienvenido de vuelta</h2>
    <p>Ingresa para gestionar tus reservas y favoritos.</p>
  </div>
  
  <div class="modal-body">
    <form action="controladores/ControladorLogin.php" method="POST">
      
      <div class="form-group">
        <label>Correo electronico</label>
        <input type="email" name="email" placeholder="tu@email.com" class="modal-input" required />
      </div>
      <div class="form-group">
        <label>Contrasena</label>
        <input type="password" name="password" placeholder="••••••••" class="modal-input" required />
      </div>
      
      <button type="submit" class="modal-submit btn-full">Ingresar</button>
      
      <div class="divider">o ingresar con</div>
      
      <div class="social-login-container-row">
        
        <button type="button" class="btn-social-row google" onclick="alert('Conexion con Google en desarrollo')">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.16v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.16C1.43 8.55 1 10.22 1 12s.43 3.45 1.16 4.93l3.68-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.16 7.07l3.68 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
          Google
        </button>
        
        <button type="button" class="btn-social-row apple" onclick="alert('Conexion con Apple en desarrollo')">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.05 2.53.68 3.14.68.65 0 2.06-.79 3.65-.63 1.25.04 2.4.45 3.23 1.25-2.71 1.6-2.24 5.32.55 6.42-1.07 2.44-2.58 4.26-2.57 5.25zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25.38 2.37-2.01 4.39-3.74 4.25z"/></svg>
          Apple
        </button>
        
      </div>
      
    </form>
    
    <p class="modal-switch modal-switch-center" style="margin-top: 20px;">
      ¿No tenes cuenta? <a href="index.php?ruta=registro">Registrate gratis</a>
    </p>
  </div>
</div>

<div class="modal-backdrop" id="publishBackdrop" onclick="closePublishModal()"></div>

<div class="modal" id="publishModal" role="dialog" aria-modal="true" aria-label="Publicar espacio">
  
  <button class="modal-close" onclick="closePublishModal()" aria-label="Cerrar">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
      <line x1="18" y1="6" x2="6" y2="18" />
      <line x1="6" y1="6" x2="18" y2="18" />
    </svg>
  </button>
  
  <div class="modal-header modal-header-center">
    <h2 style="color: #0D1B2A;">Publicar mi espacio</h2>
    <p>Completa los datos y empeza a recibir reservas hoy.</p>
  </div>
  
  <div class="modal-body">
    <div class="form-group">
      <label>Nombre del espacio</label>
      <input type="text" placeholder="Ej: Salon Palermo Norte" class="modal-input" />
    </div>
    <div class="form-group">
      <label>Ubicacion</label>
      <input type="text" placeholder="Calle, ciudad, provincia" class="modal-input" />
    </div>
    <div class="form-group">
      <label>Capacidad maxima</label>
      <input type="number" placeholder="100" class="modal-input" />
    </div>
    <button class="modal-submit btn-full" onclick="closePublishModal()">Enviar solicitud</button>
  </div>
</div>

<div class="modal-backdrop" id="contactBackdrop" onclick="closeContactModal()"></div>

<div class="modal" id="contactModal" role="dialog" aria-modal="true" aria-label="Contacto">
  
  <button class="modal-close" onclick="closeContactModal()" aria-label="Cerrar">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
      <line x1="18" y1="6" x2="6" y2="18" />
      <line x1="6" y1="6" x2="18" y2="18" />
    </svg>
  </button>
  
  <div class="modal-header modal-header-center">
    <h2>Contactanos</h2>
    <p>Escribinos y te responderemos a la brevedad.</p>
  </div>
  
  <div class="modal-body">
    <div class="form-group">
      <label>Nombre</label>
      <input type="text" id="contactName" placeholder="Tu nombre" class="modal-input" />
    </div>
    <div class="form-group">
      <label>Correo electronico</label>
      <input type="email" id="contactEmail" placeholder="tu@email.com" class="modal-input" />
    </div>
    <div class="form-group">
      <label>Mensaje</label>
      <textarea id="contactMsg" placeholder="¿En que podemos ayudarte?" class="modal-input" rows="4" style="resize: none; font-family: inherit;"></textarea>
    </div>
    
    <p id="contactError" class="modal-error"></p>
    <button class="modal-submit btn-full" id="contactSubmitBtn" onclick="validateContact()">Enviar mensaje</button>
  </div>
</div>

<div class="modal-backdrop" id="lightboxBackdrop" onclick="closeLightbox()"></div>

<div class="lightbox-modal" id="lightboxModal">
  
  <button class="modal-close lightbox-close" onclick="closeLightbox()" aria-label="Cerrar">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
      <line x1="18" y1="6" x2="6" y2="18" />
      <line x1="6" y1="6" x2="18" y2="18" />
    </svg>
  </button>
  
  <button class="lightbox-nav prev" id="lightboxPrev" aria-label="Anterior">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
      <polyline points="15 18 9 12 15 6" />
    </svg>
  </button>

  <img src="" alt="Imagen expandida" id="lightboxImage" class="lightbox-img" />

  <button class="lightbox-nav next" id="lightboxNext" aria-label="Siguiente">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
      <polyline points="9 18 15 12 9 6" />
    </svg>
  </button>

</div>