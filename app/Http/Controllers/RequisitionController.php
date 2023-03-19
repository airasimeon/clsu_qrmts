<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requisition;
use TCPDF;

class RequisitionController extends Controller
{
    public function index()
    {
        $requisitions = Requisition::all();
        return view('requisitions', compact('requisitions'));
    }

    public function create()
    {
        return view('requisition-create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'entity_name' => 'required',
            'fund_cluster' => 'required',
            'program' => 'required',
            'office_responsibility_center_code' => 'required',
            'ris_number' => 'required',
            'requisitions' => 'required|integer',
            'stock_available' => 'required|integer',
            'issues' => 'required|integer'
        ]);

        Requisition::create($data);

        return redirect()->route('requisitions.index')->with('success', 'Requisition created successfully!');
    }

    public function edit($id)
    {
        $requisition = Requisition::findOrFail($id);
        return view('requisition-edit', compact('requisition'));
    }

    public function update(Request $request, $id)
    {
        $requisition = Requisition::findOrFail($id);
 
        $data = $request->validate([
            'entity_name' => 'required',
            'fund_cluster' => 'required',
            'program' => 'required',
            'office_responsibility_center_code' => 'required',
            'ris_number' => 'required',
            'requisitions' => 'required|integer',
            'stock_available' => 'required|integer',
            'issues' => 'required|integer'
        ]);
 
        $requisition->update($data);
 
        return redirect()->route('requisitions.index')->with('success', 'Requisition updated successfully!');
    }
 
    public function destroy($id)
    {
        $requisition = Requisition::findOrFail($id);
        $requisition->delete();
        return redirect()->route('requisitions.index')->with('success', 'Requisition deleted successfully!');
    }
    
    public function show($id)
{
    $requisition = Requisition::findOrFail($id);

    return view('requisitions.show', compact('requisition'));
}
 
public function generatePDF()
{
    $requisitions = Requisition::all();

    $pdf = new TCPDF();
    $pdf->AddPage();

    $html = view('requisitions-pdf', compact('requisitions'))->render();
    $pdf->writeHTML($html);

    $pdfFilePath = storage_path('app/requisitions.pdf');
    $pdf->Output($pdfFilePath, 'F');

    // Debugging statements
    echo "PDF file generated at: " . $pdfFilePath . "<br>";
    echo "File size: " . filesize($pdfFilePath) . "<br>";
    echo "Mime type: " . mime_content_type($pdfFilePath) . "<br>";
    exit();
}
}