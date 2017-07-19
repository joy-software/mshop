<?php 

if (!defined('_PS_VERSION_'))
{
  exit;
}

class GestionFournisseur extends Module
{
	public function __construct()
  {
    $this->name = 'gestionfournisseur';
    $this->tab = 'front_office_features';
    $this->version = '1.1.0';
    $this->author = 'Hubert Noyessie - Joy Ndjama';
    $this->need_instance = 1;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    $this->bootstrap = true;

    parent::__construct();

    $this->displayName = $this->l('Gestion des Fournisseur');
    $this->description = $this->l('Ce module donner la possibilité aux fournisseurs de s\'inscrire sur la plateforme directement depuis le frontend. les politiques de gestion sont gérés par ce module');
    //$this->description = 'Make a backup of your database';
    //$this->displayName = 'Database Backup';

    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
  }

  public function uninstall(){
  	if (
        !parent::uninstall()
      )
      return false;
  	return true;
  }

  public function install(){
    if (Shop::isFeatureActive())
      Shop::setContext(Shop::CONTEXT_ALL);

  	if (
  			!parent::install() ||
    		!$this->registerHook('displayHeader') ||
    		!$this->registerHook('displayNav') ||
        !Configuration::updateValue('PROFILE', 'Fournisseur')||
        !Configuration::updateValue('ADMIN_EMAIL' , 'hubertnoyessie@gmail.com')
  		)
    	return false;
  	return true;
  }

  public function hookDisplayHeader()
	{
	  $this->context->controller->addCSS($this->_path.'css/gestionfournisseur.css', 'all');
       // $this->context->controller->addCSS($this->bootstrap,true);

    }

  public function toto(){

  }

  public function getContent(){
    	$output = null;
   
      if (Tools::isSubmit('submit'.$this->name))
      {
          $my_module_name = strval(Tools::getValue('PROFILE'));
          $admin_email = strval(Tools::getValue('ADMIN_EMAIL'));
          if (!$my_module_name
            || empty($my_module_name)
            || !Validate::isGenericName($my_module_name)
            || !Validata::isEmail($admin_email))
              $output .= $this->displayError($this->l('Valeur invalide'));
          else
          {
              Configuration::updateValue('PROFILE', $my_module_name);
              Configuration::updateValue('ADMIN_EMAIL', $admin_email);
              
              $output .= $this->displayConfirmation($this->l('Paramètres mis à jour'));
          }
      }
      
      return $output . $this->displayF();
  }

  public function displayF(){
    $default_lang = (int)Configuration::get("PS_LANG_DEFAULT");
    $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

    $fields_form[0]['form'] = array(
        'legend' => array(
            'title' => $this->l('Settings'),
        ),
        'input' => array(
            array(
                'type' => 'text',
                'label' => $this->l('Configuration value'),
                'name' => 'PROFILE',
                'size' => 20,
                'required' => true
            )
        ),
        'input' => array(
            array(
                'type' => 'text',
                'label' => "Admin Email",
                'name' => 'ADMIN_EMAIL',
                'size' => 20,
                'required' => true
            )
        ),
        'submit' => array(
            'title' => $this->l('Save'),
            'class' => 'btn btn-default pull-right'
        )
    );

    $helper = new HelperForm();
     
    // Module, token and currentIndex
    $helper->module = $this;
    $helper->name_controller = $this->name;
    $helper->token = Tools::getAdminTokenLite('AdminModules');
    $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
     
    // Language
    $helper->default_form_language = $default_lang;
    $helper->allow_employee_form_lang = $default_lang;
     
    // Title and toolbar
    $helper->title = $this->displayName;
    $helper->show_toolbar = true;        // false -> remove toolbar
    $helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
    $helper->submit_action = 'submit'.$this->name;
    $helper->toolbar_btn = array(
        'save' =>
        array(
            'desc' => $this->l('Save'),
            'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
            '&token='.Tools::getAdminTokenLite('AdminModules'),
        ),
        'back' => array(
            'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
            'desc' => $this->l('Back to list')
        )
    );
     
    // Load current value
    $helper->fields_value['PROFILE'] = Configuration::get('PROFILE');
    $helper->fields_value['ADMIN_EMAIL'] = Configuration::get('ADMIN_EMAIL');
     
    return $helper->generateForm($fields_form);
  }

  
  public function hookDisplayNav($params){
  		$this->context->smarty->assign(
	      array(
            'my_module_name' => $this->name,
	          'link_provider_registration' => $this->context->link->getModuleLink($this->name,'display')
	      )
	  );
	  return $this->display(__FILE__, $this->name.'.tpl');
  }

  
  
  
}
