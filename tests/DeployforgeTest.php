<?php
/**
 * Tests for DeployForge
 */

use PHPUnit\Framework\TestCase;
use Deployforge\Deployforge;

class DeployforgeTest extends TestCase {
    private Deployforge $instance;

    protected function setUp(): void {
        $this->instance = new Deployforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Deployforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
