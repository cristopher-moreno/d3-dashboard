<?php
// ===============================
// Autor: Cristopher Moreno
// Fecha Creación: 20191208
// Fecha Modificación: -
// ===============================
// Descripción:
// Este script se encarga de lo siguiente:
// - Contiene componentes del CRUD
//
// Lista de Botones:
// https://bulma.io/documentation/elements/button/#list-of-buttons 
//==================================

function submitForm($typeElement, $texto)
{
    $element = '<div class="buttons" style="padding-top: 20px;width: 100px;">
      <button name="submit" class="button ' . $typeElement . '">' . $texto . '</button>
    </div>';
    echo $element;
}

function setField($e, $label)
{
    $element = '
  <div class="forms" style="width: 200px;">
        <div class="forms">
            <div class="field">
                <label class="label">' . $label . '</label>
                <div class="control">
                    <input class="input" type="text" name="' . $e . '" required="true">
                </div>
            </div>
        </div>
  ';
    echo $element;
}


function setUser($e, $label)
{
    $element = '
  <div class="forms" style="width: 200px;">
        <div class="forms">
            <div class="field">
                <label class="label">' . $label . '</label>
                <div class="control">
                    <input class="input" type="text" name="' . $e . '">
                </div>
            </div>
        </div>
  ';
    echo $element;
}


function setIntNumber($e, $label)
{
    $element = '
  <div class="forms" style="width: 200px;">
        <div class="forms">
            <div class="field">
                <label class="label">' . $label . '</label>
                <div class="control">
                    <input class="input" type="number" min="1" step="1" max="49" name="' . $e . '" required="true">
                </div>
            </div>
        </div>
  ';
    echo $element;
}


function setNumber2d($e, $label)
{
    $element = '
  <div class="forms" style="width: 200px;">
        <div class="forms">
            <div class="field">
                <label class="label">' . $label . '</label>
                <div class="control">
                    <input class="input" type="number" min="1" step="0.01" max="49" name="' . $e . '" required="true">
                </div>
            </div>
        </div>
  ';
    echo $element;
}


function setNumber3d($e, $label)
{
    $element = '
  <div class="forms" style="width: 200px;">
        <div class="forms">
            <div class="field">
                <label class="label">' . $label . '</label>
                <div class="control">
                    <input class="input" type="number" min="1" step="0.001" max="49" name="' . $e . '" required="true">
                </div>
            </div>
        </div>
  ';
    echo $element;
}



function getBarAhorro($label, $n)
{
    $element = '
    <div class="box">
        <nav class="level-left">
        <div class="level-item has-text-centered" >
            <div>
                <p class="heading">' . $label . '</p>
                <p class="title">' . round($n, 1) . ' %</p>
            </div> 
        </div>
    </nav>      
        <div >
            <progress class="progress is-link" value="' . $n . '" max="100">' . $n . '%</progress>
        </div> 
    </div>
    ';

    echo $element;
}

function getCarousel($s1, $s2, $s3,$s4)
{
    $element = '
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="' . $s1 . '"
          alt="1st">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="' . $s2 . '"
          alt="2nd">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="' . $s3 . '"
          alt="3rd">
      </div>   
      <div class="carousel-item">
        <img class="d-block w-100" src="' . $s4 . '"
          alt="4th">
      </div>     
    </div> 
  </div>
';

    echo $element;
}
