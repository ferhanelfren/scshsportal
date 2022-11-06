<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PDFController extends Controller
{
    public function generatePDF( Request $request)
    {


        $pdf = new Dompdf();
        $pdf=PDF::loadView('generatedPDF.generatedPDFform',
        [
            'school_year_pass' => $request->input("school_year"),
            'grade_level_pass' => $request->input("grade_level"),
            'lrn_stat_pass' => $request->input("lrn_stat"),
            'balikaral_stat_pass' => $request->input("balikaral_stat"),
            'grade_level_pass' => $request->input("grade_level"),
            'student_lrn_pass' => $request->input("student_lrn"),
            'student_psa_pass' => $request->input("psa_number"),

            'fname_pass' => $request->input("fname"),
            'lname_pass' => $request->input("lname"),
            'mdname_pass' => $request->input("mdname"),
            'extname_pass' => $request->input("extname"),

            'bdate_pass' => $request->input("bdate"),
            'gender_pass' => $request->input("gender"),
            'age_pass' => $request->input("age"),

            'placeofbirth_pass' => $request->input("placeofbirth"),
            'mothertongue_pass' => $request->input("mothertongue"),

            'currentaddress_pass' => $request->input("currentaddress"),
            'permanentaddress_pass' => $request->input("permanentaddress"),

            'ips_pass' => $request->input("ips"),
            'ifyesips_pass' => $request->input("ifyesips"),
            'fps_pass' => $request->input("fps"),
            'ifyesfps_pass' => $request->input("ifyesfps"),

            'current_house_pass' => $request->input("current_house"),
            'current_brgy_pass' => $request->input("current_brgy"),
            'current_mun_pass' => $request->input("current_mun"),
            'current_prov_pass' => $request->input("current_prov"),
            'current_zip_pass' => $request->input("current_zip"),
            'current_ctry_pass' => $request->input("current_ctry"),

            'permanent_house_pass' => $request->input("permanent_house"),
            'permanent_brgy_pass' => $request->input("permanent_brgy"),
            'permanent_mun_pass' => $request->input("permanent_mun"),
            'permanent_prov_pass' => $request->input("permanent_prov"),
            'permanent_zip_pass' => $request->input("permanent_zip"),
            'permanent_ctry_pass' => $request->input("permanent_ctry"),

            'flname_pass' => $request->input("flname"),
            'ffname_pass' => $request->input("ffname"),
            'fmdname_pass' => $request->input("fmdname"),
            'fcontact_pass' => $request->input("fcontact"),

            'mlname_pass' => $request->input("mlname"),
            'mfname_pass' => $request->input("mfname"),
            'mmdname_pass' => $request->input("mmdname"),
            'mcontact_pass' => $request->input("mcontact"),

            'glname_pass' => $request->input("glname"),
            'gfname_pass' => $request->input("gfname"),
            'gmdname_pass' => $request->input("gmdname"),
            'gcontact_pass' => $request->input("gcontact"),

            'lastgradelevel_pass' => $request->input("lastgradelevel"),
            'lastschoolyear_pass' => $request->input("lastschoolyear"),
            'schoolid_pass' => $request->input("schoolid"),
            'lastschoolattended_pass' => $request->input("lastschoolattended"),

            'sem_pass' => $request->input("sem"),
            'track_pass' => $request->input("track"),
            'strands_pass' => $request->input("strands"),

            'modals_pass' => $request->input("modality/ies"),
        ]);
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        return $pdf->stream();
    }


}
