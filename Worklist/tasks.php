<!DOCTYPE html>
<html>
<head>
	<title>Worklist</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shapecss@2.1.3/public/css/shape.css">
    <script src="https://cdn.jsdelivr.net/npm/shapecss@2.1.3/public/js/shape.js" async></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<div class="container">
		<div class="row center">
			<div class="col-2"></div>
			<img src="worklist-logo.png" style="height: 40%; width: 40%">
		</div>
		<div class="row">
			<div class="col-9">
				<div class="card">
    				<div class="header text-center">
        				<h6 class="primary">Tasks</h6>
    				</div>
    				<div class="body">
        			     <h5 class="primary">Priority color coding</h5>
                         <p>Worklist offers a priority system, every level of priority has a color code listed below.</p>
                         <div class="progress ">
                            <div class="progress-bar bg-success "
                                role="progressbar"
                                aria-valuenow="20"
                                aria-valuemin="0"
                                aria-valuemax="100"
                                style="width:20%">
                                Low Priority
                            </div>
                            <div class="progress-bar bg-primary"
                                role="progressbar"
                                aria-valuenow="20"
                                aria-valuemin="0"
                                aria-valuemax="100"
                                style="width:20%">
                                Normal Priority
                            </div>
                            <div class="progress-bar bg-dark"
                                role="progressbar"
                                aria-valuenow="20"
                                aria-valuemin="0"
                                aria-valuemax="100"
                                style="width:20%">
                                Medium Priority
                            </div>
                            <div class="progress-bar bg-warning"
                                role="progressbar"
                                aria-valuenow="20"
                                aria-valuemin="0"
                                aria-valuemax="100"
                                style="width:20%">
                                High Priority
                            </div>
                            <div class="progress-bar bg-danger"
                                role="progressbar"
                                aria-valuenow="20"
                                aria-valuemin="0"
                                aria-valuemax="100"
                                style="width:20%">
                                Overdue Priority
                            </div>
                         </div>
                         <br><br>
                         <h5 class="primary">Tasks</h5>
                         <p>Select a project to view tasks</p>
                         <div class="dropdown">
                             <button class="primary m">Select a Project</button>
                             <div class="dropdown-content bg-primary">
                                <a href="#">Project 1</a>
                                <a href="#">Project 2</a>
                                <a href="#">Project 3</a>
                             </div>
                         </div>
                         <br>
                         <br>
    				</div>
    				<div class="footer">
        				<p>Current Projects running <span class="badge bg-primary">5</span></p>
    				</div>
				</div>
			</div>
			<div class="col-3">
				<ul class="list-group">
					<li class="bg-default">
        				<button class="primary m"> <i class="material-icons">send</i> </button>
        				Home
    				</li>
					<li class="bg-default">
        				<button class="primary m"> <i class="material-icons">send</i> </button>
        				New Project
    				</li>
    				<li class="bg-default">
        				<button class="primary m"> <i class="material-icons">send</i> </button>
        				Project Overview
    				</li>
    				<li class="bg-default">
        				<button class="primary m"> <i class="material-icons">send</i> </button>
        				Tasks Completed
    				</li>
    				<li class="bg-default">
        				<button class="primary m"> <i class="material-icons">send</i> </button>
        				Calender View
    				</li>
    				<li class="bg-default">
        				<button class="primary m"> <i class="material-icons">send</i> </button>
        				Discussion
    				</li>
    				<li class="bg-default">
        				<button class="primary m"> <i class="material-icons">send</i> </button>
        				Settings
    				</li>
    				<li class="bg-default">
        				<button class="primary m"> <i class="material-icons">send</i> </button>
        				Log out
    				</li>
				</ul>
			</div>
		</div>
	</div>

	<footer class="bg-primary copyright" style="position: absolute; left: 0; bottom: 0; width: 98%">
		<span>Worklist</span>
		<span>© All Right Reserved 2017</span>
		<span>A Splinter® product</span>
	</footer>
</body>
</html>