<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- include libraries(jQuery, bootstrap) -->


<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link href="<?=base_url('/static/css/vendors/bootstrap.min.css')?>" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="<?=base_url('/static/js/vendors/bootstrap.bundle.min.js')?>" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="<?=base_url('/static/js/vendors/bootstrap.min.js')?>" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <title>Read Document</title>
</head>

<body>

    <div class="container py-3 text-black-50">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-uppercase">Pantalla para renderizado de platilla</h3>
                <hr>
            </div>
            <div class="col-md-12">
                <h4>Formulario de captura</h4>
                <form action="" class="form" id="form-doc">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="idFile">
                        <!-- <label class="input-group-text" for="inputGroupFile01">Subir</label> -->
                    </div>

                    <button type="button" class="btn btn-primary" id="btn-form-doc">Ingresar Datos</button>
                </form>
            </div>
            <div class="col-md-12">
                <h4>Entrada</h4>
                <div class="border p-2 my-2 d-none" hidden id="outputFile"></div>
            </div>
            <div class="col-md-12">
                <h4>Salida</h4>
               <div class="card card-outline card-info">

                                       <div class="col-md-12">
                
                <div class="border p-2 my-2 d-none" id="plantilla"></div>
            </div>
            </div>
        </div>
    </div>
	<script>
	
    </script>
	</script>
    <div class="modal fade" id="idModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingreso de valores</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="idModalBody">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn-add">Agregar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url('/static/js/index.js')?>" type="module"></script>
</body>

</html>