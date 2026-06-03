<nav class="navbar" id="navbar">
  <div class="nav-container" id="navContainer">
    <a href="index.php" class="nav-logo">
      <span class="logo-mark">E</span>
      <span class="logo-text">Evently</span>
    </a>

    <div id="navSearchSlot" class="nav-search-slot desktop-only">
<div class="nav-mini-search" id="navMiniSearch">
  
  <span class="mini-text mini-clickable" data-block="blockDonde">¿Donde?</span>
  <span class="mini-sep"></span>
  
  <span class="mini-text mini-clickable" data-block="blockCuando">¿Cuando?</span>
  <span class="mini-sep"></span>
  
  <span class="mini-text mini-clickable" data-block="blockCuantos">¿Cuantos?</span>
  
  <div class="mini-icon mini-clickable" data-block="blockDonde">
    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
      <circle cx="11" cy="11" r="8" />
      <line x1="21" y1="21" x2="16.65" y2="16.65" />
    </svg>
  </div>
  
</div>
    </div>

    <div class="nav-actions">
      <button id="themeToggle" class="theme-toggle-btn" aria-label="Cambiar tema">
        <svg id="sunIcon" class="theme-icon sun-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
        <svg id="moonIcon" class="theme-icon moon-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
      </button>
      <a href="#" class="nav-btn-login" id="loginLink">Ingresar</a>
    </div>
  </div>

  <div class="nav-expanded-container desktop-only" id="navExpandedContainer"></div>

  <div class="mobile-nav-search-slot mobile-only" id="mobileNavSearchSlot">
    <button class="mobile-fake-search" id="mobileFakeSearch">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8" /><line x1="21" y1="21" x2="16.65" y2="16.65" /></svg>
      <span class="mobile-fake-search-text">Comenza tu busqueda...</span>
    </button>
  </div>
</nav>

<div class="nav-backdrop" id="navBackdrop"></div>

<div class="mobile-search-modal" id="mobileSearchModal">
  <div class="mobile-search-header">
    <button class="close-mobile-search" id="closeMobileSearch">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18" /><line x1="6" y1="6" x2="18" y2="18" /></svg>
    </button>
    <span class="mobile-modal-title">Comenza tu busqueda</span>
  </div>
  <div class="mobile-search-body">
    <div class="mobile-accordion active" id="accDonde">
      <div class="acc-header">
        <span>¿Donde?</span>
        <span class="acc-summary" id="summaryDonde">Explorar destinos</span>
      </div>
      <div class="acc-content">
        <ul class="dropdown-list">
          <li class="mobile-loc-option" data-value="CABA">CABA (Centro)</li>
          <li class="mobile-loc-option" data-value="Zona Norte">Zona Norte (Pilar, Tigre)</li>
          <li class="mobile-loc-option" data-value="Zona Sur">Zona Sur (Lomas, Lanus)</li>
          <li class="mobile-loc-option" data-value="Zona Oeste">Zona Oeste (Castelar, Ramos)</li>
        </ul>
      </div>
    </div>
    <div class="mobile-accordion" id="accCuando">
      <div class="acc-header">
        <span>¿Cuando?</span>
        <span class="acc-summary" id="summaryCuando">Agregar fechas</span>
      </div>
      <div class="acc-content">
        <div class="calendars-wrapper-mobile">
          <div class="calendar-month">
            <p class="dropdown-title" style="text-align: center;">Mes Actual</p>
            <div class="cal-weekdays"><span>Do</span><span>Lu</span><span>Ma</span><span>Mi</span><span>Ju</span><span>Vi</span><span>Sa</span></div>
            <div class="cal-days" id="calGridMobile1"></div>
          </div>
          <div class="calendar-month">
            <p class="dropdown-title" style="text-align: center;">Mes Siguiente</p>
            <div class="cal-weekdays"><span>Do</span><span>Lu</span><span>Ma</span><span>Mi</span><span>Ju</span><span>Vi</span><span>Sa</span></div>
            <div class="cal-days" id="calGridMobile2"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="mobile-accordion" id="accCuantos">
      <div class="acc-header">
        <span>¿Cuantos?</span>
        <span class="acc-summary" id="summaryCuantos">Invitados</span>
      </div>
      <div class="acc-content">
        <ul class="dropdown-list">
          <li class="mobile-guest-option" data-value="Intimo">Hasta 30 personas (Intimo)</li>
          <li class="mobile-guest-option" data-value="Mediano">50 a 100 personas (Mediano)</li>
          <li class="mobile-guest-option" data-value="Gala">Mas de 150 personas (Gala)</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="mobile-search-footer">
<button class="filter-reset" id="resetMobileSearch" onclick="clearMobileSearch()" style="border: none; background: transparent; font-weight: 600; text-decoration: underline;">Limpiar</button>
    <button class="search-submit-mobile" id="btnMobileBuscar">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><circle cx="11" cy="11" r="8" /><line x1="21" y1="21" x2="16.65" y2="16.65" /></svg>
      Buscar
    </button>
  </div>
</div>