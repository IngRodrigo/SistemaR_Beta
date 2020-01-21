<?php
class Sessions{
	public function __construct(){ }
	//INIT que es para iniciar las sesiones.
	public function init(){
		@session_start();
	}
        //SET nos permite inicializar las variables de Session a utilizar!
	public function set($varname, $value){		
            // $varname = este sera el nombre de nuestra variable de sesiÃ²n
            // $value = el valor que tendrÃ¡ nuestra variable de sesiÃ³n.
            $_SESSION[$varname] = $value;	
	}
        public function get($varname){            
            return $_SESSION[$varname];            
        }	
        //DESTROY es para quitar las variables previamente creadas y destruir la sesiÃ³n.
        public function destroy(){		
		session_unset();
		session_destroy();		
	}	
}