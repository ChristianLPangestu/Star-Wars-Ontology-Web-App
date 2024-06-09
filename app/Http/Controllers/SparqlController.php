<?php

namespace App\Http\Controllers;

use EasyRdf\Sparql\Client;
use Illuminate\Http\Request;

class SparqlController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $results = [];

        if ($query) {
            try {
                $client = new Client('http://localhost:7200/repositories/1'); 
                \Log::info('Executing SPARQL query: ' . $query);
                $result = $client->query($query);

                foreach ($result as $row) {
                    $rowData = [];
                    foreach ($row as $variable => $value) {
                        if ($value instanceof \EasyRdf\Literal) {
                            $rowData[$variable] = $value->getValue();
                        } else {
                            $rowData[$variable] = (string) $value;
                        }
                    }
                    $results[] = $rowData;
                }
            } catch (\Exception $e) {
                \Log::error('SPARQL query failed: ' . $e->getMessage());
                return response()->json(['error' => 'SPARQL query failed'], 500);
            }
        }

        return view('sparql', ['results' => $results]);
    }
}
