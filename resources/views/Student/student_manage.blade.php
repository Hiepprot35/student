@extends('layout.app')

@section('header')

@endsection
@section('content')

<body style="background-image: url(https://www.kibrispdr.org/data/620/hd-4k-wallpaper-29.jpg)">

<div class="container" style="color:white">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one m-5">Student Information</h1>


			<table class="table mt-3  text-center" style="color:white" border="2">
				<thead>
					<tr>
                        <th >ID</th>

						<th scope="col">Full name</th>
						<th scope="col" class="pr-5">Birthday</th>
						<th scope="col">Address</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@forelse($students as $student)
					<tr>
                        <td>{!! $student->id !!}</th>

						<td class="pr-5">{!! $student->fullname !!}</td>
						<td>{!! $student->birthday !!}</td>
                        <td>{!! $student->address !!}</td>

						<td><a href="student/{!! $student->id !!}/edit"
							class="btn btn-primary">Edit</a>
                        </td>
					</tr>
					@empty
					<tr>
						<td colspan="3">No products found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>


<div class="modal fade" id="deleteConfirmationModel" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">Are you sure to delete this record?</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" onClick="dismissModel()">Cancel</button>
				<form id="delete-frm" class="" action="" method="POST">
                    @method('POST')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
			</div>
		</div>
	</div>
</div>
@endsection
<script>
function showModel(id) {
	var frmDelete = document.getElementById("delete-frm");
	frmDelete.action = 'student/'+id;
	var confirmationModal = document.getElementById("deleteConfirmationModel");
	confirmationModal.style.display = 'block';
	confirmationModal.classList.remove('fade');
	confirmationModal.classList.add('show');
}

function dismissModel() {
	var confirmationModal = document.getElementById("deleteConfirmationModel");
	confirmationModal.style.display = 'none';
	confirmationModal.classList.remove('show');
	confirmationModal.classList.add('fade');
}
</script>
</body>
</html>
