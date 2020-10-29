<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalculateRequest;

class ProductController extends Controller
{
    /**
     * @param CalculateRequest $request
     * @return array
     *
     *          **** Read me : ****
     * so the problem of having N matrices and multiplying them is practically variant depending on different situations
     *  Although We have many options to multiply a chain of matrices because matrix multiplication
     * is associative, depending on how we
     *  parenthesize the product the cost of operations will vary dramatically . For example if we have for matrices
     * ((A(BC))D) will cost 26000 operations while (((AB)C)D) will cost 30000 operations
     *
     * Unfortunately i  haven't been able to solve the general problem but after hours of research i found out that for
     * 2 matrices (or probably more ) the algorithm we should pursue is recursion , or in some cases it's better to
     * solve the problem with dynamic programming ( using memoization with it ) .
     *
     * I'm so sorry that i couldn't solve the problem in hand but i can assure you i will do more research about it and
     * if you agree to hire me , i will definitely be ready to take any tasks that comes my way .
     *
     *
     *
     */


    public function calculate(CalculateRequest $request)
    {
        $inputs = $request['array'];
        $first = $inputs[0];
        $second = $inputs[1];
        $result = [];

        if ($inputs){

        for ($i = 0; $i < count($first); $i++) {
            for ($j = 0; $j < count($second[0]); $j++) {
                $result[$i][$j] = 0;
                for ($k = 0; $k < count($second); $k++) {
                    $result[$i][$j] += $first[$i][$k] * $second[$k][$j];
                }
            }
        }}
        else{
            return "The input is empty";
        }
        return $result;
    }

}
