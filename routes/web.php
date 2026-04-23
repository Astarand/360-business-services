<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CompliancesController;
use App\Http\Controllers\ConsultingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GuaranteeController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\FooterLinkController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


use Illuminate\Support\Facades\Artisan;

Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";
});


//Clear Cache facade value:
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function () {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function () {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function () {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function () {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
    return '<h1>storage Created</h1>';
});





/**Home**/
Route::get('/', [HomeController::class, 'Index'])->name('home');
Route::get('/quries', [HomeController::class, 'QueriesForm'])->name('quries');

/**About Us**/
Route::get('/about', [AboutController::class, 'Index'])->name('about');

/**Services**/
Route::get('/services', [ServicesController::class, 'Index'])->name('services');

/**Start a Business**/
Route::get('/proprietorship', [BusinessController::class, 'Proprietorship'])->name('proprietorship');
Route::get('/partnership', [BusinessController::class, 'Partnership'])->name('partnership');
Route::get('/onepersoncompany', [BusinessController::class, 'OnePersonCompany'])->name('onepersoncompany');
Route::get('/llp', [BusinessController::class, 'LLP'])->name('llp');
Route::get('/pvt', [BusinessController::class, 'PVT'])->name('pvt');
Route::get('/limited', [BusinessController::class, 'Limited'])->name('limited');
Route::get('/nidihi', [BusinessController::class, 'Nidhi'])->name('nidhi');
Route::get('/section8', [BusinessController::class, 'Section8'])->name('section8');
Route::get('/ngo', [BusinessController::class, 'NGO'])->name('ngo');
Route::get('/ngo-trust', [BusinessController::class, 'NgoTrust'])->name('ngo-trust');
Route::get('e-commerce', [BusinessController::class, 'Ecommerce'])->name('e-commerce');

/**Registration**/
Route::get('/trade', [RegistrationController::class, 'Trade'])->name('trade');
Route::get('/gst', [RegistrationController::class, 'GST'])->name('gst');
Route::get('/msme', [RegistrationController::class, 'MSME'])->name('msme');
Route::get('/ptax', [RegistrationController::class, 'Ptax'])->name('ptax');
Route::get('/pfesic', [RegistrationController::class, 'PFESIC'])->name('pfesic');
Route::get('/fssai', [RegistrationController::class, 'FSSAI'])->name('fssai');
Route::get('/iso', [RegistrationController::class, 'ISO'])->name('iso');
Route::get('/fire', [RegistrationController::class, 'Fire'])->name('fire');
Route::get('/ayush', [RegistrationController::class, 'Ayush'])->name('ayush');
Route::get('/rera', [RegistrationController::class, 'RERA'])->name('rera');
Route::get('/labour', [RegistrationController::class, 'Labour'])->name('labour');
Route::get('/pollution', [RegistrationController::class, 'Pollution'])->name('pollution');
Route::get('/shop', [RegistrationController::class, 'Shop'])->name('shop');
Route::get('/dsc', [RegistrationController::class, 'DSC'])->name('dsc');
Route::get('/registered-office-change', [RegistrationController::class, 'RegisteredOfficeChange'])->name('registered-office-change');
Route::get('/add-remove-director', [RegistrationController::class, 'AddRemoveDirector'])->name('add-remove-director');
Route::get('/contract-labour', [RegistrationController::class, 'ContractLabour'])->name('contract-labour');
Route::get('/niti', [RegistrationController::class, 'Niti'])->name('niti');
Route::get('/trademark', [RegistrationController::class, 'Trademark'])->name('trademark');
Route::get('/international-trademark', [RegistrationController::class, 'IntrenationalTrademark'])->name('international-trademark');
Route::get('/trademark-objection', [RegistrationController::class, 'TrademarkObjection'])->name('trademark-objection');
Route::get('/copyright', [RegistrationController::class, 'Copyright'])->name('copyright');
Route::get('/iec', [RegistrationController::class, 'IEC'])->name('iec');
Route::get('/liquor', [RegistrationController::class, 'Liquor'])->name('liquor');
Route::get('/clinical', [RegistrationController::class, 'Clinical'])->name('clinical');
Route::get('/drag', [RegistrationController::class, 'Drag'])->name('drag');
Route::get('/startup', [RegistrationController::class, 'StartUp'])->name('startup');


/**Compliances**/
Route::get('/business-commencement', [CompliancesController::class, 'BusinessCommencement'])->name('business-commencement');
Route::get('/auditor-recruitment', [CompliancesController::class, 'AuditorRecruitment'])->name('auditor-recruitment');
Route::get('/annual-compliance', [CompliancesController::class, 'AnnualCompliance'])->name('annual-compliance');
Route::get('/p-tax-filling', [CompliancesController::class, 'PTaxFillings'])->name('p-tax-filling');
Route::get('/business-tax-filling', [CompliancesController::class, 'BusinessTaxFillings'])->name('business-tax-filling');
Route::get('/gst-return-filling', [CompliancesController::class, 'GSTReturnFilling'])->name('gst-return-filling');
Route::get('/gst-annual-filling', [CompliancesController::class, 'GSTAnnualFilling'])->name('gst-annual-filling');
Route::get('/tds-filling', [CompliancesController::class, 'TDSFilling'])->name('tds-filling');
Route::get('/pf-filling', [CompliancesController::class, 'PFFilling'])->name('pf-filling');
Route::get('/professional-tax', [CompliancesController::class, 'ProfessionalTax'])->name('professional-tax');
Route::get('/gst-invoicing', [CompliancesController::class, 'GSTInvoicing'])->name('gst-invoicing');
Route::get('/eway-bill', [CompliancesController::class, 'EWayBill'])->name('eway-bill');
Route::get('/form-16', [CompliancesController::class, 'Form16'])->name('form-16');
Route::get('/statutory-audit', [CompliancesController::class, 'StatutoryAudit'])->name('statutory-audit');
Route::get('/internal-audit', [CompliancesController::class, 'InternalAudit'])->name('internal-audit');
Route::get('/external-audit', [CompliancesController::class, 'ExternalAudit'])->name('external-audit');
Route::get('/compliance-audit', [CompliancesController::class, 'ComplianceAudit'])->name('compliance-audit');

/**Consulting**/
Route::get('/webel', [ConsultingController::class, 'Webel'])->name('webel');
Route::get('/property-tax-assessment', [ConsultingController::class, 'PropertyTaxAssessment'])->name('property-tax-assessment');
Route::get('/property-registration', [ConsultingController::class, 'PropertyRegistration'])->name('property-registration');
Route::get('/gst-notice', [ConsultingController::class, 'GSTNotice'])->name('gst-notice');
Route::get('/income-tax-notice', [ConsultingController::class, 'IncomeTaxNotice'])->name('income-tax-notice');
Route::get('/strike-off', [ConsultingController::class, 'StrikeOff'])->name('strike-off');
Route::get('/company-helth-checkup', [ConsultingController::class, 'CompanyHelthCheckup'])->name('company-helth-checkup');
Route::get('/hindu', [ConsultingController::class, 'Hindu'])->name('hindu');
Route::get('/management-consulting', [ConsultingController::class, 'ManagementConsulting'])->name('management-consulting');
Route::get('/account-outsourcing', [ConsultingController::class, 'AccountOutsourcing'])->name('account-outsourcing');
Route::get('/details-project-report', [ConsultingController::class, 'DetailsProjectReport'])->name('details-project-report');
Route::get('/nda', [ConsultingController::class, 'NDA'])->name('nda');
Route::get('/service-level-agreement', [ConsultingController::class, 'ServiceLevelAgreement'])->name('service-level-agreement');
Route::get('/business-contract', [ConsultingController::class, 'BusinessContract'])->name('business-contract');
Route::get('/power-of-attorney', [ConsultingController::class, 'PowerOfAttorney'])->name('power-of-attorney');
Route::get('/virtual-cfo-service', [ConsultingController::class, 'VirtualCfoService'])->name('virtual-cfo-service');
Route::get('/hr', [ConsultingController::class, 'HR'])->name('hr');
Route::get('/payroll-management', [ConsultingController::class, 'PayrollManagement'])->name('payroll-management');
Route::get('/360-tech', function () {
    return redirect()->away('https://clickngotech.in/');
})->name('360-tech');
Route::get('/e-cashbook', function () {
    return redirect()->away('https://ecashbook.in/');
})->name('e-cashbook');
Route::get('/legal-notice', [ConsultingController::class, 'LegalNotice'])->name('legal-notice');

/**Blog**/
Route::get('/blog', [BlogController::class, 'Blog'])->name('blog');
Route::get('/AccountAuditServiceBlog', [BlogController::class, 'AccountAuditService'])->name('accountAuditService');
Route::get('/AccountingOutsourcingBlog', [BlogController::class, 'AccountingOutsourcing'])->name('accountingOutsourcing');
Route::get('/CompanyComplianceBlog', [BlogController::class, 'CompanyCompliance'])->name('companyCompliance');

/**Career**/
Route::get('/career', [CareerController::class, 'Career'])->name('career');
Route::post('/submit-application', [CareerController::class, 'submitApplication'])->name('submit.application');


/**Case Studies**/
Route::get('/case', [CaseController::class, 'Case'])->name('case');
Route::get('/casedetails', [CaseController::class, 'CaseDetails'])->name('casedetails');

/**FAQ**/
Route::get('/faq', [FAQController::class, 'FAQ'])->name('faq');

/**Pricing**/
Route::get('/spricing', [PricingController::class, 'Pricing'])->name('pricing');

/**Partner With US**/
Route::get('/partner', [PartnerController::class, 'Partner'])->name('partner');

/**Satisfaction Guarantee**/
Route::get('/guarantee', [GuaranteeController::class, 'Guarantee'])->name('guarantee');

/**Terms of Use**/
Route::get('terms', [TermsController::class, 'Terms'])->name('terms');

/**Privacy Policies**/
Route::get('privacy', [PrivacyController::class, 'Privacy'])->name('privacy');

/**Contact Us**/
Route::get('/contact', [ContactController::class, 'Index'])->name('contact');

/**Footer Link**/
Route::get('/annual', [FooterLinkController::class, 'Annual'])->name('annual');
Route::get('/internal-extarnal-audit', [FooterLinkController::class, 'InternalExtrnalAudit'])->name('iea');
Route::get('/property-tax-assessment-mutation', [FooterLinkController::class, 'PropertyAndMutation'])->name('ptaxm');
Route::get('/property-registration-and-deed', [FooterLinkController::class, 'PropertyDeed'])->name('pd');

/**404 Error**/
Route::get('/error', [ErrorController::class, 'Error'])->name('error');

/** Register form Data - khokan */

Route::post('/registerForm_submit', [RegisterController::class, 'register_form_submit'])->name('register_form_submit');
Route::post('/contactForm_submit', [ContactController::class, 'contact_form_submit'])->name('contact_form_submit');
Route::post('/submit-form', [PartnerController::class, 'submitForm'])->name('submit.form');
Route::post('/query_submit', [RegisterController::class, 'query_submit'])->name('query_submit');

// Test email route
Route::get('/test-email', function () {
    try {
        Mail::raw('This is a test email from Laravel', function ($message) {
            $message->to('test@example.com')
                    ->subject('Test Email from 360bizservice');
        });
        return 'Email sent successfully!';
    } catch (Exception $e) {
        return 'Email failed: ' . $e->getMessage();
    }
});

// Test greeting email with dynamic name
Route::get('/test-greeting/{name?}', function ($name = 'John Doe') {
    try {
        Mail::to('test@example.com')->send(new \App\Mail\GreetingMail($name));
        return "Greeting email sent successfully to test@example.com with name: {$name}";
    } catch (Exception $e) {
        return 'Greeting email failed: ' . $e->getMessage();
    }
});

/**Payment**/
Route::get('/payment', [PaymentController::class, 'Payment'])->name('payment');


/** Phoen Pay */
Route::post('/phoneCallback', [PaymentController::class, 'phoneCallback'])->name('phoneCallback')->middleware('web');
Route::post('/paymentPhonePay', [PaymentController::class, 'paymentPhonePay'])->name('paymentPhonePay');

// Sitemap route
Route::get('/sitemap.xml', function () {
    $pages = [
        // Core Pages
        ['url' => url('/'), 'lastmod' => '2024-01-15', 'changefreq' => 'weekly', 'priority' => '1.0'],
        ['url' => route('about'), 'lastmod' => '2024-01-10', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('services'), 'lastmod' => '2024-01-10', 'changefreq' => 'weekly', 'priority' => '0.9'],
        ['url' => route('contact'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('pricing'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('about'), 'lastmod' => '2024-01-10', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('blog'), 'lastmod' => '2024-01-10', 'changefreq' => 'weekly', 'priority' => '0.7'],
        ['url' => route('career'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.6'],
        ['url' => route('case'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('faq'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.6'],
        ['url' => route('partner'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.6'],
        ['url' => route('guarantee'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.6'],
        ['url' => route('terms'), 'lastmod' => '2024-01-01', 'changefreq' => 'yearly', 'priority' => '0.3'],
        ['url' => route('privacy'), 'lastmod' => '2024-01-01', 'changefreq' => 'yearly', 'priority' => '0.3'],

        // Business Formation Services (11 services)
        ['url' => route('proprietorship'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('partnership'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('onepersoncompany'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('llp'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('pvt'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.9'],
        ['url' => route('limited'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('nidhi'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('section8'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('ngo'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('ngo-trust'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('e-commerce'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],

        // Registration Services (27 services)
        ['url' => route('trade'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('gst'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.9'],
        ['url' => route('msme'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.9'],
        ['url' => route('ptax'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('pfesic'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('fssai'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('iso'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('fire'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('ayush'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('rera'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('labour'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('pollution'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('shop'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('dsc'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('registered-office-change'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('add-remove-director'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('contract-labour'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('niti'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('trademark'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('international-trademark'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('trademark-objection'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('copyright'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('iec'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('liquor'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.6'],
        ['url' => route('clinical'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('drag'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.6'],
        ['url' => route('startup'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],

        // Compliance Services (17 services)
        ['url' => route('business-commencement'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('auditor-recruitment'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('annual-compliance'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('p-tax-filling'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('business-tax-filling'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('gst-return-filling'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.9'],
        ['url' => route('gst-annual-filling'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('tds-filling'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('pf-filling'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('professional-tax'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('gst-invoicing'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('eway-bill'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('form-16'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('statutory-audit'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('internal-audit'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('external-audit'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('compliance-audit'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],

        // Consulting Services (19 services)
        ['url' => route('webel'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('property-tax-assessment'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('property-registration'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('gst-notice'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('income-tax-notice'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('strike-off'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('company-helth-checkup'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('hindu'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.6'],
        ['url' => route('management-consulting'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('account-outsourcing'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('details-project-report'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('nda'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.6'],
        ['url' => route('service-level-agreement'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.6'],
        ['url' => route('business-contract'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('power-of-attorney'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.6'],
        ['url' => route('virtual-cfo-service'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('hr'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['url' => route('payroll-management'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['url' => route('legal-notice'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.7'],

        // Blog Posts
        ['url' => route('accountAuditService'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.6'],
        ['url' => route('accountingOutsourcing'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.6'],
        ['url' => route('companyCompliance'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.6'],

        // Footer Links
        ['url' => route('annual'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.5'],
        ['url' => route('iea'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.5'],
        ['url' => route('ptaxm'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.5'],
        ['url' => route('pd'), 'lastmod' => '2024-01-05', 'changefreq' => 'monthly', 'priority' => '0.5'],
    ];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

    foreach ($pages as $page) {
        $xml .= '  <url>' . "\n";
        $xml .= '    <loc>' . $page['url'] . '</loc>' . "\n";
        $xml .= '    <lastmod>' . $page['lastmod'] . '</lastmod>' . "\n";
        $xml .= '    <changefreq>' . $page['changefreq'] . '</changefreq>' . "\n";
        $xml .= '    <priority>' . $page['priority'] . '</priority>' . "\n";
        $xml .= '  </url>' . "\n";
    }

    $xml .= '</urlset>';

    return response($xml)->header('Content-Type', 'application/xml');
})->name('sitemap');

// Service Category Landing Pages for Better SEO (Temporarily disabled until pages are created)
// Route::get('/company-registration', function () { return view('pages.categories.company-registration'); })->name('company-registration');
// Route::get('/business-registration', function () { return view('pages.categories.business-registration'); })->name('business-registration');
// Route::get('/tax-registration', function () { return view('pages.categories.tax-registration'); })->name('tax-registration');
// Route::get('/license-registration', function () { return view('pages.categories.license-registration'); })->name('license-registration');

// Service Comparison Pages (Temporarily disabled until pages are created)
// Route::get('/pvt-vs-llp', function () { return view('pages.comparisons.pvt-vs-llp'); })->name('pvt-vs-llp');
// Route::get('/gst-vs-professional-tax', function () { return view('pages.comparisons.gst-vs-ptax'); })->name('gst-vs-ptax');
// Route::get('/msme-vs-startup', function () { return view('pages.comparisons.msme-vs-startup'); })->name('msme-vs-startup');

// Location-based Service Pages (Temporarily disabled until pages are created)
// Route::get('/gst-registration-mumbai', function () { return view('pages.locations.gst-mumbai'); })->name('gst-mumbai');
// Route::get('/company-registration-delhi', function () { return view('pages.locations.company-delhi'); })->name('company-delhi');
// Route::get('/msme-registration-bangalore', function () { return view('pages.locations.msme-bangalore'); })->name('msme-bangalore');
