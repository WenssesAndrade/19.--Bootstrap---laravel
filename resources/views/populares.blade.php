@extends('plantilla')

@section('content')


<div class="container">
            <font color="black">
                <br>
                <h2 class="center-align"><b>Andrade López</b></h2>
            </font>
    <section>
            <h6 class="center-align">Artista sureña andaluz residente en México. <br>
                Expositora en Bellas Artes y referencia en la pintura y el dibujo iconoclasta de nuestro tiempo. <br>
                Sus obras están repartidas en diferentes
                instituciones así como en colecciones privadas <br>
                a nivel mundial. Aquí mostramos sus últimos trabajos.
            </h6>

            <br>
            <br>

            <div align="center"> <img src="img/cuadroAzul.jpg" width="900" height="500"></div>

            <br>
            <br>
            <br>
            <br>

            <div class="row">
                <div class="col l4">
                    <div class="card">
                        <div class="card-image">
                            <img src="./img/libro2.jpg">
                            <span class="card-title red darken-3">Best Seller</span>
                        </div>
                        <div class="card-content">
                            <p>Es un libro profético, pero no en el sentido banal de una anticipación sino como una
                                advertencia acerca de la condición de todo ser humano, co-creador de la propia vida
                                individual y el espíritu de su época. <br><br></p>
                        </div>
                    </div>
                </div>

                <div class="col l4">
                    <div class="card">
                        <div class="card-image">
                            <img src="./img/dibujo.jpg">
                            <span class="card-title red darken-3">Ramón</span>
                        </div>
                        <div class="card-content">
                            <p>El retrato es la descripción de una persona o personaje efectuada por un observador por
                                medio de la palabra. En el retrato, el observador elige rasgos físicos y de personalidad
                                de la persona, a los que les asigna cualidades.</p>
                        </div>
                    </div>
                </div>
                <div class="col l4">
                    <div class="card">
                        <div class="card-image">
                            <img src="./img/pamor.jpg">
                            <span class="card-title red darken-3">El Gran Beso</span>
                        </div>
                        <div class="card-content">
                            <p>La pintura victoriana es la producción artística creada bajo el reinado de la Reina
                                Victoria en Inglaterra (1837-1901).
                                <br><br>En este periodo, se dan una serie de cambios que
                                determinan el gusto de la época, hasta el Arte.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
    </section>
</div>
    
@endsection