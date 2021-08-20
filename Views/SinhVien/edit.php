<h1>Edit sinh vien</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name" value ="<?php if (isset($sinhvien["name"])) echo $sinhvien["name"];?>">
    </div>

    <div class="form-group">
        <label for="description">Age</label>
        <input type="text" class="form-control" id="age" placeholder="Enter a age" name="age" value ="<?php if (isset($sinhvien["age"])) echo $sinhvien["age"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>