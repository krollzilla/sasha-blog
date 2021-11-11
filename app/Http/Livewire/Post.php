<?php

namespace App\Http\Livewire;

use App\Models\Post as BlogPost;
use App\Models\Comment as BlogComment;
use Livewire\Component;

class Post extends Component
{
    public $post;
    public $comments;

    public function mount($slug){
        $this->post = BlogPost::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.post')
            ->extends('layouts.app')
            ->section('content');
    }
}
