<?php
/**
 * Created by PhpStorm.
 * User: georgimorozov
 * Date: 7/30/16
 * Time: 5:45 PM
 */
class Storefront_Form_Catalog_Product_Add extends SF_Form_Abstract
{
    public function init()
    {
        //add a path to the custom validators and filters
        $this->addElementPrefixPath(
            'Storefront_Validate',
            APPLICATION_PATH . '/modules/storefront/models/validate/',
            'validate'
        );

        $this->addElementPrefixPath(
            'Storefront_Filter',
            APPLICATION_PATH . '/modules/storefront/models/filter',
            'filter'
        );

        $this->setMethod('post');
        $this->setAction('');

        //get category selection
        $form = new Storefront_Form_Catalog_Product_Select(
            array('model' => $this->getModel())
        );

        $element = $form->getElement('categoryId');
    }
}