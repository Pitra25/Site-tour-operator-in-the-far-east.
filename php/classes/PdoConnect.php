<?php
    class PdoConnect {

        private const HOST = 'localhost';
        private const DB = 'StartProject';
        private const USER = 'ADMIN';
        private const PASS = 'ADMIN';
        private const CHARSET = 'utf8mb4';
    
        protected static $_instanse;
    
        protected $DSN; // параметры БД
        protected $OPD; // параметры для PDO
        public $PDO;    // метод для работы с БД
    
        private function __construct() {
    
            $this->DSN = "mysql:host=" . self::HOST . ";dbname=" . self::DB . ";charset=" . self::CHARSET;

            $this->OPD = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            );
            
            $this->PDO = new PDO($this->DSN, self::USER, self::PASS, $this->OPD);
        }
    
        public static function getInstance() {
            if (self::$_instanse === null)
                self::$_instanse = new self;
    
            return self::$_instanse;
        }
        
        public function __clone() {}
        public function __wakeup() {}
    }
?>