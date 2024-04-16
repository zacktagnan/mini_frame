<?php

declare(strict_types=1);

use Carbon\Carbon;

use Phinx\Seed\AbstractSeed;
use function Symfony\Component\Clock\now;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Admin Test',
                'email' => 'admin@test.es',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                // 'created_at' => date('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->subDays(11)->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'User Test',
                'email' => 'user@test.es',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s'),
                // 'created_at' => Carbon::now()->addDays(11)->format('Y-m-d H:i:s'),
            ],
        ];

        $users = $this->table('users');
        $users->insert($data)->saveData();
    }
}
