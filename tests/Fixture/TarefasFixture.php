<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TarefasFixture
 */
class TarefasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'tarefa' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-12-14',
                'modified' => '2022-12-14',
            ],
        ];
        parent::init();
    }
}
