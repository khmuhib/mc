<?php include "header.php";?>

<div class="container-fluid">
    <div class="container">
        <div class="row bg-light py-3 my-2">
            <div class="col-12">
                <form method="post" enctype="multipart/form-data" action="">
                    <div class="py-2">
                        <h1>Add Disease</h1>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Disease Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="medicine_name">
                        </div>
                    </div>
                    <div class="form-group row born_in_frame_input_extra_field">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Syndrome 01</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="day">
                        </div>
                    </div>
                    <div class="form-group row born_in_frame_input_extra_field">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Syndrome 02</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="day">
                        </div>
                    </div>
                    <div class="form-group row born_in_frame_input_extra_field">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Syndrome 03</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="day">
                        </div>
                    </div>
                    <div class="form-group row born_in_frame_input_extra_field">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Syndrome 04</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="day">
                        </div>
                    </div>
                    <div class="form-group row born_in_frame_input_extra_field">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Syndrome 05</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="day">
                        </div>
                    </div>
                    <div class="form-group row born_in_frame_input_extra_field">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Syndrome 06</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="day">
                        </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">For Theme</label>
                        <div class="col-sm-10">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option value="0" selected>For Both</option>
                                <option value="1">Chagol</option>
                                <option value="2">Khasi</option>
                                <option value="3">Patha</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group row align-items-center">
                        <label for="validationTextarea" class="col-sm-2">Note</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputState" class="col-sm-2">Disease Photo</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="photo">
                            </div>
                        </div>
                    </div>


                    <div class="form-group row born_in_frame_input_extra_field">
                        <div class="col-sm-10">
                            <a href="add_cattle_medicine.php" class="btn btn-danger">Medicine Add</a>
                            <button type="submit" class="btn btn-primary" name="insert_as_frame_born">Disease Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






<?php include "footer.php";?>

