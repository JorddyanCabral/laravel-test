<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
Use App\Utils\Calc;

class CalcTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
  public function test_sum_value()

  {

    $calc = new Calc();

    $this->assertEquals(6, $calc->sum_value(1, 5));

  }



  public function test_sub_positive_value()

  {

    $calc = new Calc();

    $this->assertEquals(4, $calc->sub(5, 1));

  }



  public function test_sub_negative_value()

  {

    $calc = new Calc();

    $this->assertEquals(-4, $calc->sub(1, 5));

  }



  public function test_pow()

  {

    $calc = new Calc();

    $this->assertEquals(8, $calc->pow(2, 3));

  }



  public function test_divide()

  {

    $calc = new Calc();

    $this->assertEquals(10, $calc->div(20, 2));

  }



  public function test_fat()

  {

    $calc = new Calc();

    $this->assertEquals(120, $calc->fat(5));

  }



  public function test_fibo()

  {

    $calc = new Calc();

    $this->assertEquals(13, $calc->fibo(8));

  }



  public function test_fibo_another_number()

  {

    $calc = new Calc();

    $this->assertEquals(144, $calc->fibo(13));

  }



  public function test_bigger_number_result_true()

  {

    $calc = new Calc();

    $this->assertEquals(true, $calc->is_bigger(5, 3));

  }



  public function test_bigger_number_result_falses()

  {

    $calc = new Calc();

    $this->assertEquals(false, $calc->is_bigger(15, 20));

  }



  public function test_combination()

  {

    $calc = new Calc();

    $this->assertEquals(252, $calc->combination(10, 5));

  }
}
