   <?php
   class Myclass{
   	private static $instance = null;

   	private function __construction()();
   	private function __clone()();
   	public static function getInstance(){
   		if(!self::$instance){
   			self::$instance = new self();
   		}
   		return seld::$instance;
   	}
   }

   $a =Myclass::getInstnce();