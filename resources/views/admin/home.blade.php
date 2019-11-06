@extends('admin.layouts.main')
@section('content')
<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-midnight-bloom">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Majimbo</div>
                    <div class="widget-subheading">Jumla ya Majimbo DME</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{App\Jimbo::all()->count()}}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Sharika</div>
                    <div class="widget-subheading">Jumla ya Sharika DME</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{App\Sharika::all()->count()}}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-grow-early">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Mitaa</div>
                    <div class="widget-subheading">Jumla ya Mitaa DME</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{App\Mtaa::all()->count()}}</span></div>
                </div>
            </div>
        </div>
    </div>
 
</div>
@endsection 