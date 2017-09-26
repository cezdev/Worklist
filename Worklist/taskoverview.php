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
        				<h6 class="primary">Task view</h6>
    				</div>
    				<div class="body">
        			<h5 class="primary">Worklist</h5>
                    <div class="row">
                        <ul class="tab-selector bg-primary no-shadow vertical" div-target="vertical">
                            <li tab-target="task1" class="active"> Task 1 </li>
                            <li tab-target="task2"> Task 2 </li>
                            <li tab-target="task3"> Task 3 </li>
                        </ul>
                        <div class="tab-content with-border full-screen" id="vertical">
                            <div id="task1">
                                <!--Icon is status indicator color-->
                                <h5 class="primary">task_name goes here <i class="material-icons">error</i></h5>
                                <p>task_description goes here</p>
                                <p>task_due date goes here</p>
                                <button class="primary block"> Task completed! </button>
                            </div>
                            <div id="task2">
                                <!--Icon is status indicator color-->
                                <h5 class="primary">task_name goes here <i class="material-icons">error</i></h5>
                                <p>task_description goes here</p>
                                <p>task_due date goes here</p>
                                <button class="primary block"> Task completed! </button>
                            </div>
                            <div id="task3">
                                <!--Icon is status indicator color-->
                                <h5 class="primary">task_name goes here <i class="material-icons">error</i></h5>
                                <p>task_description goes here</p>
                                <p>task_due date goes here</p>
                                <button class="primary block"> Task completed! </button>
                            </div>
                        </div>
                    </div>
        			<br><br>
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
        				New Project
    				</li>
					<li class="bg-default">
        				<button class="primary m"> <i class="material-icons">send</i> </button>
        				Project Overview
    				</li>
    				<li class="bg-default">
        				<button class="primary m"> <i class="material-icons">send</i> </button>
        				Tasks
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