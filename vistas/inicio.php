<section class="hero" id="home">
  <div class="hero-bg">
    <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=1600&q=80" alt="Salon de eventos elegante" class="hero-img" />
    <div class="hero-overlay"></div>
  </div>

  <div class="hero-content hero-content-centered">
    <p class="hero-eyebrow">Plataforma #1 en Argentina</p>
    
    <div class="hero-search-wrapper desktop-only" id="heroSearchWrapper">
      <div class="search-pill" id="searchPill">
        <div class="search-active-bg" id="searchActiveBg"></div>
        
        <div class="search-block" data-target="dropdownDonde" id="blockDonde">
          <div class="block-label">¿Donde?</div>
          <div class="block-value">Explorar destinos</div>
        </div>
        <div class="search-divider" id="div1"></div>
        
        <div class="search-block" data-target="dropdownCuando" id="blockCuando">
          <div class="block-label">¿Cuando?</div>
          <div class="block-value">Agregar fechas</div>
        </div>
        <div class="search-divider" id="div2"></div>
        
        <div class="search-block search-block-last" data-target="dropdownCuantos" id="blockCuantos">
          <div class="block-text">
            <div class="block-label">¿Cuantos?</div>
            <div class="block-value">Invitados</div>
          </div>
          <button class="search-submit" id="searchSubmitBtn">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            <span class="search-submit-text" id="searchText">Buscar</span>
          </button>
        </div>

        <div class="search-dropdown dropdown-left" id="dropdownDonde">
          <p class="dropdown-title">Buscando en la region</p>
          <ul class="dropdown-list">
            <li class="desktop-loc-option" data-value="CABA">CABA (Centro)</li>
            <li class="desktop-loc-option" data-value="Zona Norte">Zona Norte (Pilar, Tigre)</li>
            <li class="desktop-loc-option" data-value="Zona Sur">Zona Sur (Lomas, Lanus)</li>
            <li class="desktop-loc-option" data-value="Zona Oeste">Zona Oeste (Castelar, Ramos)</li>
          </ul>
        </div>

        <div class="search-dropdown dropdown-full" id="dropdownCuando">
          <div class="calendars-wrapper">
            <div class="calendar-month">
              <p class="dropdown-title" style="text-align: center;">Mes Actual</p>
              <div class="cal-weekdays"><span>Do</span><span>Lu</span><span>Ma</span><span>Mi</span><span>Ju</span><span>Vi</span><span>Sa</span></div>
              <div class="cal-days" id="calGrid1"></div>
            </div>
            <div class="calendar-month">
              <p class="dropdown-title" style="text-align: center;">Mes Siguiente</p>
              <div class="cal-weekdays"><span>Do</span><span>Lu</span><span>Ma</span><span>Mi</span><span>Ju</span><span>Vi</span><span>Sa</span></div>
              <div class="cal-days" id="calGrid2"></div>
            </div>
          </div>
        </div>

        <div class="search-dropdown dropdown-right" id="dropdownCuantos">
          <p class="dropdown-title">Capacidad del lugar</p>
          <ul class="dropdown-list">
            <li class="desktop-guest-option" data-value="Intimo">Hasta 30 personas (Intimo)</li>
            <li class="desktop-guest-option" data-value="Mediano">50 a 100 personas (Mediano)</li>
            <li class="desktop-guest-option" data-value="Gala">Mas de 150 personas (Gala)</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="hero-text-group">
      <h1 class="hero-title">Encontra el lugar perfecto<br />para tu evento</h1>
    </div>

    <div class="hero-stats">
      <div class="stat"><strong>+1.200</strong><span>espacios</span></div>
      <div class="stat-divider"></div>
      <div class="stat"><strong>98%</strong><span>satisfaccion</span></div>
      <div class="stat-divider"></div>
      <div class="stat" style="flex-direction: row; align-items: center; gap: 12px;">
        <div><strong>24 hs</strong><span style="display:block;">soporte</span></div>
        <div class="hero-scroll" onclick="document.getElementById('explorar').scrollIntoView({behavior:'smooth'})">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="filters-section desktop-only-filters" id="explorar">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Explora los espacios</h2>
      <p class="section-sub">Filtra por tus necesidades y encontra el espacio ideal</p>
    </div>

    <div class="filters">
      <div class="filter-group">
        <label for="filterType">Tipo de evento</label>
        <select id="filterType" onchange="applyFilters()">
          <option value="">Todos</option>
          <option value="corporativo">Corporativo</option>
          <option value="social">Social</option>
          <option value="cumpleanos">Cumpleanos</option>
          <option value="boda">Boda</option>
          <option value="taller">Taller / Workshop</option>
        </select>
      </div>
      <div class="filter-group">
        <label for="filterCapacity">Capacidad</label>
        <select id="filterCapacity" onchange="applyFilters()">
          <option value="">Cualquiera</option>
          <option value="small">Hasta 30 personas</option>
          <option value="medium">30 – 100 personas</option>
          <option value="large">+100 personas</option>
        </select>
      </div>
      <div class="filter-group">
        <label for="filterPrice">Precio maximo</label>
        <select id="filterPrice" onchange="applyFilters()">
          <option value="">Sin limite</option>
          <option value="50000">Hasta $50.000</option>
          <option value="100000">Hasta $100.000</option>
          <option value="200000">Hasta $200.000</option>
        </select>
      </div>
      <button class="filter-reset" onclick="resetFilters()">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 .49-3.09"/></svg>
        Limpiar
      </button>
    </div>
  </div>
</section>

<section class="categories-section" id="resultadosGrid">
  
  <div class="category-block">
    <div class="container">
      <h2 class="category-title">Mas populares</h2>
    </div>
    <div class="carousel-wrapper" id="carousel1">
      <button class="carousel-btn prev" aria-label="Anterior" style="display: none;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"/></svg></button>
      <div class="carousel-track">
        
        <article class="card" data-type="boda" data-capacity="large" data-price="180000">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?w=600&q=75" alt="Salon de bodas" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
            <span class="card-badge">Mas reservado</span>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Boda</span><div class="card-rating"><svg width="13" height="13" viewBox="0 0 24 24" fill="#C9A94E"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><span>4.9</span></div></div>
            <h3 class="card-title">Salon Palermo Royal</h3>
            <p class="card-location">Palermo, CABA</p>
            <div class="card-price"><span class="price-amount">$180.000</span> <span class="price-unit">/dia</span></div>
          </div>
        </article>

        <article class="card" data-type="corporativo" data-capacity="large" data-price="220000">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&q=75" alt="Centro convenciones" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
            <span class="card-badge card-badge--gold">Premium</span>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Corporativo</span><div class="card-rating"><svg width="13" height="13" viewBox="0 0 24 24" fill="#C9A94E"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><span>5.0</span></div></div>
            <h3 class="card-title">Centro Puerto Madero</h3>
            <p class="card-location">Puerto Madero, CABA</p>
            <div class="card-price"><span class="price-amount">$220.000</span> <span class="price-unit">/dia</span></div>
          </div>
        </article>

        <article class="card" data-type="social" data-capacity="small" data-price="45000">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=600&q=75" alt="Terraza" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Social</span><div class="card-rating"><svg width="13" height="13" viewBox="0 0 24 24" fill="#C9A94E"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><span>4.8</span></div></div>
            <h3 class="card-title">Terraza Recoleta Sky</h3>
            <p class="card-location">Recoleta, CABA</p>
            <div class="card-price"><span class="price-amount">$45.000</span> <span class="price-unit">/dia</span></div>
          </div>
        </article>

        <article class="card" data-type="cumpleanos" data-capacity="medium" data-price="95000">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=600&q=75" alt="DJ" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Cumpleanos</span></div>
            <h3 class="card-title">Quincho Villa Devoto</h3>
            <p class="card-location">Villa Devoto, CABA</p>
            <div class="card-price"><span class="price-amount">$95.000</span> <span class="price-unit">/dia</span></div>
          </div>
        </article>

        <article class="card" data-type="corporativo" data-capacity="medium" data-price="120000">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=600&q=75" alt="Sala reuniones" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Corporativo</span></div>
            <h3 class="card-title">Torre Belgrano Office</h3>
            <p class="card-location">Belgrano, CABA</p>
            <div class="card-price"><span class="price-amount">$120.000</span> <span class="price-unit">/dia</span></div>
          </div>
        </article>

        <article class="card" data-type="taller" data-capacity="small" data-price="40000">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=600&q=75" alt="Taller creativo" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Taller</span></div>
            <h3 class="card-title">Galpon Milagros</h3>
            <p class="card-location">Palermo, CABA</p>
            <div class="card-price"><span class="price-amount">$40.000</span> <span class="price-unit">/dia</span></div>
          </div>
        </article>

        <article class="card" data-type="social" data-capacity="medium" data-price="85000">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?w=600&q=75" alt="Fiesta social" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Social</span></div>
            <h3 class="card-title">Rooftop 360 Centro</h3>
            <p class="card-location">Centro, CABA</p>
            <div class="card-price"><span class="price-amount">$85.000</span> <span class="price-unit">/dia</span></div>
          </div>
        </article>

        <article class="card" data-type="boda" data-capacity="large" data-price="250000">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?w=600&q=75" alt="Boda de gala" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Boda</span></div>
            <h3 class="card-title">Quinta Los Robles</h3>
            <p class="card-location">San Isidro, BA</p>
            <div class="card-price"><span class="price-amount">$250.000</span> <span class="price-unit">/dia</span></div>
          </div>
        </article>
      </div>
      <button class="carousel-btn next" aria-label="Siguiente">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6" /></svg>
      </button>
    </div>
  </div>

  <div class="category-block">
    <div class="container">
      <h2 class="category-title">Disponibles este fin de semana</h2>
    </div>
    <div class="carousel-wrapper" id="carousel2">
      <button class="carousel-btn prev" aria-label="Anterior" style="display: none;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"/></svg></button>
      <div class="carousel-track">
        
        <article class="card">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=600&q=75" alt="Sala de taller" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
            <span class="card-badge">Oportunidad</span>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Taller</span></div>
            <h3 class="card-title">Studio Belgrano Norte</h3>
            <p class="card-location">Belgrano, CABA</p>
            <div class="card-price"><span class="price-amount">$30.000</span></div>
          </div>
        </article>

        <article class="card">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=75" alt="Oficina" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Corporativo</span></div>
            <h3 class="card-title">Loft San Telmo Cowork</h3>
            <p class="card-location">San Telmo, CABA</p>
            <div class="card-price"><span class="price-amount">$75.000</span></div>
          </div>
        </article>

        <article class="card">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=600&q=75" alt="Terraza" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Social</span></div>
            <h3 class="card-title">Rooftop View Obelisco</h3>
            <p class="card-location">Centro, CABA</p>
            <div class="card-price"><span class="price-amount">$55.000</span></div>
          </div>
        </article>

        <article class="card">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?w=600&q=75" alt="Salon" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Boda</span></div>
            <h3 class="card-title">Estancia Los Alamos</h3>
            <p class="card-location">Pilar, BA</p>
            <div class="card-price"><span class="price-amount">$160.000</span></div>
          </div>
        </article>

        <article class="card">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1591115765373-5207764f72e7?w=600&q=75" alt="Jardin" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Social</span></div>
            <h3 class="card-title">Jardines de Olivos</h3>
            <p class="card-location">Olivos, BA</p>
            <div class="card-price"><span class="price-amount">$120.000</span></div>
          </div>
        </article>

        <article class="card">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?w=600&q=75" alt="Salon de eventos corporativos" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Corporativo</span></div>
            <h3 class="card-title">Salon Dorado Recoleta</h3>
            <p class="card-location">Recoleta, CABA</p>
            <div class="card-price"><span class="price-amount">$190.000</span></div>
          </div>
        </article>

        <article class="card">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?w=600&q=75" alt="Jardin de fiesta" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Cumpleanos</span></div>
            <h3 class="card-title">Jardin Secreto Devoto</h3>
            <p class="card-location">Villa Devoto, CABA</p>
            <div class="card-price"><span class="price-amount">$80.000</span></div>
          </div>
        </article>

        <article class="card">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1600508774634-4e11d34730e2?w=600&q=75" alt="Estudio blanco" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Taller</span></div>
            <h3 class="card-title">Estudio Fotografico Lux</h3>
            <p class="card-location">Colegiales, CABA</p>
            <div class="card-price"><span class="price-amount">$25.000</span></div>
          </div>
        </article>
      </div>
      <button class="carousel-btn next" aria-label="Siguiente"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg></button>
    </div>
  </div>

  <div class="category-block">
    <div class="container">
      <h2 class="category-title">Espacios al aire libre</h2>
    </div>
    <div class="carousel-wrapper" id="carousel3">
      <button class="carousel-btn prev" aria-label="Anterior" style="display: none;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"/></svg></button>
      <div class="carousel-track">
        
        <article class="card">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1591115765373-5207764f72e7?w=600&q=75" alt="Jardin" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Social</span></div>
            <h3 class="card-title">Jardines de Olivos</h3>
            <p class="card-location">Olivos, BA</p>
            <div class="card-price"><span class="price-amount">$120.000</span></div>
          </div>
        </article>

        <article class="card">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1561489413-985b06da5bee?w=600&q=75" alt="Quinta" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Casamiento</span></div>
            <h3 class="card-title">Quinta La Paz</h3>
            <p class="card-location">San Isidro, BA</p>
            <div class="card-price"><span class="price-amount">$210.000</span></div>
          </div>
        </article>
        
        <article class="card">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=600&q=75" alt="DJ en fiesta nocturna" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Cumpleanos</span></div>
            <h3 class="card-title">Parque Leloir Fest</h3>
            <p class="card-location">Ituzaingo, BA</p>
            <div class="card-price"><span class="price-amount">$95.000</span></div>
          </div>
        </article>

        <article class="card">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?w=600&q=75" alt="Boda exterior" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Boda</span></div>
            <h3 class="card-title">Chacra Norte</h3>
            <p class="card-location">Tigre, BA</p>
            <div class="card-price"><span class="price-amount">$180.000</span></div>
          </div>
        </article>

        <article class="card">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=600&q=75" alt="Bodas en el bosque" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Boda</span></div>
            <h3 class="card-title">Bosque Escondido</h3>
            <p class="card-location">Pilar, BA</p>
            <div class="card-price"><span class="price-amount">$200.000</span></div>
          </div>
        </article>

        <article class="card">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=600&q=75" alt="Terraza de evento" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Social</span></div>
            <h3 class="card-title">Terraza del Rio</h3>
            <p class="card-location">Vicente Lopez, BA</p>
            <div class="card-price"><span class="price-amount">$110.000</span></div>
          </div>
        </article>

        <article class="card">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1465495976277-4387d4b0b4c6?w=600&q=75" alt="Casamiento estilo campo" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Casamiento</span></div>
            <h3 class="card-title">Estancia La Catalina</h3>
            <p class="card-location">Lujan, BA</p>
            <div class="card-price"><span class="price-amount">$280.000</span></div>
          </div>
        </article>

        <article class="card">
          <div class="card-img-wrap">
            <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=600&q=75" alt="Fogata de cumpleanos" loading="lazy" class="expandable-img" />
            <button class="fav-btn" onclick="toggleFav(this)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="card-body">
            <div class="card-meta"><span class="card-type">Cumpleanos</span></div>
            <h3 class="card-title">Camping El Rosedal</h3>
            <p class="card-location">Tigre, BA</p>
            <div class="card-price"><span class="price-amount">$65.000</span></div>
          </div>
        </article>

      </div>
      <button class="carousel-btn next" aria-label="Siguiente"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg></button>
    </div>
  </div>

</section>

<div class="empty-state" id="emptyState" style="display:none">
  <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8" /><line x1="21" y1="21" x2="16.65" y2="16.65" /></svg>
  <p>No encontramos espacios con esos filtros.<br>Proba combinaciones diferentes.</p>
  <button onclick="resetFilters()">Ver todos los espacios</button>
</div>

<section class="featured-section" id="destacados">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Espacios destacados</h2>
      <p class="section-sub">Seleccionados por nuestro equipo por calidad y experiencia</p>
    </div>
    
    <div class="featured-grid">
      
      <div class="featured-card featured-card--big">
        <img src="https://images.unsplash.com/photo-1561489413-985b06da5bee?w=900&q=80" alt="Evento de gala" class="expandable-img" />
        <div class="featured-overlay">
          <span class="featured-tag">Rosario · Destacado del mes</span>
          <h3>Salon Parana Gala</h3>
          <p>El espacio mas elegante del litoral para eventos de alto impacto.</p>
          <a href="#" class="featured-btn" onclick="return false">Conocer mas</a>
        </div>
      </div>
      
      <div class="featured-card">
        <img src="https://images.unsplash.com/photo-1591115765373-5207764f72e7?w=600&q=75" alt="Jardin para eventos" class="expandable-img" />
        <div class="featured-overlay">
          <span class="featured-tag">Mendoza · Al aire libre</span>
          <h3>Jardin Los Andes</h3>
          <a href="#" class="featured-btn" onclick="return false">Conocer mas</a>
        </div>
      </div>
      
      <div class="featured-card">
        <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=600&q=75" alt="Sala conferencias" class="expandable-img" />
        <div class="featured-overlay">
          <span class="featured-tag">Cordoba · Corporativo</span>
          <h3>Hub Innovacion Cordoba</h3>
          <a href="#" class="featured-btn" onclick="return false">Conocer mas</a>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="gallery-teaser">
  <div class="container teaser-container">
    
    <div class="section-header">
      <h2 class="section-title">Nuestra Galeria</h2>
      <p class="section-sub">Mira la magia de los eventos que ya cobraron vida en nuestra plataforma.</p>
    </div>
    
    <a href="index.php?ruta=galeria" class="teaser-btn">
      Ver Eventos Realizados
    </a>
    
  </div>
</section>

<section class="cta-band">
  <div class="container cta-inner">
    <div class="cta-text">
      <h2>¿Tenes un espacio para eventos?</h2>
      <p>Publicalo gratis y llega a miles de organizadores en todo el pais.</p>
    </div>
    <button class="cta-band-btn" id="publishBandBtn">Publicar mi espacio</button>
  </div>
</section>