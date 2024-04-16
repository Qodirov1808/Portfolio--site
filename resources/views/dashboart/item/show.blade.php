@extends('dashboart.app')
@section('config')
<div class="card card-custom card-stretch gutter-b" style="margin: 10px">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">          
            <a href="{{route('item.index')}}" class="btn btn-info font-weight-bolder font-size-sm mr-3">Exit</a>
        </h3>
        <div class="card-toolbar">       
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-0 pb-3">
        <div class="tab-content">
            <!--begin::Table-->
            <div class="table-responsive">
                <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                    <thead>
                        <tr class="text-left text-uppercase">                        
                            <th>
                                <span class="text-muted font-weight-bold d-block">ID</span>
                            </th>                          
                            <th style="min-width: 100px">Menu</th>                       
                            <th style="min-width: 100px">Title</th>
                            <th style="min-width: 100px">Text</th>
                           <th style="min-width: 100px">Link</th>
                           <th style="min-width: 100px">Count</th>
                            <th style="min-width: 100px">Image</th>
                            <th style="min-width: 100px">Description</th>                     
                        </tr>
                    </thead>
                    <tbody>                    
                      <tr>                    
                       <td>                                                                                                                                                       
                       <span class="text-muted font-weight-bold d-block">{{$item->id}}</span>                                                                                                            
                    </td>                                            
                        <td>
                            <span style="width: 100px" class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$item->section->menu->name}}</span>                         
                        </td>
                        <td>
                            <span style="width: 100px" class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$item->title}}</span>
                           
                        </td>
                        <td>
                            <span style="width: 100px" class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$item->text}}</span>
                           
                        </td>
                        <td>
                            <span style="width: 100px" class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$item->link}}</span>
                           
                        </td>
                        <td>
                            <span style="width: 100px" class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$item->count}}</span>                          
                        </td>          
                        <td>
                          <a href="/storage/images/{{ $item->image }}">
                        <img width="150px" src="/storage/images/{{ $item->image }}" alt="">
                        </a>
                        </td>
                        <td>
                            <span  style="width: 300px" class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$item->description}}</span>                          
                        </td>                                                                                       
                    </tr>                                                         
                    </tbody>
                </table>
            </div>          
        </div>
    </div>   
</div>
@endsection