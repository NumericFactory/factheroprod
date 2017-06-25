<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function firstArticle() {
    	return view('blog.single', ['author'=>'Frédéric Lossignol', 'title'=>"Facturation Autoentrepreneurs, aucune obligation de vous équiper d'un logiciel certifié", 'date'=> '16/06/2017']);
    }
}
