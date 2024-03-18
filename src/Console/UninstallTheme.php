<?php

namespace Insyht\LarvelousSkeletonTheme\Console;

use Illuminate\Console\Command;

class UninstallTheme extends Command
{
    protected $hidden = true;
    protected $signature = 'insyht-larvelous-skeleton-theme:uninstall';
    protected $description = 'Uninstall the Larvelous Skeleton Theme plugin';

    public function handle()
    {
        $this->info('Uninstalling Larvelous Skeleton Theme plugin...');

        $this->info('Uninstalled Larvelous Skeleton Theme plugin');
    }
}
