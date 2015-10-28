<?php
/**
 * Studioforty9_Pubble
 *
 * @category  Studioforty9
 * @package   Studioforty9_Pubble
 * @author    StudioForty9 <info@studioforty9.com>
 * @copyright 2015 StudioForty9 (http://www.studioforty9.com)
 * @version   1.0.0
 */

/**
 * Studioforty9_Pubble_Model_Source_Method
 *
 * @category   Studioforty9
 * @package    Studioforty9_Pubble
 * @subpackage Model
 */
class Studioforty9_Pubble_Model_Source_Method
{
    /**
     * Provide the methods as options to the select box.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            Studioforty9_Pubble_Helper_Data::METHOD_COPYPASTE   => $this->_getHelper()->__('Copy & Paste'),
            Studioforty9_Pubble_Helper_Data::METHOD_CREDENTIALS => $this->_getHelper()->__('Credentials'),
        );
    }
    
    /**
     * Get an instance of the Pubble Data helper.
     *
     * @return Studioforty9_Pubble_Helper_Data
     */
    private function _getHelper()
    {
        return Mage::helper('studioforty9_pubble');
    }
}
