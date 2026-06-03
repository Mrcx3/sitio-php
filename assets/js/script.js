/* =====================================================================
   EVENTLY — script.js
   Version Final: Carruseles inteligentes, Scroll automatico y Telon
===================================================================== */

/* ── 1. TEMA OSCURO / CLARO ── */
var themeToggle = document.getElementById('themeToggle');
var themeToggleMobile = document.getElementById('themeToggleMobile');

function toggleTheme() {
  var currentTheme = document.documentElement.getAttribute('data-theme');
  var newTheme;
  
  if (currentTheme === 'dark') { newTheme = 'light'; } else { newTheme = 'dark'; }
  document.documentElement.setAttribute('data-theme', newTheme);
}

if (themeToggle) { themeToggle.addEventListener('click', toggleTheme); }
if (themeToggleMobile) { themeToggleMobile.addEventListener('click', toggleTheme); }


/* ── 2. SCROLL SUAVE (Y Salto del Hero) ── */
var anchorLinks = document.querySelectorAll('a[href^="#"]');
anchorLinks.forEach(function(anchor) {
  anchor.addEventListener('click', function(e) {
    var targetId = this.getAttribute('href');
    if (targetId === '#') return;
    var targetElement = document.querySelector(targetId);
    if (targetElement) {
      e.preventDefault();
      targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
});

/* Logica especial: Salto automatico en el Hero (Bajar y Subir) */
var heroSection = document.getElementById('home');
var explorarSection = document.getElementById('explorar');
var isJumping = false;

window.addEventListener('wheel', function(e) {
  if (isJumping || !heroSection || !explorarSection) return;

  var navbarNav = document.getElementById('navbar');
  if (navbarNav && navbarNav.classList.contains('expanded')) return;

  var scrollY = window.scrollY;
  // Medimos el tamaño real del bloque de la foto, asi no hay margen de error
  var alturaHero = heroSection.offsetHeight; 

  // Salto hacia ABAJO: Si bajas la rueda en CUALQUIER punto de la imagen
  if (e.deltaY > 0 && scrollY < (alturaHero - 60)) {
    e.preventDefault();
    isJumping = true;
    explorarSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    setTimeout(function() { isJumping = false; }, 1000);
  }
  
  // Salto hacia ARRIBA: Si subes la rueda estando en Explorar o dentro del Hero
  else if (e.deltaY < 0 && scrollY > 0 && scrollY <= (alturaHero + 50)) {
    e.preventDefault();
    isJumping = true;
    window.scrollTo({ top: 0, behavior: 'smooth' });
    setTimeout(function() { isJumping = false; }, 1000);
  }
}, { passive: false });


/* ── 3. LOGICA NAVBAR EXPANSIBLE Y TELON OSCURO ── */
var navbarNav = document.getElementById('navbar');
var heroWrapper = document.getElementById('heroSearchWrapper');
var navExpandedContainer = document.getElementById('navExpandedContainer');
var searchPill = document.getElementById('searchPill');
var navBackdrop = document.getElementById('navBackdrop');
var lastScrollY = window.scrollY;

// Sincronizar telon oscuro con la clase 'expanded' usando un vigilante
if (navbarNav && navBackdrop) {
  var navObserver = new MutationObserver(function(mutations) {
    mutations.forEach(function(mutation) {
      if (mutation.attributeName === 'class') {
        if (navbarNav.classList.contains('expanded')) {
          navBackdrop.classList.add('active');
        } else {
          navBackdrop.classList.remove('active');
        }
      }
    });
  });
  navObserver.observe(navbarNav, { attributes: true });

  navBackdrop.addEventListener('click', function() {
    navbarNav.classList.remove('expanded');
    closeAllDropdowns();
    setTimeout(moveSearchToHero, 300);
  });
}

function moveSearchToHero() {
  if (searchPill && heroWrapper && searchPill.parentElement !== heroWrapper) {
    heroWrapper.appendChild(searchPill);
  }
}

function moveSearchToNav() {
  if (searchPill && navExpandedContainer && searchPill.parentElement !== navExpandedContainer) {
    navExpandedContainer.appendChild(searchPill);
  }
}

var miniClickables = document.querySelectorAll('.mini-clickable');
miniClickables.forEach(function(btn) {
  btn.addEventListener('click', function(e) {
    e.stopPropagation();
    var targetBlockId = this.getAttribute('data-block');
    
    if (navbarNav) {
      navbarNav.classList.add('expanded');
      moveSearchToNav();
      
      setTimeout(function() {
        if (targetBlockId) {
          var targetBlock = document.getElementById(targetBlockId);
          if (targetBlock) { targetBlock.click(); }
        }
      }, 50);
    }
  });
});

window.addEventListener('scroll', function() {
  var currentScrollY = window.scrollY;

  if (currentScrollY > 120) {
    if (navbarNav) navbarNav.classList.add('scrolled');
    
    if (currentScrollY > lastScrollY && navbarNav && navbarNav.classList.contains('expanded')) {
       navbarNav.classList.remove('expanded');
       closeAllDropdowns();
       setTimeout(moveSearchToHero, 300); 
    }
  } else {
    if (navbarNav) {
      navbarNav.classList.remove('scrolled');
      navbarNav.classList.remove('expanded');
    }
    closeAllDropdowns();
    moveSearchToHero();
  }
  
  var bottomBar = document.getElementById('mobileBottomBar');
  if (bottomBar) {
    if (currentScrollY > lastScrollY && currentScrollY > 100) {
      bottomBar.classList.add('hide-bar');
    } else {
      bottomBar.classList.remove('hide-bar');
    }
  }

  lastScrollY = currentScrollY;
});


/* ── 4. BUSCADOR ESCRITORIO (Toggle Switch 3 Pasos) ── */
var searchBlocks = document.querySelectorAll('.search-block');
var searchDropdowns = document.querySelectorAll('.search-dropdown');
var searchActiveBg = document.getElementById('searchActiveBg');

function fadeDividers(activeIndex) {
  var dividers = document.querySelectorAll('.search-divider');
  dividers.forEach(function(div, index) {
    if (index === activeIndex || index === (activeIndex - 1)) {
      div.style.opacity = '0';
    } else {
      div.style.opacity = '1';
    }
  });
}

function closeAllDropdowns() {
  searchDropdowns.forEach(function(d) { d.classList.remove('show'); });
  searchBlocks.forEach(function(b) { b.classList.remove('active'); });
  if (searchPill) { searchPill.classList.remove('has-active'); }
  var dividers = document.querySelectorAll('.search-divider');
  dividers.forEach(function(div) { div.style.opacity = '1'; });
}

function moveHighlightTo(element) {
  if (searchActiveBg && element && searchPill) {
    searchActiveBg.style.width = element.offsetWidth + 'px';
    searchActiveBg.style.left = element.offsetLeft + 'px';
    searchPill.classList.add('has-active');
  }
}

searchBlocks.forEach(function(block, index) {
  block.addEventListener('click', function(e) {
    e.stopPropagation();
    var targetId = this.getAttribute('data-target');
    var targetDropdown = document.getElementById(targetId);
    
    if (targetDropdown && targetDropdown.classList.contains('show')) {
      closeAllDropdowns();
    } else {
      closeAllDropdowns();
      if (targetDropdown) targetDropdown.classList.add('show');
      this.classList.add('active');
      fadeDividers(index);
      moveHighlightTo(this);
    }
  });
});

var locOptionsDesktop = document.querySelectorAll('.desktop-loc-option');
locOptionsDesktop.forEach(function(opt) {
  opt.addEventListener('click', function(e) {
    e.stopPropagation();
    var valueTarget = document.querySelector('#blockDonde .block-value');
    if (valueTarget) valueTarget.innerText = this.innerText;
    
    setTimeout(function() {
      var blockCuando = document.getElementById('blockCuando');
      if (blockCuando) blockCuando.click();
    }, 350);
  });
});

var guestOptionsDesktop = document.querySelectorAll('.desktop-guest-option');
guestOptionsDesktop.forEach(function(opt) {
  opt.addEventListener('click', function(e) {
    e.stopPropagation();
    var valueTarget = document.querySelector('#blockCuantos .block-value');
    if (valueTarget) valueTarget.innerText = this.innerText;
    
    var dropdown = document.getElementById('dropdownCuantos');
    if (dropdown) { dropdown.classList.remove('show'); }
    
    setTimeout(function() {
      closeAllDropdowns();
      var gridSection = document.getElementById('resultadosGrid') || document.querySelector('.categories-section');
      
      if (navbarNav && navbarNav.classList.contains('expanded')) {
          navbarNav.classList.remove('expanded');
          setTimeout(moveSearchToHero, 300);
      }
      
      if (gridSection) { gridSection.scrollIntoView({ behavior: 'smooth' }); }
    }, 350);
  });
});

var searchSubmitBtn = document.getElementById('searchSubmitBtn');
if (searchSubmitBtn) {
  searchSubmitBtn.addEventListener('click', function(e) {
    e.stopPropagation();
    closeAllDropdowns();
    var gridSection = document.getElementById('resultadosGrid') || document.querySelector('.categories-section');
    
    if (navbarNav && navbarNav.classList.contains('expanded')) {
        navbarNav.classList.remove('expanded');
        setTimeout(moveSearchToHero, 300);
    }
    if (gridSection) { gridSection.scrollIntoView({ behavior: 'smooth' }); }
  });
}

document.addEventListener('click', function(e) {
  if (e.target.closest('.search-pill') === null && e.target.closest('.nav-mini-search') === null && e.target.closest('.nav-backdrop') === null) { 
    closeAllDropdowns(); 
    if (navbarNav && navbarNav.classList.contains('expanded')) {
       navbarNav.classList.remove('expanded');
       setTimeout(moveSearchToHero, 300); 
    }
  }
});


/* ── 5. MODAL BUSCADOR CELULAR ── */
var btnFakeSearch = document.getElementById('mobileFakeSearch');
var mobileSearchModal = document.getElementById('mobileSearchModal');
var closeMobileSearch = document.getElementById('closeMobileSearch');
var btnMobileBuscar = document.getElementById('btnMobileBuscar');

if (btnFakeSearch && mobileSearchModal) {
  btnFakeSearch.addEventListener('click', function() {
    mobileSearchModal.classList.add('open');
    document.body.style.overflow = 'hidden';
  });
}

function hideMobileSearch() {
  if (mobileSearchModal) {
    mobileSearchModal.classList.remove('open');
    document.body.style.overflow = ''; 
  }
}

if (closeMobileSearch) { closeMobileSearch.addEventListener('click', hideMobileSearch); }

if (btnMobileBuscar) {
  btnMobileBuscar.addEventListener('click', function() {
    hideMobileSearch();
    var gridSection = document.getElementById('resultadosGrid') || document.querySelector('.categories-section');
    if (gridSection) { gridSection.scrollIntoView({ behavior: 'smooth' }); }
  });
}

var mobileAccordions = document.querySelectorAll('.mobile-accordion');
mobileAccordions.forEach(function(acc) {
  var header = acc.querySelector('.acc-header');
  if (header) {
    header.addEventListener('click', function() {
      if (acc.classList.contains('active') === false) {
        mobileAccordions.forEach(function(a) { a.classList.remove('active'); });
        acc.classList.add('active');
      }
    });
  }
});

var locOptionsMobile = document.querySelectorAll('.mobile-loc-option');
locOptionsMobile.forEach(function(opt) {
  opt.addEventListener('click', function(e) {
    e.stopPropagation();
    var value = this.getAttribute('data-value');
    document.getElementById('summaryDonde').innerText = value;
    
    setTimeout(function() {
      document.getElementById('accDonde').classList.remove('active');
      document.getElementById('accCuando').classList.add('active');
    }, 350);
  });
});

var guestOptionsMobile = document.querySelectorAll('.mobile-guest-option');
guestOptionsMobile.forEach(function(opt) {
  opt.addEventListener('click', function(e) {
    e.stopPropagation();
    var value = this.getAttribute('data-value');
    document.getElementById('summaryCuantos').innerText = value;
    
    setTimeout(function() {
      document.getElementById('accCuantos').classList.remove('active');
    }, 350);
  });
});


/* ── 6. CALENDARIOS Y RANGOS ── */
var selectedStartDate = null;
var selectedEndDate = null;

function generateCalendar(elementId, offsetMonths) {
  var container = document.getElementById(elementId);
  if (!container) return;
  
  var dateNow = new Date();
  var targetDate = new Date(dateNow.getFullYear(), dateNow.getMonth() + offsetMonths, 1);
  var targetYear = targetDate.getFullYear();
  var targetMonth = targetDate.getMonth(); 
  var firstDayOfWeek = targetDate.getDay();
  var daysInMonth = new Date(targetYear, targetMonth + 1, 0).getDate();
  
  var parentMonthDiv = container.closest('.calendar-month');
  if (parentMonthDiv) {
    var titleElement = parentMonthDiv.querySelector('.dropdown-title');
    var monthNames = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    if (titleElement) titleElement.innerText = monthNames[targetMonth] + ' ' + targetYear;
  }
  
  var html = '';
  for (var i = 0; i < firstDayOfWeek; i++) { html += '<span></span>'; }
  for (var d = 1; d <= daysInMonth; d++) {
    var mStr = (targetMonth + 1 < 10) ? '0' + (targetMonth + 1) : (targetMonth + 1);
    var dStr = (d < 10) ? '0' + d : d;
    var dateString = targetYear + '-' + mStr + '-' + dStr;
    html += '<span class="cal-day" data-date="' + dateString + '">' + d + '</span>';
  }
  container.innerHTML = html;
}

function formatShortDate(dateStr) {
  if (!dateStr) return '';
  var parts = dateStr.split('-');
  var monthNames = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
  return parseInt(parts[2], 10) + ' ' + monthNames[parseInt(parts[1], 10) - 1];
}

function updateCalendarVisuals() {
  var allDays = document.querySelectorAll('.cal-day');
  allDays.forEach(function(day) {
    day.classList.remove('active', 'range-start', 'range-end', 'in-range');
    var d = day.getAttribute('data-date');
    if (d === selectedStartDate) day.classList.add('active', 'range-start');
    if (d === selectedEndDate) day.classList.add('active', 'range-end');
    if (selectedStartDate && selectedEndDate && d > selectedStartDate && d < selectedEndDate) day.classList.add('in-range');
  });

  var textToShow = (selectedStartDate && selectedEndDate) ? formatShortDate(selectedStartDate) + ' - ' + formatShortDate(selectedEndDate) : (selectedStartDate ? formatShortDate(selectedStartDate) : "Fechas");
  
  var bCuando = document.querySelector('#blockCuando .block-value');
  if (bCuando) bCuando.innerText = textToShow;
  var sCuando = document.getElementById('summaryCuando');
  if (sCuando) sCuando.innerText = textToShow;
}

function activateCalendarLogic() {
  var allDays = document.querySelectorAll('.cal-day');
  allDays.forEach(function(day) {
    day.addEventListener('click', function(e) {
      e.stopPropagation();
      var clickedDate = this.getAttribute('data-date');
      if (selectedStartDate && selectedEndDate) {
        selectedStartDate = clickedDate; selectedEndDate = null;
      } else if (selectedStartDate === null) {
        selectedStartDate = clickedDate;
      } else if (selectedEndDate === null) {
        if (clickedDate > selectedStartDate) {
          selectedEndDate = clickedDate;
          
          var bCuando = document.getElementById('blockCuando');
          if (bCuando && bCuando.classList.contains('active')) {
             setTimeout(function() { document.getElementById('blockCuantos').click(); }, 350);
          }
          var accCuando = document.getElementById('accCuando');
          if (accCuando && accCuando.classList.contains('active')) {
             setTimeout(function() {
                accCuando.classList.remove('active');
                var accCuantos = document.getElementById('accCuantos');
                if(accCuantos) accCuantos.classList.add('active');
             }, 350);
          }
        } else { selectedStartDate = clickedDate; }
      }
      updateCalendarVisuals();
    });
  });
}

generateCalendar('calGrid1', 0); generateCalendar('calGrid2', 1);
generateCalendar('calGridMobile1', 0); generateCalendar('calGridMobile2', 1);
activateCalendarLogic();


/* ── 7. INTERSECCION DE TARJETAS (Animacion al Scrollear) ── */
var observer = new IntersectionObserver(function(entries) {
  entries.forEach(function(entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });

var targetCards = document.querySelectorAll('.card, .featured-card');
targetCards.forEach(function(el) { observer.observe(el); });


/* ── 8. CARRUSELES Y FLECHAS INTELIGENTES ── */
var carousels = document.querySelectorAll('.carousel-wrapper');

function updateCarouselArrows(track, prevBtn, nextBtn) {
  if (!track) return;
  var scrollLeft = track.scrollLeft;
  var maxScroll = track.scrollWidth - track.clientWidth;

  // Ocultar o mostrar flecha previa
  if (scrollLeft <= 5) {
    if (prevBtn) prevBtn.style.display = 'none';
  } else {
    if (prevBtn) prevBtn.style.display = 'flex';
  }

  // Ocultar o mostrar flecha siguiente
  if (scrollLeft >= maxScroll - 5) {
    if (nextBtn) nextBtn.style.display = 'none';
  } else {
    if (nextBtn) nextBtn.style.display = 'flex';
  }
}

carousels.forEach(function(wrapper) {
  var track = wrapper.querySelector('.carousel-track');
  var prevBtn = wrapper.querySelector('.carousel-btn.prev');
  var nextBtn = wrapper.querySelector('.carousel-btn.next');

  if (track) {
    // Inicializar flechas al cargar
    updateCarouselArrows(track, prevBtn, nextBtn);

    // Escuchar el evento scroll dentro del carrusel
    track.addEventListener('scroll', function() {
      updateCarouselArrows(track, prevBtn, nextBtn);
    });

    // Escuchar cuando la ventana cambia de tamaño
    window.addEventListener('resize', function() {
      updateCarouselArrows(track, prevBtn, nextBtn);
    });

    if (prevBtn) {
      prevBtn.addEventListener('click', function() {
        // Desplazarse el ancho de lo que se ve en pantalla para hacer un salto exacto
        var scrollAmount = track.clientWidth;
        track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', function() {
        var scrollAmount = track.clientWidth;
        track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
      });
    }
  }
});


/* ── 9. MODALES Y FAVORITOS ── */
function openModal() {
  var m = document.getElementById('modal');
  var b = document.getElementById('modalBackdrop');
  if (m && b) { m.classList.add('active'); b.classList.add('active'); document.body.style.overflow = 'hidden'; }
}
function closeModal() {
  var m = document.getElementById('modal');
  var b = document.getElementById('modalBackdrop');
  if (m && b) { m.classList.remove('active'); b.classList.remove('active'); document.body.style.overflow = ''; }
}

function openPublishModal() {
  var m = document.getElementById('publishModal');
  var b = document.getElementById('publishBackdrop');
  if (m && b) { m.classList.add('active'); b.classList.add('active'); document.body.style.overflow = 'hidden'; }
}
function closePublishModal() {
  var m = document.getElementById('publishModal');
  var b = document.getElementById('publishBackdrop');
  if (m && b) { m.classList.remove('active'); b.classList.remove('active'); document.body.style.overflow = ''; }
}

var loginL = document.getElementById('loginLink');
if (loginL) loginL.addEventListener('click', function(e) { e.preventDefault(); openModal(); });

var loginB = document.getElementById('loginBottomLink');
if (loginB) loginB.addEventListener('click', function(e) { e.preventDefault(); openModal(); });

var publishBtn = document.getElementById('publishBandBtn');
if (publishBtn) publishBtn.addEventListener('click', function(e) { e.preventDefault(); openPublishModal(); });

window.toggleFav = function(btn) {
  btn.classList.toggle('active');
};

/* Logica del Modal de Contacto */
function openContactModal() {
  var m = document.getElementById('contactModal');
  var b = document.getElementById('contactBackdrop');
  if (m && b) { 
    m.classList.add('active'); 
    b.classList.add('active'); 
    document.body.style.overflow = 'hidden'; 
  }
}

function closeContactModal() {
  var m = document.getElementById('contactModal');
  var b = document.getElementById('contactBackdrop');
  if (m && b) { 
    m.classList.remove('active'); 
    b.classList.remove('active'); 
    document.body.style.overflow = ''; 
  }
}

var contactBtn = document.getElementById('contactLinkBtn');
if (contactBtn) {
  contactBtn.addEventListener('click', function(e) { 
    e.preventDefault(); 
    openContactModal(); 
  });
}

/* ════════════════════════════════════════
   10. MODAL DE CONTACTO Y VALIDACION
════════════════════════════════════════ */

/* Funcion para abrir el modal */
function openContactModal() {
  var m = document.getElementById('contactModal');
  var b = document.getElementById('contactBackdrop');
  if (m && b) { 
    m.classList.add('active'); 
    b.classList.add('active'); 
    document.body.style.overflow = 'hidden'; 
  }
}

/* Funcion para cerrar el modal */
function closeContactModal() {
  var m = document.getElementById('contactModal');
  var b = document.getElementById('contactBackdrop');
  if (m && b) { 
    m.classList.remove('active'); 
    b.classList.remove('active'); 
    document.body.style.overflow = ''; 
  }
}

/* Capturar el click del boton en el footer */
var contactBtn = document.getElementById('contactLinkBtn');
if (contactBtn) {
  contactBtn.addEventListener('click', function(e) { 
    e.preventDefault(); 
    openContactModal(); 
  });
}

/* Logica estricta de validacion */
/* Logica estricta de validacion sin alerts nativos */
function validateContact() {
  var nameInput = document.getElementById('contactName');
  var emailInput = document.getElementById('contactEmail');
  var msgInput = document.getElementById('contactMsg');
  var errorText = document.getElementById('contactError');
  var submitBtn = document.getElementById('contactSubmitBtn');

  if (!nameInput || !emailInput || !msgInput || !errorText || !submitBtn) {
    return;
  }

  // Ocultamos el error por defecto cada vez que intenta enviar
  errorText.style.display = 'none';
  errorText.innerText = '';

  var nameValue = nameInput.value.trim();
  var emailValue = emailInput.value.trim().toLowerCase();
  var msgValue = msgInput.value.trim();

  // Validar nombre
  if (nameValue.length <= 3) {
    errorText.innerText = "El nombre debe tener mas de 3 letras.";
    errorText.style.display = 'block';
    return; 
  }

  // Validar extension del mail
  var isValidEmail = false;
  if (emailValue.indexOf('@gmail.com') !== -1) {
    isValidEmail = true;
  } else if (emailValue.indexOf('@hotmail.com') !== -1) {
    isValidEmail = true;
  } else if (emailValue.indexOf('@outlook.com') !== -1) {
    isValidEmail = true;
  }

  if (isValidEmail === false) {
    errorText.innerText = "Por favor, usa un correo valido (gmail.com, hotmail.com o outlook.com).";
    errorText.style.display = 'block';
    return; 
  }

  // Validar mensaje
  if (msgValue.length === 0) {
    errorText.innerText = "Por favor, escribe un mensaje.";
    errorText.style.display = 'block';
    return;
  }

  // Si todo es correcto, hacemos el efecto de exito en el boton
  submitBtn.innerText = "¡Mensaje Enviado!";
  submitBtn.classList.add('success');
  
  // Esperamos 2 segundos para que el usuario lea que se envio, limpiamos y cerramos
  setTimeout(function() {
    nameInput.value = '';
    emailInput.value = '';
    msgInput.value = '';
    submitBtn.innerText = "Enviar mensaje";
    submitBtn.classList.remove('success');
    closeContactModal();
  }, 2000);
}

/* =====================================================================
   11. VISOR DE IMAGENES EXPANDIBLES (LIGHTBOX CON FLECHAS)
===================================================================== */

// 1. Transformamos la lista de imagenes en un arreglo real para poder saber el numero de indice
var imagenesExpandibles = Array.from(document.querySelectorAll('.expandable-img'));
var lightboxModal = document.getElementById('lightboxModal');
var lightboxBackdrop = document.getElementById('lightboxBackdrop');
var lightboxImage = document.getElementById('lightboxImage');

var btnPrev = document.getElementById('lightboxPrev');
var btnNext = document.getElementById('lightboxNext');

// Variable para recordar en que foto estamos parados
var indiceActual = 0;

// 2. Le agregamos el evento CLICK a cada imagen
imagenesExpandibles.forEach(function(img, index) {
  img.addEventListener('click', function() {
    if (lightboxModal && lightboxBackdrop && lightboxImage) {
      // Guardamos el numero de la foto que el usuario toco
      indiceActual = index;
      
      // Copiamos la ruta de la foto clickeada al visor
      lightboxImage.src = this.src;
      
      // Mostramos el visor
      lightboxModal.classList.add('active');
      lightboxBackdrop.classList.add('active');
      document.body.style.overflow = 'hidden'; 
    }
  });
});

// 3. Funcion para pasar a la foto anterior
if (btnPrev) {
  btnPrev.addEventListener('click', function(e) {
    e.stopPropagation(); // Evita que se cierre el modal por hacer click sin querer afuera
    indiceActual--;
    
    // Si llegamos al principio, volvemos a la ultima foto (Bucle)
    if (indiceActual < 0) {
      indiceActual = imagenesExpandibles.length - 1;
    }
    lightboxImage.src = imagenesExpandibles[indiceActual].src;
  });
}

// 4. Funcion para pasar a la foto siguiente
if (btnNext) {
  btnNext.addEventListener('click', function(e) {
    e.stopPropagation();
    indiceActual++;
    
    // Si pasamos la ultima foto, volvemos a la primera (Bucle)
    if (indiceActual >= imagenesExpandibles.length) {
      indiceActual = 0;
    }
    lightboxImage.src = imagenesExpandibles[indiceActual].src;
  });
}

// 5. Funcion para cerrar el visor
window.closeLightbox = function() {
  if (lightboxModal && lightboxBackdrop) {
    lightboxModal.classList.remove('active');
    lightboxBackdrop.classList.remove('active');
    document.body.style.overflow = ''; 
    
    setTimeout(function() { lightboxImage.src = ""; }, 300);
  }
};

/* =====================================================================
   14. FUNCION PARA LIMPIAR TODOS LOS FILTROS Y BUSQUEDAS
===================================================================== */
window.resetFilters = function() {
  
  // 1. Limpiar los selectores principales de "Explora los espacios"
  var filterType = document.getElementById('filterType');
  var filterCapacity = document.getElementById('filterCapacity');
  var filterPrice = document.getElementById('filterPrice');
  
  if (filterType) filterType.value = "";
  if (filterCapacity) filterCapacity.value = "";
  if (filterPrice) filterPrice.value = "";

  // 2. Limpiar los textos de la barra de busqueda (Mobile y Desktop)
  // Apuntamos a los spans que tienen el data-block correspondiente
  var navMiniDonde = document.querySelector('.nav-mini-search span[data-block="blockDonde"]');
  var navMiniCuando = document.querySelector('.nav-mini-search span[data-block="blockCuando"]');
  var navMiniCuantos = document.querySelector('.nav-mini-search span[data-block="blockCuantos"]');
  
  if (navMiniDonde) navMiniDonde.innerText = "¿Donde?";
  if (navMiniCuando) navMiniCuando.innerText = "¿Cuando?";
  if (navMiniCuantos) navMiniCuantos.innerText = "¿Cuantos?";

  // 3. Volver a mostrar todas las tarjetas de salones en la grilla
  var tarjetas = document.querySelectorAll('.card');
  tarjetas.forEach(function(tarjeta) {
    // Le quitamos cualquier display:none que le haya puesto el filtro
    tarjeta.style.display = ''; 
  });

  // 4. Ocultar el cartel de "No encontramos espacios" por si estaba visible
  var emptyState = document.getElementById('emptyState');
  if (emptyState) {
    emptyState.style.display = 'none';
  }

  // 5. Opcional: Si el cartel de filtros aplicados de mobile esta abierto, cerrarlo
  var mobileFilterModal = document.getElementById('mobileFilterModal');
  if (mobileFilterModal && mobileFilterModal.classList.contains('active')) {
    mobileFilterModal.classList.remove('active');
  }
};

/* =====================================================================
   15. FUNCION PARA LIMPIAR EL BUSCADOR MOBILE
===================================================================== */
window.clearMobileSearch = function() {
  
  // 1. Apuntamos a los textos usando los IDs que YA tenes en tu HTML
  var valDonde = document.getElementById('summaryDonde');
  var valCuando = document.getElementById('summaryCuando');
  var valCuantos = document.getElementById('summaryCuantos');

  // 2. Si los encuentra, devuelve los textos a su estado de fabrica
  if (valDonde) valDonde.innerText = "Explorar destinos";
  if (valCuando) valCuando.innerText = "Agregar fechas";
  if (valCuantos) valCuantos.innerText = "Invitados";
  
};

/* =====================================================================
   16. LOGICA DE FILTROS EN TIEMPO REAL
===================================================================== */
window.applyFilters = function() {
  
  var typeVal = document.getElementById('filterType').value;
  var capVal = document.getElementById('filterCapacity').value;
  var priceVal = document.getElementById('filterPrice').value;

  var tarjetas = document.querySelectorAll('.card');
  var tarjetasVisibles = 0; 

  // 1. Filtramos las tarjetas individuales
  tarjetas.forEach(function(tarjeta) {
    var cardType = tarjeta.getAttribute('data-type');
    var cardCap = tarjeta.getAttribute('data-capacity');
    var cardPrice = parseInt(tarjeta.getAttribute('data-price'));

    var pasaTipo = (typeVal === "" || typeVal === cardType);
    var pasaCapacidad = (capVal === "" || capVal === cardCap);
    var pasaPrecio = true;
    if (priceVal !== "") {
      pasaPrecio = (cardPrice <= parseInt(priceVal));
    }

    if (pasaTipo && pasaCapacidad && pasaPrecio) {
      tarjeta.style.display = ''; 
      tarjetasVisibles++;
    } else {
      tarjeta.style.display = 'none'; 
    }
  });

  // 2. NUEVO: Revisamos las categorias enteras para ocultar las vacias
  var categorias = document.querySelectorAll('.category-block');
  
  categorias.forEach(function(categoria) {
    // Buscamos cuantas tarjetas tiene esta categoria especifica
    var tarjetasEnCategoria = categoria.querySelectorAll('.card');
    var visiblesAca = 0;
    
    // Contamos cuantas quedaron a la vista
    tarjetasEnCategoria.forEach(function(tarj) {
      if (tarj.style.display !== 'none') {
        visiblesAca++;
      }
    });

    // Si no quedo ninguna visible, apagamos toda la categoria
    if (visiblesAca === 0) {
      categoria.style.display = 'none';
    } else {
      categoria.style.display = '';
    }
  });

  // 3. Logica del cartel "No encontramos espacios"
  var emptyState = document.getElementById('emptyState');
  if (emptyState) {
    if (tarjetasVisibles === 0) {
      emptyState.style.display = 'flex';
    } else {
      emptyState.style.display = 'none';
    }
  }
};