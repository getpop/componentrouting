<?php
namespace PoP\ModuleRouting;

abstract class AbstractEntryRouteModuleProcessor extends AbstractRouteModuleProcessor
{
    public function getGroups()
    {
        return [
            ModuleRoutingGroups::ENTRYMODULE,
        ];
    }
}
