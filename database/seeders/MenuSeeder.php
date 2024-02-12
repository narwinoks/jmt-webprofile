<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new Menu();
        $model->name = 'Products & Services';
        $model->url = 'products-services';
        $model->save();

        $modelMarket = new Menu();
        $modelMarket->name = 'Market-Specific Solutions';
        $modelMarket->url = '#';
        $modelMarket->save();

        $Healthcare = new Menu();
        $Healthcare->name = "Healthcare";
        $Healthcare->menu_id = $modelMarket->id;
        $Healthcare->url = "market-specific-solutions-healthcare";
        $Healthcare->save();

        $transmedic = new Menu();
        $transmedic->name = "Transmedic Sistem Informasi Manajemen Rumah Sakit";
        $transmedic->menu_id = $Healthcare->id;
        $transmedic->url = "market-specific-solutions-healthcare#healthcare-transmedic";
        $transmedic->save();

        $eis = new Menu();
        $eis->name = 'Executive Information System (EIS)';
        $eis->url = "market-specific-solutions-healthcare#healthcare-transmedic-eis";
        $eis->menu_id = $transmedic->id;
        $eis->save();

        $telehealth = new Menu();
        $telehealth->name = 'Telehealth';
        $telehealth->url = "market-specific-solutions-healthcare#healthcare-transmedic-telehealth";
        $telehealth->menu_id = $transmedic->id;
        $telehealth->save();

        $modelC = new Menu();
        $modelC->name = 'Telemedicine';
        $modelC->url = 'market-specific-solutions-healthcare#healthcare-telehealth-telemedicine';
        $modelC->menu_id = $telehealth->id;
        $modelC->save();

        $rme = new Menu();
        $rme->name = 'Rekam Medis Elektronik (RME)';
        $rme->url = 'market-specific-solutions-healthcare#healthcare-telehealth-telemedicine-rekam-medis-elektronik';
        $rme->menu_id = $telehealth->id;
        $rme->save();

        $teleIcu = new Menu();
        $teleIcu->name = 'Tele-ICU';
        $teleIcu->url = 'market-specific-solutions-healthcare#healthcare-telehealth-telemedicine-tele-icu';
        $teleIcu->menu_id = $telehealth->id;
        $teleIcu->save();

        $teleEkg = new Menu();
        $teleEkg->name = 'Tele-EKG';
        $teleEkg->url = 'market-specific-solutions-healthcare#healthcare-telehealth-telemedicine-tele-ekg';
        $teleEkg->menu_id = $telehealth->id;
        $teleEkg->save();

        $teleconsultation = new Menu();
        $teleconsultation->name = 'Teleconsultation';
        $teleconsultation->url = 'market-specific-solutions-healthcare#healthcare-telehealth-telemedicine-teleconsultation';
        $teleconsultation->menu_id = $telehealth->id;
        $teleconsultation->save();

        $iotAmbulance = new Menu();
        $iotAmbulance->name = 'IOT Ambulance';
        $iotAmbulance->url = 'market-specific-solutions-healthcare#healthcare-telehealth-telemedicine-iot-ambulance';
        $iotAmbulance->menu_id = $telehealth->id;
        $iotAmbulance->save();

        $onlineEmergencyCall = new Menu();
        $onlineEmergencyCall->name = 'Online Emergency Call Button';
        $onlineEmergencyCall->url = 'market-specific-solutions-healthcare#healthcare-telehealth-telemedicine-online-emergency-call';
        $onlineEmergencyCall->menu_id = $telehealth->id;
        $onlineEmergencyCall->save();

        $eKlinik = new Menu();
        $eKlinik->name = 'Sistem Informasi Manajemen Klinik (e-Klinik)';
        $eKlinik->url = 'market-specific-solutions-healthcare#healthcare-transmedic-e-klinik';
        $eKlinik->menu_id = $transmedic->id;
        $eKlinik->save();

        $ePuskesmas = new Menu();
        $ePuskesmas->name = 'Sistem Informasi Manajemen Puskesmas (e-Puskesmas)';
        $ePuskesmas->url = 'market-specific-solutions-healthcare#healthcare-transmedic-e-puskesmas';
        $ePuskesmas->menu_id = $transmedic->id;
        $ePuskesmas->save();

        $medisis = new Menu();
        $medisis->name = 'MEDISis';
        $medisis->url = 'market-specific-solutions-healthcare#healthcare-transmedic-medisis';
        $medisis->menu_id = $transmedic->id;
        $medisis->save();

        $pacs = new Menu();
        $pacs->name = 'Picture Archiving & Communication System (PACS)';
        $pacs->url = 'market-specific-solutions-healthcare#healthcare-transmedic-pacs';
        $pacs->menu_id = $transmedic->id;
        $pacs->save();

        $lis = new Menu();
        $lis->name = 'Laboratory Information System (LIS)';
        $lis->url = 'market-specific-solutions-healthcare#healthcare-transmedic-lis';
        $lis->menu_id = $transmedic->id;
        $lis->save();

        $hris = new Menu();
        $hris->name = 'Human Resource Information System (HRIS)';
        $hris->url = 'market-specific-solutions-healthcare#healthcare-transmedic-hris';
        $hris->menu_id = $transmedic->id;
        $hris->save();

        $nurseAssistant = new Menu();
        $nurseAssistant->name = 'Nurse Assistant';
        $nurseAssistant->url = 'market-specific-solutions-healthcare#healthcare-transmedic-nurse-assistant';
        $nurseAssistant->menu_id = $transmedic->id;
        $nurseAssistant->save();

        $kiosk = new Menu();
        $kiosk->name = 'Sistem Antrian Mandiri (Kios-K)';
        $kiosk->url = 'market-specific-solutions-healthcare#healthcare-transmedic-kiosk';
        $kiosk->menu_id = $transmedic->id;
        $kiosk->save();

        $healthcareOperator = new Menu();
        $healthcareOperator->name = 'Healthcare Operator';
        $healthcareOperator->url = 'market-specific-solutions-healthcare-operator';
        $healthcareOperator->menu_id = $modelMarket->id;
        $healthcareOperator->save();

        $hospitalManagementConsulting = new Menu();
        $hospitalManagementConsulting->name = 'Hospital Management Consulting';
        $hospitalManagementConsulting->url = 'market-specific-solutions-healthcare-operator#hospital-management-consulting';
        $hospitalManagementConsulting->menu_id = $healthcareOperator->id;
        $hospitalManagementConsulting->save();

        $epd = new Menu();
        $epd->name = 'Hospital Engineering, Planning, and Design (EPD)';
        $epd->url = 'market-specific-solutions-healthcare-operator#epd';
        $epd->menu_id = $healthcareOperator->id;
        $epd->save();

        $integratedDigitalHealthcareSystem = new Menu();
        $integratedDigitalHealthcareSystem->name = 'Integrated Digital Healthcare System';
        $integratedDigitalHealthcareSystem->url = 'market-specific-solutions-healthcare-operator#integrated-digital-healthcare-system';
        $integratedDigitalHealthcareSystem->menu_id = $healthcareOperator->id;
        $integratedDigitalHealthcareSystem->save();

        $rsjpParamarta = new Menu();
        $rsjpParamarta->name = 'RSJP Paramarta';
        $rsjpParamarta->url = 'market-specific-solutions-healthcare-operator#integrated-digital-healthcare-system-rsjp-paramarta';
        $rsjpParamarta->menu_id = $integratedDigitalHealthcareSystem->id;
        $rsjpParamarta->save();

        $medirest = new Menu();
        $medirest->name = 'Medirest';
        $medirest->url = 'market-specific-solutions-healthcare-operator#integrated-digital-healthcare-system-medirest';
        $medirest->menu_id = $integratedDigitalHealthcareSystem->id;
        $medirest->save();

        // ... (previous code)

        // Seed more menu items for Industry Training
        $industryTraining = new Menu();
        $industryTraining->name = 'Industry Training';
        $industryTraining->url = 'market-specific-solutions-industry-training';
        $industryTraining->menu_id = $modelMarket->id;
        $industryTraining->save();

        $training = new Menu();
        $training->name = 'Training';
        $training->url = 'market-specific-solutions-industry-training#training';
        $training->menu_id = $industryTraining->id;
        $training->save();

        // Seed sub-levels for Training
        $networking = new Menu();
        $networking->name = 'Networking';
        $networking->url = 'market-specific-solutions-industry-training#training-networking';
        $networking->menu_id = $training->id;
        $networking->save();

        $ecCouncil = new Menu();
        $ecCouncil->name = 'EC-Council';
        $ecCouncil->url = 'market-specific-solutions-industry-training#training-ec-council';
        $ecCouncil->menu_id = $training->id;
        $ecCouncil->save();

        $mikroTikAuthorized = new Menu();
        $mikroTikAuthorized->name = 'MikroTik Authorized';
        $mikroTikAuthorized->url = 'market-specific-solutions-industry-training#training-mikrotik';
        $mikroTikAuthorized->menu_id = $training->id;
        $mikroTikAuthorized->save();

        $juniorTalent = new Menu();
        $juniorTalent->name = 'Junior Talent Trainee & Incubation Program';
        $juniorTalent->url = 'market-specific-solutions-industry-training#junior-talent';
        $juniorTalent->menu_id = $industryTraining->id;
        $juniorTalent->save();

        // Seed more menu items for Facility Management
        $facilityManagement = new Menu();
        $facilityManagement->name = 'Facility Management';
        $facilityManagement->url = 'market-specific-solutions-facility-management';
        $facilityManagement->menu_id = $modelMarket->id;
        $facilityManagement->save();

        $epdFacilityManagement = new Menu();
        $epdFacilityManagement->name = 'Engineering, Planning, and Design (EPD)';
        $epdFacilityManagement->url = 'market-specific-solutions-facility-management#epd';
        $epdFacilityManagement->menu_id = $facilityManagement->id;
        $epdFacilityManagement->save();

        // Seed sub-levels for EPD in Facility Management
        $bunihayu = new Menu();
        $bunihayu->name = 'Bunihayu Forest (Eco-Edu Tourism)';
        $bunihayu->url = 'market-specific-solutions-facility-management#epd-bunihayu';
        $bunihayu->menu_id = $epdFacilityManagement->id;
        $bunihayu->save();

        $interiorManagement = new Menu();
        $interiorManagement->name = 'Interior Management';
        $interiorManagement->url = 'market-specific-solutions-facility-management#interior-management';
        $interiorManagement->menu_id = $facilityManagement->id;
        $interiorManagement->save();

        $scm = new Menu();
        $scm->name = 'Supply Chain Management';
        $scm->url = 'market-specific-solutions-scm';
        $scm->menu_id = $modelMarket->id;
        $scm->save();

        $scmSupplyChainFinancial = new Menu();
        $scmSupplyChainFinancial->name = 'Supply Chain Financial';
        $scmSupplyChainFinancial->url = 'market-specific-solutions-scm#scm-supply-chain-financial';
        $scmSupplyChainFinancial->menu_id = $scm->id;
        $scmSupplyChainFinancial->save();

        $eLogisticSCM = new Menu();
        $eLogisticSCM->name = 'E-Logistic (SCM)';
        $eLogisticSCM->url = 'market-specific-solutions-scm#scm-e-logistic';
        $eLogisticSCM->menu_id = $scm->id;
        $eLogisticSCM->save();

        // Seed more menu items for Sports & Wellness
        $sportsWellness = new Menu();
        $sportsWellness->name = 'Sports & Wellness';
        $sportsWellness->url = 'market-specific-solutions-sport-wellness';
        $sportsWellness->menu_id = $modelMarket->id;
        $sportsWellness->save();

        $olahraGo = new Menu();
        $olahraGo->name = 'OlahraGo';
        $olahraGo->url = 'market-specific-solutions-sport-wellness#sport-wellness-olahrago';
        $olahraGo->menu_id = $sportsWellness->id;
        $olahraGo->save();

        // Seed sub-levels for OlahraGo
        $taekwondoIndonesia = new Menu();
        $taekwondoIndonesia->name = 'TaekWondo Indonesia Information System';
        $taekwondoIndonesia->url = 'market-specific-solutions-sport-wellness#sport-wellness-tiis';
        $taekwondoIndonesia->menu_id = $olahraGo->id;
        $taekwondoIndonesia->save();

        // Seed more menu items for Project
        $project = new Menu();
        $project->name = 'Project';
        $project->url = 'market-specific-solutions-project';
        $project->menu_id = $modelMarket->id;
        $project->save();

        $satuSehatSolution = new Menu();
        $satuSehatSolution->name = 'SatuSehat Solution';
        $satuSehatSolution->url = 'market-specific-solutions-project#project-satusehat';
        $satuSehatSolution->menu_id = $project->id;
        $satuSehatSolution->save();

        $medifant = new Menu();
        $medifant->name = 'Medifant';
        $medifant->url = 'market-specific-solutions-project#project-medifant';
        $medifant->menu_id = $project->id;
        $medifant->save();

        $covid19System = new Menu();
        $covid19System->name = 'COVID-19 System';
        $covid19System->url = 'market-specific-solutions-project#project-covid19';
        $covid19System->menu_id = $project->id;
        $covid19System->save();

        $aplikasiSimOnline = new Menu();
        $aplikasiSimOnline->name = 'Aplikasi SIM Online';
        $aplikasiSimOnline->url = 'market-specific-solutions-project#project-aplikasi-sim-online';
        $aplikasiSimOnline->menu_id = $project->id;
        $aplikasiSimOnline->save();

        $company = new Menu();
        $company->name = 'Company';
        $company->url = '#';
        $company->menu_id = null; // This is the top-level menu, so menu_id is null
        $company->save();

        // Seed sub-menu items for Company
        $aboutUs = new Menu();
        $aboutUs->name = 'About Us';
        $aboutUs->url = 'company-about-us';
        $aboutUs->menu_id = $company->id;
        $aboutUs->save();

        $milestone = new Menu();
        $milestone->name = 'Milestone';
        $milestone->url = 'company-milestone';
        $milestone->menu_id = $company->id;
        $milestone->save();

        $partners = new Menu();
        $partners->name = 'Partners';
        $partners->url = 'company-partners';
        $partners->menu_id = $company->id;
        $partners->save();

        $location = new Menu();
        $location->name = 'Location';
        $location->url = 'company-location';
        $location->menu_id = $company->id;
        $location->save();

        $model = new Menu();
        $model->name = 'Insight';
        $model->url = 'insight';
        $model->save();

        $model = new Menu();
        $model->name = 'Contact Us';
        $model->url = 'contact-us';
        $model->save();
    }
}
