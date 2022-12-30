<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name')->nullable();
            $table->text('description')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->text('googlemap')->nullable();
            $table->string('post_box')->nullable();

            $table->string('page_title')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('keyword')->nullable();
            $table->string('email')->nullable();
            $table->string('slogansecond')->nullable();  //used as another email
            $table->string('telephone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->text('travelStyle_description')->nullable();
            $table->text('classicVacation_description')->nullable();
            $table->text('blog_description')->nullable();
            $table->text('package_date_price_description')->nullable();
            

            //welcome To Classic Vacation Nepal   CV
            $table->string('vacation_title')->nullable();
            $table->text('vacation_detail')->nullable();

            //WHY TRAVEL WITH US!           CV
            $table->text('travelwithus_title')->nullable();
            $table->text('travelwithus_video_link')->nullable();
            $table->text('travelwithus_detail')->nullable();

            //Aboutus
            $table->text('aboutus_video_home')->nullable();
            $table->text('aboutus_description_home')->nullable();
            $table->string('aboutus_side_image_home')->nullable();
            $table->text('aboutus_description')->nullable();
            $table->string('aboutus_image')->nullable();

            //Who we are    CV
            $table->string('whoweare_banner')->nullable();
            $table->text('title1')->nullable();
            $table->text('title2')->nullable();
            $table->text('title3')->nullable();
            $table->text('title4')->nullable();
                // Safetly & Quality Tips
                $table->text('sqt_description')->nullable();
                $table->string('sqt_image1')->nullable();
                $table->string('sqt_image2')->nullable();
                //Personalized Services & Customers Satisfaction
                $table->text('ps_description')->nullable();
                $table->string('ps_image1')->nullable();
                $table->string('ps_image2')->nullable();


            //Who we are CV
            $table->string('whyus_banner')->nullable();
            $table->text('whyus_title1')->nullable();
            $table->text('whyus_title2')->nullable();
            $table->text('whyus_title3')->nullable();
            $table->text('whyus_title4')->nullable();
                // Safetly & Quality Tips
                $table->text('whyus_sqt_description')->nullable();
                $table->string('whyus_sqt_image1')->nullable();
                //Personalized Services & Customers Satisfaction
                $table->text('whyus_ps_description')->nullable();
                $table->string('whyus_ps_image1')->nullable();
                $table->text('upcoming_description')->nullable();
                $table->text('best_seller_description')->nullable();
                $table->text('pick_travelStyle_description')->nullable();
                $table->text('adventure_roadTrip_description')->nullable();
                $table->text('our_destinations_description')->nullable();
                $table->text('traveler_reviews_description')->nullable();
                $table->text('newslatter_description')->nullable();
                $table->text('contactus_description')->nullable();
                $table->text('recommanded_description')->nullable();

                $table->text('travelGuide_description')->nullable();
                $table->string('travelGuide_image')->nullable();
                $table->text('destination_description')->nullable();
                $table->string('destination_banner_image')->nullable();



            //Banner Section used in CV
            $table->string('team_banner_image')->nullable();
            $table->string('privacy_policy_banner')->nullable();
            $table->string('travel_term_banner')->nullable();
            $table->string('blog_banner')->nullable();
            $table->string('traveler_review_banner')->nullable();
            $table->string('contactus_image')->nullable();
            $table->string('travelStyle_image')->nullable();
            $table->string('classicVacation_image')->nullable();









            // $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('pinterest')->nullable();

//homepage
            $table->string('featured_trips_image')->nullable();
            $table->string('tripadvisor__link')->nullable();
            $table->string('tripadvisor__image')->nullable();
            $table->string('slogan_imagefirst')->nullable();
            $table->string('slogan_imagesecond')->nullable();
            $table->string('sloganfirst')->nullable();
            $table->longText('sfdescription')->nullable();
            $table->longText('ssdescription')->nullable();


            $table->string('working_times')->nullable();
            $table->string('testimonial_banner_image')->nullable();
            $table->string('latest_video_backgroundimage')->nullable();

            // Progress Count
            $table->text('awesome_hikers')->nullable();
            $table->text('stunning_places')->nullable();
            $table->text('miles_hike')->nullable();
            $table->text('day_service')->nullable();

            // We Accept
            $table->string('wa_image1')->nullable();
            $table->string('wa_image2')->nullable();
            $table->string('wa_image3')->nullable();
            $table->string('wa_image4')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
