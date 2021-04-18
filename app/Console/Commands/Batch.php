<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Leak;

class Batch extends Command
{
    /**
     * コマンド名
     * @var string
     */
    protected $signature = 'command:delete';

    /**
     * コマンドの説明
     * @var string
     */
    protected $description = '投稿の自動削除';

    /**
     * Create a new command instance.
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 処理内容
     * @return int
     */
    public function handle()
    {
        $day = date('Y/m/d H:i:s',strtotime('-1 month'));
        $oldleaks = Blog::where('created_at','<',$day)->get();
        foreach($oldleaks as $oldleak){
            $oldleak->delete();
        }
    }
}
