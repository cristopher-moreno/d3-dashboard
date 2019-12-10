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

function inputElement($typeElement, $texto)
{
    $element = '<div class="buttons" style="padding-top: 20px;">
      <button class="button ' . $typeElement . '">' . $texto . '</button>
    </div>';
    echo $element;
}
