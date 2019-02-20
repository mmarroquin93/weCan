@include('controlpanel.headeradminpanel')

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard


                        </div>

                        <form>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Id</label>
                                <input type="text" class="form-control" id="id" placeholder="Categortia" required value="{{$categoria->id}}" readonly>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword1">Nombre de la Categoria</label>
                                <input type="text" class="form-control" id="categoria" placeholder="Categortia" required value="{{$categoria->nombre}}">
                            </div>

                            <button type="button" class="btn btn-primary" id="button">Guardar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

    $( document ).ready(function() {


    $("#button").click(function(e) {
        e.preventDefault();



        var categoria = $("#categoria").val();
        var id = $("#id").val();

        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/controlpanel/blog/categorias/modificar",

            data: {categoria:categoria,id:id},
            success: function (data) {

                alert("Categoria guardada con exito")
                location.href = "../../../blog/categorias";
                console.log(data);
            }
        });

    });


    });

</script>
</body>
</html>
