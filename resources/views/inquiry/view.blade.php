@extends('layouts.user')

@section('content')


    <div class="card card-default">
        <div class="card-header">
            Inquiry List
        </div>

        <div class="card-body">

            @if($inquiries->count() > 0)

                <table class="table">

                    <thead>

                        <th>User Name </th>
                        <th>Title </th> 
                        <th>Body  </th>
                        <th>Response  </th>


                    </thead>

                    <tbody> 

                        @foreach($inquiries as $inquiry)

                            <tr>
                                <td>
                                    {{ $inquiry->user->name }}
                               </td>
                               <td>
                                    {{ $inquiry->title }}
                               </td>
                               <td>
                                    {{ $inquiry->body }}
                               </td>
                               <td>
                                    {{ $inquiry->response }}
                               </td>

                        @endforeach
                    </tbody>

                </table>

            @else

                <h3 class="text-center">No Inquires Yet</h3>

            @endif
            

            </div>
            </div>


        </div>
    </div>

@endsection
