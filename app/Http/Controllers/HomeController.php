<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    // function index()
    // {
    //     $notices = Notice::where('category', 'notice')
    //         ->where('deleted_at', NULL)
    //         ->orderBy('id', 'desc')->take(6)->get();
    //     $events = Notice::where('category', 'events')
    //     ->where('deleted_at', NULL)
    //     ->orderBy('id', 'desc')->take(7)->get();
    //     $topnotices = Notice::where('deleted_at', NULL)
    //         ->orderBy('id', 'desc')->take(4)->get();
    //     return view('Frontend.index', compact('notices','events','topnotices'));
    // }

    public function index()
    {
        $notices = Notice::orWhere('category', 'notice')
                        ->orWhere('category', 'admission')
                        ->orWhere('category', 'examination')
                        ->orderBy('id', 'desc')
                        ->take(6)->get();

        $events = Notice::where('category', 'events')
            ->orderBy('id', 'desc')->take(7)->get();
        // $topnotices = Notice::where('deleted_at', NULL)
        //     ->orderBy('id', 'desc')->take(4)->get();
        return view('Frontend.home',compact('notices', 'events'));
    }
    
    public function allNotice()
    {
        $notices = Notice::where('category','notice')->latest()->paginate(30);
        return view('Frontend.notices', compact('notices'));
    }
    
    // function index()
    // {
    //     return view('Frontend.demo');
    // }

    function contactus()
    {
        return view('Frontend.contactus');
    }

    function iqacIntro()
    {
        return view('Frontend.iqac_intro');
    }

    function iqacCommittee()
    {
        return view('Frontend.iqac_committee');
    }

    function iqacStrategicPlan()
    {
        return view('Frontend.iqac_strategic_plan');
    }

    function iqacVision()
    {
        return view('Frontend.iqac_vision');
    }

    function iqacFeedback()
    {
        return view('Frontend.iqac_feedback');
    }

    function iqacEvents()
    {
        return view('Frontend.iqac_events');
    }

    function iqacReports()
    {
        return view('Frontend.iqac_reports');
    }

    function iqacContacts()
    {
        return view('Frontend.iqac_contacts');
    }

    function iqacComposition()
    {
        return view('Frontend.iqac_composition');
    }

    function iqacMeeting()
    {
        return view('Frontend.iqac_meeting');
    }

    function iqacSsr()
    {
        return view('Frontend.iqac_ssr');
    }

    function kulgeet()
    {
        return view('Frontend.kulgeet');
    }

    function admissionHome()
    {
        $notices = Notice::where('category', 'admission')
            ->orderBy('id', 'desc')->take(7)->get();
        return view('Frontend.admission_home', compact('notices'));
    }

    function aqar()
    {
        return view('Frontend.aqar');
    }

    function instituteDistinct()
    {
        return view('Frontend.institute');
    }

    function examHome()
    {
        $notices = Notice::where('category', 'examination')
            ->orderBy('id', 'desc')->take(7)->get();
        return view('Frontend.exam_home', compact('notices'));
    }

    function examResult()
    {
        return view('Frontend.exam_results');
    }

    function cells()
    {
        return view('Frontend.cells');
    }

    function regulation()
    {
        return view('Frontend.regulation');
    }

    function academicCalendar()
    {
        return view('Frontend.academic_calendar');
    }
    
    function sportsCalendar()
    {
        return view('Frontend.sports_calendar');
    }
    
    function essentialForms()
    {
        return view('Frontend.essential_forms');
    }

    function feeStructure()
    {
        return view('Frontend.fee_structure');
    }

    function pgSyllabus()
    {
        return view('Frontend.pg_syllabus');
    }

    function centralLibrary()
    {
        return view('Frontend.central_library');
    }

    function hostel()
    {
        return view('Frontend.hostel');
    }

    function suggestiveMeasure()
    {
        return view('Frontend.suggestive_measure');
    }

    function policies()
    {
        return view('Frontend.policies');
    }

    function criteria($password)
    {
        if($password === 'LNMU@321'){
            return view('Frontend.criteria');
        }
        else
        {
            return view('Frontend.includes.error');
        }
    }

    function allOfficer()
    {
        return view('Frontend.all_officer');
    }
    
    function alumniAdministration()
    {
        return view('Frontend.alumni_administration');
    }
    
    function alumniAssociation()
    {
        return view('Frontend.alumni');
    }

    function photoGallery()
    {
        return view('Frontend.gallery');
    }
    
    function photoGallery1()
    {
        return view('Frontend.gallery1');
    }
    
    function photoGallery2()
    {
        return view('Frontend.gallery2');
    }

    function archive()
    {
        return view('Frontend.archive');
    }

    function course()
    {
        return view('Frontend.course');
    }

    public function about_university()
    {
        return view('Frontend.about-university');
    }


    public function vc()
    {
        return view('Frontend.vc');
    }

    public function about_focus()
    {
        return view('Frontend.about-focus');
    }


    public function about_campus()
    {
        return view('Frontend.about-campus');
    }

    public function about_bestpractice()
    {
        return view('Frontend.about-bestpractice');
    }

    public function about_vision()
    {
        return view('Frontend.about-vision');
    }

    public function scienceDepartment()
    {
        return view('Frontend.acd-science-department');
    }

    public function socialScienceDepartment()
    {
        return view('Frontend.acd-socialScience-department');
    }


    public function humanities()
    {
        return view('Frontend.acd-humanities-department');
    }

    public function commerce()
    {
        return view('Frontend.acd-commerce-department');
    }

    public function law()
    {
        return view('Frontend.acd-law-department');
    }

    public function dentistry()
    {
        return view('Frontend.acd-dentistry-department');
    }

    public function education()
    {
        return view('Frontend.acd-education-department');
    }

    public function fineArts()
    {
        return view('Frontend.acd-fineArts-department');
    }

    public function botanyDepartment()
    {
        return view('Frontend.botany-department');
    }


    public function chemistryDepartment()
    {
        return view('Frontend.chemistry-department');
    }

    public function mathematicsDepartment()
    {
        return view('Frontend.mathematics-department');
    }

    public function physicsDepartment()
    {
        return view('Frontend.physics-department');
    }

    public function zoologyDepartment()
    {
        return view('Frontend.zoology-department');
    }

    public function MaithiliDepartment()
    {
        return view('Frontend.Maithili-department');
    }

    public function sanskritDepartment()
    {
        return view('Frontend.sanskrit-department');
    }

    public function englishDepartment()
    {
        return view('Frontend.english-department');
    }

    public function philosophyDepartment()
    {
        return view('Frontend.philosophy-department');
    }
    public function urduDepartment()
    {
        return view('Frontend.urdu-department');
    }

    public function hindiDepartment()
    {
    return view('Frontend.department_hindi');
    }

    public function musicDepartment()
    {
    return view('Frontend.department_music');
    }

    public function economicsDepartment()
    {
    return view('Frontend.department_economic');
    }

    public function geographyDepartment()
    {
    return view('Frontend.department_geography');
    }

    public function historyDepartment()
    {
    return view('Frontend.department_history');
    }

    public function homescienceDepartment()
    {
    return view('Frontend.department_home_science');
    }

    public function psychologyDepartment()
    {
        return view('Frontend.department_psychology');
    }

    public function politicalcienceDepartment()
    {
    return view('Frontend.department_political_science');
    }

    public function sociologyDepartment()
    {
        return view('Frontend.department_sociology');
    }

    public function constituentColleges()
    {
        return view('Frontend.constituent-colleges');
    }

    public function affiliatedDegreeColleges()
    {
        return view('Frontend.affiliated_degree-colleges');
    }

    public function affiliatedBedColleges()
    {
        return view('Frontend.affiliated_bed-colleges');
    }

    public function affiliatedTechnicalColleges()
    {
        return view('Frontend.affiliated_technical-colleges');
    }

    public function departmentBusinessDepartment()
    {
        return view('Frontend.business_administration');
    }

    public function departmentBioTechnology()
    {
        return view('Frontend.department_biotechnology');
    }

    public function departmentInformationScience()
    {
        return view('Frontend.information_science');
    }

    public function departmentGerontology()
    {
        return view('Frontend.gerontology');
    }

    public function advanceResearch()
    {
        return view('Frontend.advance_research');
    }

    public function womenStudies()
    {
        return view('Frontend.women_studies');
    }

    public function tenders()
    {
        $notices = Notice::orWhere('category', 'tenders')
                        ->orderBy('id', 'desc')->take(30)->get();
        return view('Frontend.tender', compact('notices'));
    }

    public function documentNotice()
    {
        $notices = Notice::orWhere('category', 'notice')
                        ->orWhere('category', 'admission')
                        ->orWhere('category', 'examination')
                        ->orderBy('id', 'desc')->take(30)->get();
        return view('Frontend.document_notice', compact('notices'));
    }

    public function officeOrders()
    {
        $notices = Notice::orWhere('category', 'office-orders')
                        ->orderBy('id', 'desc')->take(30)->get();
        return view('Frontend.office_orders', compact('notices'));
    }

    public function eLearningResource()
    {
        return view('Frontend.elearning_resource');
    }

    public function commerceManagementDepartment()
    {
        return view('Frontend.pg-department-of-commerce-management');
    }
    public function indianHistoryDepartment()
    {
        return view('Frontend.pg-department-of-ancient-indian-history');
    }









    public function adm_vc()
    {
        return view('Frontend.adm-vc');
    }
    public function adm_pvc()
    {
        return view('Frontend.adm-pvc');
    }



    public function adm_ogzstr()
    {
        return view('Frontend.adm-ogzstr');
    }
    public function adm_fa()
    {
        return view('Frontend.adm-fa');
        # code...
    }
    public function adm_dsw()
    {
        return view('Frontend.adm-dsw');
        # code...
    }
    public function adm_pructor()
    {
        return view('Frontend.adm-pructor');
        # code...
    }


    public function adm_ccdc()
    {
        return view('Frontend.adm-ccdc');
        # code...
    }

    public function adm_registrar()
    {
        return view('Frontend.adm-registrar');
    }


    public function acd_phd()
    {
        return view('Frontend.acd-phd');
    }

    public function acd_faculties()
    {
        return view('Frontend.acd-faculties');
    }


    public function acd_college()
    {
        return view('Frontend.acd-college');
    }

    public function rtiAct()
    {
        return view('Frontend.rti_act');
    }

    public function lnmuMap()
    {
        return view('Frontend.university-map');
    }

    public function studentScholarship()
    {
        return view('Frontend.scholarship');
    }

    public function aqardsRecognition()
    {
        return view('Frontend.awards');
    }

    public function nirf()
    {
        return view('Frontend.nirf');
    }

    public function ugMaterials(){
        return view('Frontend.ug_materials');
    }

    public function pgMaterials(){
        return view('Frontend.pg_materials');
    }

    public function rndCell(){
        return view('Frontend.rnd_cell');
    }

    public function eventSeminars(){
        return view('Frontend.events_seminars');
    }

    function aqarDataMix()
    {
        return view('Frontend.aqardatamix');
    }

    function ssrCycleIII($password)
    {
        if($password == 'LNMU@321'){
            return view('Frontend.ssr_cycle_III');
        }
        else{
            return view('Frontend.includes.error');
        }
    }
    
    function naacCycleI()
    {
        return view('Frontend.naac_cycle_I');
    }
    
    function naacCycleII()
    {
        return view('Frontend.naac_cycle_II');
    }

    public function verifyFacultyEmail(){
        return view('Frontend.verify_faculty_email');
    }
    
}
