$(document).ready(function() {
    $('#tablaUsuarios').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": base_url + '/usuarios/list',
            "dataSrc":""
        },
        "columns":[
            {"data":"idUsuario"},
            {"data":"usuario"},
            {"data":"nombreUsuario"},
            {"data":"apellidoUsuario"},
            {"data":"nombreRol"},
            {
                "data": "estado",
                "render": function (data, type, row) {
                    if (type === 'display') {
                        // Renderiza el estado como una etiqueta Bootstrap según el valor
                        if (data == 1) {
                            return '<span class="badge rounded-pill bg-success">Activo</span>';
                        } else {
                            return '<span class="badge rounded-pill bg-danger">Inactivo</span>';
                        }
                    }
                    return data;
                }
            },             
            {
                data: null,
                render: function (data, type) {
                    if (type === 'display') {
     
                        return `<button type="button" class="btn btn-info" title="Ver usuario"><i class="ri-eye-line"></i> </button>
                        <button type="button" class="btn btn-primary" title="Eliminar usuario"><i class="ri-pencil-line"></i> </button>
                        <button type="button" class="btn btn-danger" title="Eliminar usuario"><i class="ri-delete-bin-line"></i> </button>
                        <button type="button" class="btn btn-dark" title="Descargar"><i class="ri-download-2-line"></i> </button>`;
                    }
     
                    return data;
                }
            }, // Corregir "optiones" a "Acciones"
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"asc"]]
        // Puedes agregar más opciones de configuración según tus necesidades
    });

    //NUEVO REGISTRO
    // var formDepartamento = document.querySelector("#formDepartamento");
    // formDepartamento.onsubmit = function(e) {
    //     e.preventDefault();

    //     var strNombre = document.querySelector('#nombreDepartamento').value;
    //     var strDescripcion = document.querySelector('#descripcionDepartamento').value;
    //     var intstatus = document.querySelector('#liststatus').value;
    //     if(strNombre == '' || strDescripcion == '' || intstatus == '')
    //     {
    //         swal("Atencion", "Todos los campos son obligatorios.", "error");
    //         return false;
    //     }

    // }
});