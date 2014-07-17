<?php

class Er
{
    //validar si un mail es correcto
	public function valida_email($valor)
	{
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor))
		{
		     return true;
		} else
		{ 
		     return false;
		} 
	}

	//verificar si un password es seguro 
	function verificar_password_strenght($password)
	{ 
		if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password))
			echo "Su password es seguro.";
		else
			echo "Su password no es seguro.";
	}
	//Verificar el fomato de una IPv4
	function verificar_ip($ip)
	{
		return preg_match("/^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])"."
				(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$/", $ip );
	}


	//Validad nombre y apellido
	public function valida_nombre($valor)
	{
		$exp_reg = '/^[A-Za-záéíóúñ]{2,}([\s][A-Za-záéíóúñ]{2,})+$/'; 
		if (preg_match($exp_reg, $valor))
		{
		     return true;
		} else
		{ 
		     return false;
		} 
	}

	//Verificar Usuario
	public function valida_usuario($valor)
	{
		$exp_reg = '/^[a-z0-9_-]{3,15}$/'; 
		if (preg_match($exp_reg, $valor))
		{
		     return true;
		} else
		{ 
		     return false;
		} 
	}

	//Validar la seguridad de una contraseña otro
	public function valida_seguridad($valor)
	{
		$exp_reg = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/'; 
		if (preg_match($exp_reg, $valor))
		{
		     return true;
		} else
		{ 
		     return false;
		} 
	}

	//Validar numero de telefono
	public function valida_telefono($valor)
	{
		$exp_reg = '/^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$/'; 
		if (preg_match($exp_reg, $valor))
		{
		     return true;
		} else
		{ 
		     return false;
		} 
	}

	//Validar codigo postal
	public function valida_cp($valor)
	{
		$exp_reg = '/^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$/'; 
		if (preg_match($exp_reg, $valor))
		{
		     return true;
		} else
		{ 
		     return false;
		} 
	}

	//Cualquier minuscula
	public function valida_minusculas($valor)
	{
		$exp_reg = '/[a-z]/'; 
		if (preg_match($exp_reg, $valor))
		{
		     return true;
		} else
		{ 
		     return false;
		} 
	}

	//Numero Entero
	public function valida_entero($valor)
	{
		$exp_reg = '/^(?:\+|-)?\d+$/'; 
		if (preg_match($exp_reg, $valor))
		{
		     return true;
		} else
		{ 
		     return false;
		} 
	}

	//Fecha
	public function valida_fecha($valor)
	{
		$exp_reg = '^\d{1,2}\/\d{1,2}\/\d{2,4}$'; 
		if (preg_match($exp_reg, $valor))
		{
		     return true;
		} else
		{ 
		     return false;
		} 
	}

	//Cambiar formato de fecha
	function cambiar_formato_fecha($fecha)
	{ 
		return preg_replace("/([0-9]{4})\/([0-9]{2})\/([0-9]{2})/i","$3/$2/$1",$fecha);
	}


	//Valida peso o estatura
	public function valida_flotante($valor)
	{
		$exp_reg = '/^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/'; 
		if (preg_match($exp_reg, $valor))
		{
		     return true;
		} else
		{ 
		     return false;
		} 
	}

	//Verificar si es archivo de imagen
	public function valida_imagen($valor)
	{
		$exp_reg = '%\.(gif|jpe?g|png)$%i'; 
		if (preg_match($exp_reg, $valor))
		{
		     return true;
		} else
		{ 
		     return false;
		} 
	}
	
	//Verificar si es archivo de imagen
	public function valida_pdf($valor)
	{
		$exp_reg = '%\.(pdf)$%i'; 
		if (preg_match($exp_reg, $valor))
		{
		     return true;
		} else
		{ 
		     return false;
		} 
	}


}

?>    