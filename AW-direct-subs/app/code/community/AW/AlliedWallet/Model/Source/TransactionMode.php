<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category   design_default
 * @package    AW_AlliedWallet
 * @copyright  Copyright (c) 2008 Allied Wallet (http://www.alliedwallet.com)
 */

class AW_AlliedWallet_Model_Source_TransactionMode
{
    public function toOptionArray()
    {
        $options =  array();       ;
        foreach (Mage::getSingleton('alliedwallet/config')->getTransactionModes() as $code => $name) {
            $options[] = array(
            	   'value' => $code,
            	   'label' => $name
            );
        }

        return $options;
    }
}