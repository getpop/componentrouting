<?php

declare(strict_types=1);

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
