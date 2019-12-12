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

function setDuration($e, $label)
{
  $element = '
  <div class="forms" style="width: 200px;">
        <div class="forms">
            <div class="field">
                <label class="label">' . $label . '</label>
                <div class="control">
                    <input class="input" type="number" name="' . $e . '" required="true">
                </div>
            </div>
        </div>
  ';
  echo $element;
}
