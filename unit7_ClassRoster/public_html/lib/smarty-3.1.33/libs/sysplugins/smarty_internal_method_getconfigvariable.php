<?php

/**
 * Smarty Method GetConfigVariable
 *
 * Smarty::getConfigVariable() method
 *
 * @package    Smarty
 * @subpackage PluginsInternal
 * @author     Uwe Tews
 */
class Smarty_Internal_Method_GetConfigVariable
{
    /**
     * Valid for all objects
     *
     * @var int
     */
    public $objMap = 7;

    /**
     * gets  a configs variable value
     *
     * @param \Smarty|\Smarty_Internal_Data|\Smarty_Internal_Template $data
     * @param string                                                  $varName the name of the configs variable
     * @param bool                                                    $errorEnable
     *
     * @return null|string  the value of the configs variable
     */
    public function getConfigVariable(Smarty_Internal_Data $data, $varName = null, $errorEnable = true)
    {
        return $data->ext->configLoad->_getConfigVariable($data, $varName, $errorEnable);
    }
}
