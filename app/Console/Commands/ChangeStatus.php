<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Complaints;

class ChangeStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'change:status';

    /**p
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will change the status of complaint';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $dt = Carbon::now();
        $complaints = Complaints::where('created_at', '<', $dt->subDays(3))->get();
        if($complaints->count()){
            foreach ($complaints as $complaint){
                $updates = Complaints::find($complaint->id);
                $updates->status = 'over due';
                $updates->save();
            }
        }
    }
}
