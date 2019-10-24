<?php
namespace PoP\ModuleRouting;

interface RouteModuleProcessorManagerInterface
{
    public function add($processor);
    public function getProcessors($group = null);
    public function getDefaultGroup();
    public function getVars();
    public function getRouteModuleByMostAllmatchingVarsProperties(string $group = null): ?array;
}

