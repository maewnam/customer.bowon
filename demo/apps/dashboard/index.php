<div class="row gutters-sm">
	<!-- Website Audience Metrics -->
	<div class="col-xl-9 mb-3">
		<div class="card h-100">
			<div class="card-header border-0">
				<h6>Website Audience Metrics</h6>
				<div class="btn-group btn-group-xs btn-group-toggle ml-auto" data-toggle="buttons">
					<label class="btn btn-light">
						<input type="radio" name="options">Day
					</label>
					<label class="btn btn-light">
						<input type="radio" name="options">Week
					</label>
					<label class="btn btn-light active">
						<input type="radio" name="options" checked>Month
					</label>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-7 col-xl-8 mb-3" style="height: 300px">
						<canvas id="websiteAudienceMetrics"></canvas>
					</div>
					<div class="col-lg-5 col-xl-4 mb-3">
						<div class="row">
							<div class="col-sm-6 col-lg-12 mb-3">
								<div class="d-flex align-items-center justify-content-between mb-1">
									<small class="text-secondary">New users</small>
									<small class="text-muted text-right">65% goal reached</small>
								</div>
								<div class="d-flex align-items-end justify-content-between">
									<h5>13,596</h5>
									<h6>20,000</h6>
								</div>
								<div class="progress" style="height: 4px">
									<div class="progress-bar bg-info" style="width: 65%" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-12 mb-3">
								<div class="d-flex align-items-center justify-content-between mb-1">
									<small class="text-secondary">Page views</small>
									<small class="text-muted text-right">45% goal reached</small>
								</div>
								<div class="d-flex align-items-end justify-content-between">
									<h5>83,123</h5>
									<h6>250,000</h6>
								</div>
								<div class="progress" style="height: 4px">
									<div class="progress-bar bg-warning" style="width: 45%" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-12 mb-3">
								<div class="d-flex align-items-center justify-content-between mb-1">
									<small class="text-secondary">Page sessions</small>
									<small class="text-muted text-right">20% goal reached</small>
								</div>
								<div class="d-flex align-items-end justify-content-between">
									<h5>16,869</h5>
									<h6>85,000</h6>
								</div>
								<div class="progress" style="height: 4px">
									<div class="progress-bar bg-danger" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-12 mb-3">
								<div class="d-flex align-items-center justify-content-between mb-1">
									<small class="text-secondary">Bounce rate</small>
									<small class="text-muted text-right">85% goal reached</small>
								</div>
								<div class="d-flex align-items-end justify-content-between">
									<h5>28.50%</h5>
									<h6>30.50%</h6>
								</div>
								<div class="progress" style="height: 4px">
									<div class="progress-bar bg-blue" style="width: 85%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Website Audience Metrics -->

	<!-- Sessions By Channel -->
	<div class="col-md-6 col-xl-3 mb-3">
		<div class="card h-100">
			<h6 class="card-header">Sessions By Channel</h6>
			<div class="card-body" style="max-height: 240px">
				<canvas id="sessionsByChannel"></canvas>
			</div>
			<div class="card-footer d-block">
				<div class="row">
					<div class="col-6">
						<small class="text-secondary">Organic search</small>
						<div class="d-flex align-items-center">
							<span class="font-size-lg text-danger mr-1">&#8857;</span>
							<h6 class="mb-0">1,320 <small class="text-muted">25%</small></h6>
						</div>
					</div>
					<div class="col-6">
						<small class="text-secondary">Email</small>
						<div class="d-flex align-items-center">
							<span class="font-size-lg text-primary mr-1">&#8857;</span>
							<h6 class="mb-0">987 <small class="text-muted">20%</small></h6>
						</div>
					</div>
					<div class="col-6">
						<small class="text-secondary">Referrral</small>
						<div class="d-flex align-items-center">
							<span class="font-size-lg text-info mr-1">&#8857;</span>
							<h6 class="mb-0">2,010 <small class="text-muted">30%</small></h6>
						</div>
					</div>
					<div class="col-6">
						<small class="text-secondary">Social media</small>
						<div class="d-flex align-items-center">
							<span class="font-size-lg text-warning mr-1">&#8857;</span>
							<h6 class="mb-0">1,054 <small class="text-muted">25%</small></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Sessions By Channel -->

	<!-- Device Sessions -->
	<div class="col-md-6 col-xl-4 mb-3">
		<div class="card h-100">
			<h6 class="card-header">Device Sessions</h6>
			<div class="card-body">
				<div class="row gutters-sm">
					<div class="col-4 col-lg">
						<span class="text-primary">&#8857;</span>
						<small class="text-secondary">Mobile</small>
						<h4 class="ml-3">6,098</h4>
					</div>
					<div class="col-4 col-lg">
						<span class="text-warning">&#8857;</span>
						<small class="text-secondary">Desktop</small>
						<h4 class="ml-3">3,902</h4>
					</div>
					<div class="col-4 col-lg">
						<span class="text-pink">&#8857;</span>
						<small class="text-secondary">Other</small>
						<h4 class="ml-3">1,065</h4>
					</div>
				</div>
				<div style="height: 170px">
					<canvas id="deviceSessions"></canvas>
				</div>
			</div>
		</div>
	</div>
	<!-- /Device Sessions -->

	<!-- Total Visits -->
	<div class="col-md-6 col-xl-4 mb-3">
		<div class="card h-100">
			<div class="card-header">
				<h6>Total Visits</h6>
				<div class="dropdown ml-auto">
					<a href="#" role="button" class="dropdown-toggle text-secondary small" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last Month</a>
					<div class="dropdown-menu dropdown-menu-right">
						<button class="dropdown-item" type="button">Today</button>
						<button class="dropdown-item" type="button">Yesterday</button>
						<button class="dropdown-item active" type="button">Last Month</button>
					</div>
				</div>
			</div>
			<div class="card-body">
				<table class="table table-borderless table-sm table-align-middle mb-0">
					<thead>
						<tr class="text-secondary">
							<th scope="col" class="text-center">Link</th>
							<th scope="col">Page title</th>
							<th scope="col" class="text-right">Percentage (%)</th>
							<th scope="col" class="text-right">Value</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center"><a href="javascript:void(0)"><i class="material-icons bigger-130 text-primary">call_made</i></a></td>
							<td>Homepage</td>
							<td class="text-right">
								<div class="progress" style="height: 3px">
									<div class="progress-bar bg-info" style="width: 65%" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</td>
							<td class="text-right">65.35%</td>
						</tr>
						<tr>
							<td class="text-center"><a href="javascript:void(0)"><i class="material-icons bigger-130 text-primary">call_made</i></a></td>
							<td>Services</td>
							<td class="text-right">
								<div class="progress" style="height: 3px">
									<div class="progress-bar bg-blue" style="width: 85%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</td>
							<td class="text-right">84.97%</td>
						</tr>
						<tr>
							<td class="text-center"><a href="javascript:void(0)"><i class="material-icons bigger-130 text-primary">call_made</i></a></td>
							<td>Product List</td>
							<td class="text-right">
								<div class="progress" style="height: 3px">
									<div class="progress-bar bg-warning" style="width: 39%" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</td>
							<td class="text-right">38.66%</td>
						</tr>
						<tr>
							<td class="text-center"><a href="javascript:void(0)"><i class="material-icons bigger-130 text-primary">call_made</i></a></td>
							<td>Contact Us</td>
							<td class="text-right">
								<div class="progress" style="height: 3px">
									<div class="progress-bar bg-danger" style="width: 16%" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</td>
							<td class="text-right">16.11%</td>
						</tr>
						<tr>
							<td class="text-center"><a href="javascript:void(0)"><i class="material-icons bigger-130 text-primary">call_made</i></a></td>
							<td>50% Sale</td>
							<td class="text-right">
								<div class="progress" style="height: 3px">
									<div class="progress-bar bg-success" style="width: 60%" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</td>
							<td class="text-right">59.34%</td>
						</tr>
						<tr>
							<td class="text-center"><a href="javascript:void(0)"><i class="material-icons bigger-130 text-primary">call_made</i></a></td>
							<td>Abous Us</td>
							<td class="text-right">
								<div class="progress" style="height: 3px">
									<div class="progress-bar bg-secondary" style="width: 12%" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</td>
							<td class="text-right">12.34%</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- /Total Visits -->

	<!-- Browser Usage -->
	<div class="col-md-6 col-xl-4 mb-3">
		<div class="card h-100">
			<div class="card-header border-0">
				<h6>Browser Usage</h6>
				<div class="dropdown ml-auto">
					<a href="#" role="button" class="dropdown-toggle text-secondary small" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last Month</a>
					<div class="dropdown-menu dropdown-menu-right">
						<button class="dropdown-item" type="button">Today</button>
						<button class="dropdown-item" type="button">Yesterday</button>
						<button class="dropdown-item active" type="button">Last Month</button>
					</div>
				</div>
			</div>
			<div class="card-body">
				<table class="table table-sm table-align-middle mb-0">
					<tbody>
						<tr>
							<td class="text-center" style="color: #fd7e14">
								<i class="fab fa-firefox h3 mb-0"></i>
							</td>
							<td>
								<h6 class="mb-0 font-size-sm">Firefox</h6>
								<small class="text-secondary float-left">Mozilla Foundation</small>
							</td>
							<td class="text-right">76,909</td>
							<td class="text-right text-success">
								<i class="material-icons align-bottom">keyboard_arrow_up</i>36.76%
							</td>
						</tr>
						<tr>
							<td class="text-center text-primary">
								<i class="fab fa-chrome h3 mb-0"></i>
							</td>
							<td>
								<h6 class="mb-0 font-size-sm">Chrome</h6>
								<small class="text-secondary float-left">Google LLC</small>
							</td>
							<td class="text-right">64,363</td>
							<td class="text-right text-danger">
								<i class="material-icons align-bottom">keyboard_arrow_down</i>28.93%
							</td>
						</tr>
						<tr>
							<td class="text-center text-danger">
								<i class="fab fa-opera h3 mb-0"></i>
							</td>
							<td>
								<h6 class="mb-0 font-size-sm">Opera</h6>
								<small class="text-secondary float-left">Opera Software</small>
							</td>
							<td class="text-right">33,978</td>
							<td class="text-right text-success">
								<i class="material-icons align-bottom">keyboard_arrow_up</i>16.84%
							</td>
						</tr>
						<tr>
							<td class="text-center text-info">
								<i class="fab fa-edge h3 mb-0"></i>
							</td>
							<td>
								<h6 class="mb-0 font-size-sm">Edge</h6>
								<small class="text-secondary float-left">Microsoft Corporation</small>
							</td>
							<td class="text-right">3,946</td>
							<td class="text-right text-success">
								<i class="material-icons align-bottom">keyboard_arrow_up</i>1.76%
							</td>
						</tr>
						<tr>
							<td class="text-center text-success">
								<i class="fab fa-android h3 mb-0"></i>
							</td>
							<td>
								<h6 class="mb-0 font-size-sm">Android Browser</h6>
								<small class="text-secondary float-left">Google LLC, Inc.</small>
							</td>
							<td class="text-right">1,786</td>
							<td class="text-right text-danger">
								<i class="material-icons align-bottom">keyboard_arrow_down</i>0.88%
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- /Browser Usage -->

	<!-- Connections -->
	<div class="col-sm-6 col-xl-3 mb-3">
		<div class="card h-100">
			<div class="card-body">
				<div class="flex-center justify-content-start mb-2">
					<i data-feather="link" class="mr-2 font-size-lgs"></i>
					<h3 class="card-title mb-0 mr-auto">962</h3>
					<span id="connections">10,200,400,500,300</span>
				</div>
				<h6 class="text-primary">CONNECTIONS</h6>
				<p class="small text-secondary mb-0">Ullamco laboris nisi ut aliquip ex ea com modo cons.</p>
			</div>
		</div>
	</div>
	<!-- /Connections -->

	<!-- Your Articles -->
	<div class="col-sm-6 col-xl-3 mb-3">
		<div class="card h-100">
			<div class="card-body">
				<div class="flex-center justify-content-start mb-2">
					<i data-feather="book" class="mr-2 font-size-lgs"></i>
					<h3 class="card-title mb-0 mr-auto">1,108</h3>
					<span id="yourArticles">10,400,200,500,300</span>
				</div>
				<h6 class="text-danger">YOUR ARTICLES</h6>
				<p class="small text-secondary mb-0">Ex ea commodo con seq uat ull amco lab oris nisi ut ali.</p>
			</div>
		</div>
	</div>
	<!-- Your /Articles -->

	<!-- Your Photos -->
	<div class="col-sm-6 col-xl-3 mb-3">
		<div class="card h-100">
			<div class="card-body">
				<div class="flex-center justify-content-start mb-2">
					<i data-feather="image" class="mr-2 font-size-lgs"></i>
					<h3 class="card-title mb-0 mr-auto">3,024</h3>
					<span id="yourPhotos">10,200,400,300,500</span>
				</div>
				<h6 class="text-success">YOUR PHOTOS</h6>
				<p class="small text-secondary mb-0">Ex ea commodo con seq uat ull amco lab oris nisi ut ali.</p>
			</div>
		</div>
	</div>
	<!-- Your /Photos -->

	<!-- Page Likes -->
	<div class="col-sm-6 col-xl-3 mb-3">
		<div class="card h-100">
			<div class="card-body">
				<div class="flex-center justify-content-start mb-2">
					<i data-feather="thumbs-up" class="mr-2 font-size-lgs"></i>
					<h3 class="card-title mb-0 mr-auto">1,083</h3>
					<span id="pageLikes">10,500,400,200,300</span>
				</div>
				<h6 class="text-info">PAGE LIKES</h6>
				<p class="small text-secondary mb-0">Ex ea commodo con seq uat ull amco lab oris nisi ut ali.</p>
			</div>
		</div>
	</div>
	<!-- Page /Likes -->

</div>
<script>
	var plugins = [
		'plugins/chart.js/Chart.min.js',
		'plugins/jquery-sparkline/jquery.sparkline.min.js',
	]
	App.loadPlugins(plugins, null).then(() => {
		// Data example
		monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
		data1 = [150, 110, 90, 115, 125, 160, 160, 140, 100, 110, 120, 120]
		data2 = [180, 140, 120, 135, 155, 170, 180, 150, 140, 150, 130, 130]
		data3 = [100, 90, 60, 70, 100, 75, 90, 85, 90, 100, 95, 88]

		// Chart options
		const options = {
			maintainAspectRatio: false, // disable the maintain aspect ratio in options then it uses the available height
			tooltips: {
				mode: 'index',
				intersect: false, // Interactions configuration: https://www.chartjs.org/docs/latest/general/interactions/
			},
			elements: {
				rectangle: {
					borderWidth: 1 // bar border width
				},
				line: {
					borderWidth: 1 // label border width
				}
			},
			legend: {
				display: false // hide label
			}
		}

		/***************** Website Audience Metrics *****************/
		new Chart('websiteAudienceMetrics', {
			type: 'bar',
			data: {
				labels: monthNames,
				datasets: [{
						backgroundColor: Chart.helpers.color(cyan).alpha(0.5).rgbString(),
						borderColor: cyan,
						data: data1
					},
					{
						backgroundColor: Chart.helpers.color(blue).alpha(0.5).rgbString(),
						borderColor: blue,
						data: data2
					}
				]
			},
			options: options
		})

		/***************** Sessions By Channel *****************/
		new Chart('sessionsByChannel', {
			type: 'doughnut',
			data: {
				labels: ['Organic Search', 'Email', 'Referrral', 'Social Media'],
				datasets: [{
					data: [25, 20, 30, 25],
					backgroundColor: [
						Chart.helpers.color(red).alpha(0.5).rgbString(),
						Chart.helpers.color(blue).alpha(0.5).rgbString(),
						Chart.helpers.color(cyan).alpha(0.5).rgbString(),
						Chart.helpers.color(orange).alpha(0.5).rgbString(),
					]
				}]
			},
			options: options
		})

		/***************** Device Sessions *****************/
		new Chart('deviceSessions', {
			type: 'line',
			data: {
				labels: monthNames,
				datasets: [{
						label: 'Mobile',
						backgroundColor: Chart.helpers.color(blue).alpha(0.1).rgbString(),
						borderColor: blue,
						tension: 0,
						pointRadius: 0,
						data: data2
					},
					{
						label: 'Desktop',
						backgroundColor: Chart.helpers.color(yellow).alpha(0.1).rgbString(),
						borderColor: yellow,
						tension: 0,
						pointRadius: 0,
						data: data1
					},
					{
						label: 'Other',
						backgroundColor: Chart.helpers.color(pink).alpha(0.1).rgbString(),
						borderColor: pink,
						tension: 0,
						pointRadius: 0,
						data: data3
					}
				]
			},
			options: options
		})

		$(() => {
			/***************** Connections *****************/
			$('#connections').sparkline('html', {
				type: 'bar',
				barWidth: 8,
				height: 20,
				barColor: blue
			})

			/***************** Your Articles *****************/
			$('#yourArticles').sparkline('html', {
				type: 'bar',
				barWidth: 8,
				height: 20,
				barColor: red
			})

			/***************** Your Photos *****************/
			$('#yourPhotos').sparkline('html', {
				type: 'bar',
				barWidth: 8,
				height: 20,
				barColor: green
			})

			/***************** Your Photos *****************/
			$('#pageLikes').sparkline('html', {
				type: 'bar',
				barWidth: 8,
				height: 20,
				barColor: cyan
			})
		})
	}).then(() => App.stopLoading())
</script>