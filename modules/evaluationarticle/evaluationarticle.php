<?php 

if (!defined('_PS_VERSION_'))
{
  exit;
}

class EvaluationArticle extends Module{
  public function __construct(){
    $this->name = 'evaluationarticle';
    $this->tab = 'front_office_features';
    $this->version = '1.0.0';
    $this->author = "Hubert Noyessie";
    $this->need_instance=1;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    $this->bootstrap = true;

    parent::__construct();

    $this->displayName = $this->l('Evaluation des articles');
    $this->description = $this->l('ce module donne la possibilité aux utilisateurs d\'évaluer les article');

    $this->confirmUninstall  = $this->l("voulez vous vraiment suppriemr cet article");

    require_once( _PS_MODULE_DIR_ . DIRECTORY_SEPARATOR . $this->name . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'Vote.php' );


  }

  

  public function uninstall(){
    $this->deleteDB();
    if (
        !parent::uninstall()
      )
      return false;
    return true;
  }


  public function install(){
    $this->createDB();
    if (Shop::isFeatureActive())
      Shop::setContext(Shop::CONTEXT_ALL);

    if (
        !parent::install() ||
        !$this->registerHook('ExtraLeft')
      )
      return false;
    return true;
  }

  public function createDB(){
    Db::getInstance()->Execute('
       CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'evaluationarticle` (
        `id_evaluation` INT PRIMARY KEY AUTO_INCREMENT,
        `id_product` INT UNSIGNED NOT NULL,
        `id_customer` INT UNSIGNED NOT NULL,
        `vote` INT UNSIGNED NOT NULL
       );');
  }

  public function deleteDB(){
    Db::getInstance()->Execute('DROP TABLE IF EXISTS`'._DB_PREFIX_.'evaluationarticle`');
  }




  function hookExtraLeft($params){
    $product = $this->context->controller->getProduct();
    $customer = $this->context->customer;
    $votes = Vote::getVote($product->id);
    $vote_customer = Vote::getVoteByCustomer($product->id , $customer->id);
    $voted = count($vote_customer)>0 ? true:false;

    $nombre_vote = count($votes);
    $etoile =0;
    $etoile1=0;
    $etoile2=0;
    $etoile3=0;
    $etoile4=0;
    $etoile5=0;
    
    foreach($votes as $key=>$vote){
      $etoile+=$vote['vote'];
      switch ($vote['vote']) {
        case 1:
          $etoile1++;
          break;
        case 2:
          $etoile2++;
          break;
        case 3:
          $etoile3++;
          break;
        case 4:
          $etoile4++;
          break;
        case 5:
          $etoile5++;
          break;
      }
    }
    if($nombre_vote >0){
      $etoile /= $nombre_vote;
    //$etoile = round( $etoile , 1, PHP_ROUND_HALF_DOWN);
    
    $etoile = number_format( round($etoile * 2)/2, 1);
    
    }

    
    $default_customer_vote = new Vote();
    $default_customer_vote->vote = 0;

    $this->context->smarty->assign(
        array(
            'product' => $product->id,
            'customer'=>$customer->id,
            'voted'=>$voted,
            'customer_vote'=>$voted ? $vote_customer[0]:null,
            'etoiles' => $nombre_vote,
            'etoile' => $etoile,
            'etoile1' => $etoile1,
            'etoile2' => $etoile2,
            'etoile3' => $etoile3,
            'etoile4' => $etoile4,
            'etoile5' => $etoile5,
            'link_vote' => $this->context->link->getModuleLink($this->name , 'vote')
        )
    );
    ///ddd($params);
    $this->context->controller->addCSS($this->_path. 'css/evaluation.css');
    $this->context->controller->addCSS($this->_path. 'css/star-rating-svg.css');
    $this->context->controller->addJS($this->_path. 'js/jquery.star-rating-svg.min.js');
    $this->context->controller->addJS($this->_path. 'js/script.js');
    return $this->display(__FILE__, $this->name.'.tpl');
  }
}
