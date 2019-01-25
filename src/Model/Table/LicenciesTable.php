<?php // src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class LicenciesTable extends Table
{

    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

}

?>