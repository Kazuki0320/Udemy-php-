<?php

namespace Tests\Feature\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Collection;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    function userリレーションを返す()
    {
        $post = Post::factory()->create();

        $this->assertInstanceOf(User::class, $post->user);
    }

    /**
     * @test
     */
    function commentsリレーションのテスト()
    {
        $post = Post::factory()->create();

        $this->assertInstanceOf(Collection::class, $post->comments);
    }

    /**
     * @test
     */
    function ブログの公開・非公開のscope()
    {
        $post1 = Post::factory()->closed()->create();
        $post2 = Post::factory()->create();

        $posts = Post::onlyOpen()->get();

        $this->assertFalse($posts->contains($post1));
        $this->assertTrue($posts->contains($post2));
    }

}
