@include('controlpanel.headeradminpanel')

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Tags

                        <button style="float: right" onclick="location.href ='../../../controlpanel/blog/tags/new';">Nuevo</button>
                        </div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Acciones</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tags as $tag)
                            <tr>
                                <th scope="row">{{$tag->id}}</th>
                                <td>{{$tag->nombre}}</td>
                                <td> <button onclick="location.href='../../../controlpanel/blog/tags/modificar/{{$tag->id}}';" type="button" class="btn btn-primary">Editar</button></td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
