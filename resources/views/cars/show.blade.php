@extends('layouts.main')

@section('content')
    <section class="breadcrumb-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-list breadcrumb-top-list">
                        <ul class="list-items bg-transparent radius-none p-0">
                            <li><a href="{{url('/')}}">Accueil</a></li>
                            <li>Voitures</li>
                            <li>{{$car->brand}} - {{$car->model}}</li>
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end breadcrumb-top-bar -->
    <!-- ================================
        END BREADCRUMB TOP BAR
    ================================= -->

    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-8 py-0">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-btn">
                        </div><!-- end breadcrumb-btn -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-wrap -->
    </section>
    <section class="breadcrumb-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-list breadcrumb-top-list">
                        <ul class="list-items bg-transparent radius-none p-0">
                            <li><a href="{{url('/')}}">Accueil</a></li>
                            <li>Voitures</li>
                            <li>{{$car->brand}} - {{$car->model}}</li>
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <section class="car-detail-area padding-bottom-90px">
        <div class="single-content-navbar-wrap menu section-bg" id="single-content-navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content-nav" id="single-content-nav">
                            <ul>
                                <li><a data-scroll="description" href="#description" class="scroll-link active">Car Details</a></li>
                                <li><a data-scroll="faq" href="#faq" class="scroll-link">Faqs</a></li>
                                <li><a data-scroll="reviews" href="#reviews" class="scroll-link">Reviews</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end single-content-navbar-wrap -->
        <div class="single-content-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-content-wrap padding-top-60px">
                            <div id="description" class="page-scroll">
                                <div class="single-content-item pb-4">
                                    <h3 class="title font-size-26">{{$car->brand}} - {{$car->model}}</h3>
                                    <div class="d-flex align-items-center pt-2">
                                        <p>
                                            <span class="badge badge-warning text-white font-size-16">4.6</span>
                                            <span>(4,209 Reviews)</span>
                                        </p>
                                    </div>
                                </div><!-- end single-content-item -->
                                <div class="section-block"></div>
                                <div class="single-content-item py-4">
                                    <div class="row">
                                        <div class="col-lg-6 responsive-column">
                                            <div class="single-feature-titles mb-3">
                                                <h3 class="title font-size-16">Type Carburant</h3>
                                                <span class="font-size-13">{{$car->type_of_fuel}}</span>
                                            </div>

                                            <div class="single-feature-titles mb-3">
                                                <h3 class="title font-size-15 font-weight-medium">Couleur</h3>
                                                <span class="font-size-13">{{$car->color}}</span>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 responsive-column">
                                            <div class="single-feature-titles mb-3">
                                                <h3 class="title font-size-16">Année de fabrication</h3>
                                                <span class="font-size-13">{{$car->year_of_manufacture}}</span>
                                            </div>

                                            <div class="single-feature-titles mb-3">
                                                <h3 class="title font-size-15 font-weight-medium">Transmission</h3>
                                                <span class="font-size-13">{{$car->transmission}}</span>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-12">
                                            <div class="section-block margin-bottom-35px"></div>
                                        </div><!-- end col-lg-12 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-car"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Portières</h3>
                                                    <span class="font-size-13">{{$car->door}}</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-car"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Frein</h3>
                                                    <span class="font-size-13">{{$car->brake}}</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-car"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Moteur</h3>
                                                    <span class="font-size-13">{{$car->engine}}</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-users"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Places</h3>
                                                    <span class="font-size-13">{{$car->passengers}}</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex alfign-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-briefcase"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Bagages</h3>
                                                    <span class="font-size-13">{{$car->baggage}}</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-gear"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">KIlométrages</h3>
                                                    <span class="font-size-13">{{$car->mileage}}</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                    </div><!-- end row -->
                                </div><!-- end single-content-item -->

                            </div><!-- end description -->
                            <div class="review-box">
                                <div class="single-content-item padding-top-40px">
                                    <h3 class="title font-size-20">Showing 3 guest reviews</h3>
                                    <div class="comments-list padding-top-50px">
                                        <div class="comment">
                                            <div class="comment-avatar">
                                                <img class="avatar__img" alt="" src="images/team8.jpg">
                                            </div>
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <h3 class="comment__author">Jenny Doe</h3>
                                                    <div class="meta-data-inner d-flex">
                                                    <span class="ratings d-flex align-items-center mr-1">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                    </span>
                                                        <p class="comment__date">April 5, 2019</p>
                                                    </div>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis
                                                </p>
                                                <div class="comment-reply d-flex align-items-center justify-content-between">
                                                    <a class="theme-btn" href="#" data-toggle="modal" data-target="#replayPopupForm">
                                                        <span class="la la-mail-reply mr-1"></span>Reply
                                                    </a>
                                                    <div class="reviews-reaction">
                                                        <a href="#" class="comment-like"><i class="la la-thumbs-up"></i> 13</a>
                                                        <a href="#" class="comment-dislike"><i class="la la-thumbs-down"></i> 2</a>
                                                        <a href="#" class="comment-love"><i class="la la-heart-o"></i> 5</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end comments -->
                                        <div class="comment comment-reply-item">
                                            <div class="comment-avatar">
                                                <img class="avatar__img" alt="" src="images/team9.jpg">
                                            </div>
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <h3 class="comment__author">Jenny Doe</h3>
                                                    <div class="meta-data-inner d-flex">
                                                    <span class="ratings d-flex align-items-center mr-1">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                    </span>
                                                        <p class="comment__date">April 5, 2019</p>
                                                    </div>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis
                                                </p>
                                                <div class="comment-reply d-flex align-items-center justify-content-between">
                                                    <a class="theme-btn" href="#" data-toggle="modal" data-target="#replayPopupForm">
                                                        <span class="la la-mail-reply mr-1"></span>Reply
                                                    </a>
                                                    <div class="reviews-reaction">
                                                        <a href="#" class="comment-like"><i class="la la-thumbs-up"></i> 13</a>
                                                        <a href="#" class="comment-dislike"><i class="la la-thumbs-down"></i> 2</a>
                                                        <a href="#" class="comment-love"><i class="la la-heart-o"></i> 5</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end comments -->
                                        <div class="comment">
                                            <div class="comment-avatar">
                                                <img class="avatar__img" alt="" src="images/team10.jpg">
                                            </div>
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <h3 class="comment__author">Jenny Doe</h3>
                                                    <div class="meta-data-inner d-flex">
                                                    <span class="ratings d-flex align-items-center mr-1">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                    </span>
                                                        <p class="comment__date">April 5, 2019</p>
                                                    </div>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis
                                                </p>
                                                <div class="comment-reply d-flex align-items-center justify-content-between">
                                                    <a class="theme-btn" href="#" data-toggle="modal" data-target="#replayPopupForm">
                                                        <span class="la la-mail-reply mr-1"></span>Reply
                                                    </a>
                                                    <div class="reviews-reaction">
                                                        <a href="#" class="comment-like"><i class="la la-thumbs-up"></i> 13</a>
                                                        <a href="#" class="comment-dislike"><i class="la la-thumbs-down"></i> 2</a>
                                                        <a href="#" class="comment-love"><i class="la la-heart-o"></i> 5</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end comments -->
                                        <div class="btn-box load-more text-center">
                                            <button class="theme-btn theme-btn-small theme-btn-transparent" type="button">Load More Review</button>
                                        </div>
                                    </div><!-- end comments-list -->
                                </div><!-- end single-content-item -->
                            </div><!-- end review-box -->
                        </div><!-- end single-content-wrap -->
                    </div><!-- end col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar single-content-sidebar mb-0">
                            <div class="sidebar-widget single-content-widget">
                                <div class="sidebar-widget-item">
                                    <div class="sidebar-book-title-wrap mb-3">
                                        <p><span class="text-form">Prix</span><span class="text-value ml-2 mr-1">{{$car->price_by_day}}$<small class="font-size-15 font-weight-bold ml-1 color-text-3">/jour</small></p>
                                    </div>
                                </div><!-- end sidebar-widget-item -->
                                <div class="sidebar-widget-item">
                                    <div class="contact-form-action">
                                        <form action="#">
                                            <div class="input-box">
                                                <label class="label-text">Pick-up From</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text" name="text" placeholder="Destination, city, or airport">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text">Drop-off to</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text" name="text" placeholder="Destination, city, or airport">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text">Pick-up Date</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text" name="daterange-single">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text">Time</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="1200AM">12:00AM</option>
                                                            <option value="1230AM">12:30AM</option>
                                                            <option value="0100AM">1:00AM</option>
                                                            <option value="0130AM">1:30AM</option>
                                                            <option value="0200AM">2:00AM</option>
                                                            <option value="0230AM">2:30AM</option>
                                                            <option value="0300AM">3:00AM</option>
                                                            <option value="0330AM">3:30AM</option>
                                                            <option value="0400AM">4:00AM</option>
                                                            <option value="0430AM">4:30AM</option>
                                                            <option value="0500AM">5:00AM</option>
                                                            <option value="0530AM">5:30AM</option>
                                                            <option value="0600AM">6:00AM</option>
                                                            <option value="0630AM">6:30AM</option>
                                                            <option value="0700AM">7:00AM</option>
                                                            <option value="0730AM">7:30AM</option>
                                                            <option value="0800AM">8:00AM</option>
                                                            <option value="0830AM">8:30AM</option>
                                                            <option value="0900AM" selected>9:00AM</option>
                                                            <option value="0930AM">9:30AM</option>
                                                            <option value="1000AM">10:00AM</option>
                                                            <option value="1030AM">10:30AM</option>
                                                            <option value="1100AM">11:00AM</option>
                                                            <option value="1130AM">11:30AM</option>
                                                            <option value="1200PM">12:00PM</option>
                                                            <option value="1230PM">12:30PM</option>
                                                            <option value="0100PM">1:00PM</option>
                                                            <option value="0130PM">1:30PM</option>
                                                            <option value="0200PM">2:00PM</option>
                                                            <option value="0230PM">2:30PM</option>
                                                            <option value="0300PM">3:00PM</option>
                                                            <option value="0330PM">3:30PM</option>
                                                            <option value="0400PM">4:00PM</option>
                                                            <option value="0430PM">4:30PM</option>
                                                            <option value="0500PM">5:00PM</option>
                                                            <option value="0530PM">5:30PM</option>
                                                            <option value="0600PM">6:00PM</option>
                                                            <option value="0630PM">6:30PM</option>
                                                            <option value="0700PM">7:00PM</option>
                                                            <option value="0730PM">7:30PM</option>
                                                            <option value="0800PM">8:00PM</option>
                                                            <option value="0830PM">8:30PM</option>
                                                            <option value="0900PM">9:00PM</option>
                                                            <option value="0930PM">9:30PM</option>
                                                            <option value="1000PM">10:00PM</option>
                                                            <option value="1030PM">10:30PM</option>
                                                            <option value="1100PM">11:00PM</option>
                                                            <option value="1130PM">11:30PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text">Drop-off Date</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text" name="daterange-single">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- end sidebar-widget-item -->
                                <div class="main-search-input-item">
                                    <div class="contact-form-action">
                                        <form action="#">
                                            <div class="input-box">
                                                <label class="label-text">Time</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="1200AM">12:00AM</option>
                                                            <option value="1230AM">12:30AM</option>
                                                            <option value="0100AM">1:00AM</option>
                                                            <option value="0130AM">1:30AM</option>
                                                            <option value="0200AM">2:00AM</option>
                                                            <option value="0230AM">2:30AM</option>
                                                            <option value="0300AM">3:00AM</option>
                                                            <option value="0330AM">3:30AM</option>
                                                            <option value="0400AM">4:00AM</option>
                                                            <option value="0430AM">4:30AM</option>
                                                            <option value="0500AM">5:00AM</option>
                                                            <option value="0530AM">5:30AM</option>
                                                            <option value="0600AM">6:00AM</option>
                                                            <option value="0630AM">6:30AM</option>
                                                            <option value="0700AM">7:00AM</option>
                                                            <option value="0730AM">7:30AM</option>
                                                            <option value="0800AM">8:00AM</option>
                                                            <option value="0830AM">8:30AM</option>
                                                            <option value="0900AM" selected>9:00AM</option>
                                                            <option value="0930AM">9:30AM</option>
                                                            <option value="1000AM">10:00AM</option>
                                                            <option value="1030AM">10:30AM</option>
                                                            <option value="1100AM">11:00AM</option>
                                                            <option value="1130AM">11:30AM</option>
                                                            <option value="1200PM">12:00PM</option>
                                                            <option value="1230PM">12:30PM</option>
                                                            <option value="0100PM">1:00PM</option>
                                                            <option value="0130PM">1:30PM</option>
                                                            <option value="0200PM">2:00PM</option>
                                                            <option value="0230PM">2:30PM</option>
                                                            <option value="0300PM">3:00PM</option>
                                                            <option value="0330PM">3:30PM</option>
                                                            <option value="0400PM">4:00PM</option>
                                                            <option value="0430PM">4:30PM</option>
                                                            <option value="0500PM">5:00PM</option>
                                                            <option value="0530PM">5:30PM</option>
                                                            <option value="0600PM">6:00PM</option>
                                                            <option value="0630PM">6:30PM</option>
                                                            <option value="0700PM">7:00PM</option>
                                                            <option value="0730PM">7:30PM</option>
                                                            <option value="0800PM">8:00PM</option>
                                                            <option value="0830PM">8:30PM</option>
                                                            <option value="0900PM">9:00PM</option>
                                                            <option value="0930PM">9:30PM</option>
                                                            <option value="1000PM">10:00PM</option>
                                                            <option value="1030PM">10:30PM</option>
                                                            <option value="1100PM">11:00PM</option>
                                                            <option value="1130PM">11:30PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <div class="form-group">
                                                    <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                                        <label class="font-size-16 color-text-2">Passengers</label>
                                                        <div class="qtyBtn d-flex align-items-center">
                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                            <input type="text" name="qtyInput" value="0">
                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                        </div>
                                                    </div><!-- end qty-box -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- end main-search-input-item -->
                                <div class="btn-box pt-2">
                                    <a href="car-booking.html" class="theme-btn text-center w-100 mb-2"><i class="la la-shopping-cart mr-2 font-size-18"></i>Book Now</a>
                                    <a href="#" class="theme-btn text-center w-100 theme-btn-transparent"><i class="la la-heart-o mr-2"></i>Add to Wishlist</a>
                                    <div class="d-flex align-items-center justify-content-between pt-2">
                                        <a href="#" class="btn theme-btn-hover-gray font-size-15" data-toggle="modal" data-target="#sharePopupForm"><i class="la la-share mr-1"></i>Share</a>
                                        <p><i class="la la-eye mr-1 font-size-15 color-text-2"></i>3456</p>
                                    </div>
                                </div>
                            </div><!-- end sidebar-widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col-lg-4 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end single-content-box -->
    </section>
    <section class="related-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Images</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-50px">
                @foreach($car->images as $image)
                <div class="col-lg-4 responsive-column">
                    <div class="card-item car-card">
                        <div class="card-img">
                            <a href="{{ asset('storage/' . $image->path) }}" class="d-block">
                                <img src="{{ asset('storage/' . $image->path) }}" alt="Car Image">
                            </a>
                        </div>
                    </div><!-- end card-item -->
                </div>
                @endforeach
                    <!-- end col-lg-4 -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection



