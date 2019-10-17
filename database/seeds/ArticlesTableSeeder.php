<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();
        Article::create([
            'article_photo' => '/img/blog/blog-2.jpg',
            'article_title' => 'Article 1',
            'article_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
            'published' => true,
            'author' => 1,
            'categorie' => 1
        ]);

        Article::create([
            'article_photo' => '/img/blog/blog-1.jpg',
            'article_title' => 'Article 2',
            'article_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
            'published' => true,
            'author' => 1,
            'categorie' => 2
        ]);

        Article::create([
            'article_photo' => '/img/blog/blog-3.jpg',
            'article_title' => 'Article 3',
            'article_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
            'published' => true,
            'author' => 1,
            'categorie' => 3
        ]);

        Article::create([
            'article_photo' => '/img/blog/blog-1.jpg',
            'article_title' => 'Article 4',
            'article_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
            'published' => true,
            'author' => 1,
            'categorie' => 4
        ]);

        Article::create([
            'article_photo' => '/img/blog/blog-2.jpg',
            'article_title' => 'Article 5',
            'article_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
            'published' => true,
            'author' => 1,
            'categorie' => 5
        ]);

        Article::create([
            'article_photo' => '/img/blog/blog-3.jpg',
            'article_title' => 'Article 6',
            'article_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
            'published' => true,
            'author' => 1,
            'categorie' => 6
        ]);
    }
}
