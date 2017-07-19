<?php

class evaluationarticlevoteModuleFrontController extends ModuleFrontController{
  public function initContent(){
    parent::initContent();
  }

  function processVote(){

  }

  public function info(){    
       die(Tools::jsonEncode(array(
           'status' => htmlspecialchars("toto"),
          'details' => htmlspecialchars("titi")
       )));
  }

  public function displayAjaxVote() {
    $vote = new Vote();
    $vote->id = Tools::getValue('id');
    $vote->vote = Tools::getValue('vote');
    $vote->id_product = Tools::getValue('product');
    $vote->id_customer = Tools::getValue('customer');
    $vote->save();

    die(Tools::jsonEncode(array("status"=>"ok")));
  }
}