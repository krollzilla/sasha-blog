<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Str;
use Livewire\Component;


class CommentCreate extends Component
{

    public $saveSuccess = false;
    public $comment;
    public $post_id;
    public $post_slug;

    protected $rules = [
        'comment.content' => 'required|min:6',
    ];

    public function mount($post_id, $post_slug){
        $this->comment = new Comment;
        $this->post_id = $post_id;
        $this->post_slug = $post_slug;
    }

    public function saveComment(){
        $this->comment->user_id = -1;
        $this->comment->post_id = $this->post_id;
        $this->comment->save();
        $this->saveSuccess = true;
        $this->updatePage();
    }

    public function updatePage()
    {
        return redirect()->to("post/$this->post_slug");
    }

    public function render()
    {
        return view('livewire.comment-create')
            ->extends('layouts.app')
            ->section('content');
    }
}
