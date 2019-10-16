<?php
    class app{
        public function redir($url){
            header("Location:{$url}");
        }
    }
