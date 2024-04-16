<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    // public function change(): void
    // {
    // }

    public function up(): void
    {
        $users = $this->table('users');
        $users
            ->addColumn('name', 'string', [
                'limit' => 69,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'limit' => 74,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'limit' => 255,
                'null' => false,
            ])
            ->addTimestamps()
            ->addIndex('email', [
                'unique' => true,
                'name' => 'users_email_unique',
            ])
            ->create();
    }

    public function down(): void
    {
        $this->table('users')->drop()->save();
    }
}
