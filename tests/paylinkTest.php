<?php
namespace Tests;
use App\Controller\TestOneController;
use App\Security\FizzBuzz;
use App\Controller\TestTwoController;
use App\Security\Fibonacci;
use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase
{
    public function testFizzBuzz() {
        $data = array (1, 2, "Fizz", 4, "Buzz", "Fizz", 7, 8, "Fizz", "Buzz", 11, "Fizz", 13, 14, "FizzBuzz", 16, 17, "Fizz", 19, "Buzz");
        $fizzBuzz = new FizzBuzz();
        $this->assertSame($data, $fizzBuzz->rangeOfTheLoop());
    }
    
    public function testFibonacciForFive() {
        $fibonacci = new Fibonacci();
        $value = 5;
        $this->assertSame($value, $fibonacci->recursion(5));
    }
    
    public function testFibonacciForTen() {
        $fibonacci = new Fibonacci();
        $value = 55;
        $this->assertSame($value, $fibonacci->recursion(10));
    }
    
    public function testFibonacciForOne() {
        $fibonacci = new Fibonacci();
        $value = 1;
        $this->assertSame($value, $fibonacci->recursion(1));
    }
}
