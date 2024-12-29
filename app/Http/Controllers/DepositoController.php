<?php

namespace App\Http\Controllers;

use App\Models\Deposito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DepositoController extends Controller
{
    public function handleWebhook(Request $request)
    {
        try {
            $payload = $request->all();

            // Validasi payload
            if (!isset($payload['mode']) || !isset($payload['data'])) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid payload format'
                ], 400);
            }

            $mode = $payload['mode'];
            $data = $payload['data'];

            switch ($mode) {
                case 'create':
                    $transaksi = Deposito::create($data);
                    break;

                case 'update':
                    $transaksi = Deposito::findOrFail($data['id']);
                    $transaksi->update($data);
                    break;

                case 'delete':
                    $transaksi = Deposito::findOrFail($data['id']);
                    $transaksi->delete();
                    break;

                default:
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Invalid mode'
                    ], 400);
            }

            return response()->json([
                'status_code' => 200,
                'mode' => $mode,
                'data' => $transaksi
            ]);

        } catch (\Exception $e) {
            Log::error('Webhook error: ' . $e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
