<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// Endpoint de Healthcheck
Route::get('/', function () {
    try {
        // Tenta se conectar ao banco de dados executando uma consulta simples
        DB::connection()->getPdo();
        return response()->json(['status' => 'OK', 'database' => 'Connected'], 200);
    } catch (\Exception $e) {
        // Caso haja erro na conexão com o banco
        return response()->json(['status' => 'Error', 'database' => 'Not Connected', 'message' => $e->getMessage()], 500);
    }
});
