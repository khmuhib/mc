<?php include "header.php";?>

<div class="container-fluid">
    <div class="container">
        <div class="row bg-light py-3 my-2">
            <div class="col-12">
                <form method="post" enctype="multipart/form-data" action="">
                    <div class="py-2">
                        <h1>Medicine Entry</h1>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Medicine Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="medicine_name">
                        </div>
                    </div>
<!--                    <div class="form-group row born_in_frame_input_extra_field">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Day</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="day">
                        </div>
                    </div>-->
                    <div class="form-group row born_in_frame_input_extra_field">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">How Much</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="day">
                        </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">For What</label>
                        <div class="col-sm-10">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected>Disease</option>
                                <option value="1">Disease 01</option>
                                <option value="2">Disease 02</option>
                                <option value="3">Disease 03</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Age Range</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-5">
                                    <input type="date" class="form-control" placeholder="First name">
                                </div>
                                <div class="col-2 text-center">to</div>
                                <div class="col-5">
                                    <input type="date" class="form-control" placeholder="Last name">
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="form-group row align-items-center">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">For Them</label>
                        <div class="col-sm-10">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected>Choose Goat</option>
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
                        <label for="inputState" class="col-sm-2">Medicine Photo</label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="photo">
                            </div>
                        </div>
                    </div>


                    <div class="form-group row born_in_frame_input_extra_field">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" name="insert_as_frame_born">Medicine Add</button>
                            <a href="add_cattle_disease.php" class="btn btn-danger">Disease Add</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






<?php include "footer.php";?>

