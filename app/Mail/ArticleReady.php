<?php

namespace App\Mail;

use App\Article;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ArticleReady extends Mailable
{
    use Queueable, SerializesModels;
    public $article;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Article $article, User $user)
    {
        $this->article = $article;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($user->name)
                    ->markdown('articleReady');
    }
}
