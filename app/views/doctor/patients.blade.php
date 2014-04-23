@extends('dashboard')
@section('main')
				
				<h1 class="page-title">
					<i class="icon-user-md"></i>
					Patients
					<div class="pull-right">
					<input type="search" class="form-control" placeholder="search patients" style="text-align:center; padding-top:4px">

					</div>
										
				</h1>
				
				<div class="action-nav-normal">
				   <div class="row">
					
					
					
				</div> <!-- /stat-container -->
										
					<div class="widget-header">
						<i class="icon-th-list"></i>
						<h3>Manage patients records</h3>
					</div> <!-- /widget-header -->
					
					<div id="content1" class="widget-content">
					
						<?php	
						$patients = Patient::paginate(5);
							
						?>
						<table id="patients" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>File Number</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Payment Type</th>
									
									<th>&nbsp;</th>
								</tr>
							</thead>
							
							<tbody>
						
						@foreach($patients as $patient)
								<tr><td>{{$patient->filenumber}}</td>
									<td>{{$patient->firstname}}</td>
									<td>{{$patient->lastname}}</td>
									<td>{{$patient->paymenttype}}</td>
									
									
									<td class="action-td" id="{{$patient->id}}">
										<a href="lab_test" role="button" class="btn fetch-patient">Attend</a>
									</td>
								</tr>
						@endforeach
							
								
								
								
								
							</tbody>
						</table>
						<?php echo $patients->links(); ?>

				<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h3 id="myModalLabel">Patient Profile</h3>
							</div>
							<div class="modal-body">
						
							<div id="profile">


							</div>																				

							</div>
							<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								<button class="btn btn-primary">Admit</button>
								<button class="btn btn-primary">Laboratory</button>
								<button class="btn btn-primary" id="prescribe">Prescribe</button>
							</div>
				</div>
					
					</div> <!-- /widget-content -->
														
					
							
					
				
			</div> <!-- /span9 -->
<script type="text/javascript">
    $(document).ready(function(){
        
            $('#patients').dataTable();
          
    });

    
    </script>
		@stop

