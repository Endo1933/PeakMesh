<?php
/**
 * Tests for PeakMesh
 */

use PHPUnit\Framework\TestCase;
use Peakmesh\Peakmesh;

class PeakmeshTest extends TestCase {
    private Peakmesh $instance;

    protected function setUp(): void {
        $this->instance = new Peakmesh(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Peakmesh::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
