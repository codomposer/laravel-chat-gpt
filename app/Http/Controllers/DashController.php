<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Capevace\GPT\GPTService;
use Capevace\GPT\Support\GPTException;
use Exception;

class DashController extends Controller
{
    protected GPTService $gpt;
    public function __construct(GPTService $gpt)
    {
        $this->gpt = $gpt;
    }

    public function getIndex()
    {
        return view('chatgpt',  ['name' => 'James']);
    }

    public function getChatGpt(Request $request)
    {
        $prompt = $request->input('prompt');
        $ok = true;
        try {
            $response = $this->gpt->generate($prompt);
            return response()->json($response->all());
        } catch (GPTException $e) {
            // Exception will be thrown, as the response text is ""
            return $e;
        } catch (Exception $e) {
            // Catch connectivity errors etc.
            return $e;
        }
    }
}
