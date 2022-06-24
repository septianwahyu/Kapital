<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalPelamar = Pelamar::all()->count();
        $totalPelamarAccepted = Pelamar::where('rekomendasi', 'Diterima')->count();
        $totalPelamarRejected = Pelamar::where('rekomendasi', 'Tidak Diterima')->count();
        $totalDepartment = Pelamar::distinct()->count('departemen');

        $data = array(
            'total_pelamar' => $totalPelamar,
            'total_pelamar_accepted' => $totalPelamarAccepted,
            'total_pelamar_rejected' => $totalPelamarRejected,
            'total_department' => $totalDepartment,
        );

        return view('index')->with(compact('data', $data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getDepartmentChart()
    {
        // get all data
        $data = Pelamar::all();

        // filter by department
        $dataByDepartment = $data->groupBy('departemen');

        foreach ($dataByDepartment as $key => $item) {
            $dataByDepartment[$key] = $item->groupBy('rekomendasi');

            // filter and count by recommendation (accepted or rejected)
            foreach ($dataByDepartment[$key] as $recKey => $recItem) {
                $dataByDepartment[$key][$recKey] = $recItem->count();
            }
        }

        return response()->json($dataByDepartment);
    }

    public function getMonthChart()
    {
        $data = Pelamar::select('rekomendasi', DB::raw("DATE_FORMAT(created_at, '%m-%Y') new_date"), DB::raw('YEAR(created_at) year, MONTH(created_at) month'))->get();

        $dataByYear = $data->groupBy('year');

        foreach ($dataByYear as $key => $item) {
            $dataByYear[$key] = $item->groupBy('month');

            foreach ($dataByYear[$key] as $monthKey => $monthItem) {
                $dataByYear[$key][$monthKey] = $monthItem->groupBy('rekomendasi');

                foreach ($dataByYear[$key][$monthKey] as $recKey => $recItem) {
                    $dataByYear[$key][$monthKey][$recKey] = $recItem->count();
                }
            }
        }

        return response()->json($dataByYear);
    }
}
