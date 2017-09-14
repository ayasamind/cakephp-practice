<?php

// /posts/index
// controller/action/options

namespace App\Controller;

class PostsController extends AppController
{
	public function index()
	{
		//$posts = $this->Posts->find('all');
		$this->viewBuilder()->layout('mylayout');
		$posts = $this->Posts->find('all');
		//->order(['title' => 'DESC' ])
		//->limit(2)
		//->where(['title like' => '%3']);
		$this->set('posts', $posts);
		//$this->set(compact('posts'));

	}
}

