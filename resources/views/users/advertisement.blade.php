@extends('users.layout')
@section('content')

<div id="main_column" class="clear" style="width:60%;margin-left:15%; text-align:center" align="center">
	<div class="clear mainbox-title-container">
			<h1 class="mainbox-title float-left">
				Top Sliding Images 
			</h1>
			<div class="tools-container">
				<span class="action-add">
					<a href="/admin/ad_register">Add Image</a>
				</span>
			</div>
	</div>

	<div class="mainbox-body">
		<div id="content_manage_users">
			<form action="/admin/ad_totaldelete" method="post">
				<div id="data_grid_view" class="grid-view">
					<div class="summary">
						Total Items: {{ $users->count() }}
					</div>
					<table class="items">
						<thead>
							<tr>
								<th width="1%" class="center cm-no-hide-input">
									<input type="checkbox" name="check_all" value="Y" title="Check / uncheck all" class="checkbox cm-check-items" />
								</th>
								<th id="data_grid_view_c1"><a class="sort-link" href="">ID</a></th>
								<th id="data_grid_view_c1"><a class="sort-link" href="">Title</a></th>
								<th id="data_grid_view_c2"><a class="sort-link" href="">Image</a></th>
								<th id="data_grid_view_c8"><a class="sort-link" href="">Last Modified</a></th>
							</tr>
						</thead>	
						<tbody>
							<?php
								$i = 1;
								foreach( $users as $value )	
								{ ?>
                                    
 									<tr class="odd">
									<td class="center cm-no-hide-input"><input type="checkbox" name="cat_ids[]" value="{{$value['id']}}" class="checkbox cm-item" /></td>
									<td>{{$value['id']}}</td>
									<td width="20%"><a class="view" href="/admin/ad_edit/{{$value['id']}}?page={{$users->currentPage()}}">{{$value['title']}}</td>
									<td><a class="view" href="/uploads/{{$value['thumbpath']}}" target="_blank">{{$value['thumbpath']}}</a></td>
									<?php	
										try{
											$start = date('Y-m-d', $value['start']);
											$end = date('Y-m-d', $value['end']);
											}
										catch(Exception $e){}
									?>
																	
									<td>{{$value['published']}}</td>																		
									<td class="nowrap">
										<a class="tool-link " href="/admin/ad_edit/{{$value['id']}}?page={{$users->currentPage()}}" >Edit</a>
										&nbsp;&nbsp;
										<ul class="cm-tools-list tools-list">
											<li><a class="cm-confirm" href="/admin/ad_delete/{{$value['id']}}?page={{$users->currentPage()}}">Delete</a></li>
										</ul>
									</td>
							<?php 
								$i++;} 
							?>

						</tbody>
					</table>
	
					<div class="pager"><ul id="yw0" class="yiiPager">
						<?php echo $users->appends(Request::except('page'))->render(); ?>						
					</div>
				
				</div>
				<div class="buttons-container buttons-bg">
					<div class="float-left">

						
							<span  class="submit-button cm-button-main cm-confirm cm-process-items">
								<input  class="cm-confirm cm-process-items" type="submit" name="dispatch[profiles.m_delete]" value="Delete selected" />
							</span>
					</div>
				</div>				
				
			</form>
		</div>
	</div>
</div>


@stop
