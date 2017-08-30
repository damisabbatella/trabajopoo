<?php
	class Presupuesto{
		//declaración de variables.
		$private=$precio;
		$private=$paginas;
		$private=$hosting;
		$private=$soporte;
		
		//métodos.
		public function prec_metodo(prec){
		 this->precio=$prec;


		}
		public function pag_metodo(pag){
		 this->paginas=$pag;


		}
		public function host_metodo(host){
		 this->hosting=$host;


		}
		public function soport_metodo(soport){
		 this->soporte=$soport;


		}
		
		
		

		//métodos de salida o impresión
		
		public function imprimirprecio(){
		 echo this->$precio;


		}
		public function imprimirpagina(){
		 echo this->$paginas;


		}
		public function imprimirhosting(){
		 echo this->$hosting;


		}
		public function imprimirsoporte(){
		 echo this->$soporte;


		}
		
		
	}
?>