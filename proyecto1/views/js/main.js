$(document).ready(function() {			
		
		$('#registro_integrante').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				nombre: {
					message: 'Nombre no Valido',
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
						stringLength: {
							min: 6,
							max: 30,
							message: 'EL nombre debe tener como minimo 6 caracteres y maximo 30'
						},						
					}
				},
				apellido: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},
				peso: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},
				estatura: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},
				foto: {
					validators: {
						file: {
							extension: 'jpg,jpeg,png',
							type: 'image/jpg,image/jpeg,image/png',							
							message: 'Archivo no Soportado'
						},
					}
				
				},
				edad: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},
				equipo: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},				
			}
		});
	});
	
	$(document).ready(function() {			
		
		$('#registro_continente').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				nombre: {
					message: 'Nombre no Valido',
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},										
					}
				},
			}
		});
	});
	
	$(document).ready(function() {			
		
		$('#registro_equipo').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				nombre: {
					message: 'Nombre no Valido',
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
						stringLength: {
							min: 6,
							max: 30,
							message: 'EL nombre debe tener como minimo 6 caracteres y maximo 30'
						},						
					}
				},
				pais: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},
				escudo: {
					validators: {
						file: {
							extension: 'jpg,jpeg,png',
							type: 'image/jpg,image/jpeg,image/png',							
							message: 'Archivo no Soportado'
						},
					}
				
				},							
			}
		});
	});
	
		$(document).ready(function() {			
		
		$('#registro_estadio').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				nombre: {
					message: 'Nombre no Valido',
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
						stringLength: {
							min: 6,
							max: 30,
							message: 'EL nombre debe tener como minimo 6 caracteres y maximo 30'
						},						
					}
				},
				ciudad: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},								
			}
		});
	});
	
	$(document).ready(function() {			
		
		$('#registro_pais').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				nombre: {
					message: 'Nombre no Valido',
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
						stringLength: {
							min: 6,
							max: 30,
							message: 'EL nombre debe tener como minimo 6 caracteres y maximo 30'
						},						
					}
				},
				bandera: {
					validators: {
						file: {
							extension: 'jpg,jpeg,png',
							type: 'image/jpg,image/jpeg,image/png',							
							message: 'Archivo no Soportado'
						},
					}
				
				},	
				
				continente: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},						
			}
		});
	});
	
	$(document).ready(function() {			
		
		$('#registro_posicion').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				nombre: {
					message: 'Nombre no Valido',
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
						stringLength: {
							min: 6,
							max: 30,
							message: 'EL nombre debe tener como minimo 6 caracteres y maximo 30'
						},						
					}
				},
				abreviatura: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},								
			}
		});
	});
	
	$(document).ready(function() {			
		
		$('#registro_entrenador').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {				
				pais: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},								
			}
		});
	});
	
		$(document).ready(function() {			
		
		$('#registro_posicion').bootstrapValidator({
			message: 'Este valor no es valido',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				Numero: {
					message: 'Nombre no Valido',
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},									
					}
				},
				integrante: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},			
				posicion: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						},
					}
				
				},						
			}
		});
	});
	
	$(document).ready(function() {
			$(".fancybox").fancybox({
				maxWidth	: 800,
				maxHeight	: 600,
				fitToView	: false,
				width		: '70%',
				height		: '70%',
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'none',
				closeEffect	: 'none'
			});
		});
		
		