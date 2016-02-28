<?php
require_once 'Arithmetic.php';
class ArithmeticTest extends PHPUnit_Framework_TestCase {
    /** 
     * @var Arithmetic 
     */
    protected $object;
 
    /** 
     * setUpは各テストメソッドが実行される前に実行する 
     */
    protected function setUp() { 
        // テストするオブジェクトを生成する
        $this->object = new Arithmetic();
    }
 
    /**
     * 足し算関数の検証
     */
    public function testAdd() {
        // 引数に3,5を渡すと8が返ってくることを確認する
        $this->assertEquals(8, $this->object->add(3, 5));
        // 引数に15,30を渡すと45が返ってくることを確認する
        $this->assertEquals(45, $this->object->add(15, 30));
    }
 
    /**
     * 引き算関数の検証
     */
    public function testSubtract() {
        // 引数に10,3を渡すと7が返ってくることを確認する
        $this->assertEquals(7, $this->object->subtract(10, 3));
        // 引数に3,9を渡すと-6が返ってくることを確認する
        $this->assertEquals(-6, $this->object->subtract(3, 9));
    }
 
}
