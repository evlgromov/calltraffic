<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransformationRequest;
use App\Services\TransformationService;

class TransformationController extends Controller
{
    private $transformationService;

    public function __construct(TransformationService $transformationService)
    {
        $this->transformationService = $transformationService;
    }

    public function getNumberFromString(TransformationRequest $request)
    {
        $data = $request->validated();
        $result = $this->transformationService->transformStringToNumber($data['string']);

        return response()->json([
            'status' => true,
            'result' => $result
        ], 200);
    }
}
