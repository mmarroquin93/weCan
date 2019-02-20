<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link href="https://cdn.quilljs.com/1.1.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.1.6/quill.js"></script>
    <script src="{{ asset('js/image-resize.min.js') }}"></script>


</head>
<body>


<div class="container">


    <form method="POST" action="/controlpanel/nuevoproducto/add"  id="formulario" enctype="multipart/form-data">
        @csrf


<div class="form-group">
    <label for="exampleInputEmail1">Nombre Producto</label>
    <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="Titulodesc" placeholder="Ingresa un titulo" required>

</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion corta del producto</label>
    <textarea class="form-control" name="descripcion" id="descripcion" rows="3" required></textarea>
</div>

<div class="form-group">
    <label for="exampleInputFile">Foto Principal</label>
    <input type="file" name="imagen" id="fotoprincipal" required>

</div>


    <h3 style="margin-top: 5%">Descripcion Larga</h3>

<div class="quill-wrap">
    <!-- Create the toolbar container -->
    <div id="toolbar">
      <span class="ql-formats">
        <select class="ql-header">
          <option value="1">Heading</option>
          <option value="2">Subheading</option>
          <option selected>Normal</option>
        </select>
        <select class="ql-font">
          <option selected>Sans Serif</option>
          <option value="serif">Serif</option>
          <option value="monospace">Monospace</option>
        </select>
      </span>
        <span class="ql-formats">
        <button class="ql-bold"></button>
        <button class="ql-italic"></button>
        <button class="ql-underline"></button>
        <button class="ql-strike"></button>
      </span>
        <span class="ql-formats">
        <select class="ql-color"></select>
        <select class="ql-background"></select>
      </span>
        <span class="ql-formats">
        <button class="ql-list" value="ordered"></button>
        <button class="ql-list" value="bullet"></button>
        <select class="ql-align">
          <option selected></option>
          <option value="center"></option>
          <option value="right"></option>
          <option value="justify"></option>
        </select>
      </span>
        <span class="ql-formats">
        <button class="ql-blockquote"></button>
        <button class="ql-link"></button>
        <button class="ql-image"></button>
        <button class="ql-code-block"></button>
        <button class="ql-video"></button>
      </span>
        <span class="ql-formats">
        <button class="ql-clean"></button>
      </span>
    </div>

    <!-- Create the editor container -->
    <div id="editor" >

    </div>
</div>

        <input type="hidden" name="editorsito">




        <div class="row">
            <div class="col-sm">

                <h3 style="margin-top: 5%">Seleccionar los Tags</h3>

                @foreach($categoria as $categorias)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="categoria[]" value="{{$categorias->id}}" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            {{$categorias->nombre}}
                        </label>
                    </div>
                @endforeach


            </div>

        </div>



    <br>
        <h3>Precio</h3>


        <div class="input-group mb-3">





            <div class="input-group-prepend">
                <span class="input-group-text">S/. </span>
            </div>
            <input type="text" class="form-control" name="precio" aria-label="Amount (to the nearest dollar)">
            <div class="input-group-append">
                <span class="input-group-text">.00</span>
            </div>
        </div>


    <button type="submit" class="waves-effect waves-green btn blue">Guardar</button>


</form>



<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){






    var editore = new Quill('#editor', {
        modules: {
            toolbar: '#toolbar',
            imageResize: {
                modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
            }
        },
        theme: 'snow'
    });

        var form = document.getElementById("formulario"); // get form by ID
        form.onsubmit = function() { // onsubmit do this first
            var name = document.querySelector('input[name=editorsito]'); // set name input var
            name.value = editore.root.innerHTML;

            return true;


        }


            // $('#formpost').on("submit", function(e) {
            //     e.preventDefault();
            //     var titulo = $("#titulo").val();
            //
            //     var descripcion = $("#descripcion").val();
            //     var editor_content = editor.container.firstChild.innerHTML
            //     // alert(editor_content);
            //     // console.log(editor_content);
            //     var image = $('#fotoprincipal')[0].files[0];
            //     var form = new FormData();
            //     form.append('titulo', titulo);
            //     form.append('editor_content', editor_content);
            //     form.append('descripcion', descripcion);
            //     form.append('image', image);
            //
            //     $.ajax({
            //         type: "POST",
            //         headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         },
            //         url: "/controlpanel/nuevopost/add",
            //         cache: false,
            //         contentType: false,
            //         processData: false,
            //         data: form,
            //         success: function (data) {
            //
            //             // alert("Post guardado con exito")
            //             // location.href ="../../controlpanel/blog";
            //             console.log(data);
            //         }
            //     });
            //
            // });

    });
</script>
</body>
</html>
