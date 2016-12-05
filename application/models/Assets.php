<?php
  class Assets extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        public function carregarMarcasCosmetics()
        {
          $images = array();
          $dir = opendir('public/img/marcas');
          if ($dir) {
              while (($item = readdir($dir)) !== false) {
                  if(strcmp(substr($item , 0),".") != 0 && strcmp(substr($item , 0),"..") != 0){
                    array_push($images , base_url('public/img/marcas/').$item);
                  }
              }
              closedir($dir);
          }
          return $images;
        }

        public function separarArrays($array = null)
        {

          if($array != null){
            $array = array_chunk($array,9);
          }

          return $array;
        }
  }

?>
