<?php

class Vote extends ObjectModel{
	public $id_product;

	public $id_customer;

	public $vote;

	/**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'evaluationarticle',
        'primary' => 'id_evaluation',
        'fields' => array(
        	'id_product' =>        array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
        	'id_customer' =>        array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'vote' =>            array('type' => self::TYPE_INT, 'validate' => 'isInt')
        ),
    );

    public static function getVotes(){
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT * FROM `'._DB_PREFIX_.'evaluationarticle`;'
        );
    }

    public static function getVote($product_id){
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT * FROM `'._DB_PREFIX_.'evaluationarticle` WHERE id_product='.$product_id.';'
        );
    }

    public static function getVoteByCustomer($product_id , $customer_id){
        $customer_id = isset($customer_id) ? $customer_id:0;
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT * FROM `'._DB_PREFIX_.'evaluationarticle` WHERE id_product='.$product_id.' AND id_customer='.$customer_id.';'
        );
    }
}