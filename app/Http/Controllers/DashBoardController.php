<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Education;
use App\Models\Home;
use App\Models\Footer;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    protected $homes;
    protected $abouts;
    protected $footers;
    protected $contacts;
    protected $educations;
    protected $services;
    protected $portfolios;

    public function index()
    {
        return view('admin.home.index');
    }


    public function add()
    {
        return view('admin.home.add');
    }

    public function stored(Request $request)
    {
        Home::storedHome($request);
        return redirect()->back()->with('success', 'Home Create SuccessFully');
    }

    public function manage()
    {

        $this->homes = Home::all();
        return view('admin.home.manage', [
            'homes' => $this->homes
        ]);

    }


    public function edit($id)
    {
        $this->homes = Home::find($id);
        return view('admin.home.edit',[
            'homes'=>$this->homes
        ]);
    }


    public function update(Request $request, $id)
    {
        Home::updateHome($request, $id);
        return redirect()->route('home.manage')->with('success', 'Home Updated successfully.');

    }

    public function delete($id)
    {
        Home::deleteHome($id);
        return redirect()->back()->with('success', 'Home deleted successfully');
    }










    public function addAboutMethod()
    {
        return view('admin.about.add');
    }

    public function storedAboutMethod(Request $request)
    {
        About::storedAbout($request);
        return redirect()->back()->with('success', 'About Create SuccessFully');
    }

    public function manageAboutMethod()
    {

        $this->abouts = About::all();
        return view('admin.about.manage', [
            'abouts' => $this->abouts
        ]);

    }


    public function editAboutMethod($id)
    {
        $this->abouts = About::find($id);
        return view('admin.about.edit',[
            'abouts'=>$this->abouts
        ]);
    }


    public function updateAboutMethod(Request $request, $id)
    {
        About::updateAbout($request, $id);
        return redirect()->route('about.manage')->with('success', 'about Updated successfully.');

    }

    public function deleteAboutMethod($id)
    {
        About::deleteAbout($id);
        return redirect()->back()->with('success', 'About deleted successfully');
    }






    public function addFooterMethod()
    {
        return view('admin.footer.add');
    }

    public function storedFooterMethod(Request $request)
    {
        Footer::storedFooter($request);
        return redirect()->back()->with('success', 'Footer Create SuccessFully');
    }

    public function manageFooterMethod()
    {

        $this->footers = Footer::all();
        return view('admin.footer.manage', [
            'footers' => $this->footers
        ]);

    }


    public function editFooterMethod($id)
    {
        $this->footers = Footer::find($id);
        return view('admin.footer.edit',[
            'footers'=>$this->footers
        ]);
    }


    public function updateFooterMethod(Request $request, $id)
    {
        Footer::updateFooter($request, $id);
        return redirect()->route('footer.manage')->with('success', 'Footer Updated successfully.');

    }

    public function deleteFooterMethod($id)
    {
        Footer::deleteFooter($id);
        return redirect()->back()->with('success', 'Footer deleted successfully');
    }







    public function manageContactMethod()
    {

        $this->contacts = Contact::all();
        return view('admin.contact.manage', [
            'contacts' => $this->contacts
        ]);

    }


    public function editContactMethod($id)
    {
        $this->contacts = Contact::find($id);
        return view('admin.contact.edit',[
            'contacts'=>$this->contacts
        ]);
    }


    public function updateContactMethod(Request $request, $id)
    {
        Contact::updateContact($request, $id);
        return redirect()->route('contact.manage')->with('success', 'Contact Updated successfully.');

    }

    public function deleteContactMethod($id)
    {
        Contact::deleteContact($id);
        return redirect()->back()->with('success', 'Contact deleted successfully');
    }


    public function indexCon()
    {
        $contacts = Contact::all();
        return view('contact.add',compact('contacts'));
    }












    public function addEducationMethod()
    {
        return view('admin.education.add');
    }

    public function storedEducationMethod(Request $request)
    {
        Education::storedEducation($request);
        return redirect()->back()->with('success', 'Education Create SuccessFully');
    }

    public function manageEducationMethod()
    {

        $this->educations = Education::all();
        return view('admin.education.manage', [
            'educations' => $this->educations
        ]);

    }


    public function editEducationMethod($id)
    {
        $this->educations = Education::find($id);
        return view('admin.education.edit',[
            'educations'=>$this->educations
        ]);
    }


    public function updateEducationMethod(Request $request, $id)
    {
        Education::updateEducation($request, $id);
        return redirect()->route('education.manage')->with('success', 'Education Updated successfully.');

    }

    public function deleteEducationMethod($id)
    {
        Education::deleteEducation($id);
        return redirect()->back()->with('success', 'Education deleted successfully');
    }











    public function addServiceMethod()
    {
        return view('admin.service.add');
    }

    public function storedServiceMethod(Request $request)
    {
        Service::storedService($request);
        return redirect()->back()->with('success', 'Service Create SuccessFully');
    }

    public function manageServiceMethod()
    {

        $this->services = Service::all();
        return view('admin.service.manage', [
            'services' => $this->services
        ]);

    }


    public function editServiceMethod($id)
    {
        $this->services = Service::find($id);
        return view('admin.service.edit',[
            'services'=>$this->services
        ]);
    }


    public function updateServiceMethod(Request $request, $id)
    {
        Service::updateService($request, $id);
        return redirect()->route('service.manage')->with('success', 'Service Updated successfully.');

    }

    public function deleteServiceMethod($id)
    {
        Service::deleteService($id);
        return redirect()->back()->with('success', 'Service deleted successfully');
    }





    public function addPortfolioMethod()
    {
        return view('admin.portfolio.add');
    }

    public function storedPortfolioMethod(Request $request)
    {
        Portfolio::storedPortfolio($request);
        return redirect()->back()->with('success', 'Portfolio Create SuccessFully');
    }

    public function managePortfolioMethod()
    {

        $this->portfolios = Portfolio::all();
        return view('admin.portfolio.manage', [
            'portfolios' => $this->portfolios
        ]);

    }


    public function editPortfolioMethod($id)
    {
        $this->portfolios = Portfolio::find($id);
        return view('admin.portfolio.edit',[
            'portfolio'=>$this->portfolios
        ]);
    }


    public function updatePortfolioMethod(Request $request, $id)
    {
        Portfolio::updatePortfolio($request, $id);
        return redirect()->route('portfolio.manage')->with('success', 'Portfolio Updated successfully.');

    }

    public function deletePortfolioMethod($id)
    {
        Portfolio::deletePortfolio($id);
        return redirect()->back()->with('success', 'Portfolio deleted successfully');
    }


























}
