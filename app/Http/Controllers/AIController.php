<?php

namespace App\Http\Controllers;

use App\Services\OpenAIService;
use Illuminate\Http\Request;

class AIController extends Controller
{
    protected $openAIService;

    public function __construct(OpenAIService $openAIService)
    {
        $this->openAIService = $openAIService;
    }

    public function generateResponse(Request $request)
    {
        // Get the user prompt from the request
        $prompt = $request->input('prompt');

        // Call the service to generate text
        $response = $this->openAIService->generateText($prompt);

        // Return the response as JSON
        return response()->json(['response' => $response]);
    }
}