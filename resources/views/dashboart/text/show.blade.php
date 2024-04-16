@extends('dashboart.app')
@section('config')

<div class="card card-custom card-stretch gutter-b" style="margin: 10px">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
           
            <a href="{{route('text.index')}}" class="btn btn-info font-weight-bolder font-size-sm mr-3">Exit</a>
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
                            <th style="min-width: 100px">Item_Id</th>                       
                            <th style="min-width: 100px">List</th>                                              
                        </tr>
                    </thead>
                    <tbody>                     
                      <tr>                    
                       <td>                                                                                                                                                       
                       <span class="text-muted font-weight-bold d-block">{{$text->id}}</span>                                                                                                            
                    </td>                                            
                        <td>
                            <span style="width: 100px" class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$text->item->section->menu['name']}}</span>                         
                        </td>
                        <td>
                            <span style="width: 100px" class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$text->item['id']}}</span>                         
                        </td>
                        <td>
                            <span style="width: 100px" class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$text->text}}</span>
                           
                        </td>                                                                                                                                                     
                    </tr>                                      
                    </tbody>
                </table>
            </div>          
        </div>
    </div>    
</div>

@endsection