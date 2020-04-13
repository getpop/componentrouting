<?php

declare(strict_types=1);

namespace PoP\ModuleRouting;

interface RouteModuleProcessorManagerInterface
{
    public function add($processor): void;
    public function getProcessors($group = null): array;
    public function getDefaultGroup(): string;
    public function getVars(): array;
    public function getRouteModuleByMostAllmatchingVarsProperties(string $group = null): ?array;
}
