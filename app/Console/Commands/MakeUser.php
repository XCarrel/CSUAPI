<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user {initials} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a new user to the database';

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
     * @return int
     */
    public function handle()
    {
        try {
            $nu = new User();
            $nu->initials = $this->argument('initials');
            $nu->firstname = $this->argument('initials');
            $nu->lastname = $this->argument('initials');
            $nu->admin=0;
            $nu->firstconnect=0;
            $nu->password = password_hash($this->argument('password'),PASSWORD_DEFAULT);
            $nu->save();
            echo "User {$this->argument('initials')} created\n";
        } catch (\Exception $e) {
            echo "Error creating user\n({$e->getMessage()})\n";
        }
        return 0;
    }
}
