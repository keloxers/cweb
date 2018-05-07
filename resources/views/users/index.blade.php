@extends('layouts.app')

@section('content')

			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">

				<div class="page-heading">
            		<h1>
                  <a href="/users">
                    <i class='fa fa-table'></i>
                    {{ $title }}
                  </a>
                </h1>
            		<!-- <h3>Basic & Simple Sortable Tables</h3>            	 -->
        </div>

				<div class="row">
					<div class="col-md-12">
						<div class="widget">
							<div class="widget-header transparent">
								<!-- <h2><strong>Toolbar</strong> CRUD Table</h2> -->
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content">
								<div class="data-table-toolbar">
									<div class="row">
										<div class="col-md-4">

                      {{ Form::open(array('route' => 'users.finder', 'role' => 'form')) }}
                      <input type="text" id="buscar" name="buscar" class="form-control" placeholder="Buscar...">
											{{ Form::close() }}
										</div>
										<div class="col-md-8">
											<div class="toolbar-btn-action">
											</div>
										</div>
									</div>
								</div>

								<div class="table-responsive">
									<table data-sortable class="table table-hover table-striped">
										<thead>
											<tr>
												<th>Users</th>
                        <th>Email</th>
                        <th>Memo</th>
												<th data-sortable="false">Opciones</th>
											</tr>
										</thead>

										<tbody>

                      @if ($users)
                          @foreach ($users as $user)
                          <tr>
                            <td><strong>{{ $user->name}}</strong></td>
                            <td><strong>{{ $user->email}}</strong></td>
                            <td>
                              @if ($user->recibe_memo)
                              <span class="label label-success">Activo</span>
                              @else
                              <span class="label label-danger">Inactivo</span>
                              @endif
                            </td>
    												<td>
    													<div class="btn-group btn-group-xs">
    														<a href="/users/{{ $user->id }}/edit" data-toggle="tooltip" title="Editar" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                <a href="/users/{{ $user->id }}" data-toggle="tooltip" title="Ver" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                <a href="/users/{{ $user->id }}/roles" data-toggle="tooltip" title="Roles" class="btn btn-default"><i class="fa fa-key"></i></a>
                                <a href="/users/{{ $user->id }}/logg" data-toggle="tooltip" title="Logg" class="btn btn-default"><i class="icon icon-flashlight"></i></a>
    													</div>
    												</td>
    											</tr>
                          @endforeach
                      @endif

										</tbody>
									</table>
								</div>

								<div class="data-table-toolbar">
                  {{ $users->links() }}
								</div>
							</div>
						</div>
					</div>
          </div>
</div>
@endsection
