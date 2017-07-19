<?php
class gestionfournisseurdisplayModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    parent::initContent();
    //$this->setTemplate('display.tpl');
    //return $this->display(__FILE__, 'views/templates/front/display.tpl');
    $this->context->smarty->assign(
	      array(
            'link_save_fournisseur' => $this->context->link->getModuleLink("gestionfournisseur",'save'),
	      )
	  );

    if (isset($this->context->cookie->redirect_errors)){
      $redirect_errors=$this->context->cookie->redirect_errors;
        $this->errors = array_merge(explode("@",$redirect_errors), $this->errors);
        // delete old messages
        unset($this->context->cookie->redirect_errors);
    }
    
    //dump(new Employee(5));
    //dump(Employee::getEmployees());
    //$this->setTemplate('module:gestionfournisseur/views/templates/front/display.tpl');
    $this->setTemplate('displaysave.tpl');
    //return $this->display(__FILE__ , 'display.tpl');
  }


}