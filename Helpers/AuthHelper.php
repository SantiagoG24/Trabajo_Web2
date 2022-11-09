<?php

    class AuthHelper{
        function __construct(){ 
        }
        
        function verificarLogeado(){
            session_start();
            if(!isset($_SESSION["nombreUsuario"])){
                return false;
            }else {
                return true;
            }
        }
        // Retorna la variable $_SESSION["nombre"] para renderizar condicionalmente en los templates
        function isLoggedIn(){ 
            if(!isset($_SESSION)){ 
                session_start(); 
            }
            if(isset($_SESSION["nombreUsuario"])){
                return $_SESSION["nombreUsuario"];
            }else return null;
        }

        function logout(){
            session_start();
            session_destroy();
        }

    }