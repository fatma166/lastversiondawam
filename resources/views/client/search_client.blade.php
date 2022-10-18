                
                    <div class="col-md-12 clients_result">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        
                                        <th>{{__('trans.Name')}}</th>
                                         <th>{{__('trans.Address')}}</th>
                                        <th>{{__('trans.Contact Person')}}</th>
                                         <th>{{__('trans.Status')}}</th>
                                        <th class="text-right">{{__('trans.Action')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(!empty($clients))
                                @foreach($clients as $client)
                                    <tr>
                                        <td>    
                                            
                                            <a href="{{url('/admin/client-profile/'.$client->id)}}" class="avatar"></a>
                                                                                             
                                            <h2 class="table-avatar">    
                                                 <!-- <a class="dropdown-item" href="#" data-href="{{ url('admin/client-edit/'.$client->id) }}" client-id="{{$client->id}}"
                                                           data-toggle="modal" data-target="#edit_client">{{$client->name}}</a>-->
                                                 <a  href="{{url('/admin/client-profile/'.$client->id)}}">{{$client->name}}</a>
                                              
                                            </h2>
                                        </td>
                                        <td style="overflow:hidden; display: inline-block;text-overflow: ellipsis;white-space: nowrap;width:200px;}">{{$client->address}}</td>
                                        <td>{{$client->phone}}</td>
                                        <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o @if($client->status==0){{'text-danger'}}@else {{'text-success'}} @endif">@if($client->status==0)<span>{{__('trans.NotActive')}}</span>@else <span>{{__('trans.Active')}}</span> @endif</i> 
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_client" status="1" client-id="{{$client->id}}"><i class="fa fa-dot-circle-o text-success"><span>{{__('trans.Active')}}</span></i></a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_client" status="0"  client-id="{{$client->id}}"><i class="fa fa-dot-circle-o text-danger"><span>{{__('trans.NotActive')}}</span></i></a>
                                                    </div>
                                                </div>
                                        </td>
                                        <td class="text-right">
                                            <a class="btn btn-outline-success" href="#" data-href="{{ url('admin/client-edit/'.$client->id) }}" client-id="{{$client->id}}" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> {{__('trans.Edit')}}</a>
                                           <!-- <a class="btn btn-outline-danger" href="#" data-toggle="modal" data-target="#delete_client" delete-id="{{$client->id}}"><i class="fa fa-trash-o m-r-5"></i> {{__('trans.Delete')}}</a>-->
                                        </td>
                                    </tr>
                                @endforeach
                                @endif 
                                </tbody>
                            </table>
                        </div>
                    </div>
               
                 {{ $clients->appends($_GET)->links() }}  
                
              