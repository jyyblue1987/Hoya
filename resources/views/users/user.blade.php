@extends('users.layout')
@section('content')

<div id="main_column" class="clear">
	<div class="clear mainbox-title-container">
		<h1 class="mainbox-title float-left">
			Users 
		</h1>
	</div>
	<div id="search-form" class="section-border">
		<form name="user_search_form" action="/index.php/search" method="GET" class="">
			<table cellpadding="0" cellspacing="0" border="0" class="search-header">
				<tr>
					<td style="display:none">
						<input type="hidden" name="r" value="user/admin">
					</td>
					<td class="search-field nowrap">
						<label for="elm_name">User Name:</label>
						<div class="break">
							<input class="input-text" type="text" size="15" name="name" id="name" value=""/>
						</div>
					</td>
					<td class="search-field nowrap">
						<label for="elm_mobile">Name:</label>
						<div class="break">
							<input class="input-text" type="text" size="15" name="User[mobile]" id="elm_mobile" value=""/>
						</div>
					</td>
					<td class="search-field nowrap">
						<label for="elm_email">Email:</label>
						<div class="break">
							<input class="input-text" type="text" size="15" name="User[email]" id="elm_email" value=""/>
						</div>
					</td>				
					<td class="buttons-container">
						<span  class="submit-button ">
							<input type="submit" name="mode" value="Search" />
						</span>
					</td>
				</tr>
			</table>
		</form>
	</div>

	<div class="mainbox-body" >
		<div id="content_manage_users">
			<form action="/index.php/users" method="GET">
				<div id="data_grid_view" class="grid-view">
					<div class="summary">
						Displaying 1-10 of 22 results.
					</div>
					<table class="items">
						<thead>
							<tr>
								<th id="data_grid_view_c1"><a class="sort-link" href="/users">No</a></th>
								<th id="data_grid_view_c1"><a class="sort-link" href="/index.php?r=user/admin&amp;User_sort=name">User Name</a></th>
								<th id="data_grid_view_c2"><a class="sort-link" href="/index.php?r=user/admin&amp;User_sort=mobile">Name</a></th>
								<th id="data_grid_view_c3"><a class="sort-link" href="/index.php?r=user/admin&amp;User_sort=email">Email</a></th>
								<th id="data_grid_view_c7"><a class="sort-link" href="/index.php?r=user/admin&amp;User_sort=status">Status</a></th>
								<th class="button-column" id="data_grid_view_c8">
									<select onchange="this.form.submit()"  name="pageSize" id="pageSize">
										<?php 
											switch ($item_v) {
												case 1:
													echo "<option selected value='1'>1</option>"."\n";
													echo "<option value='2' >2</option>"."\n";
													echo "<option value='20'>20</option>"."\n";
													echo "<option value='50'>50</option>"."\n";
													echo "<option value='100'>100</option>"."\n";
													break;
												case 2:
													echo "<option value='1'>1</option>"."\n";
													echo "<option selected value='2'>2</option>"."\n";
													echo "<option value='20'>20</option>"."\n";
													echo "<option value='50'>50</option>"."\n";
													echo "<option value='100'>100</option>"."\n";
												
													break;
												case 20:
													echo "<option value='1'>1</option>"."\n";
													echo "<option value='2' >2</option>"."\n";
													echo "<option selected value='20'>20</option>"."\n";
													echo "<option value='50'>50</option>"."\n";
													echo "<option value='100'>100</option>"."\n";
													break;
												case 50:
													echo "<option value='1'>1</option>"."\n";
													echo "<option value='2' >2</option>"."\n";
													echo "<option value='20'>20</option>"."\n";
													echo "<option selected value='50'>50</option>"."\n";
													echo "<option value='100'>100</option>"."\n";
													break;
												default:
													echo "<option selected value='1'>1</option>"."\n";
													echo "<option value='2' >2</option>"."\n";
													echo "<option value='20'>20</option>"."\n";
													echo "<option value='50'>50</option>"."\n";
													echo "<option value='100'>100</option>"."\n";
													break;
											}
										?>	
										
									</select>
								</th>
							</tr>
						</thead>	
						<tbody>
							<?php
								$i = 1;
								foreach( $users as $value )	
								{
									
									echo '<tr class="odd">';
									echo '<td>'.$i.'</td>';
									echo '<td width="10%"><a class="view" href="/index.php/userprofile?pname='.$value['username'].'">'.$value['username'].'</td>
										<td><a class="view" href="/index.php/userprofile?pname='.$value['username'].'">'.$value['name'].'</a></td>';
									
									echo '<td>'.$value['email'].'</td>';
									if($userinfo['state'] = 'offline')
									{
									//echo '<td>'.$userinfo['state'].'</td>';
										echo '<td width="8%"><a class="view" title="View user profile" href="/index.php?r=user/view&amp;id=1"><img src="/images/customers.png" alt="View user profile" /></a></td>';									
									}
									else
									{
										echo '<td width="8%"><a class="view" title="View user profile" href="/index.php?r=user/view&amp;id=1"><img src="/images/customers.png" alt="View user profile" /></a></td>';
									}
									echo '<td width="8%"><a class="view" title="View user profile" href="/index.php/userprofile?pname='.$value['username'].'"><img src="/images/customers.png" alt="View user profile" /></a>&nbsp;<a class="view" title="View user contacts" href="/index.php?r=contact/admin&amp;id=1"><img src="/images/usergroups.png" alt="View user contacts" /></a></td></tr>';
									//echo '<td width="8%"><input src="/index.php/userprofile'"><img src="/images/customers.png" alt="View user profile" /></td></tr>';
									$i++;
								}

							?>

						</tbody>
					</table>
					
					<div class="pager"><ul id="yw0" class="yiiPager">
						<?php echo $users->appends(Request::except('page'))->render(); ?>						
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@stop
