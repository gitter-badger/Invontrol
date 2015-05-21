                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Mail</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="./index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Mailbox</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Mailbox</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
<link rel="stylesheet" href="assets/DataTables-1.10.7/media/css/jquery.dataTables.css" type="text/css" />
<script src="assets/DataTables-1.10.7/media/js/jquery.js"></script>
<script src="assets/DataTables-1.10.7/media/js/jquery.dataTables.js"></script>
			<div style="float:left; width:20%"><ul>
			<li>Inbox</li>
			<li>Spam</li>
			<li>Trash</li>
			</ul>
			</div>	
			<script src="assets/ckeditor/ckeditor.js"></script>
			<div style="float:right; width:80%;">
<h5>Title</h5>
<input type="text" name="title" id="title">
<h5>Recipients</h5>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script>
</head>
<body>
 
<div class="ui-widget">
  <label for="tags"> </label>
  <input id="tags">
</div>
<h5>Message</h5>
<textarea class="ckeditor" name="editor1"></textarea>
				</div>
                <!--END CONTENT-->