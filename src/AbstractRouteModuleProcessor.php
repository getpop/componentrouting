<?php
namespace PoP\ModuleRouting;

abstract class AbstractRouteModuleProcessor
{
    /**
     * Function to override
     */
    public function getGroups()
    {
        return array();
    }

    /**
     * Function to override
     */
    public function getModulesVarsPropertiesByNatureAndRoute()
    {
        return array();
    }

    /**
     * Function to override
     */
    public function getModulesVarsPropertiesByNature()
    {
        return array();
    }

    /**
     * Function to override
     */
    public function getModulesVarsProperties()
    {
        return array();
    }
}
