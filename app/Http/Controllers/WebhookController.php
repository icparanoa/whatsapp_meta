<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
        // Verifica se o webhook é válido (pode variar de acordo com as necessidades)
        // Aqui você pode validar o token fornecido pelo WhatsApp para garantir que a solicitação seja autêntica
        // Certifique-se de substituir 'your_webhook_token' pelo token fornecido pelo WhatsApp
        if ($request->header('X-WH-API-Token') !== 'EAAL8J9te8vUBO9b04XU6tyl3kqt2CgtSZAVyWnluyNoW1kZCDeHwr0HG9xzqZBYcYaCHsGUgxMWZBzTuPZAS9MwqyZCmEfKl8FoPtZAEEz9rII97YiWZBRi3nxWGBvAGtLWOZCZCgPhh71ZBNKZAPADKc2KnBZCgY8EHDrE6m24tUESd6xFphdJnq5bMz8p8w0ZAc8') {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Lógica para manipular os eventos recebidos do WhatsApp Business API
        $payload = $request->all();

        // Aqui você pode processar o $payload conforme necessário

        // Responda ao webhook com sucesso
        return response()->json(['success' => true]);
    }
}
