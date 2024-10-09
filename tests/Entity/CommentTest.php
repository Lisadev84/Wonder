<?php

namespace App\Tests\Entity;

use App\Entity\Comment;
use PHPUnit\Framework\TestCase;

class CommentTest extends TestCase
{

/**
 * Given - Comment entity is instantiated
 * when - I set content with at least 50 characters
 * Then - an error must be thrown
*/
   public function testShouldThrowErrorWhenContentContainsLessThan50Characters()
    {
       $comment = new Comment(1);
       $this->expectException(\Exception::class);
        $comment->setContent('azerty');
    }
}
