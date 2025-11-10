<?php

namespace Tests\Feature\Http\Controllers;

use App\Math;
use DivisionByZeroError;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class MathControllerTest extends TestCase
{

    private static function getValidArithmeticParams(float | int $a, float | int $b): array
    {
        return array_map(fn($op) => [$op, $a, $b], Math::OPERATIONS);
    }

    public static function wrongArithmeticOperationsProvider(): array
    {
        return [
            'wrong operator' => [
                fake()->word, rand(), rand()
            ],
            'wrong first operand' => [
                Math::getRandomOperator(), fake()->randomLetter, rand()
            ],
            'wrong second operand' => [
                Math::getRandomOperator(), rand(), fake()->randomLetter
            ],
            'wrong first operand and second operand' => [
                Math::getRandomOperator(), fake()->randomLetter, fake()->randomLetter
            ],
            'wrong operator, first operand and second operand' => [
                fake()->word, fake()->randomLetter, fake()->randomLetter
            ]
        ];
    }

    public static function validArithmeticOperationsProvider(): array
    {
        return [
            ...(self::getValidArithmeticParams(0, 0)),
            ...(self::getValidArithmeticParams(rand(), rand())),
            ...(self::getValidArithmeticParams(rand(0, 9), rand())),
            ...(self::getValidArithmeticParams(rand(), rand(0, 9))),
            ...(self::getValidArithmeticParams(rand(0, 9), rand(0, 9))),
            ...(self::getValidArithmeticParams(rand(10, 1999), rand(10, 1999)))
        ];
    }

    #[DataProvider('wrongArithmeticOperationsProvider')]
    public function test_application_do_not_operate_on_non_valid_arithmetic_operators_nor_non_valid_operands(string $op, string | int | float $a, string | int | float $b): void
    {
        $this->get("/$op/$a/$b")->assertNotFound();
    }

    #[DataProvider('validArithmeticOperationsProvider')]
    public function test_application_operate_on_valid_arithmetic_operators_and_valid_operands(string $op, string | int | float $a, string | int | float $b): void
    {
        $result   = (string) $op($a, $b);
        $response = $this->get("/$op/$a/$b");

        if ($op === 'div' && $b === 0) {
            $this->expectException(DivisionByZeroError::class);
        } else {
            $response->assertOk()
                ->assertSeeText($result);
        }
    }
}
