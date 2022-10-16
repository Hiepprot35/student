<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">Edit</h1>
                <div class="text-left"><a href="/" class="btn btn-outline-primary">Student List</a></div>

                <form id="edit-frm" method="POST" class="border p-3 mt-2">

                    <div class="control-group col-6 text-left">
                        <label for="title">ID</label>
                        <div>
                            <input type="text" id="id" class="form-control mb-4" name="id" readonly
                                 value="{!! $student->id !!}"
                                required>

                        </div>
                    </div>
                    <div class="control-group col-6 mt-2 text-left">
                        <label for="body">Name </label>
                        <div>
                            <textarea id="fullname" class="form-control mb-4" name="fullname"
                                placeholder="Enter Fullname" rows="" required>{!! $student->fullname !!}</textarea>

                                @error('fullname')
                                    <span style="color: red"> ***{{$message}}***</span>
                                @enderror
                        </div>
                    </div>

                    <div class="control-group col-6 mt-2 text-left">
                        <label for="body">Birthday</label>
                        <div>
                            <input type="date" id="age" class="form-control mb-4" name="birthday"
                                placeholder="Enter Birthday" value="{!! $student->birthday !!}"
                                required>
                                @error('birthday')
                                    <span style="color: red"> ***Student must be born before 2014***</span>
                                @enderror
                        </div>
                    </div>
                    <div class="control-group col-6 mt-2 text-left">
                        <label for="body">Addres</label>
                        <div>
                            <textarea id="11" class="form-control mb-4" name="address"
                                placeholder="Enter Address" rows="" required>{!! $student->address !!}</textarea>
                                @error('address')
                                    <span style="color: red"> ***{{$message}}***</span>
                                @enderror
                        </div>

                    </div>

    <div class="modal fade" id="EditConfirm" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">Are you sure to save?</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" onClick="dismissModel()">No</button>
                @csrf

                    @method('PUT')

                    <div class="control-group col-6 text-left mt-2"><button id="Save_btn" class="btn btn-primary">Yes</button></div>
			</div>
		</div>
	</div>
</div>
                </form>
                <div class="control-group col-6 text-left mt-2"><button id="Save_btn" class="btn btn-primary" onClick='showModel()'>Save Update</button></div>

            </div>
        </div>
    </div>





</body>
<script>
function showModel() {
	var Editfrm = document.getElementById("edit-frm");

	var confirmationModal = document.getElementById("EditConfirm");
	confirmationModal.style.display = 'block';
	confirmationModal.classList.remove('fade');
	confirmationModal.classList.add('show');
}

function dismissModel() {
	var confirmationModal = document.getElementById("EditConfirm");
	confirmationModal.style.display = 'none';
	confirmationModal.classList.remove('show');
	confirmationModal.classList.add('fade');
}
</script>
</html>
