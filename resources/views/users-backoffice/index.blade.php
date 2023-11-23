@extends('layouts.app')

@section('template_title')
    Users Backoffice
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Users Backoffice') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('users-backoffices.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>First Name</th>
										<th>Second Name</th>
										<th>First Lastname</th>
										<th>Second Lastname</th>
										<th>Position</th>
										<th>Department</th>
										<th>User Create</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usersBackoffices as $usersBackoffice)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $usersBackoffice->first_name }}</td>
											<td>{{ $usersBackoffice->second_name }}</td>
											<td>{{ $usersBackoffice->first_lastname }}</td>
											<td>{{ $usersBackoffice->second_lastname }}</td>
											<td>{{ $usersBackoffice->position }}</td>
											<td>{{ $usersBackoffice->department }}</td>
											<td>{{ $usersBackoffice->user_create }}</td>

                                            <td>
                                                <form action="{{ route('users-backoffices.destroy',$usersBackoffice->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('users-backoffices.show',$usersBackoffice->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('users-backoffices.edit',$usersBackoffice->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $usersBackoffices->links() !!}
            </div>
        </div>
    </div>
@endsection
