<?php
namespace App\ViewComposer;
use Illuminate\View\View;
use App\Models\Destinationtype;
use App\Models\Region;
use App\Models\Destination;
use App\Models\Package;
use App\Models\Group;
use App\Models\Activity;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\Setting;
use App\Models\Subscriber;
use App\Models\History;
use App\Models\Associate;
use App\Models\Tour;
use App\Models\Adventure;
use App\Models\TourPackage;
use App\Models\AdventurePackage;
use App\Models\HelitourPackage;
use App\Models\NaturePackage;
use App\Models\Travelstyle;
use App\Models\Whywithus;
use App\Models\Piller;
use App\Models\Page;
use App\Models\Contactus;
use App\Models\BookingForm;
use App\Models\Quote;

class ViewComposer {
	private $dashboard;

	public function __construct() {

	}
	public function compose(View $view) {
		$trekkingPackage = Package::published()->populartours()->orderBy('updated_at', 'desc')->take(1)->get();
		// dd($trekkingPackage);
		$toursPackage = TourPackage::published()->populartours()->orderBy('updated_at', 'desc')->take(1)->get();
		$adventurePackage = AdventurePackage::published()->populartours()->orderBy('updated_at', 'desc')->take(1)->get();
		$helitourPackage = HelitourPackage::published()->populartours()->orderBy('updated_at', 'desc')->take(1)->get();
		$naturePackage = NaturePackage::published()->populartours()->orderBy('updated_at', 'desc')->take(1)->get();
		$recentPackages = $trekkingPackage->concat($toursPackage)->concat($adventurePackage)->concat($helitourPackage)->concat($naturePackage);
		// dd($recentPackages);


		$destination_types=Destinationtype::orderBy('created_at','desc')->get();
		$regions=Region::publish()->orderBy('created_at','asc')->get();
		$travelStyle = Travelstyle::published()->orderBy('created_at','asc')->get();
		$tours = Tour::published()->orderBy('created_at','asc')->get();
		$adventures = Adventure::published()->orderBy('created_at','asc')->get();
		$helitourpackages = HelitourPackage::published()->orderBy('created_at', 'desc')->get();
		$natureandwildlifepackages = NaturePackage::published()->orderBy('created_at', 'desc')->get();
		$settings=Setting::first();
		// dd($settings);
		$destinations = Destination::published()->take(5)->get();
		$packages=Package::published()->orderBy('created_at','desc')->get();
		$blogs= Blog::get();
		$subscribers= Subscriber::get();
		$groups=Group::orderBy('created_at','asc')->take(2)->get();
		$activitys=Activity::orderBy('created_at','asc')->take(2)->get();
		$bookings=Booking::orderBy('created_at','desc')->take(5)->get();
		$historys=History::published()->orderBy('created_at','asc')->take(5)->get();
		$associates=Associate::published()->orderBy('created_at','asc')->get();
		$travelwithus = Whywithus::published()->orderBy('updated_at', 'desc')->get();
		$travelwithusAboutusPage = Whywithus::published()->whereNotNull('description')->orderBy('updated_at', 'desc')->get();
		$classicVacations = Package::published()->where('special_package','1')->orderBy('created_at','desc')->get();
		$footerLink = Piller::orderBy('created_at','desc')->get();
		$pages = Page::where('slug','!=','privacy-policy')->Where('slug','!=','travels-term')->Where('slug','!=','about-us')->published()->orderBy('created_at','asc')->get();
		// $pages = Page::published()->orderBy('created_at','asc')->get();
		$contactMessage = Contactus::orderBy('updated_at', 'desc')->get();
		$footer_dest = Destination::with('destinationtype')->where('slug','nepal')->first();
		$bookingLists = BookingForm::with('costanddate','package')->latest()->get();
		$quoteLists = Quote::latest()->get();
	   // dd($bookingLists);


		$view->with([
			'dashboard_recentPackage'=>$recentPackages,
			'dashboard_subscriber'=>$subscribers,
			'dashboard_associates'=>$associates,
			'dashboard_historys'=>$historys,
			'dashboard_booking'=>$bookings,
			'dashboard_blogs'=>$blogs,
			'dashboard_natureandwildlifepackages'=>$natureandwildlifepackages,
			'dashboard_helitourpackages'=>$helitourpackages,
			'dashboard_adventures'=>$adventures,
			'dashboard_tours'=>$tours,
			'dashboard_regions'=>$regions,
			'dashboard_destination_types'=>$destination_types,
			'dashboard_settings'=>$settings,
			'dashboard_activitys'=>$activitys,
			'dashboard_groups'=>$groups,
			'dashboard_packages'=>$packages,
			'dashboard_destinations'=>$destinations,
			'dashboard_travelStyle'=>$travelStyle,
			'dashboard_travelwithus'=>$travelwithus,
			'dashboard_travelwithusAboutusPage'=>$travelwithusAboutusPage,
			'dashboard_classicVacations'=>$classicVacations,
			'dashboard_footerLink'=>$footerLink,
			'dashboard_pages'=>$pages,
			'dashboard_contactMessage'=>$contactMessage,
			'footer_dest'=>$footer_dest,
			'dashboard_bookingLists'=>$bookingLists,
			'dashboard_quoteLists'=>$quoteLists
		]);
	}

}
