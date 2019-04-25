<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="../../js/main.js"></script>

</head>
<body>
<div class="container"><br>
<p class="lead">
  Serach for Title
</p>
<div class="col-6">
	<div class="input-group mb-3">
	  <input type="text" class="form-control" id="title" placeholder="title" aria-label="title" aria-describedby="basic-addon2">
	  <div class="input-group-append">
	    <button class="btn btn-outline-secondary" type="button" id="search">search</button>
	  </div>
	</div>
	</div>
	<div class="alert alert-warning" id="alerta" style="display:none">
	</div>
  <div class="row justify-content-md-center">
		<table class="table table-hover" id="userTable">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Title</th>
		      <th scope="col">Year</th>
		      <th scope="col">Type</th>
		      <th scope="col">Poster</th>
		    </tr>
		  </thead>
		  <tbody>

<!-- 		<?php
			foreach ($data['all']->Search as $key => $value) {
		?>
		    <tr>
		      <td scope="row"> <?php echo $value->Title; ?> </td>
		      <td><?php echo $value->Year; ?></td>
		      <td><?php echo $value->Type; ?></td>
		      <td>
		      <?php echo ($value->Poster == 'N/A' ? '' : '<img src="'.$value->Poster.'" width="80">'); ?></td>
		    </tr>

		<?php
			}
		?> -->
		  </tbody>
		</table>
	</div>
</div>

</body>
</html>

