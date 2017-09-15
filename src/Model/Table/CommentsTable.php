<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cale\Validation\Validator;

class CommentsTable extends table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Posts');
    }

    public function validation(Validator $validator)
    {
        $validator
            ->notEmpty('body')
            ->requirePresence('body');
        return $validator;
    }
}
    
