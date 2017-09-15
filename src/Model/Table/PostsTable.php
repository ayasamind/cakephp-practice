<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

	class PostsTable extends Table
	{
		public function initialize(array $config)
		{
		  $this->addBehavior('Timestamp');
          $this->hasMany('Comments',[
              'dependent' => true
              ]);
        }

        public function validationdefault(Validator $validator)
        {
            $validator
                ->notEmpty('title')
                ->requirePresence('title')
                ->notEmpty('body')
                ->requirePresence('body')
                ->add('body', [
                    'length' => [
                        'rule' => ['minlength', 19],
                        'message' => 'body length must be 10+'
                     ]
                 ]);
           return $validator; 

        }
	}
