<!doctype html>

<head>

    <title>Server Side Ajax CURD data table with Boostrap model</title>

    <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- bootstrap Lib -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- datatable lib -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="content">
        <h1>Server Side Ajax CURD data table with Boostrap model</h1>
        <table id="course_table" class="table table-striped">
            <thead bgcolor="#6cd8dc">
                <tr class="table-primary">
                    <th width="30%">ID</th>
                    <th width="50%">Course Name</th>
                    <th width="30%">Number of Students</th>
                    <th scope="col" width="5%">Edit</th>
                    <th scope="col" width="5%">Delete</th>
                </tr>
            </thead>
        </table>
        </br>
        <div align="right">
            <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success btn-lg">Add Course</button>
        </div>
    </div>
</body>

</html>


<div id="userModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="course_form" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Course</h4>
                </div>
                <div class="modal-body">
                    <label>Enter Course Name</label>
                    <input type="text" name="course" id="course" class="form-control" />
                    <br />
                    <label>Enter Number of Students</label>
                    <input type="text" name="students" id="students" class="form-control" />
                    <br />
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="course_id" id="course_id" />
                    <input type="hidden" name="operation" id="operation" />
                    <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" />
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="script.js"></script>