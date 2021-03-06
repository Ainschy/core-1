<?php

/*
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2009 - 2019 terminal42 gmbh & Isotope eCommerce Workgroup
 *
 * @link       https://isotopeecommerce.org
 * @license    https://opensource.org/licenses/lgpl-3.0.html
 */

namespace Isotope\Frontend\ProductCollectionAction;

use Isotope\Interfaces\IsotopeProductCollection;

class AddToCartAction extends AbstractButton
{

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'add_to_cart';
    }

    /**
     * {@inheritdoc}
     */
    public function getLabel(IsotopeProductCollection $collection)
    {
        return $GLOBALS['TL_LANG']['MSC']['buttonLabel']['add_all_to_cart'];
    }
}
