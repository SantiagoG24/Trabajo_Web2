<?php
/* Smarty version 4.2.1, created on 2022-10-17 15:59:07
  from 'C:\xampp\Proyectos\htdocs\WEB-2\Trabajo_Web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d5fab316cb6_52714328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c472a2edb1011fb3e81469e9257aba8fd0e1dbc' => 
    array (
      0 => 'C:\\xampp\\Proyectos\\htdocs\\WEB-2\\Trabajo_Web2\\templates\\header.tpl',
      1 => 1666015145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d5fab316cb6_52714328 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Maxwell's</title>
    <link rel="stylesheet" href="<?php echo BASE_URL;?>
/estilo.css">
    
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="login">Login</a>
        <a class="nav-link" href="registro">Registrar</a>
      </div>
    </div>
  </div>
</nav><?php }
}
