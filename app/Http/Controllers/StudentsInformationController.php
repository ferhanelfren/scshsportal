<?php

namespace App\Http\Controllers;

use App\Models\StudentInformation;
use App\Models\StudentsInformationModel;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Illuminate\Http\Request;


class StudentsInformationController extends Controller
{

    //INDEX
    public function index(Request $request)
    {
        return view('dashboard.index');
    }

    //ENROLLMENT FORM VIEW
    public function enrollmentform(Request $request)
    {
        return view('enrollmentform.enrollment_form');
    }



    //STORE
    public function store(Request $request)
    {
        $validated = $request->validate([
            "school_year"=> ['required'],
            "lrn_stat"=> [],
            "balikaral_stat"=> [],
            "grade_level"=> ['required'],
            "student_psa"=> [],
            "student_lrn"=> ['required'],
            "lname"=> ['required'],
            "fname"=> ['required'],
            "mdname"=> ['required'],
            "extname"=> [],
            "bdate"=> ['required'],
            "gender"=> ['required'],
            "age"=> ['required'],
            "placeofbirth"=> ['required'],
            "mothertongue"=> ['required'],
            "ips"=> [],
            "ifyesips"=> [],
            "fps"=> [],
            "ifyesfps"=> [],
            "current_house"=> ['required'],
            "current_brgy"=> ['required'],
            "current_mun"=> ['required'],
            "current_prov"=> ['required'],
            "current_zip"=> ['required'],
            "current_ctry"=> ['required'],
            "permanent_house"=> ['required'],
            "permanent_brgy"=> ['required'],
            "permanent_mun"=> ['required'],
            "permanent_prov"=> ['required'],
            "permanent_zip"=> ['required'],
            "permanent_ctry"=> ['required'],
            "flname"=> ['required'],
            "ffname"=> ['required'],
            "fmdname"=> ['required'],
            "fcontact"=> ['required'],
            "mlname"=> ['required'],
            "mfname"=> ['required'],
            "mmdname"=> ['required'],
            "mcontact"=> ['required'],
            "glname"=> ['required'],
            "gfname"=> ['required'],
            "gmdname"=> ['required'],
            "gcontact"=> ['required'],
            "lastgradelevel"=> [],
            "lastschoolyear"=> [],
            "schoolid"=> [],
            "lastschoolattended"=> [],
            "sem"=> [],
            "track"=> [],
            "strands"=> [],
            "modality/ies"=> [],
        ]);

        StudentInformation::create($validated);

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

        //  $validated = StudentInformation::all();
        //  return redirect('/enrollment-form')->with('message', 'New Student was added Successfully');
    }



    //AUTHENTICATION
    // public function authenticate(Request $request)
    // {}
    //     //authenticate to index
    //                 //unique key or variable na tawagon
    //     //Session::put('schoolyearauth', $request->input("school_year"));
    //     return view('enrollmentform.authenticate',
    //     [
    //         'school_year_pass' => $request->input("school_year"),
    //         'lrn_stat_pass' => $request->input("lrn_stat"),
    //         'balikaral_stat_pass' => $request->input("balikaral_stat"),
    //         'grade_level_pass' => $request->input("grade_level"),
    //         'student_lrn_pass' => $request->input("student_lrn"),

    //         'fname_pass' => $request->input("fname"),
    //         'lname_pass' => $request->input("lname"),
    //         'mdname_pass' => $request->input("mdname"),
    //         'extname_pass' => $request->input("extname"),

    //         'bdate_pass' => $request->input("bdate"),
    //         'gender_pass' => $request->input("gender"),
    //         'age_pass' => $request->input("age"),

    //         'placeofbirth_pass' => $request->input("placeofbirth"),
    //         'mothertongue_pass' => $request->input("mothertongue"),

    //         'currentaddress_pass' => $request->input("currentaddress"),
    //         'permanentaddress_pass' => $request->input("permanentaddress"),

    //         'ips_pass' => $request->input("ips"),
    //         'ifyesips_pass' => $request->input("ifyesips"),
    //         'fps_pass' => $request->input("fps"),
    //         'ifyesfps_pass' => $request->input("ifyesfps"),

    //         'current_house_pass' => $request->input("current_house"),
    //         'current_brgy_pass' => $request->input("current_brgy"),
    //         'current_mun_pass' => $request->input("current_mun"),
    //         'current_prov_pass' => $request->input("current_prov"),
    //         'current_zip_pass' => $request->input("current_zip"),
    //         'current_ctry_pass' => $request->input("current_ctry"),

    //         'permanent_house_pass' => $request->input("permanent_house"),
    //         'permanent_brgy_pass' => $request->input("permanent_brgy"),
    //         'permanent_mun_pass' => $request->input("permanent_mun"),
    //         'permanent_prov_pass' => $request->input("permanent_prov"),
    //         'permanent_zip_pass' => $request->input("permanent_zip"),
    //         'permanent_ctry_pass' => $request->input("permanent_ctry"),

    //         'flname_pass' => $request->input("flname"),
    //         'ffname_pass' => $request->input("ffname"),
    //         'fmdname_pass' => $request->input("fmdname"),
    //         'fcontact_pass' => $request->input("fcontact"),

    //         'mlname_pass' => $request->input("mlname"),
    //         'mfname_pass' => $request->input("mfname"),
    //         'mmdname_pass' => $request->input("mmdname"),
    //         'mcontact_pass' => $request->input("mcontact"),

    //         'lastgradelevel_pass' => $request->input("lastgradelevel"),
    //         'lastschoolyear_pass' => $request->input("lastschoolyear"),
    //         'schoolid_pass' => $request->input("schoolid"),
    //         'lastschoolattended_pass' => $request->input("lastschoolattended"),

    //         'sem_pass' => $request->input("sem"),
    //         'track_pass' => $request->input("track"),
    //         'strands_pass' => $request->input("strands"),

    //         'modals_pass' => $request->input("modality/ies"),
    //     ]);

    // }

    // public function edit(Request $request)
    // {

    //     //authenticate to index
    //                 //unique key or variable na tawagon
    //     //Session::put('schoolyearauth', $request->input("school_year"));
    //     return view('enrollmentform.delete');
    // }



    // public function nones(Request $request){
    //      // $data = StudentsInformationInitialModel::where('id', 1)-> get();
    // //     // return view('enrollmentform.none', ['studentsinfo' => $data]);

    //     $pdf = new Dompdf();
    //     $pdf=PDF::loadView('enrollmentform.blank',
    //     [
    //         'school_year_pass' => $request->input("school_year"),
    //         'grade_level_pass' => $request->input("grade_level"),
    //         'lrn_stat_pass' => $request->input("lrn_stat"),
    //         'balikaral_stat_pass' => $request->input("balikaral_stat"),
    //         'grade_level_pass' => $request->input("grade_level"),
    //         'student_lrn_pass' => $request->input("student_lrn"),
    //         'student_psa_pass' => $request->input("psa_number"),

    //         'fname_pass' => $request->input("fname"),
    //         'lname_pass' => $request->input("lname"),
    //         'mdname_pass' => $request->input("mdname"),
    //         'extname_pass' => $request->input("extname"),

    //         'bdate_pass' => $request->input("bdate"),
    //         'gender_pass' => $request->input("gender"),
    //         'age_pass' => $request->input("age"),

    //         'placeofbirth_pass' => $request->input("placeofbirth"),
    //         'mothertongue_pass' => $request->input("mothertongue"),

    //         'currentaddress_pass' => $request->input("currentaddress"),
    //         'permanentaddress_pass' => $request->input("permanentaddress"),

    //         'ips_pass' => $request->input("ips"),
    //         'ifyesips_pass' => $request->input("ifyesips"),
    //         'fps_pass' => $request->input("fps"),
    //         'ifyesfps_pass' => $request->input("ifyesfps"),

    //         'current_house_pass' => $request->input("current_house"),
    //         'current_brgy_pass' => $request->input("current_brgy"),
    //         'current_mun_pass' => $request->input("current_mun"),
    //         'current_prov_pass' => $request->input("current_prov"),
    //         'current_zip_pass' => $request->input("current_zip"),
    //         'current_ctry_pass' => $request->input("current_ctry"),

    //         'permanent_house_pass' => $request->input("permanent_house"),
    //         'permanent_brgy_pass' => $request->input("permanent_brgy"),
    //         'permanent_mun_pass' => $request->input("permanent_mun"),
    //         'permanent_prov_pass' => $request->input("permanent_prov"),
    //         'permanent_zip_pass' => $request->input("permanent_zip"),
    //         'permanent_ctry_pass' => $request->input("permanent_ctry"),

    //         'flname_pass' => $request->input("flname"),
    //         'ffname_pass' => $request->input("ffname"),
    //         'fmdname_pass' => $request->input("fmdname"),
    //         'fcontact_pass' => $request->input("fcontact"),

    //         'mlname_pass' => $request->input("mlname"),
    //         'mfname_pass' => $request->input("mfname"),
    //         'mmdname_pass' => $request->input("mmdname"),
    //         'mcontact_pass' => $request->input("mcontact"),

    //         'glname_pass' => $request->input("glname"),
    //         'gfname_pass' => $request->input("gfname"),
    //         'gmdname_pass' => $request->input("gmdname"),
    //         'gcontact_pass' => $request->input("gcontact"),

    //         'lastgradelevel_pass' => $request->input("lastgradelevel"),
    //         'lastschoolyear_pass' => $request->input("lastschoolyear"),
    //         'schoolid_pass' => $request->input("schoolid"),
    //         'lastschoolattended_pass' => $request->input("lastschoolattended"),

    //         'sem_pass' => $request->input("sem"),
    //         'track_pass' => $request->input("track"),
    //         'strands_pass' => $request->input("strands"),

    //         'modals_pass' => $request->input("modality/ies"),
    //     ]);
    //     $pdf->setPaper('A4', 'portrait');
    //     $pdf->render();
    //     return $pdf->stream();
    //  }


    public function nones(Request $request){

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
