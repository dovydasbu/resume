<?php

namespace App\Console\Commands;

use App\Models\Page;
use Illuminate\Console\Command;

class ShowPageStats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stats:pages {--period=month}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show page stats';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        foreach (Page::all() as $page) {
            $this->info("{$page->slug}: " . $this->getVisits($page));
        }
    }

    private function getVisits(Page $page)
    {
        if ($this->option('period')) {
            return visits($page)->period(
                $this->option('period')
            )->count();
        }
    }
}
