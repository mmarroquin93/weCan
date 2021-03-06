@include('controlpanel.headeradminpanel')


    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard

                        <button style="float: right" onclick="location.href = 'nuevopost';">Nuevo</button>
                        </div>





                        <section class="card-container">

                        @foreach($post as $posts)




                                    <article class="card">
                                        <header class="card__title">
                                            <h3>{{$posts->titulo}}</h3>
                                        </header>
                                        <figure class="card__thumbnail">
                                            <img src="../../../uploads/{{$posts->imagenprincipal}} ">
                                        </figure>
                                        <main class="card__description">

                                            {{$posts->descripcion}}
                                               </main>
                                        <a href="#" class="button">Call to Action</a>

                                    </article>





                            {{--{!! $posts->contenido !!}--}}

                        @endforeach



                            {{--<div id="algoriasearch">--}}
                                {{--<!-- Components will go here -->--}}


                                {{--<ais-index app-id="{{ config('scout.algolia.id') }}"--}}
                                           {{--api-key="{{ env('ALGOLIA_SEARCH') }}"--}}
                                           {{--index-name="posts">--}}

                                    {{--<ais-input placeholder="Buscador..."></ais-input>--}}

                                    {{--<ais-results>--}}

                                        {{--<ais-results  >--}}
                                            {{--<template scope="{ result }">--}}
                                                {{--<div>--}}
                                                    {{--<h1>@{{ result.titulo }}</h1>--}}
                                                    {{--<h4>@{{ result.descripcion }}</h4>--}}

                                                {{--</div>--}}
                                            {{--</template>--}}
                                        {{--</ais-results>--}}



                                    {{--</ais-results>--}}

                                {{--</ais-index>--}}



                            {{--</div>--}}



                        </section>


                    </div>
                </div>
            </div>
        </div>
    </main>
</div>




</body>
</html>
