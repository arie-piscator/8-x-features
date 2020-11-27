<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SplitCollectionTest extends TestCase
{
    /** @test */
    public function it_groups_a_collection_with_split()
    {
        $collection = collect([1, 2, 3, 4, 5, 6, 7]);

        $groups = $collection->split(3);

        $this->assertEquals(
            [[1, 2, 3], [4, 5], [6,7]],
            $groups->toArray()
        );
    }

    /** @test */
    public function it_groups_a_collection_with_split_in()
    {
        $collection = collect([1, 2, 3, 4, 5, 6, 7]);

        $groups = $collection->splitIn(3);

        // The original keys are retained with splitOn
        $this->assertEquals(
            [[0 => 1, 1 => 2, 2 => 3], [3 => 4, 4 => 5, 5 => 6], [6 => 7]],
            $groups->toArray()
        );
    }
}
