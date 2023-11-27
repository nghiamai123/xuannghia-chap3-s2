
<form action="process.php" method="POST">
    <div class="row mb-3 mt-3">
        <div class="col">
            <input name="name" type="text" class="form-control" placeholder="Enter Name" >
        </div>
        <div class="col">
            <input name="number" type="number" class="form-control" placeholder="Enter number" >
        </div>
    </div>
    <div class="row mb-3 mt-3">
        <div class="col">
            <input name="email" type="email" class="form-control" placeholder="Enter email" >
        </div>
        <div class="col">
            <input name="pass" type="password" class="form-control" placeholder="Enter password" >
        </div>
    </div>
    <div class="mb-3">
        <textarea name="text" placeholder="Enter message" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <select class="form-control" name="select">
            <option selected disabled>Choose province</option>
            <option value="Banteay Mean Chey">Banteay Mean Chey</option>
            <option value="Battambang">Battambang</option>
            <option value="Siem Riep">Siem Riep</option>
            <option value="Prey Veng">Prey Veng</option>
        </select>
    </div>
    <div class="mb-3">
        <input type="checkbox" class="form-control-check" id="html" name="check[]" value="HTML">
        <label for="html" class="form-label">HTML</label>

        <input type="checkbox" class="form-control-check" id="css" name="check[]" value="CSS">
        <label for="css" class="form-label">CSS</label>

        <input type="checkbox" class="form-control-check" id="js" name="check[]" value="JavaScript">
        <label for="js" class="form-label">Javascript</label>

        <input type="checkbox" class="form-control-check" id="php" name="check[]" value="PHP">
        <label for="php" class="form-label">PHP</label>

    </div>
    <div class="mb-3">
        <input type="radio" class="form-control-check" id="Female" name="gender" value="Female">
        <label for="Female" class="form-label">Female</label>

        <input type="radio" class="form-control-check" id="Male" name="gender" value="Male">
        <label for="Male" class="form-label">Male</label>
    </div>
   
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>