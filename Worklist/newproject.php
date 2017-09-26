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
        				<h6 class="primary">New Project</h6>
    				</div>
    				<div class="body">
        			     <h5 class="primary">Adding a new project</h5>
                         <form>
        			     <div class="form-element inline">
                            <label>Project name</label>
                            <input type="text"
                            placeholder="e.g. Homework"
                            required="required"
                            class="input-item">
                            <label>Due date</label>
                            <input type="text"
                            placeholder="yyyy-mm-dd"
                            required="required"
                            class="input-item">
                         </div>
                         <br>
                         <div class="form-element">
                            <label>Project Description</label>
                            <textarea placeholder="Description goes here..."
                            class="input-item" required="required"></textarea>
                         </div>
                         <button class="primary block"> Create! </button>
                         </form>
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