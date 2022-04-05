@extends('plantilla')

@section('content')


<div class="container">
       
        <h4 class="center-align">Creemos en la importancia de estar cerca de ti, <br>
            por esa razón ponemos nuestra información <br>
            de contacto a tu disposición</h4>
        <br>
        <br>
        <section>
            <div class="row">
                <div class="card col l4">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/redes-sociales.jpg">
                    </div>

                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Redes Sociales<i
                                class="material-icons right">Ver más</i></span>
                    </div>

                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Redes Sociales<i
                                class="material-icons right">close</i></span>
                        <p> Siguenos en nuestras redes:<br>
                            <li> <img src="./img/icons8-facebook-40.png">Facebook</li>
                            <li><img src="./img/icons8-instagram-40.png">Instagram</li>
                            <li> <img src="./img/icons8-twitter-40.png">Twitter</li>

                        </p>
                    </div>
                </div>
                <div class="card col l4">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/tienda.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Tienda fisica<i
                                class="material-icons right"><br>Ver más</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Tienda fisica<i
                                class="material-icons right">close</i></span>
                        <p>Oficina cental Lagos de Moreno
                            Bugambilias #45,C.P.</p>
                    </div>
                </div>
                <div class="card col l4">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/contacto.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Contacto personal<i
                                class="material-icons right">Ver más</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Contacto personal<i
                                class="material-icons right">close</i></span>
                        <p>Pongo a tu disposición mi información personal de contacto:
                            <br> <br>
                            Telefono: +52 47 4743 94 36
                            <br>
                            Correo electronico: Contacto@SurTerraneo.com
                        </p>
                    </div>
                </div>

            </div>
        </section>
    </div>
</div>
    
@endsection