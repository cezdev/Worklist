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
        				<h6 class="primary">Discussion</h6>
    				</div>
    				<div class="body">
                    <div class="row">
                        <div class="col-3">
                            <h5 class="primary">Discussion</h5>
                            Ask Questions here.
                        </div>
                        <div class="col-9">
                            <div class="card">
                                <div class="body">
                                    <div class="alert primary">
                                        <span>This is a message send by the user</span>
                                    </div>
                                    <div class="alert info">
                                        <span>This is a message send by other users</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <form class="col-12">  
                            <div class="form-element inline">
                                <label>Message: </label>
                                <textarea placeholder="Type a message" required="required" class="input-item"></textarea> 
                                <button type="submit" class="primary m no-shadow">  <i class="material-icons">send</i></button>
                            </div>
                        </form>
                    </div>
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