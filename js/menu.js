let nav = document.getElementById("nav");


nav.innerHTML = 
`
<nav class="navbar navbar-expand-lg navbar-custom border-bottom border-body" data-bs-theme="dark"
            style="background-color: #000000;">
            <div class="container d-flex justify-content-center">
                <a class="navbar-brand" href="index.html">
                    <img src="img/H2C_HR (1) (1).png" alt="Bootstrap" width="60" height="60">
                </a>
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="width: 100%;">
                            <li class="nav-item list">
                                <a class="nav-link active link" id="lia" aria-current="page" href="index.html">Inicio</a>
                            </li>
                            <li class="nav-item list">
                                <a class="nav-link active link" aria-current="page"
                                    href="Funcionamiento.html">Funcionamiento</a>
                            </li>
                            <li class="nav-item list">
                                <a class="nav-link active link" href="informacionH2C.html">H2C</a>
                            </li>
                            <li class="nav-item list">
                                <a class="nav-link active link" href="Contactanos.html">Contáctanos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
`