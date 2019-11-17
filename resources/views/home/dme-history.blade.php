@extends('layouts.main')
@section('content')

<div class="body"> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">History</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
<!-- Start Page Header -->
<div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>HISTORIA FUPI YA KKKT DAYOSISI YA MERU </h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
<div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p style="font-family: sans-serif; font-size: 16px; color: #000;" >Kanisa la Kiinjili la Kilutheri Tanzania, Dayosisi ya Meru (KKKT DME) ni miongoni mwa Dayosisi 26 za Kanisa la Kiinjili la Kilutheri Tanzania (KKKT). Dayosisi hii ilizaliwa rasmi tarehe 21 Juni 1992 na kupata cheti cha Usajili no. SO. 7724 tarehe 16 Julai 1992.</p>
<p style="font-family: sans-serif; font-size: 16px; color: #000;">Dayosisi hii awali ilikuwa ni Jimbo chini ya Dayosisi ya Kaskazini na imepakana na Dayosisi ya Kaskazini Kati kwa upande wa Magharibi na Kusini pamoja na Dayosisi Kaskazini kwa upande wa Mashariki na upande wa Kaskazini ni Mlima Meru.
Dayosisi ya Meru huudumia kwa sehemu kubwa eneo lililopo Jimbo la Uchaguzi la Arumeru Mashariki lenye eneo la Kilometa za mraba 1,483. Wakazi wengi wa eneo hili ni Wakulima na Wafugaji.
</p>

<p style="font-family: sans-serif; font-size: 16px; color: #000;">
Majimbo, Sharika na Vituo
Dayosisi ya Meru kwa sasa ina Majimbo 5 ambayo ni; Jimbo la Kati, Kusini, Magharibi, Mashariki na Kaskazini. Jumla ya Sharika ni 59 na mitaa ipatayo 166. Idadi ya Wakristo kwa sasa inakadiriwa kuwa zaidi ya 80,000.
</p>
<p style="font-family: sans-serif; font-size: 16px; color: #000;">
Katika kuhubiri Injili ya Yesu kwa matendo Dayosisi ya Meru inaendesha vituo vya Elimu na huduma za afya. Kwa sasa inasimamia shule za Sekondari 8, Sekondari ya Ufundi 1, Vyuo vya Ufundi 2, Shule ya awali na msingi ya mchepuo wa Kiingereza 1, Hospitali 1, Kituo cha Afya 1 na Zahanati 2.

</p>
            <hr>
            <h3>Our Staff</h3>
          </div>
          <div class="staff-dme text-center" style="color: #000;">
           @if(App\Staff::where('dmemgt',1)->get()!=null)
          @foreach(App\Staff::where('dmemgt',1)->get() as $staff)
          <div class="col-md-3 col-sm-3">
            <div class="grid-item staff-item">
              <div class="grid-item-inner">
                <div class="media-box" style="text-align: center;"> 
                @if(isset($staff->photo))
                  <img style="max-height: 200px; max-width: 200px;" height="300" src="{{asset($staff->photo)}}" alt="">
                  @else
                   <img src="http://placehold.it/500x300&amp;text=IMAGE+PLACEHOLDER" alt="">
                  @endif 
                </div>
                <div class="grid-content staff-name text-center">
                  <p style="font-weight: bold;">{{$staff->fname}}&nbsp;{{$staff->lname}}</p>
                  <p><?php echo ucfirst($staff->designation) ?></p>
                </div>
              </div>
            </div>
          </div>

         @endforeach

         @endif
          </div>
        </div>
      </div>
    </div>
  </div>
    @endsection