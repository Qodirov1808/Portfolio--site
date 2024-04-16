@extends('dashboart.app')
@section('config')

<div class="col-xxl-12 order-2 order-xxl-1">
    <!--begin::Advance Table Widget 2-->
    <div class="card card-custom card-stretch gutter-b">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">Show</span>
            </h3>
            <div class="card-toolbar">
                <ul class="nav nav-pills nav-pills-sm nav-dark-75">                 
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{ route('setting.index') }}">Exit</a>
                    </li>                  
                </ul>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-3 pb-0">
            <!--begin::Table-->
            <div class="table-responsive">
                <table class="table table-borderless table-vertical-center">
                    <thead>
                        <tr>
                            <th class="p-0" style="width: 50px">id</th>
                            <th class="p-0" style="min-width: 100px">Logo</th>                            
                            <th class="p-0" style="min-width: 100px">Telegram</th>
                            <th class="p-0" style="min-width: 150px">Instagram</th>
                            <th class="p-0" style="min-width: 200px">Facebook</th>
                             {{-- <th class="p-0" style="min-width: 100px"></th>  --}}
                            {{-- <th class="p-0" style="min-width: 200px">Description</th>
                            <th class="p-0" style="min-width: 150px">Image</th>  --}}
                            
                        </tr>
                    </thead>
                    <tbody>                       
                        <tr>                        
                            <td >                               
                                    <span>{{$setting->id}}</span>                                   
                            </td>
                            <td >                                                                                             
                                <img width="100px" src="/storage/images/{{ $setting->logo }}" alt="">
                            </td>
                            <td >                               
                                <span>{{$setting->social_media['telegram']}}</span>                                   
                        </td>
                        <td >                               
                            <span>{{$setting->social_media['instagram']}}</span>                                   
                    </td>
                    <td >                               
                        <span>{{$setting->social_media['facebook']}}</span>                                   
                </td>
                        </tr>                                        
                    </tbody>
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Advance Table Widget 2-->
</div>

@endsection