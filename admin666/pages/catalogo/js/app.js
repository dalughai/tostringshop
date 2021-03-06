
var init = function(){


	
	var ruta = "http://localhost";


	var editarDelegation = function(evento){
		var table = $('#example1').DataTable();
		var data = table.row( $(this).parents('tr') ).data();
		location.href ='../catalogo/ed_producto.html?id='+data.id +'';
		
	};
	
	var eliminarDelegation = function(evento){
		var table = $('#example1').DataTable();
		var data = table.row( $(this).parents('tr') ).data();
		eliminarProducto(data.id);
		table.row( $(this).parents('tr')).remove().draw();
		var inst = $('[data-remodal-id=modal]').remodal();
		inst.open();
		
    };
	$('.cuerpo-tabla').on('click','.editar', editarDelegation);
	$('.cuerpo-tabla').on('click','.eliminar', eliminarDelegation);
	$('.editar').on('click',function(){
		alert($(this).val());
	});

	jQuery.get( "/api/tareas", function(datos){
		
		var table = $('#example1').DataTable({
			data: datos.tareas,
			columns: [
				{data: "id"},
				{
					targets : 1 ,
					data: datos.tareas,
					render : function ( url, type, full) {
						if(full.ruta == 1){
							return '<img height="75px" width="75px" src="'+ ruta + full.imagen + '.png"/>';
						} else {
							return '<img height="75px" width="75px" src="'+ full.imagen+'"/>';
						}
					}
				},
				{data: "nombre"},
				{data: "referencia"},
				{data: "id_categoria"},
				{data: "precio_iva"},
				{data: "stock"},
				{data: "estado"},
				{title: "Editar / Eliminar", "data": null},
			],
			columnDefs:[
				{
					targets: -1, //-1 es la ultima columna y 0 la primera
					data: null,
					defaultContent: '<div class="btn-group"> <button type="button" class="btn btn-primary btn-xs dt-edit btn-tabla editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button><button type="button" class="btn btn-danger btn-xs dt-delete btn-tabla eliminar"><span class="glyphicon glyphicon-remove glyphicon-trash" aria-hidden="true"></span></button></div>'
				},
			]
			
		});

		// data.tareas.forEach(function(producto){

		// 	// $('.cuerpo-tabla').
		// 	// 	append($('<tr role="row" class="odd"><td class="sorting_1">'+  producto.id+'</td><td><img src="'+  producto.imagen +'" width="35px"></td><td>'+  producto.nombre +'</td><td>'+  producto.referencia +'</td><td>'+  producto.id_categoria +'</td><td>'+  producto.precio_iva +'</td><td>'+  producto.stock +'</td><td>'+  producto.estado +'</td><td>Editar</td></tr>'));

		// 		//append($('<li class="tarea" id="tarea_' + tarea.id + '">' + tarea.nombre +'</li>'));
			
		// })

		
	});




};

$().ready(init);

function eliminarProducto(id){
	jQuery.post("/api/producto/delete",{id: id},function(datos){
		var inst = $('[data-remodal-id=modal]').remodal();
		inst.open();
	});
}